import type { Metadata } from 'next';

import { LegalPage, type LegalSection } from '@/components/legal-page';
import { site } from '@/data/site';

export const metadata: Metadata = {
  title: 'Privacy Policy — WebInnovate LLC',
  description:
    'How WebInnovate LLC collects, uses and shares personal information when you install or use one of our apps with your Shopify-supported store.',
  alternates: { canonical: '/privacy-policy' },
};

const LAST_UPDATED = 'July 27, 2026';

const sections: LegalSection[] = [
  { id: 'overview', label: 'Overview' },
  { id: 'collect', label: 'Information we collect' },
  { id: 'use', label: 'How we use it' },
  { id: 'authorized-use', label: 'Authorized use of content' },
  { id: 'sms', label: 'SMS service' },
  { id: 'sharing', label: 'Sharing your information' },
  { id: 'contact', label: 'Contact us' },
];

/** Shopify scopes an app is granted on install. */
const scopes = [
  'write_customers',
  'read_themes',
  'write_themes',
  'write_orders',
  'read_customers',
  'read_products',
  'write_draft_orders',
  'write_script_tags',
  'write_order_edits',
  'write_content',
];

export default function PrivacyPolicyPage() {
  return (
    <LegalPage
      heading="Privacy Policy"
      lead="What we collect when you install one of our apps, why we collect it, and who it is shared with."
      sections={sections}
      lastUpdated={LAST_UPDATED}
    >
      <h2 id="overview" className="!mt-0">
        Overview
      </h2>

      <p>
        WebInnovate provides app solutions &ldquo;an App&rdquo; to &ldquo;the Service&rdquo; to merchants who
        use Shopify to power their stores. This Privacy Policy describes how personal information is
        collected, used, and shared when you install or use an App in connection with your Shopify-supported
        store.
      </p>

      <p>
        When you install an App, we are automatically able to access certain types of information from your
        Shopify account:
      </p>

      <ul className="!flex flex-wrap gap-2 !pl-0 !space-y-0 list-none">
        {scopes.map((scope) => (
          <li
            key={scope}
            className="rounded-md border border-border bg-muted/60 px-2.5 py-1 font-mono text-xs text-foreground"
          >
            {scope}
          </li>
        ))}
      </ul>

      <h2 id="collect">Personal Information an App Collects</h2>

      <p>
        Additionally, we collect the following types of personal information from you and/or your customers
        once you have installed an App: Information about you and others who may access an App on behalf of
        your store, such as your name, address, email address, phone number.
      </p>

      <p>
        We only collect information about individuals who visit your store if you have the option enabled on
        your Advanced settings of the app, such as their IP address and web browser details. This data will
        be used to create the customer order, and we don&rsquo;t store this data on our side.
      </p>

      <h2 id="use">How Do We Use Your Personal Information?</h2>

      <p>
        We use the personal information we collect from you and your customers to provide the Service and to
        operate an App. Additionally, we use this personal information to:
      </p>

      <ul>
        <li>Communicate with you;</li>
        <li>Optimize or improve an App; and</li>
        <li>Provide you with information or advertising related to our products or services.</li>
      </ul>

      <p className="legal-note">
        We are committed to protecting the privacy of our users. To provide valuable services to our
        merchants, we collect only the minimum amount of personal data required to achieve this goal. We use
        this data only for the purpose of providing our services and ensuring that our merchants receive the
        best possible experience, and <strong>we do not share or sell it to any third parties</strong>.
      </p>

      <h2 id="authorized-use">Authorized use of product content</h2>

      <p>
        WEBI Landing Page Builder COD helps you create landing pages for products you are legally authorized
        to sell — your own products, officially licensed products, or supplier/dropshipping products you have
        the right to resell. You must not use the app to copy products, images, descriptions, or other
        content from any website, store, or marketplace (including AliExpress) without explicit permission
        from the rights holder. You are solely responsible for ensuring you hold the necessary rights. Misuse
        may infringe copyright and violates these Terms and Shopify&rsquo;s policies, and may result in
        account suspension.
      </p>

      <h2 id="sms">SMS Service</h2>

      <ul>
        <li>
          <strong>User Responsibility for Content:</strong> Users acknowledge and agree that they are solely
          responsible for all content, including without limitation, any text, data, information, and
          messages that they send or transmit using our SMS services.
        </li>
        <li>
          <strong>No Endorsement of Content:</strong> The User understands that by providing SMS services,
          WebInnovate does not endorse or control the content of messages sent by Users and cannot guarantee
          the accuracy, integrity, or quality of such content.
        </li>
        <li>
          <strong>No Liability:</strong> WebInnovate shall not be liable for any content sent by Users
          through our SMS services. Users agree to indemnify and hold harmless WebInnovate, its affiliates,
          officers, directors, employees, and agents from any claims or disputes arising from content they
          send or transmit using our SMS services.
        </li>
        <li>
          <strong>Right to Remove or Restrict Access:</strong> WebInnovate reserves the right, but does not
          assume the obligation, to monitor or review the content of messages sent by Users. We may, at our
          sole discretion, remove or refuse to send any content that violates these terms or that we deem
          inappropriate or harmful.
        </li>
        <li>
          <strong>Compliance with Laws:</strong> Users agree to use our SMS services in compliance with all
          applicable local, state, national, and international laws, rules, and regulations, including those
          related to data privacy, international communications, and the transmission of technical or
          personal data. Users also agree not to use our SMS service for any unlawful purposes or to send
          messages that may be harmful, abusive, threatening, or that may violate the rights of third
          parties.
        </li>
      </ul>

      <h2 id="sharing">Sharing Your Personal Information</h2>

      <p>
        Finally, we may also share your Personal Information to comply with applicable laws and regulations,
        to respond to a subpoena, search warrant, or other lawful requests for information we receive, or to
        otherwise protect our rights.
      </p>

      <h2 id="contact">Contact Us</h2>

      <p>
        For more information about our privacy practices, if you have questions, or if you would like to make
        a complaint, please contact {site.company} at:
      </p>

      <ul>
        <li>
          Email: <a href={`mailto:${site.email}`}>{site.email}</a>
        </li>
        <li>
          Tel: <a href={site.phone.url}>{site.phone.display}</a>
        </li>
        <li>Address: {site.address.full}</li>
      </ul>
    </LegalPage>
  );
}
