import type { ServiceIcon as ServiceIconName } from '@/data/home';

export function ServiceIcon({ name }: { name: ServiceIconName }) {
  const common = {
    className: 'size-5',
    viewBox: '0 0 24 24',
    fill: 'none',
    stroke: 'currentColor',
    strokeWidth: 1.6,
    strokeLinecap: 'round' as const,
    strokeLinejoin: 'round' as const,
  };

  switch (name) {
    case 'code':
      return (
        <svg {...common}>
          <path d="m8 6-5 6 5 6M16 6l5 6-5 6" />
        </svg>
      );
    case 'shield':
      return (
        <svg {...common}>
          <path d="M12 3 4.5 6v6c0 4.4 3.1 8.3 7.5 9.4 4.4-1.1 7.5-5 7.5-9.4V6L12 3Z" />
          <path d="m9 12.5 2 2 4-4" />
        </svg>
      );
    case 'search':
      return (
        <svg {...common}>
          <circle cx="11" cy="11" r="7" />
          <path d="m20 20-3.5-3.5" />
        </svg>
      );
    case 'support':
      return (
        <svg {...common}>
          <path d="M21 11.5a8.4 8.4 0 0 1-9 8.4L3 21l1.1-4.6A8.4 8.4 0 1 1 21 11.5Z" />
        </svg>
      );
  }
}
