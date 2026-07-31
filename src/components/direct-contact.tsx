import { SocialIcon } from '@/components/social-icon';
import { site } from '@/data/site';

/**
 * Stand-in for the quote form while no mail provider is configured.
 *
 * The form would accept a submission it cannot deliver, so the contact page
 * shows these channels instead until `RESEND_API_KEY` is set.
 */

function MailIcon() {
  return (
    <svg className="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
      <rect x="2.5" y="5" width="19" height="14" rx="2" />
      <path d="m3 7 9 6 9-6" />
    </svg>
  );
}

function PhoneIcon() {
  return (
    <svg className="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
      <path d="M6.5 3.5 9 3l1.8 4.4-2.1 1.2a12.5 12.5 0 0 0 5.7 5.7l1.2-2.1L20 14.5l-.5 2.5A2.5 2.5 0 0 1 17 19.5 14.5 14.5 0 0 1 4.5 7a2.5 2.5 0 0 1 2-3.5Z" />
    </svg>
  );
}

function Channel({
  href,
  icon,
  label,
  value,
  hint,
  primary = false,
}: {
  href: string;
  icon: React.ReactNode;
  label: string;
  value: string;
  hint: string;
  primary?: boolean;
}) {
  return (
    <a
      href={href}
      rel="noopener"
      className={`flex items-start gap-4 rounded-xl border p-5 transition-all hover:shadow-sm ${
        primary
          ? 'border-foreground/20 bg-secondary hover:border-foreground/40'
          : 'border-border bg-card hover:border-foreground/20'
      }`}
    >
      <span className="inline-flex size-10 shrink-0 items-center justify-center rounded-lg border border-border bg-background">
        {icon}
      </span>
      <span className="min-w-0">
        <span className="block text-sm font-medium">{label}</span>
        <span className="mt-1 block truncate text-base font-medium tracking-tight">{value}</span>
        <span className="mt-1.5 block text-sm leading-relaxed text-muted-foreground">{hint}</span>
      </span>
    </a>
  );
}

export function DirectContact() {
  return (
    <div className="rounded-2xl border border-border bg-card p-6 sm:p-8">
      <h3 className="text-xl font-semibold tracking-tight">Send us your brief</h3>
      <p className="mt-2 text-sm leading-relaxed text-muted-foreground">
        Tell us what you want to build, your timeline and your budget range. You get back a scoped
        proposal within one business day.
      </p>

      <div className="mt-6 space-y-3">
        <Channel
          primary
          href={`mailto:${site.email}?subject=${encodeURIComponent('Quote request')}`}
          icon={<MailIcon />}
          label="Email"
          value={site.email}
          hint="Best for a detailed brief — attach anything useful."
        />
        <Channel
          href={site.whatsapp.url}
          icon={<SocialIcon label="WhatsApp" />}
          label="WhatsApp"
          value={site.whatsapp.display}
          hint="The fastest way to reach the team, screen sharing included."
        />
        <Channel
          href={site.phone.url}
          icon={<PhoneIcon />}
          label="Phone"
          value={site.phone.display}
          hint="Mon–Fri, business hours US Eastern."
        />
      </div>
    </div>
  );
}
