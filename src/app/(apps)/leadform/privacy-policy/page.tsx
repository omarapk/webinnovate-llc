import type { Metadata } from 'next';
import Link from 'next/link';

import { LegalPage, type LegalSection } from '@/components/legal-page';
import { leadform } from '@/data/leadform';
import { site } from '@/data/site';

export const metadata: Metadata = {
  title: 'Privacy Policy — LeadForm: COD Order Form',
  description:
    'How LeadForm: COD Order Form collects, uses and protects personal information when you use the app and website.',
  alternates: { canonical: `/${leadform.slug}/privacy-policy` },
};

const LAST_UPDATED = 'July 15, 2026';

const sections: LegalSection[] = [
  { id: 'collect', label: 'What we collect' },
  { id: 'use', label: 'How we use it' },
  { id: 'authorized-use', label: 'Authorized use of content' },
  { id: 'sharing', label: 'Sharing your information' },
  { id: 'retention', label: 'How long we keep it' },
  { id: 'security', label: 'How we keep it safe' },
  { id: 'minors', label: 'Minors' },
  { id: 'rights', label: 'Your privacy rights' },
  { id: 'dnt', label: 'Do-Not-Track' },
  { id: 'updates', label: 'Policy updates' },
  { id: 'contact', label: 'Contact us' },
];

