import Image from 'next/image';

/**
 * A third-party brand logo from `public/assets/images/brands`.
 *
 * Served unoptimized on purpose: Next's image optimizer rejects SVG unless
 * `dangerouslyAllowSVG` is set, and there is nothing to gain from re-encoding
 * a 1 kB vector we ship ourselves.
 */
export function BrandMark({
  name,
  className = '',
  size = 20,
}: {
  /** File name without the extension, e.g. `meta`. */
  name: string;
  className?: string;
  size?: number;
}) {
  return (
    <Image
      src={`/assets/images/brands/${name}.svg`}
      alt=""
      aria-hidden="true"
      width={size}
      height={size}
      unoptimized
      className={className}
    />
  );
}
