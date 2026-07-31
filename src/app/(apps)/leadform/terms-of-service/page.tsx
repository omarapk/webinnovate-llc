import type { Metadata } from 'next';

import { LegalPage, type LegalSection } from '@/components/legal-page';
import { leadform } from '@/data/leadform';
import { site } from '@/data/site';

export const metadata: Metadata = {
  title: 'Terms of Service — LeadForm: COD Order Form',
  description:
    'Terms of Use for LeadForm: COD Order Form by WebInnovate LLC. The rules that govern your use of the app and website.',
  alternates: { canonical: `/${leadform.slug}/terms-of-service` },
};

const LAST_UPDATED = 'January 28, 2025';

const sections: LegalSection[] = [
  { id: 'supplemental', label: '1. Supplemental Terms' },
  { id: 'eligibility', label: '2. Eligibility' },
  { id: 'ip', label: '3. Intellectual Property' },
  { id: 'responsibilities', label: '4. User Responsibilities' },
  { id: 'prohibited', label: '5. Prohibited Activities' },
  { id: 'submissions', label: '6. Submissions' },
  { id: 'third-party', label: '7. Third-Party Content' },
  { id: 'management', label: '8. Site Management' },
  { id: 'termination', label: '9. Term & Termination' },
  { id: 'modifications', label: '10. Modifications' },
  { id: 'disclaimer', label: '11. Disclaimer' },
  { id: 'liability', label: '12. Limitation of Liability' },
  { id: 'indemnification', label: '13. Indemnification' },
  { id: 'user-data', label: '14. User Data' },
  { id: 'communications', label: '15. Electronic Communications' },
  { id: 'miscellaneous', label: '16. Miscellaneous' },
  { id: 'contact', label: '17. Contact Us' },
];

