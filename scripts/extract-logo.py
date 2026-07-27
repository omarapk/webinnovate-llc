"""
Cut the WebInnovate logos out of their black artboards.

The sources are flat RGB renders on a pure black background, which is exactly
the situation alpha compositing describes: every antialiased rim pixel is
`colour x alpha` over black. So instead of thresholding — which either eats the
navy wordmark (#0A1140 is barely brighter than black) or leaves a dark fringe —
we recover alpha and colour analytically:

    alpha  = brightness(pixel) / brightness(the region this pixel belongs to)
    colour = pixel / alpha

Region brightness is sampled from nearby fully-opaque "core" pixels, so a rim
pixel fades out against whatever it actually borders, hue intact.
"""

from collections import deque
from pathlib import Path

import numpy as np
from PIL import Image

SOURCE_DIR = "public/assets/images/brand/webinnovate"
ARTBOARD_MAX_CHANNEL = 7  # brightest channel at or below this is artboard black
RIM_WIDTH = 2  # antialiasing spans about two pixels
CORE_SEARCH = 4  # radius to look for an opaque reference pixel
FALLBACK_SEARCH = 3  # radius used for strokes too thin to have a core


def find_artboard(brightest: np.ndarray) -> np.ndarray:
    """Flood fill the black background inwards from the border.

    Enclosed black areas (letter counters, the shadowed side of the globe) are
    never reached, so they keep whatever the artwork put there.
    """
    height, width = brightest.shape
    artboard = np.zeros((height, width), dtype=bool)
    is_black = brightest <= ARTBOARD_MAX_CHANNEL

    queue = deque()
    for x in range(width):
        queue.append((0, x))
        queue.append((height - 1, x))
    for y in range(height):
        queue.append((y, 0))
        queue.append((y, width - 1))

    while queue:
        y, x = queue.popleft()
        if artboard[y, x] or not is_black[y, x]:
            continue

        artboard[y, x] = True

        if y > 0:
            queue.append((y - 1, x))
        if y < height - 1:
            queue.append((y + 1, x))
        if x > 0:
            queue.append((y, x - 1))
        if x < width - 1:
            queue.append((y, x + 1))

    return artboard


def grow(mask: np.ndarray) -> np.ndarray:
    """One step of 8-neighbour dilation."""
    grown = mask.copy()
    grown[1:, :] |= mask[:-1, :]
    grown[:-1, :] |= mask[1:, :]
    grown[:, 1:] |= mask[:, :-1]
    grown[:, :-1] |= mask[:, 1:]
    grown[1:, 1:] |= mask[:-1, :-1]
    grown[:-1, :-1] |= mask[1:, 1:]
    grown[1:, :-1] |= mask[:-1, 1:]
    grown[:-1, 1:] |= mask[1:, :-1]
    return grown


def spread_max(values: np.ndarray, radius: int) -> np.ndarray:
    """Local maximum over an (2*radius+1) square window."""
    spread = values
    for _ in range(radius):
        stacked = spread.copy()
        stacked[1:, :] = np.maximum(stacked[1:, :], spread[:-1, :])
        stacked[:-1, :] = np.maximum(stacked[:-1, :], spread[1:, :])
        spread = stacked
        stacked = spread.copy()
        stacked[:, 1:] = np.maximum(stacked[:, 1:], spread[:, :-1])
        stacked[:, :-1] = np.maximum(stacked[:, :-1], spread[:, 1:])
        spread = stacked
    return spread


def cut_out(name: str, out_name: str) -> None:
    rgb = np.asarray(Image.open(f"{SOURCE_DIR}/{name}").convert("RGB")).astype(np.float32)
    brightest = rgb.max(axis=2)

    artboard = find_artboard(brightest)

    rim = artboard.copy()
    for _ in range(RIM_WIDTH):
        rim = grow(rim)
    rim &= ~artboard

    core = ~artboard & ~rim

    # Brightness of the region each rim pixel belongs to. Thin strokes have no
    # core at all, so fall back to the brightest pixel in their own neighbourhood.
    core_reference = spread_max(np.where(core, brightest, 0.0), CORE_SEARCH)
    local_reference = spread_max(np.where(artboard, 0.0, brightest), FALLBACK_SEARCH)
    reference = np.where(core_reference > 0, core_reference, local_reference)

    alpha = np.ones_like(brightest)
    np.divide(brightest, reference, out=alpha, where=rim & (reference > 0))
    alpha = np.clip(alpha, 0.0, 1.0)
    alpha[artboard] = 0.0

    # Un-premultiply so a half-transparent rim pixel keeps its full-strength hue
    # instead of reading as a darkened version of it.
    scale = np.ones_like(brightest)
    np.divide(1.0, alpha, out=scale, where=alpha > 0.02)
    straight = np.clip(rgb * scale[..., None], 0, 255)

    rgba = np.dstack([straight, alpha * 255.0]).round().astype(np.uint8)
    image = Image.fromarray(rgba)

    cropped = image.crop(image.getbbox())

    # The logo is served unoptimized (Next's lossy WebP pass chews up the thin
    # strokes), so shrink it here instead. A 256-colour palette is visually
    # indistinguishable and about five times lighter.
    palette = cropped.quantize(colors=256, method=Image.Quantize.FASTOCTREE)
    palette.save(f"{SOURCE_DIR}/{out_name}", optimize=True)

    kilobytes = Path(f"{SOURCE_DIR}/{out_name}").stat().st_size / 1024
    print(f"{out_name}: {cropped.size[0]}x{cropped.size[1]}, {kilobytes:.0f} kB")


cut_out("wordmark.png", "wordmark-clean.png")
cut_out("mark.png", "mark-clean.png")
cut_out("icon.png", "icon-clean.png")
