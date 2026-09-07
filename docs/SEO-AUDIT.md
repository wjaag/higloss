# HI-GLOSS DESIGN — SEO / UX / Frontend Audit

Date: 2026-09-08  
Baseline: `arena/01a068c1-higloss`  
Target: `redesign/seo-ux-2026`

## Executive summary

The current site already has a strong SEO foundation: dedicated service URLs, a portfolio CPT, useful process content, FAQ/guide content, local intent, descriptive image alt text in major templates, responsive layout and a clear quote funnel. The live site is currently indexed with pages for the home page, company, offer, portfolio, services and process. citeturn0search0turn0search1turn0search2turn0search4turn0search5turn0search6

The redesign should therefore **improve and consolidate**, not throw away the existing content architecture.

## Highest-priority findings

### P0 — SEO ownership / plugin safety

The theme contains custom sitemap and `robots.txt` logic, including a custom image sitemap and AI crawler directives. This is risky when Yoast SEO is installed because sitemap/robots ownership can become split between theme and plugin. The redesign standard is: **Yoast owns SEO metadata, robots and XML sitemaps; the theme owns semantic markup, links, images and performance.** The existing custom image-sitemap implementation is documented here as technical debt and should be removed or made explicitly opt-in only after checking the production plugin stack.

### P0 — Content architecture is better than the visual information architecture suggests

The site has valuable standalone URLs such as `/zmiana-koloru/`, `/ppf/`, `/reklama/`, `/detailing/`, `/proces/`, `/galeria/`, `/o-firmie/` and `/faq/`. These pages contain substantially useful search-intent content. citeturn0search1turn0search2turn0search5turn0search6turn0search7turn0search10

Keep these URLs unless a migration plan proves a change is beneficial. The home page should act as a strong commercial hub and distribute authority to these pages through contextual links.

### P1 — Local SEO needs stronger entity consistency

The live pages consistently mention Szczecin / Mierzyn and the physical address, phone and email. citeturn0search1turn0search3

Next iteration: standardise the business identity block across templates, strengthen location-specific service copy without stuffing, and ensure the Google Business Profile / NAP data matches production exactly. The theme should not invent or duplicate structured data if Yoast/plugin schema is already providing it.

### P1 — Image SEO is good in the visible templates but needs systemisation

The home page currently uses descriptive alt text for service images and an intentionally empty alt for the decorative/LCP hero. This is generally correct. fileciteturn8file0L2-L2

Refactor this into reusable image helpers so future templates cannot accidentally omit width/height, loading strategy or meaningful alt text.

### P1 — Front-end CSS is too globally aggressive

The base stylesheet applies `border-radius: 0 !important` to every element. fileciteturn5file0L2-L2

This can interfere with plugin UI, form controls and future components. Replace broad resets with scoped theme styles and preserve browser/plugin defaults where they are useful.

### P1 — Large template files need componentisation

`front-page.php` contains a large amount of presentation and copy in one template. The current design is functional but expensive to maintain. fileciteturn8file0L2-L2

Move repeatable service cards, proof blocks, portfolio cards, FAQ and CTA blocks into `template-parts/` and pass data into them. This also makes accessibility and SEO fixes reusable.

### P1 — Claims must be evidence-controlled

The site uses useful commercial proof points such as 500+ projects, 40+ DHL vehicles, 15 years and warranty durations. These are valuable but should be treated as claims requiring business verification before being repeated in metadata, schema or new copy. citeturn0search0turn0search1

## What is already working

- Strong service intent: colour change, PPF, fleet branding and detailing.
- Dedicated service URLs instead of forcing all SEO value into one page.
- Real portfolio content with vehicle, material, finish and scope details. citeturn0search4
- Useful process content that answers practical objections and supports conversion. citeturn0search6
- FAQ/guide layer with fresh informational topics. citeturn0search10
- Clear local positioning around Szczecin/Mierzyn.
- Existing accessibility work: skip link, focus states and reduced-motion support are present in the documented theme structure. fileciteturn7file0L2-L2

## Proposed information architecture

```text
/
├── oferta/
│   ├── zmiana-koloru/
│   ├── ppf/
│   ├── reklama/
│   └── detailing/
├── galeria/
│   └── realizacja/<slug>/
├── proces/
├── szkolenia/                 # retain if commercially active
├── faq/                       # informational hub
├── o-firmie/
└── kontakt/
```

