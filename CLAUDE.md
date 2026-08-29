# CLAUDE.md — HeroWithin Website (WordPress)

Navigation and enforcement layer for Claude Code sessions on the HeroWithin **website**.
This is the public formation site at discoverherowithin.com (Pressable, Twenty Twenty-Five
block child theme). It is a **separate repository** from the mobile app
(`kingdomview/herowithin-app`); that repo's AI/backend Control Plan governance does **not**
apply here. This site has no AI-provider calls in the theme.

## What this project is

A Christ-centered men's formation website by KingdomView Media, Inc. The visitor experience
is "a map of becoming": simple human questions (Where am I? Who am I becoming? What am I
struggling with? What's my next faithful step?) sitting on top of a deeper governed formation
architecture the visitor never has to learn first.

## Precedence & authority

- **Figma is the design source of truth** (shared with the mobile app):
  `29H2fNkgPiP6Sn9pvREEvu`. The palette and type ramp in `themes/herowithin/theme.json`
  are transcribed from it and must stay in sync.
- **WordPress is not canon.** Content authority is approved Google Docs, Airtable, and
  HeroWithin governance records. If a template surfaces a content discrepancy, surface it —
  do not silently resolve it.
- **Do not invent theology or content.** Flag gaps; don't fill them. A Matrix coordinate or
  intersection does not authorize inventing content.

## Autonomy (build mode)

The owner wants autonomous, reversible development. Proceed without asking on: CSS, layout,
responsive fixes, spacing/elevation/iconography decisions, accessibility, refactors,
performance, template repair, QA. Use **Inspect → Improve → Verify → Report**.

**Stop and ask** only for genuinely: canonical, major-IA, strategic-UX, destructive,
hard-to-reverse-infrastructure, publication/governance, or security-sensitive decisions.

## Non-negotiables

1. Preserve existing WordPress content/data. Do not delete or regenerate the 144 Formation
   Coordinates, Trail Markers, pages, taxonomies, IDs, or slugs.
2. Keep Matrix/domain logic in the **Formation Matrix Core plugin**, never in the theme.
3. Maintain the six-door IA: **Explore | Become | Truth | Stories | Practice | Brotherhood**.
4. Preserve **"Not Sure What You Believe?"** and **Formation Matrix** as special entry paths.
5. Preserve **Identity → Formation → Maturity**.
6. Mobile-first; accessible (visible keyboard focus); no horizontal overflow.
7. Keep normal WordPress comments off.
8. Homepage and ordinary pages must be **editable in WordPress** — no template-injected page
   content, no re-enqueuing the full frontend CSS into the block editor.
9. Never commit secrets (Pressable, OpenAI/AI Engine bearer tokens, WordPress creds).
10. Before declaring the rebuild done: owner opens Home, edits, saves, reopens, and sees the
    change — same for an ordinary page and a Trail Marker.

## Design system

Transcribed into `themes/herowithin/theme.json` from the Figma canon. Colors: Charcoal
`#262220`, Forge Black `#171310`, Forged Gold `#EBAD3F`, Warm White `#F7F2E7`, and the full
neutral/emotional/semantic palette. Type: Playfair Display (display/headings), Outfit
(section/scripture), Inter (body/UI). Spacing, elevation, and iconography were undefined in
Figma and are proposed here (spacing scale in `theme.json`; shadow presets `sm/md/lg/ember`)
for the owner to react to, not pre-approve.

Do not hand-roll hex or font values in CSS — consume the `--wp--preset--*` custom properties
that `theme.json` emits.

## The editability problem (root of this rebuild)

Two confirmed problems in v0.1.7 (see `docs/chatgpt-handoff.md`, `docs/editor-crash-diagnosis.md`):
1. `front-page.html` injected patterns instead of rendering page content → homepage not
   editable. **Fixed** here: `front-page.html` renders `wp:post-content`; homepage ships as
   insertable patterns (`docs/reattach-content.md`).
2. Editor save crashes on ordinary pages and Trail Markers — root cause unconfirmed. A
   documented lead (full frontend CSS enqueued into Gutenberg) is **avoided** here, but the
   crash must still be reproduced/diagnosed on Staging before calling the rebuild done.

## Relationship to the mobile app

The site will ship inside a WebView shell for an iPhone App Store MVP. Keep the content
model (CPTs, taxonomies, field names) clean and predictable so a later migration to a shared
Supabase backend is a data-mapping exercise, not a redesign. Do not build a WordPress API
layer for that yet.

## Session discipline

See `docs/session-discipline.md`. Every session: `git status` → `git pull` → work →
`git status` → commit → `git push`. Staging reflects the last pushed commit. Pull any direct
wp-admin edits back into Git before the next code session. Production only from the production
branch after owner + Claude review — never a direct push from a feature branch.
