'use client';

import { motion, type Variants } from 'motion/react';
import Link from 'next/link';
import type { CSSProperties, ElementType, ReactNode } from 'react';

/**
 * Scroll reveal primitives.
 *
 * `RevealGroup` orchestrates the stagger; every `Reveal` inside it inherits
 * the variants and plays in sequence. A `Reveal` on its own still works —
 * wrap it in a group of one.
 */

const container: Variants = {
  hidden: {},
  show: { transition: { staggerChildren: 0.08 } },
};

const item: Variants = {
  hidden: { opacity: 0, y: 16 },
  show: {
    opacity: 1,
    y: 0,
    transition: { duration: 0.5, ease: [0.16, 1, 0.3, 1] },
  },
};

/* Motion components must be stable across renders, otherwise React remounts
   the subtree on every pass and the animation restarts. */
const cache = new Map<ElementType, ElementType>();

function motionTag(as: ElementType): ElementType {
  let component = cache.get(as);

  if (!component) {
    component = motion.create(as as never) as ElementType;
    cache.set(as, component);
  }

  return component;
}

type RevealProps = {
  children?: ReactNode;
  className?: string;
  style?: CSSProperties;
  as?: ElementType;
  /** Only meaningful when `as` renders an anchor. */
  href?: string;
  rel?: string;
  target?: string;
};

export function RevealGroup({ children, className, style, as = 'div', ...anchor }: RevealProps) {
  const Tag = motionTag(as);

  return (
    <Tag
      variants={container}
      initial="hidden"
      whileInView="show"
      viewport={{ once: true, margin: '-10% 0px -10% 0px' }}
      className={className}
      style={style}
      {...anchor}
    >
      {children}
    </Tag>
  );
}

export function Reveal({ children, className, style, as = 'div', ...anchor }: RevealProps) {
  const Tag = motionTag(as);

  return (
    <Tag variants={item} className={className} style={style} {...anchor}>
      {children}
    </Tag>
  );
}

const MotionLink = motion.create(Link);

/**
 * A revealed `next/link`. Server components cannot pass `Link` through an
 * `as` prop — components are not serializable across the boundary — so the
 * wiring happens here on the client instead.
 */
export function RevealLink({
  href,
  children,
  className,
  style,
}: Omit<RevealProps, 'as'> & { href: string }) {
  return (
    <MotionLink variants={item} href={href} className={className} style={style}>
      {children}
    </MotionLink>
  );
}