export default function LeadformTermsPage() {
  return (
    <LegalPage
      heading="Terms of Service"
      lead="LeadForm: COD Order Form Terms of Use — the rules that govern your access to the app and site."
      sections={sections}
      lastUpdated={LAST_UPDATED}
    >
      <p className="!mt-0">
        These Terms of Use constitute a legally binding agreement between you (whether personally or on
        behalf of a company, &ldquo;you&rdquo;) and {site.company}, doing business as LeadForm: COD – Order
        Form (&ldquo;LeadForm&rdquo;, &ldquo;we&rdquo;, &ldquo;us&rdquo;, or &ldquo;our&rdquo;), concerning
        your access to and use of the leadform.app website as well as any related media channels, mobile
        websites, or applications (collectively, the &ldquo;Site&rdquo;).
      </p>

      <p>
        By accessing or using the Site, you confirm that you have read, understood, and agreed to be bound by
        these Terms of Use.
      </p>

      <p className="legal-note">
        If you do not agree with these Terms, you must discontinue use of the Site immediately.
      </p>

      <h2 id="supplemental">1. Supplemental Terms</h2>

      <p>
        We may update or modify these Terms of Use at any time. Changes will be reflected by the &ldquo;Last
        Updated&rdquo; date. It is your responsibility to check this page periodically. Continued use of the
        Site after changes means you accept the updated Terms.
      </p>

      <h2 id="eligibility">2. Eligibility</h2>

      <p>
        The Site is intended for users at least 18 years old. By using the Site, you confirm you meet this
        requirement.
      </p>

      <h2 id="ip">3. Intellectual Property Rights</h2>

      <p>
        Unless otherwise indicated, the Site and all content (code, databases, software, designs, text,
        photos, graphics, video, and audio) as well as trademarks and logos are the property of {site.company}{' '}
        or licensed to us.
      </p>

      <p>
        You are granted a limited, non-transferable license to access and use the Site for personal,
        non-commercial use only. Any other use (copying, reproducing, distributing, or exploiting the Site or
        its content) requires prior written permission.
      </p>

      <h2 id="responsibilities">4. User Responsibilities</h2>

      <p>By using the Site, you represent and agree that:</p>

      <ul>
        <li>You have the legal capacity to accept these Terms.</li>
        <li>You are not a minor in your jurisdiction.</li>
        <li>You will not access the Site using automated tools (bots, scripts, scrapers).</li>
        <li>You will not use the Site for unlawful purposes.</li>
        <li>Your use complies with all applicable laws and regulations.</li>
      </ul>

      <p>
        If any information you provide is false, outdated, or incomplete, we reserve the right to suspend or
        terminate your account.
      </p>

      <h2 id="prohibited">5. Prohibited Activities</h2>

      <p>You agree not to:</p>

      <ul>
        <li>Collect data from the Site without permission.</li>
        <li>Send spam or create accounts under false pretenses.</li>
        <li>Circumvent or disable security features.</li>
        <li>Reverse engineer or copy the Site&rsquo;s software.</li>
        <li>Upload viruses, malware, or harmful content.</li>
        <li>Harass, defraud, or impersonate others.</li>
        <li>Use the Site to compete with us or for unauthorized commercial purposes.</li>
      </ul>

      <p>Violating these restrictions may result in suspension or termination of your access.</p>

      <h2 id="submissions">6. Submissions</h2>

      <p>
        Any feedback, suggestions, or ideas you provide to us (&ldquo;Submissions&rdquo;) become the property
        of {site.company}. We may use them freely without compensation to you.
      </p>

      <h2 id="third-party">7. Third-Party Websites and Content</h2>

      <p>
        The Site may contain links to third-party websites or services. We are not responsible for their
        content, practices, or policies. Accessing third-party services is at your own risk.
      </p>

      <h2 id="management">8. Site Management</h2>

      <p>We reserve the right to:</p>

      <ul>
        <li>Monitor the Site for violations of these Terms.</li>
        <li>Restrict or disable access at our discretion.</li>
        <li>Remove or disable content that is harmful or burdensome.</li>
        <li>Take legal action against violations of these Terms.</li>
      </ul>

      <h2 id="termination">9. Term &amp; Termination</h2>

      <p>
        These Terms remain in effect while you use the Site. We reserve the right to suspend or terminate
        access without notice if you violate these Terms or applicable laws.
      </p>

      <p>
        If your account is terminated, you may not create a new one under your name or a third party&rsquo;s
        name.
      </p>

      <h2 id="modifications">10. Modifications and Interruptions</h2>

      <p>
        We may update, suspend, or discontinue the Site at any time without notice. We cannot guarantee the
        Site will always be available and are not liable for downtime, errors, or interruptions.
      </p>

      <h2 id="disclaimer">11. Disclaimer</h2>

      <p>
        The Site is provided &ldquo;as-is&rdquo; and &ldquo;as-available&rdquo;. We disclaim all warranties
        (express or implied), including merchantability, fitness for a particular purpose, and
        non-infringement.
      </p>

      <h2 id="liability">12. Limitation of Liability</h2>

      <p>
        To the maximum extent permitted by law, {site.company} is not liable for indirect, incidental, or
        consequential damages (such as data loss, lost revenue, or service interruptions). Our liability will
        never exceed the amount you paid us, if any, in the last six (6) months.
      </p>

      <h2 id="indemnification">13. Indemnification</h2>

      <p>
        You agree to defend and indemnify {site.company}, its employees, and affiliates against claims,
        damages, or expenses arising from:
      </p>

      <ul>
        <li>Your use of the Site,</li>
        <li>Violation of these Terms,</li>
        <li>Infringement of third-party rights.</li>
      </ul>

      <h2 id="user-data">14. User Data</h2>

      <p>
        We maintain certain data for site performance. While we back up data, you are responsible for your own
        data. We are not liable for data loss or corruption.
      </p>

      <h2 id="communications">15. Electronic Communications</h2>

      <p>
        By using the Site, you consent to receive electronic communications from us (emails, notices,
        policies). These satisfy any legal requirement that communications be in writing.
      </p>

      <h2 id="miscellaneous">16. Miscellaneous</h2>

      <ul>
        <li>These Terms are the entire agreement between you and us.</li>
        <li>If any provision is found invalid, the remaining Terms still apply.</li>
        <li>Our failure to enforce a right does not waive it.</li>
        <li>We may assign our rights and obligations without notice.</li>
      </ul>

      <h2 id="contact">17. Contact Us</h2>

      <p>
        If you have questions, complaints, or requests regarding these Terms of Use, please contact us:
      </p>

      <ul>
        <li>
          Email: <a href={`mailto:${leadform.supportEmail}`}>{leadform.supportEmail}</a>
        </li>
        <li>
          Phone: <a href={leadform.supportPhone.url}>{leadform.supportPhone.display}</a>
        </li>
        <li>
          {site.company}, {site.address.full}
        </li>
      </ul>
    </LegalPage>
  );
}
