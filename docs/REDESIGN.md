# HI-GLOSS DESIGN — UI/UX REDESIGN

## CURRENT STATE
- Stage: 1 — static visual system + landing + portfolio/detail prototypes
- Production/reference branch: `arena/01a068c1-higloss`
- Work branch: `arena/ui-redesign-clean`
- Rule: production branch is read-only for this redesign
- Rule: no additional work branches will be created

## OBJECTIVE
Rebuild the visual and UX layer as a static HTML/CSS/JS prototype first. After approval, port the approved markup back into the WordPress theme while preserving the existing WordPress engine, URLs, content, CPT, ACF data, forms, SEO and accessibility behavior.

## COMPLETED
- Audited the production landing architecture and confirmed it contains substantial WordPress/business logic.
- Bootstrapped `ui-redesign/index.html` as the primary landing prototype.
- Added a dedicated design-system stylesheet with typography, grid, spacing, responsive behavior, header, hero, service cards, process, portfolio, FAQ, quote and footer patterns.
- Added `ui-redesign/realizacje.html` as the static CPT archive/portfolio direction.
- Added `ui-redesign/realizacja.html` as the static single-project/case-study direction.
- Added `ui-redesign/css/subpages.css` for portfolio/detail layouts.

## DESIGN DIRECTION
- Dark automotive-studio visual language retained, but hierarchy is rebuilt rather than merely recolored.
- Typography: Montserrat for display/headings, Manrope for UI/body copy.
- Accent: HI-GLOSS cyan/blue used selectively for actions, numbering and emphasis.
- Large editorial typography, asymmetric grids, deliberate whitespace and image-led composition are the primary premium cues.
- Cards use restrained borders and motion instead of excessive rounded containers.
- Mobile is treated as a dedicated composition with simplified navigation and stacked content.

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

## COMPONENT INVENTORY
### Shared
- Header / desktop navigation
- Mobile navigation
- Skip link
- Buttons / CTA
- Footer
- Mobile quick actions
- Reveal / hover states

### Landing
- Hero
- Proof/stat strip
- Material/logo strip
- Service cards
- About/studio split
- Process steps
- Portfolio preview
- FAQ accordion
- Quote/contact block

### Portfolio
- Portfolio hero
- Category filter UI
- Project card/grid
- Project CTA

### Project detail
- Project hero
- Case-study copy
- Specification card
- Gallery
- Project CTA

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
- ACF/specification fields and existing project metadata
- Before/after project imagery where configured
- AJAX quote form and security
- SEO compatibility and schema handling
- responsive/accessibility support
- social links
- mobile call/quote actions
- existing public URLs and SEO content
- existing article/FAQ routes

## ACCEPTANCE GATES
### Visual
- Clear hierarchy at first viewport
- Premium automotive/studio feel
- Consistent grid and spacing system
- Strong desktop composition
- Deliberate mobile composition, not merely collapsed desktop
- Complete hover/focus/expanded states
- Real content and imagery used wherever production assets are known

### Technical
- No production branch modifications
- Semantic HTML
- Keyboard navigation
- Visible focus states
- Reduced-motion support
- No layout shift caused by missing image dimensions
- Deterministic static-to-PHP mapping
- No loss of existing URLs or dynamic data

## CHANGELOG
### 2026-09-08
- Created isolated work branch `arena/ui-redesign-clean` from production reference.
- Created redesign documentation baseline.
- Confirmed production architecture includes substantial PHP/business logic, so redesign is presentation-first rather than a blind PHP-to-HTML conversion.
- Added landing static prototype.
- Added static portfolio archive prototype and project-detail/case-study prototype.
- Added dedicated subpage stylesheet.

## NEXT
1. Finish and visually polish the landing prototype against the real production asset inventory.
2. Add static service and contact templates based on the actual WordPress templates.
3. Add realistic portfolio filtering and gallery/lightbox interaction states.
4. Perform desktop + tablet + mobile pass and accessibility pass.
5. User approval checkpoint: **"Tak, to jest to."**
6. Only after approval: convert the approved static system back into PHP/template-parts and reconnect WordPress data.
