        /*
         | Extracted from public/assets/css/styles.css (Histudy / LeadForm theme)
         | Source classes: .rbt-btn (L13054–13071) + .rbt-btn.btn-sm (L13490–13495)
         | + .rbt-btn.btn-gradient (L13129–13144) + .rbt-btn.hover-transform-none:hover (L13589–13591)
         | CSS variables --color-primary / --color-secondary from :root (L123–124)
         */
        .lf-cta-btn {
            --lf-primary: #c20c81;
            --lf-secondary: #930c81;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.35rem;
            padding: 0 22px;
            min-height: 45px;
            line-height: 43px;
            font-size: 16px;
            letter-spacing: 0.5px;
            font-weight: 500;
            font-family: system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;
            color: #fff !important;
            border: 0;
            border-radius: 6px;
            text-decoration: none !important;
            cursor: pointer;
            position: relative;
            z-index: 1;
            transition: all 0.4s ease-in-out;
            background-color: var(--lf-primary);
            background-image: linear-gradient(to right, var(--lf-primary), var(--lf-secondary), var(--lf-secondary), var(--lf-primary));
            background-size: 300% 100%;
            box-sizing: border-box;
            vertical-align: middle;
        }
        button.lf-cta-btn {
            appearance: none;
        }
        .lf-cta-btn:hover {
            color: #fff !important;
            background-position: 102% 0;
            transform: none;
            box-shadow: 0px 15px 30px -2px rgba(0, 0, 0, 0.1);
        }
        .lf-cta-btn:focus-visible {
            outline: none;
            box-shadow: 0 0 0 3px rgba(194, 12, 129, 0.35), 0px 15px 30px -2px rgba(0, 0, 0, 0.1);
        }
        .lf-cta-btn.lf-cta-btn-nav {
            padding: 0 18px;
            min-height: 40px;
            line-height: 38px;
            font-size: 15px;
        }
        .lf-cta-btn.lf-cta-btn-sm {
            padding: 0 16px;
            min-height: 38px;
            line-height: 36px;
            font-size: 14px;
        }
        .lf-cta-btn.w-100 {
            width: 100%;
        }
        /* Same text-slide as .rbt-btn.rbt-switch-btn (styles.css ~L13170–L13469) */
        .lf-cta-btn.lf-cta-switch {
            overflow: hidden;
        }
        .lf-cta-btn.lf-cta-switch > span[data-text] {
            display: inline-flex;
            position: relative;
            z-index: 3;
            transition: opacity 0.65s, transform 0.85s;
            transition-timing-function: cubic-bezier(0.15, 0.85, 0.31, 1);
        }
        .lf-cta-btn.lf-cta-switch > span[data-text]::after {
            content: attr(data-text);
            display: inline-block;
            position: absolute;
            white-space: nowrap;
            top: 50%;
            opacity: 0;
            transition: inherit;
            left: 100%;
            transform: translate(50%, -50%);
        }
        .lf-cta-btn.lf-cta-switch:hover > span[data-text] {
            transform: translateX(-200%);
        }
        .lf-cta-btn.lf-cta-switch:hover > span[data-text]::after {
            opacity: 1;
            transform: translate(100%, -50%);
        }
