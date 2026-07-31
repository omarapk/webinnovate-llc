import type { Metadata } from 'next';

import { LegalPage, type LegalSection } from '@/components/legal-page';
import { site } from '@/data/site';

export const metadata: Metadata = {
  title: 'Terms & Conditions — WebInnovate LLC',
  description:
    'WebInnovate LLC terms and conditions: DMCA copyright notifications and counter-notifications, repeat infringer policy, trademark infringement and privacy complaints.',
  alternates: { canonical: '/terms-of-use' },
};

const LAST_UPDATED = 'July 27, 2026';

const sections: LegalSection[] = [
  { id: 'dmca', label: 'DMCA process' },
  { id: 'notice', label: 'Filing a DMCA notice' },
  { id: 'counter-notification', label: 'Filing a counter-notification' },
  { id: 'repeat-infringer', label: 'Repeat infringer policy' },
  { id: 'warning', label: 'Warning' },
  { id: 'trademark', label: 'Trademark infringement' },
  { id: 'privacy', label: 'Privacy violation' },
  { id: 'contact', label: 'Contact us' },
];

export default function TermsOfUsePage() {
  return (
    <LegalPage
      heading="Terms & Conditions"
      lead="How WebInnovate handles copyright, trademark and privacy complaints — and what we need from you to act on one."
      sections={sections}
      lastUpdated={LAST_UPDATED}
    >
      <h2 id="dmca" className="!mt-0">
        WebInnovate DMCA (Copyright) Notifications and Counter-Notifications Process
      </h2>

      <p>
        WebInnovate respects the intellectual property of others, and we ask our users to do the same. Each
        user is responsible for ensuring that the materials they upload to the WebInnovate Site do not
        infringe any third party copyright.
      </p>

      <p>
        WebInnovate will promptly remove materials from the WebInnovate Site in accordance with the Digital
        Millennium Copyright Act (&ldquo;DMCA&rdquo;) if properly notified that the materials infringe a
        third party&rsquo;s copyright. In addition, WebInnovate may, in appropriate circumstances, terminate
        the accounts of repeat copyright infringers.
      </p>

      <h2 id="notice">Filing a DMCA Notice to Remove Copyrighted Content — for Copyright Holders</h2>

      <p>
        If you believe that your work has been copied in a way that constitutes copyright infringement,
        please provide us with a written notice containing the following information:
      </p>

      <ul>
        <li>Your name, address, telephone number, and email address (if any).</li>
        <li>A description of the copyrighted work that you claim has been infringed.</li>
        <li>
          A description of where on the WebInnovate Site the material that you claim is infringing may be
          found, sufficient for WebInnovate to locate the material (e.g., the URL).
        </li>
        <li>
          A statement that you have a good faith belief that the use of the copyrighted work is not
          authorized by the copyright owner, its agent, or the law.
        </li>
        <li>
          A statement by you <strong>UNDER PENALTY OF PERJURY</strong> that the information in your notice is
          accurate and that you are the copyright owner or authorized to act on the copyright owner&rsquo;s
          behalf.
        </li>
        <li>Your electronic or physical signature.</li>
      </ul>

      <p>You may submit this information via:</p>

      <ul>
        <li>
          Email: <a href={`mailto:${site.email}`}>{site.email}</a>
        </li>
        <li>Offline: WebInnovate&rsquo;s Copyright Agent, {site.address.full}</li>
      </ul>

      <h2 id="counter-notification">
        Filing a DMCA Counter-Notification to Restore Removed Content — for WebInnovate Users
      </h2>

      <p>
        If you believe that your material has been removed by mistake or misidentification, please provide
        WebInnovate with a written counter-notification containing the following information:
      </p>

      <ul>
        <li>Your name, address, and telephone number.</li>
        <li>
          A description of the material that was removed and the location on the WebInnovate Site (e.g., the
          URL) where it previously appeared.
        </li>
        <li>
          A statement <strong>UNDER PENALTY OF PERJURY</strong> that you have a good faith belief that the
          material was removed or disabled as a result of mistake or misidentification.
        </li>
        <li>
          A statement that you consent to the jurisdiction of the Federal District Court for the judicial
          district in which your address is located, or if your address is outside of the United States, any
          judicial district in which WebInnovate may be found (which includes the United States District
          Court for the Southern District of New York), and that you will accept service of process from the
          person who filed the original DMCA notice or an agent of that person.
        </li>
        <li>Your electronic or physical signature.</li>
      </ul>

      <h2 id="repeat-infringer">Repeat Infringer Policy</h2>

      <p>
        WebInnovate will terminate user accounts that have been the subject of three (3) separate DMCA
        notices. In the event a user&rsquo;s materials are removed due to a DMCA notice and then subsequently
        restored due to the filing of a DMCA counter-notification, WebInnovate will treat the underlying DMCA
        notice as withdrawn.
      </p>

      <p>
        WebInnovate reserves the right to terminate user accounts that are the subject of fewer than three
        (3) DMCA notices in appropriate circumstances, such as where the user has a history of violating or
        willfully disregarding WebInnovate&rsquo;s Terms of Service.
      </p>

      <h2 id="warning">Warning</h2>

      <p>
        In filing a DMCA notice or counter-notification, please make sure that you have complied with all of
        the above requirements. If we request additional information necessary to make your DMCA notice or
        counter-notification complete, please provide that information promptly. If you fail to comply with
        all of these requirements, your DMCA notice or counter-notification may not be processed further.
      </p>

      <p className="legal-note">
        In addition, please make sure that all of the information you provide is accurate. UNDER SECTION
        512(f) OF THE COPYRIGHT ACT, 17 U.S.C. § 512(f), ANY PERSON WHO KNOWINGLY MATERIALLY MISREPRESENTS
        THAT MATERIAL OR ACTIVITY IS INFRINGING OR WAS REMOVED OR DISABLED BY MISTAKE OR MISIDENTIFICATION
        MAY BE SUBJECT TO LIABILITY.
      </p>

      <p>
        WebInnovate may disclose any communications concerning DMCA notices or other intellectual property
        complaints with third parties, including the users who have posted the allegedly infringing material,
        and may provide DMCA notices to Chilling Effects.
      </p>

      <p>
        If you have questions about the legal requirements of a DMCA notice, please contact an attorney or
        see Section 512(c)(3) of the U.S. Copyright Act, 17 U.S.C. § 512(c)(3), for more information. If you
        have questions about the legal requirements of a DMCA counter-notification, please contact an
        attorney or see Section 512(g)(3) of the U.S. Copyright Act, 17 U.S.C. § 512(g)(3), for more
        information.
      </p>

      <h2 id="trademark">Trademark Law and Infringement</h2>

      <p>
        If you believe a WebInnovate member is infringing on your trademark, please file a trademark
        complaint and a WebInnovate moderator will investigate your claim right away. If you are unsure if
        your trademark is being infringed, please contact us to learn more about trademark law and
        infringement.
      </p>

      <h2 id="privacy">Privacy Violation</h2>

      <p>
        If you believe a WebInnovate member is violating your privacy, please file a privacy complaint and a
        WebInnovate moderator will investigate your claim right away. Please visit our{' '}
        <a href="/privacy-policy">privacy page</a> to learn more about our privacy policy.
      </p>

      <h2 id="contact">Contact Us</h2>

      <p>
        To file a notice, a counter-notification or any other complaint described above, reach {site.company}{' '}
        at:
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
