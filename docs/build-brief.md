> **Naming note (2026-09-08):** This document predates the project rename and refers throughout to **"HeroWithin"** and **discoverherowithin.com**. The project is now **The Epic Story of God** (repo `kingdomview/epicstory`, site **theepicstoryofgod.com**), and the WordPress theme slug is `epicstory`. This file is kept verbatim as a historical source record — read the names accordingly. See `decision-log.md` for the rename.

# HeroWithin WordPress Rebuild — Build Brief for Claude Code

Prepared by Claude (chat) from the ChatGPT handoff document + owner Q&A + Figma design canon.
Date: August 25, 2026

---

## 1. What this project is

HeroWithin is a Christian men's formation website (discoverherowithin.com), hosted on Pressable,
currently running a ChatGPT-built child theme (v0.1.7-draft) on the Twenty Twenty-Five parent theme.
The owner can no longer reliably edit pages — the block editor crashes on save, including on the
homepage and on Trail Marker pages. The homepage's visible content also isn't reachable in the normal
page editor at all (it's rendered from hardcoded theme patterns, not `post_content`).

**Goal of this phase:** rebuild the theme cleanly — mobile-first, Git-based, editable by both the
owner (via wp-admin) and Claude Code (via Git) without either side breaking the other's changes —
while preserving the site's existing content and data.

The site will also be wrapped in a native WebView shell for an iPhone App Store MVP submission.
A separate React Native/Supabase app is in early development and will eventually share a backend
and content model with this site — but for now, WordPress is the sole data source. Build with that
future migration in mind (clean, well-named content model) without over-engineering for it now.

**No timeline pressure.** Priority is quality and long-term-correct architecture over speed.

---

## 2. Design System — CANONICAL (use this, not theme.json)

The existing theme's `theme.json` palette (Ink/Paper/Stone/Forest/Ember/Brass/Slate) and fonts
(Libre Caslon Text/Work Sans) are **provisional and superseded**. The actual canon lives in Figma
and is shared with the mobile app — use it as the single source of truth for both.

Figma file: https://www.figma.com/design/29H2fNkgPiP6Sn9pvREEvu/HeroWithin-MVP-%E2%80%94-Onboarding---Day-1-Journey

### Colors

**Primary**
- Charcoal `#262220`
- Midnight `#1B2028`
- Forge Black `#171310`

**Secondary**
- Forged Gold `#EBAD3F`
- Bronze `#C68A3A`
- Warm Iron `#6E5844`

**Neutrals**
- Warm White `#F7F2E7`
- Cloud `#EFE8DB`
- Mist `#D8D0C2`
- Stone `#B8AC9C`
- Soft Stone `#9C9081`

**Emotional accents**
- Ember Orange `#E67E33`
- Fire Gold `#F5C049`
- Soft Dawn Cream `#F2E3C4`
- Forest Green `#4E6B4A`
- Mountain Blue-Gray `#5D6B7A`
- Fog Gray `#8E9299`
- Oak Bark Brown `#5C4632`
- Burnt Umber `#7A4A2B`
- Deep Warm Brown `#4A382A`
- Slate Gray `#4A4E55`

**Semantic**
- Success `#6E8B62`
- Warning `#C2963F`
- Error `#A85B4A`
- Information `#6B7E8F`

### Typography

Fonts: **Playfair Display** (display/headings), **Outfit** (section headers, scripture), **Inter** (body, buttons, labels, captions, quotes).

| Role | Font | Size/Line-height | Notes |
|---|---|---|---|
| Display | Playfair Display SemiBold | 34/41 | |
| Heading | Playfair Display SemiBold | 28/34 | |
| Section | Outfit Medium | 22/28 | |
| Body | Inter Regular | 17/24 | |
| Button | Inter SemiBold | 17/22 | |
| Scripture | Outfit Regular | 19/30, 0.5px tracking | |
| Quote | Inter Italic | 19/28 | |
| Caption | Inter Regular | 13/18 | |
| Label | Inter Medium | 11/14, 1.2px tracking, uppercase | |

### Components (Figma "Components — CANON")

Figma defines: BTN Primary, BTN Secondary, CARD Panel, LIST Option Row, PROGRESS Segments, NAV Bottom.
These are mobile-app components. **NAV Bottom is mobile-only** — on desktop, translate the same
color/type tokens into a header nav rather than reusing the bottom-nav component directly. Buttons,
cards, and list rows should translate directly to WordPress block styles.

**Confirmed canon.** Use the Figma colors and typography above as the definitive system — this
supersedes the current theme.json/herowithin.css values entirely, including the visual shift that
implies (darker charcoal/gold palette replacing the current warm paper/forest tones).

**Spacing, elevation, and iconography are not yet defined in Figma.** Don't wait on these — Claude
Code should design a spacing scale, shadow/elevation system, and icon approach that fits the
established color/type canon and works well for both desktop and mobile. Treat this as a proposal
the owner will react to, not a decision requiring upfront sign-off (see Section 6 on approval gates).

---

## 3. Content & Data Strategy

- **Staging already exists as a clone of production.** Do not do a blank WordPress install.
  Rebuild the *theme* on top of the existing Staging clone, preserving its database content.
- **Content preservation is the higher priority than preserving exact layout/structure.** Layout,
  templates, and CSS can change freely to fix the editability problem. Content (144 Formation
  Coordinates, Trail Markers, pages, taxonomies, IDs, slugs) must be preserved.
- Full filesystem and database backups exist and are available on request — use as a safety net,
  not as the primary content source.
- **Content source of truth:** Google Docs/Google Drive is the authoritative source for most
  content; a small amount also lives in Airtable. The content currently on the WordPress site was
  pasted in within the last two days directly from Google Docs — treat it as provisional/unreviewed
  rather than final-approved copy. Per the original ChatGPT handoff: **WordPress is not canon.**
  If rebuilt templates surface a content discrepancy against what's in Google Docs, surface it —
  don't silently resolve it.

---

## 4. Relationship to the Mobile App (React Native/Supabase)

- The site will ship inside a **WebView shell** for App Store submission — no native content
  rendering needed for this MVP.
- The mobile app is in very early development (3 screens, no content yet) and does not need live
  API access to WordPress right now.
- **For the MVP, WordPress is the single source of content.** Design the content model (custom post
  types, taxonomies, field names) cleanly and predictably now, so that migrating to a shared
  Supabase backend later is a data-mapping exercise, not a redesign. Don't build an API layer for
  this yet — just don't paint the content model into a WordPress-only corner.

---

## 5. The Editability Problem (root cause + fix direction)

Two confirmed problems, likely related but not proven identical:

1. **Homepage content isn't in the normal editor** — `front-page.html` renders the homepage
   entirely from hardcoded theme patterns (`wp:pattern` blocks), never touching the Home page's
   actual `post_content`. Fix: homepage sections should be built from editable blocks/patterns
   *inserted into* real page content, not injected by the template file itself.
2. **Editor/save crashes on ordinary pages, including Trail Markers** — root cause unconfirmed.
   One documented lead: the same asset-enqueue function that loads fonts + full frontend CSS onto
   the public site is also hooked into `enqueue_block_editor_assets`, loading the entire ~27KB
   frontend stylesheet into Gutenberg. Worth isolating early, but not confirmed as the cause.

Given the decision to rebuild cleanly rather than patch v0.1.7, the new theme should avoid both
patterns from the start: no template-injected homepage content, and a minimal, separate editor
stylesheet rather than reusing the full frontend CSS in the block editor.

---

## 6. Non-Negotiables (carried forward from original project governance)

- Preserve existing WordPress content/data; do not delete or regenerate the 144 Formation
  Coordinates.
- Do not invent theology or content — HeroWithin content is governed; flag gaps, don't fill them.
- Maintain the six-door IA: **Explore | Become | Truth | Stories | Practice | Brotherhood**
- Preserve "Not Sure What You Believe?" and "Formation Matrix" as special entry paths.
- Preserve the Identity → Formation → Maturity framework.
- Keep Matrix/domain logic in the separate Formation Matrix plugin, not the theme.
- Mobile-first, accessible (visible keyboard focus states), no horizontal overflow.
- Ordinary reversible development work (CSS, layout, responsive fixes, refactors) can proceed
  without stopping to ask — reserve owner check-ins for architectural, canonical, destructive, or
  hard-to-reverse decisions.
- **Minimize approval gates.** The owner wants Claude Code to build what it judges best for desktop
  and mobile first — including undefined design decisions like spacing, elevation, and iconography
  — and react afterward rather than approve upfront. Default to building and shipping to Staging,
  not pausing to ask "does this look right?" Course-correct based on owner feedback after the fact,
  not before. This applies broadly, not just to visual polish — reserve genuine stop-and-ask moments
  for the destructive/canonical/architectural category above, not for ordinary design judgment calls.
- Before declaring the rebuild done: owner must be able to open Home, edit it, save it, reopen it
  and see the change — same for an ordinary page and a Trail Marker.

---

## 7. Source Material Available

- ChatGPT's exported theme (v0.1.7-draft) as a ZIP — owner can supply directly, or Claude Code can
  pull the active theme from the live/staging WordPress install.
- The HeroWithin Formation Matrix Core plugin (v0.7.2) — same sourcing options (ZIP from owner, or
  pulled live). This plugin is separate from the theme and must be preserved/audited independently;
  it owns the `hw_coordinate` CPT, the 144 Formation Coordinates, and Matrix rendering logic.
- Full filesystem + database backups of the live site — available on request.
- The full ChatGPT handoff document (technical detail on templates, plugins, CPTs, taxonomies,
  broken areas, and CSS behaviors worth preserving conceptually) — should be loaded into the
  project's Git repo (e.g. `/docs/chatgpt-handoff.md`) as a reference, not treated as spec to copy verbatim.

---

## 8. Process & Session Discipline (applies to every Claude Code session, yours or Dave's)

**Session start (every time, either machine):**
1. `git status` — confirm no uncommitted local changes are lurking.
2. `git pull` — get latest from the repo.
3. If step 1 shows unpushed local changes, resolve before starting new work.

**Session end (every time, before switching machines):**
4. `git status`, commit anything meaningful (even WIP), `git push`.

**Pressable Staging discipline:**
5. Staging always reflects the last pushed commit — treat it as downstream of Git, not ahead of it.
6. If either the owner or Claude Code edits directly in wp-admin on Staging, pull that change back
   into Git before the next code session starts (via SFTP diff or Pressable's Git export).
7. Before pushing repo changes to Staging, check Pressable's dashboard for uncommitted wp-admin
   edits first.

**Production push gate:**
8. Only from the production branch, only after both owner and Claude Code have reviewed Staging,
   never a direct push from a feature branch.

---

## 9. Recommended First Claude Code Session — Task List

1. Set up Git repo; import current theme + Matrix plugin as a historical/reference tag (do not
   commit credentials/tokens — see handoff doc's integration list for what to keep out).
2. Audit the current Staging clone: WordPress/parent theme version, active plugins, CPTs,
   taxonomies, template-part database overrides (Site Editor may store overrides that supersede
   theme files), and the historical Custom CSS post (ID 354) tied to Twenty Twenty-Five theme mods.
3. Reproduce the editor-save crash on Staging with devtools open; capture console/network/PHP logs
   before changing anything, so the cause is documented even though we're not gating the rebuild on
   fixing it first.
4. Build the new child theme structure: `theme.json` from the Figma canon above, minimal
   `functions.php`, editable homepage architecture (real page content instead of template-injected
   patterns), separate/minimal block-editor stylesheet.
5. Reattach existing content (Home, Explore Formation, Formation Matrix, Trail Markers, Formation
   Coordinates) to the new templates without recreating it.
6. Visual QA against the current approved homepage direction at desktop/laptop/tablet/mobile widths.
7. Verify editing: owner opens Home, edits, saves, reopens and sees the change; same for an ordinary
   page and a Trail Marker. This is the release-acceptance bar for this phase.

---

*This brief should live in the project repo (e.g. `/docs/build-brief.md`) alongside the full
ChatGPT handoff document, and inform the project's `CLAUDE.md`.*
