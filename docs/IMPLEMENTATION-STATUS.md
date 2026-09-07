# HI-GLOSS DESIGN — Implementation Status

Date: 2026-09-08
Branch: `redesign/seo-ux-2026`

## Completed in this milestone

- Restored the complete `functions.php` after a failed partial update; the original theme functionality is preserved.
- Added the scoped `assets/css/redesign.css` layer to the WordPress asset graph.
- Kept the existing visual language, logo and project imagery while improving spacing, CTA sizing, hero hierarchy, card interaction and reduced-motion behavior.
- Kept Yoast compatibility conditional: when Yoast is active, legacy theme SEO callbacks are removed so metadata/schema ownership is not duplicated.
- Kept the custom image sitemap/robots fallback guarded when Yoast is active.
- Added `inc/realizacje-seo.php` for portfolio-to-service linking and related-project queries.
- Connected the portfolio archive taxonomy views to their corresponding commercial service hubs.
- Added contextual related-project links to individual `realizacje` content, using crawlable HTML links and no extra schema.
- Added responsive styling for the related-project block.

## SEO architecture decision

Yoast remains the SEO metadata/schema/sitemap owner when active. Theme code should focus on semantic HTML, internal links, images, accessibility and performance.

The portfolio content graph is now:

`service hub -> realization -> related realization`

The next planned connection is:

`FAQ / poradnik -> service hub -> realization`

## Remaining before production

- Refactor the large `front-page.php` into reusable template parts.
- Build a reusable image rendering helper with deliberate alt text, intrinsic dimensions and loading/fetch-priority rules.
- Audit every service page for H1/H2 structure and intent-focused copy.
- Strengthen FAQ/poradnik internal links into services and relevant realizations.
- Complete redirect inventory before any URL changes.
- Run PHP syntax checks and WordPress staging QA.
- Verify Yoast/no-Yoast output, forms/SMTP, mobile navigation, accessibility and console errors.
- Run Lighthouse/Core Web Vitals checks on representative templates.
- Only after staging verification: mark the draft PR ready and merge.

## Safety rule

Do not deploy this branch directly to production. The PR remains the review boundary.
