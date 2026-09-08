# HI-GLOSS DESIGN — UI/UX REDESIGN

## CURRENT STATE
- Stage: 0 — baseline audit + static design workspace bootstrap
- Production/reference branch: `arena/01a068c1-higloss`
- Work branch: `arena/ui-redesign-clean`
- Rule: production branch is read-only for this redesign

## OBJECTIVE
Rebuild the visual and UX layer as a static HTML/CSS/JS prototype first. After approval, port the approved markup back into the WordPress theme while preserving the existing WordPress engine, URLs, content, CPT, ACF data, forms, SEO and accessibility behavior.

## BASELINE
The production theme is a one-page landing experience with legacy/subpage routes retained. The landing currently contains hero, services, studio/about, process, portfolio, FAQ, quote/contact and footer. The theme also has a `realizacje` CPT and taxonomy `kategoria_realizacji`. See `README.md`, `front-page.php`, `header.php`, `footer.php` and `functions.php` in the reference branch.

## DESIGN-FIRST PIPELINE
1. Audit production templates, assets and dynamic data.
2. Extract presentation into `ui-redesign/`.
3. Redesign UX/UI without changing WordPress data structures.
4. Validate desktop/mobile/accessibility and interaction states.
5. User approval checkpoint: **"Tak, to jest to."**
6. Convert static components into PHP/template-parts.
7. Reconnect WP_Query, ACF, CPT, media, forms, SEO/schema and menus.
8. Regression-test old URLs and dynamic content.

## STATIC PROTOTYPE RULES
- Static pages are design artifacts, not replacement WordPress templates.
- Use deterministic placeholders for dynamic data.
- Keep semantic HTML and accessible states from the beginning.
- Do not invent content where production content is available.
- Preserve existing brand direction while materially improving hierarchy, spacing, composition and interaction quality.

## PLACEHOLDER CONTRACT
- `{{site_url}}`
- `{{project_title}}`
- `{{project_url}}`
- `{{project_image}}`
- `{{project_category}}`
- `{{project_excerpt}}`
- `{{gallery[]}}`
- `{{service_name}}`
- `{{acf_field_name}}`

## COMPONENT INVENTORY — INITIAL
- Header / desktop navigation
- Mobile navigation
- Skip link
- Hero
- Proof/stat strip
- Material/logo strip
- Service card
- About/feature split
- Process steps
- Portfolio/project card
- FAQ accordion
- Quote/contact block
- Footer
- Mobile quick actions
- Cookie consent panel

## WORDPRESS RE-INTEGRATION MAP
| Static component | WordPress destination |
|---|---|
| Header | `header.php` |
| Footer | `footer.php` |
| Landing sections | `front-page.php` / `template-parts/` |
| Project card | `template-parts/` + `WP_Query` |
| Project detail | `single-realizacje.php` |
| Portfolio archive | `archive-realizacje.php` |
| Service pages | existing service templates/template-parts |
| Site assets | `assets/` + enqueue in `functions.php` |
| Quote form | existing AJAX endpoint / nonce / honeypot |

## EXISTING FUNCTIONALITY TO PRESERVE
- CPT `realizacje`
- taxonomy `kategoria_realizacji`
- ACF/specification fields
- AJAX quote form and security
- SEO compatibility and schema handling
- responsive/accessibility support
- social links
- mobile call/quote actions
- existing public URLs and SEO content

## ACCEPTANCE GATES
### Visual
- Clear hierarchy at first viewport
- Premium automotive/studio feel
- Consistent grid and spacing system
- Strong desktop composition
- Deliberate mobile composition, not merely collapsed desktop
- Complete interaction states

### Technical
- No production branch modifications
- Semantic HTML
- Keyboard navigation
- visible focus states
- reduced-motion support
- no layout shift caused by missing image dimensions
- deterministic static-to-PHP mapping

## CHANGELOG
### 2026-09-08
- Created isolated work branch `arena/ui-redesign-clean` from production reference.
- Created this redesign documentation baseline.
- Confirmed production architecture includes substantial PHP/business logic, so redesign will be presentation-first rather than a blind PHP-to-HTML conversion.
- Started static workspace bootstrap.

## NEXT
1. Complete static landing prototype.
2. Add representative internal pages for portfolio/detail/service/contact.
3. Review the prototype as a visual system before WordPress conversion.
