# Decision log — HeroWithin website rebuild

Newest first. Records reversible-but-notable choices made during the clean rebuild, so a
later session (or the owner) can see the reasoning without re-deriving it.

## 2026-08-25 — Initial clean-rebuild session

- **Separate repository.** The website lives in its own repo (`herowithin-web`), not inside
  the mobile app repo. WordPress/PHP is a different toolchain from the RN/Supabase app, and
  the app's AI/backend Control Plan governance does not apply to a formation website. Owner
  chose this over a monorepo subfolder.
- **Design canon adopted now.** `theme.json` uses the full Figma HeroWithin palette and type
  ramp (Charcoal/Forged-Gold; Playfair Display / Outfit / Inter), replacing v0.1.7's
  provisional Ink/Paper/Forest + Libre Caslon/Work Sans. This is the intended visual shift to
  the darker charcoal/gold system, confirmed in the build brief.
- **Editable homepage.** `front-page.html` renders `wp:post-content`; the homepage is shipped
  as insertable patterns plus a composite. Replaces v0.1.7's template-injected patterns.
- **Separate minimal editor stylesheet.** `editor.css` (fonts + light typography) is the only
  thing loaded into Gutenberg; the full frontend CSS is enqueued on `wp_enqueue_scripts` only.
  Directly avoids the documented editor-crash suspect.
- **Spacing / elevation / iconography proposed, not gated.** Spacing scale kept from the
  proven HW 1–8 values; shadow presets `sm/md/lg/ember` added; icons intentionally not
  invented (kept to text/links). Owner to react afterward, per the "minimize approval gates"
  direction.
- **Seven `hw-*` custom templates kept but leaned out.** Each shares a frame and is
  differentiated by one pattern (formation hero, next step, related, campfire, etc.) rather
  than being seven near-identical files.
- **v0.1.7 imported as read-only reference** under `reference/herowithin-v0.1.7-draft/`
  (rather than only as a Git tag) so it stays browsable.

### Deferred (need live Pressable/WordPress access)

Reproducing the editor crash, auditing Site Editor DB overrides + Custom CSS post 354,
deploying to Staging, reattaching content (Home/Trail Markers/Coordinates), visual QA, and
the owner edit→save→reopen acceptance test. Tracked in `README.md` and the docs.

### Open questions for the owner (non-blocking)

- Confirm current page IDs (Home 356, Explore 315, Matrix 162) — re-audit on the live site.
- Trail Markers: dedicated CPT or ordinary pages? Determines migration handling.
- Self-host the three Google Fonts for performance/privacy? (currently remote)
