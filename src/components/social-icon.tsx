export function SocialIcon({ label }: { label: string }) {
  switch (label.toLowerCase()) {
    case 'facebook':
      return (
        <svg className="size-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.45 2.89h-2.33v6.99A10 10 0 0 0 22 12Z" />
        </svg>
      );

    case 'whatsapp':
      return (
        <svg className="size-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M12.04 2c-5.5 0-9.96 4.46-9.96 9.96 0 1.76.46 3.48 1.34 5L2 22l5.16-1.35a9.94 9.94 0 0 0 4.88 1.25h.01c5.5 0 9.96-4.46 9.96-9.96S17.54 2 12.04 2Zm5.83 14.06c-.24.68-1.42 1.31-1.96 1.36-.5.05-.99.23-3.35-.7-2.82-1.11-4.6-3.99-4.74-4.18-.14-.19-1.13-1.5-1.13-2.86 0-1.36.71-2.03.97-2.31.25-.28.55-.35.73-.35.18 0 .37 0 .53.01.17.01.4-.07.62.48.24.57.8 1.97.87 2.11.07.14.12.31.02.5-.09.19-.14.31-.28.47-.14.16-.29.37-.42.49-.14.14-.28.29-.12.57.16.28.72 1.18 1.54 1.91 1.06.94 1.95 1.23 2.23 1.37.28.14.44.12.6-.07.17-.19.7-.81.88-1.09.19-.28.37-.23.63-.14.25.09 1.63.77 1.91.91.28.14.47.21.53.33.07.11.07.65-.16 1.33Z" />
        </svg>
      );

    case 'instagram':
      return (
        <svg className="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" aria-hidden="true">
          <rect x="3" y="3" width="18" height="18" rx="5" />
          <circle cx="12" cy="12" r="3.8" />
          <circle cx="17.4" cy="6.6" r="1" fill="currentColor" stroke="none" />
        </svg>
      );

    case 'youtube':
      return (
        <svg className="size-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M23 12s0-3.4-.43-5.03a2.6 2.6 0 0 0-1.83-1.84C19.1 4.7 12 4.7 12 4.7s-7.1 0-8.74.43a2.6 2.6 0 0 0-1.83 1.84C1 8.6 1 12 1 12s0 3.4.43 5.03c.24.9.94 1.6 1.83 1.84 1.64.43 8.74.43 8.74.43s7.1 0 8.74-.43a2.6 2.6 0 0 0 1.83-1.84C23 15.4 23 12 23 12ZM9.75 15.02V8.98L15.5 12l-5.75 3.02Z" />
        </svg>
      );

    default:
      return (
        <svg className="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" aria-hidden="true">
          <circle cx="12" cy="12" r="9" />
        </svg>
      );
  }
}
