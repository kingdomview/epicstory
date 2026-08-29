# HeroWithin Block Child Theme — v0.1.5 Draft

## Status
Build-phase candidate for the current live-site build. Reversible and still governed by owner approval/canon rules.

## Parent
Twenty Twenty-Five (`twentytwentyfive`).

## Gate 3 purpose
This version preserves the fuller v0.1.4 homepage/template/pattern package and merges selected v0.2.0 improvements: font loading, editor styles, accessibility focus states, mobile navigation polish, and wider/equal-height homepage cards.


### v0.1.5 changes
- Preserves the v0.1.4 homepage features, templates, patterns, hero asset, and governed header/footer parts.
- Adds selected v0.2.0 front-end polish without replacing the v0.1.4 architecture.
- Fixes the homepage card issue shown in review screenshots: orientation cards, becoming cards, and doorway cards now use wider containers, equal-height layouts, better tablet breakpoints, and less cramped heading behavior.
- Adds explicit front-end/editor font enqueue for Libre Caslon Text and Work Sans.
- Adds title-tag, responsive embeds, editor-styles, and clearer keyboard focus outlines.

### Includes
- Dedicated governed HeroWithin header/footer template-part slugs so existing Site Editor overrides of generic `header`/`footer` do not silently supersede the child-theme package.
- Approved six-door navigation shell: Explore | Become | Truth | Stories | Practice | Brotherhood.
- Seven-part homepage structure: cinematic hero; Where Are You Today?; Trail Markers seeker door; Identity → Formation → Maturity; Truth/Stories/Practice/Brotherhood; Three-View Formation Matrix; closing Brotherhood invitation.
- Homepage hero uses the owner-supplied clean, text-free HeroWithin image as the current approved website implementation asset, with accessible live HTML copy layered above it. The broader visual canon remains replaceable when the parallel visual-standard work is finalized.
- Central responsive CSS for homepage imagery, cards, and formation pathways.
- Existing Formation Matrix Core v0.7.2, WP Grid Builder, ACF, and WordPress content remain outside the theme's authority.

## Governance boundaries
- Airtable and approved governed source documents remain authoritative. WordPress is not canon.
- Brand-sensitive tokens in `theme.json` remain provisional until parallel HeroWithin visual-identity work is reconciled.
- Do not generate theology because labels intersect.
- Do not publish or deploy this package to Production without explicit owner approval.
- Review/Pressable staging architecture remains deferred.

## Known expected conditions
- Several approved navigation destination pages do not exist yet, so some links may 404 on the testing clone until Gate 4/content implementation creates those Draft pages.
- The homepage now uses the clean image-only master supplied by the owner. Hero typography, overlay strength, and Identity → Formation → Maturity proportions were refined for whole-page composition and mobile behavior.


## v0.1.7-draft QA polish

- Moves homepage hero copy into a right-side reading zone so it no longer covers the men on the left.
- Adds stronger dark gradient and text shadow so all white hero text remains readable.
- Reduces oversized card display text so it fits inside cards.
- Widens and equalizes the Where are you today, Becoming, and Four ways cards.
- Switches doorway cards to two columns at medium widths so labels no longer collide or overflow.


## v0.1.7 draft QA changes

- Widened the hero text reading zone so “Building Brothers” and “Building Legacy” stay on their own lines on desktop.
- Forced the orientation, becoming, doorway, and matrix card grids to use wide alignment inside constrained WordPress groups.
- Reduced and stabilized display heading sizes so large words no longer crop or escape cards.
- Restored the larger-map cards to a three-across desktop layout.
- Kept mobile fallbacks stacked and readable.
