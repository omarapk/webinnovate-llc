import type { Metadata } from 'next';

import { LegalPage, type LegalSection } from '@/components/legal-page';
import { leadform } from '@/data/leadform';
import { site } from '@/data/site';

export const metadata: Metadata = {
  title: 'Refund Policy — LeadForm: COD Order Form',
  description:
    'Refund Policy for LeadForm: COD Order Form. When you may be eligible for a refund and how requests are processed.',
  alternates: { canonical: `/${leadform.slug}/refund-policy` },
};

const LAST_UPDATED = 'September 18, 2025';

const sections: LegalSection[] = [
  { id: 'general', label: '1. General Policy' },
  { id: 'eligible', label: '2. Eligible Refunds' },
  { id: 'annual', label: '3. Annual Subscriptions' },
  { id: 'non-refundable', label: '4. Non-Refundable' },
  { id: 'request', label: '5. How to Request' },
  { id: 'method', label: '6. Refund Method' },
  { id: 'changes', label: '7. Policy Changes' },
];

export default function LeadformRefundPolicyPage() {
  return (
    <LegalPage
      heading="Refund Policy"
      lead="LeadForm: COD Order Form — when you may be eligible for a refund and how requests are processed."
      sections={sections}
      lastUpdated={LAST_UPDATED}
    >
      <p className="!mt-0">
        Thank you for using LeadForm: COD – Order Form (the &ldquo;App&rdquo;). We strive to ensure you have
        the best experience possible with our application. This Refund Policy explains when you may be
        eligible for a refund and how requests are processed.
      </p>

      <h2 id="general">1. General Policy</h2>

      <p>
        By installing and using our App, you agree to our Terms of Service and this Refund Policy.
      </p>

      <p>
        Because LeadForm offers a fully functional free trial (or low-cost test period, if applicable), we
        generally do not provide refunds once a subscription has started or renewed, except in limited cases
        described below.
      </p>

      <h2 id="eligible">2. Eligible Refund Situations</h2>

      <p>You may be eligible for a refund if:</p>

      <ul>
        <li>You were charged after uninstalling the app before the renewal date.</li>
        <li>You experienced a billing error (double charge, incorrect plan charge, etc.).</li>
        <li>
          There was a major technical issue preventing the app from functioning as intended, and our support
          team was unable to resolve it.
        </li>
      </ul>

      <p>In such cases, please contact us within 7 days of the charge to review your request.</p>

      <h2 id="annual">3. Refunds for Annual Subscriptions</h2>

      <p>
        If you have subscribed to an annual plan and decide to cancel after several months of use, you may be
        eligible for a partial refund for the remaining unused months.
      </p>

      <p>However, please note that:</p>

      <ul>
        <li>The annual plan includes a discounted rate compared to the monthly plan.</li>
        <li>
          When calculating the refund, the used months will be charged at the standard monthly rate (without
          discount).
        </li>
        <li>
          The refund will cover only the unused months, after deducting the recalculated value of the months
          already used.
        </li>
      </ul>

      <p className="legal-note">
        <strong>Example:</strong> If the annual plan is $180/year (equivalent to $15/month) and the monthly
        plan is $20/month, and you cancel after 5 months: you will be charged $20 × 5 = $100 for used months,
        and refunded the remaining balance ($180 – $100 = $80).
      </p>

      <h2 id="non-refundable">4. Non-Refundable Situations</h2>

      <p>Refunds will not be issued for:</p>

      <ul>
        <li>Forgetting to uninstall the app before the billing date.</li>
        <li>Lack of usage or results that do not meet expectations.</li>
        <li>
          App incompatibility with third-party themes, apps, or custom scripts outside our control.
        </li>
        <li>
          Subscription cancellations made after the billing period has started and no technical issue was
          found.
        </li>
      </ul>

      <h2 id="request">5. How to Request a Refund</h2>

      <p>To request a refund, please contact us at:</p>

      <ul>
        <li>
          Email: <a href={`mailto:${leadform.supportEmail}`}>{leadform.supportEmail}</a>
        </li>
        <li>
          Phone: <a href={leadform.supportPhone.url}>{leadform.supportPhone.display}</a>
        </li>
      </ul>

      <p>Include your Shopify store URL, the date of charge, and a brief description of the issue.</p>

      <p>
        Our team will review your case within 2–3 business days and issue an appropriate refund if eligible.
      </p>

      <h2 id="method">6. Refund Method</h2>

      <p>If approved, refunds will be processed via Shopify&rsquo;s billing system.</p>

      <p>
        Once issued, the refund amount will automatically appear in your Shopify account or original payment
        method within 5–10 business days, depending on your bank or payment provider.
      </p>

      <h2 id="changes">7. Changes to This Policy</h2>

      <p>
        We may update this Refund Policy from time to time. All changes will be posted on this page with an
        updated &ldquo;Last updated&rdquo; date.
      </p>

      <h2 id="contact">Contact</h2>

      <ul>
        <li>
          <strong>LeadForm: COD – Order Form</strong>
        </li>
        <li>
          Developed by {site.company}
        </li>
        <li>{site.address.state}, USA</li>
        <li>
          Email: <a href={`mailto:${leadform.supportEmail}`}>{leadform.supportEmail}</a>
        </li>
      </ul>
    </LegalPage>
  );
}
