import Image from 'next/image';
import Link from 'next/link';

import { site } from '@/data/site';

export function Logo({ className = '' }: { className?: string }) {
  return (
    <Link href="/" className={`inline-flex items-center ${className}`} aria-label={`${site.brand} home`}>
      {/* Served as-is: the optimizer's lossy WebP pass leaves visible artefacts
          on the wordmark's thin strokes. The PNG is pre-quantised to ~19 kB. */}
      <Image
        src="/assets/images/brand/webinnovate/wordmark-clean.png"
        alt={site.company}
        width={669}
        height={166}
        priority
        unoptimized
        className="h-9 w-auto"
      />
    </Link>
  );
}
