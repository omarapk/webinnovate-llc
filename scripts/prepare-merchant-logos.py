"""
Prepare the merchant logo wall assets.

Several of the logos we were given are screenshots on a white background, so on
the light logo strip they read as blank rectangles. This knocks the white out to
transparency, trims the resulting margin and writes the result alongside the
originals (which the legacy Laravel site still points at).

    python3 scripts/prepare-merchant-logos.py
"""

from pathlib import Path

import numpy as np
from PIL import Image

SOURCE = Path("public/assets/images/brand")
TARGET = SOURCE / "merchants"

# Pixels at or above this luminance are treated as background.
WHITE_CUTOFF = 238
# Below this, a pixel is fully opaque. Between the two, alpha ramps, which keeps
# antialiased edges from turning jagged.
SOLID_CUTOFF = 205

FILES = {
    "Auconfort_Logo.png": "auconfort.png",
    "Capture_d_ecran_2024-11-21_a_17.46.13.png": "parlons-tendance.png",
    "Design sans titre(1).png": "emelle.png",
    "LOGO_MAISON_AYLA_AVEC_PICTO_2.png": "maison-ayla.png",
    "58307711-0e53-4f88-88dc-283b02783a0b-logo-siv.png": "siv.png",
}


def knock_out_white(image: Image.Image) -> Image.Image:
    rgba = np.array(image.convert("RGBA")).astype(np.float32)
    luminance = rgba[..., :3] @ (0.299, 0.587, 0.114)

    ramp = (WHITE_CUTOFF - luminance) / (WHITE_CUTOFF - SOLID_CUTOFF)
    alpha = np.clip(ramp, 0.0, 1.0) * 255.0

    # Keep whatever transparency the source already had.
    rgba[..., 3] = np.minimum(rgba[..., 3], alpha)

    return Image.fromarray(rgba.astype(np.uint8))


def main() -> None:
    TARGET.mkdir(parents=True, exist_ok=True)

    for source_name, target_name in FILES.items():
        image = Image.open(SOURCE / source_name)
        cleaned = knock_out_white(image)

        bbox = cleaned.getbbox()
        if bbox:
            cleaned = cleaned.crop(bbox)

        # The strip renders these at 40 px tall on a 2x display.
        height = 80
        width = max(1, round(cleaned.width * height / cleaned.height))
        cleaned = cleaned.resize((width, height), Image.LANCZOS)

        out = TARGET / target_name
        cleaned.save(out, optimize=True)

        opaque = np.array(cleaned)[..., 3] > 30
        print(f"{target_name:24s} {cleaned.width}x{cleaned.height}  ink={opaque.mean():.0%}  {out.stat().st_size // 1024} kB")


if __name__ == "__main__":
    main()