export default function LeadformPrivacyPolicyPage() {
  return (
    <LegalPage
      heading="Privacy Policy"
      lead="LeadForm: COD Order Form — what we collect, why we collect it, and what rights you have."
      sections={sections}
      lastUpdated={LAST_UPDATED}
    >
      <p className="!mt-0">
        Thank you for choosing LeadForm: COD – Order Form. We are committed to protecting your personal
        information and your right to privacy. If you have any questions or concerns about this notice, or
        our practices regarding your personal data, please contact us at{' '}
        <a href={`mailto:${leadform.supportEmail}`}>{leadform.supportEmail}</a>.
      </p>

      <p>
        When you visit our website (leadform.app) or use our services, you trust us with your personal
        information. This Privacy Notice explains in clear terms what data we collect, how we use it, and
        what rights you have. Please read it carefully to understand how we handle your data. If you do not
        agree with this policy, you should discontinue using our Services.
      </p>

      <p>
        This Privacy Notice applies to all information collected through our website and any related
        services, sales, marketing, or events (collectively referred to as the &ldquo;Services&rdquo;).
      </p>

      <h2 id="collect">1. What Information Do We Collect?</h2>

      <h3>Automatically Collected Information</h3>

      <p>When you use our Services, we automatically collect technical information such as:</p>

      <ul>
        <li>IP address</li>
        <li>Browser and device characteristics</li>
        <li>Operating system and language</li>
        <li>Referring URLs and pages visited</li>
        <li>Device type and geolocation</li>
        <li>Usage data (how and when you interact with our Services)</li>
      </ul>

      <p>
        This data does not directly identify you but is necessary for maintaining the security, functionality,
        and analytics of our Services. Like many companies, we also use cookies and similar technologies.
      </p>

      <h2 id="use">2. How Do We Use Your Information?</h2>

      <p>We use personal information collected through our Services for the following purposes:</p>

      <ul>
        <li>
          <strong>Account setup and login:</strong> To help you create and manage your account, including
          integrations with third-party accounts (e.g., Google, Facebook).
        </li>
        <li>
          <strong>Marketing and communication:</strong> To send promotional content, updates, and offers (if
          you&rsquo;ve opted in). You can unsubscribe at any time.
        </li>
        <li>
          <strong>Service improvement:</strong> For analytics, troubleshooting, and optimization of features.
        </li>
        <li>
          <strong>Legal compliance:</strong> To comply with laws, regulations, or court orders.
        </li>
      </ul>

      <p>We process your information based on:</p>

      <ul>
        <li>Legitimate business interests</li>
        <li>Contract performance</li>
        <li>Your consent</li>
        <li>Legal obligations</li>
      </ul>

      <h2 id="authorized-use">3. Authorized Use of Product Content</h2>

      <p>
        WEBI Landing Page Builder COD helps you create landing pages and order forms for products you are
        legally authorized to sell — your own products, officially licensed products, or supplier/dropshipping
        products you have the right to resell.
      </p>

      <p>
        You must not use the App to copy products, images, descriptions, or other content from any website,
        store, or marketplace (including AliExpress) without explicit permission from the rights holder. You
        are solely responsible for ensuring you hold the necessary rights to any content you upload or import
        into the App.
      </p>

      <p>
        Misuse may infringe copyright and violates these Terms and Shopify&rsquo;s policies, and may result in
        account suspension.
      </p>

      <h2 id="sharing">4. Will Your Information Be Shared With Anyone?</h2>

      <p>We only share data when necessary and under strict conditions:</p>

      <ul>
        <li>
          <strong>With your consent</strong> – for specific purposes you agree to.
        </li>
        <li>
          <strong>Vendors &amp; service providers</strong> – including hosting, payment processors, analytics,
          email delivery, and customer support.
        </li>
        <li>
          <strong>Business transfers</strong> – during mergers, acquisitions, or company restructuring.
        </li>
        <li>
          <strong>Legal requirements</strong> – to comply with law, national security, or law enforcement.
        </li>
        <li>
          <strong>Protection of rights</strong> – in cases of fraud, abuse, or security risks.
        </li>
      </ul>

      <p className="legal-note">
        We do not sell or rent your personal information to third parties for marketing purposes.
      </p>

      <h2 id="retention">5. How Long Do We Keep Your Information?</h2>

      <p>
        We retain your information only as long as necessary to provide our Services and fulfill the purposes
        outlined in this Privacy Notice, unless a longer period is required by law.
      </p>

      <p>Once your data is no longer needed, we either delete it or anonymize it.</p>

      <h2 id="security">6. How Do We Keep Your Information Safe?</h2>

      <p>
        We use appropriate technical and organizational security measures to protect your personal
        information. However, no online service can be 100% secure. Transmission of personal information is at
        your own risk, so we recommend accessing our Services only in secure environments.
      </p>

      <h2 id="minors">7. Do We Collect Information From Minors?</h2>

      <p>No. We do not knowingly collect or market to children under 18 years old.</p>

      <p>
        If we discover we have collected data from a minor, we will promptly delete it. If you are a parent or
        guardian and believe your child has shared personal data with us, please contact us at{' '}
        <a href={`mailto:${leadform.supportEmail}`}>{leadform.supportEmail}</a>.
      </p>

      <h2 id="rights">8. What Are Your Privacy Rights?</h2>

      <p>Depending on your location (e.g., the European Economic Area), you may have the right to:</p>

      <ul>
        <li>Access and obtain a copy of your data</li>
        <li>Request correction or deletion</li>
        <li>Restrict processing of your data</li>
        <li>Data portability (where applicable)</li>
        <li>Withdraw consent at any time</li>
      </ul>

      <p>
        You may also file a complaint with your local data protection authority if you believe we are
        unlawfully processing your data.
      </p>

      <h3>Account Information</h3>

      <p>You can delete the app anytime via the Shopify dashboard.</p>

      <p>
        Upon deletion, your account data will be removed from active databases, but we may retain certain data
        to comply with legal obligations or prevent fraud.
      </p>

      <h3>Cookies</h3>

      <p>
        You can configure your browser to reject cookies. Note: disabling cookies may affect certain features
        of our Services.
      </p>

      <h3>Email marketing</h3>

      <p>
        You may unsubscribe at any time using the link provided in our emails. Service-related emails
        (important updates, billing notices) cannot be opted out of.
      </p>

      <h2 id="dnt">9. Controls for Do-Not-Track (DNT) Features</h2>

      <p>
        Currently, no uniform standard exists for recognizing DNT signals. Therefore, we do not respond to DNT
        browser settings. If a standard is adopted in the future, we will update this policy accordingly.
      </p>

      <h2 id="updates">10. Do We Make Updates to This Policy?</h2>

      <p>
        Yes. We may update this Privacy Notice to stay compliant with laws and best practices. Updates will be
        reflected by the &ldquo;Last Updated&rdquo; date. For material changes, we may notify you via email or
        by posting a notice on our website.
      </p>

      <h2 id="contact">11. How Can You Contact Us About This Policy?</h2>

      <p>If you have questions or comments about this Privacy Notice, you may contact us at:</p>

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
        <li>
          Web: <Link href={`/${leadform.slug}`}>{site.url}/{leadform.slug}</Link>
        </li>
      </ul>
    </LegalPage>
  );
}