The exact live URL set must be inventoried before any deletion/rename. Existing URLs are assets, not cleanup targets.

## Internal linking model

### Home

Link contextually to all four core services, portfolio, process, about and contact/quote.

### Service pages

Every service page should link to:

- 3–6 highly relevant portfolio projects;
- process page;
- relevant FAQ/guide articles;
- at least one adjacent service where genuinely useful;
- quote/contact CTA.

### Portfolio

Each realization should link back to its service and at least one related realization or guide.

### Guides / FAQ

Every guide should link to the commercial service it supports and a relevant realization. Avoid isolated blog posts.

## Keyword / intent map

| Intent | Primary page | Supporting content |
|---|---|---|
| oklejanie samochodów Szczecin | `/` / `/oferta/` | realizacje, proces |
| zmiana koloru auta Szczecin | `/zmiana-koloru/` | realizacje, pielęgnacja, FAQ |
| PPF Szczecin | `/ppf/` | PPF realizacje, FAQ |
| reklama na samochodach Szczecin | `/reklama/` | fleet realizacje, case studies |
| przyciemnianie szyb Szczecin | `/detailing/` | przepisy, realizacje |
| car wrapping / oklejanie auta | `/zmiana-koloru/` | poradniki |

Do not create near-duplicate landing pages solely for city/keyword variants without unique value.

## Content rewrite direction

Existing copy is generally strong, specific and commercially useful. citeturn0search5turn0search6

The rewrite should:

1. put the search intent in the first screen without sounding robotic;
2. state location naturally;
3. explain differentiators with evidence;
4. replace generic marketing phrases with measurable facts where possible;
5. use shorter paragraphs and stronger subheadings;
6. add concise FAQ answers where search intent is clear;
7. avoid unsupported superlatives such as "najlepszy".

## Technical SEO checklist

- [ ] Yoast confirmed as production SEO owner.
- [ ] No duplicate title/meta/canonical/robots/schema output from theme.
- [ ] XML sitemap ownership is singular.
- [ ] Robots.txt ownership is singular.
- [ ] Canonical URLs unchanged unless intentionally migrated.
- [ ] One logical H1 per indexable page template.
- [ ] Heading levels form a logical hierarchy.
- [ ] All important content is present in crawlable HTML.
- [ ] No critical navigation depends on JS.
- [ ] Images have intentional alt text.
- [ ] Decorative images use empty alt.
- [ ] LCP image is preloaded only on the actual LCP template.
- [ ] Below-fold images use lazy loading.
- [ ] Images have intrinsic dimensions.
- [ ] No unnecessary third-party scripts.
- [ ] CSS/JS are loaded only where needed.
- [ ] 404 template is useful and crawl-safe.
- [ ] Redirect map exists before any URL changes.
- [ ] Search Console / analytics verification is done after deployment.

## Performance direction

The current theme already attempts asynchronous Google Fonts, LCP preloading and removal of unused WordPress assets. fileciteturn6file0L2-L2

The redesign should improve this by:

- preferring local/self-hosted fonts if licensing and operations permit;
- reducing font weights;
- removing redundant CSS layers;
- scoping component styles;
- avoiding a fixed background image on the entire document where it harms mobile performance;
- keeping JS progressive and deferred;
- loading gallery/lightbox functionality only when required;
- preserving explicit image dimensions to prevent CLS.

## Plugin compatibility policy

Do not dequeue plugin assets globally. Any dequeue must be conditional on a known handle and tested on the relevant template.

Do not override Yoast output with theme hooks unless the change is explicitly documented and verified against the installed Yoast version.

Do not implement duplicate breadcrumbs, schema, XML sitemaps, Open Graph or canonical tags in the theme when the SEO plugin already provides them.

## Next implementation milestones

1. **Foundation:** componentise templates, tighten CSS scope, establish image helper and semantic primitives.
2. **SEO safety:** remove theme/plugin responsibility overlap; verify Yoast compatibility.
3. **Service hubs:** rewrite headings/intros/CTAs and internal links for four core services.
4. **Portfolio:** improve CPT templates, taxonomy architecture, metadata and related-project links.
5. **Content graph:** connect guides/FAQ ↔ services ↔ realizations.
6. **Performance:** font, image, CSS and JS audit plus Core Web Vitals test.
7. **QA:** desktop/mobile/accessibility/crawl/redirect regression.
8. **Deployment:** draft PR → review → staging → production → Search Console validation.
