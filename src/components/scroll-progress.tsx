'use client';

import { motion, useScroll, useSpring } from 'motion/react';

/**
 * Thin reading-progress bar pinned to the bottom edge of a sticky header.
 * The spring keeps it a beat behind the scrollbar, which reads as fluid
 * rather than mechanical. Colour comes from the caller via className.
 */
export function ScrollProgress({ className = '' }: { className?: string }) {
  const { scrollYProgress } = useScroll();
  const scaleX = useSpring(scrollYProgress, { stiffness: 220, damping: 40, restDelta: 0.001 });

  return (
    <motion.span
      aria-hidden="true"
      style={{ scaleX, transformOrigin: '0%' }}
      className={`pointer-events-none absolute inset-x-0 bottom-0 h-0.5 ${className}`}
    />
  );
}
