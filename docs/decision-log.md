# Decision log — The Epic Story of God website rebuild

Newest first. Records reversible-but-notable choices made during the clean rebuild, so a
later session (or the owner) can see the reasoning without re-deriving it.

## 2026-09-08 — Epic Story content model: scope and build approach confirmed

Owner decision, made in a planning session with Claude (chat). See
`docs/epic-story-content-model-handoff.md` for the full content model and next steps.

- **Naming confirmed:** project name "The Epic Story of God"; repo `kingdomview/epicstory`;
  domain TheEpicStoryOfGod.com. (Consistent with the rename below — restated here because it
  was independently re-confirmed by the owner.)
- **Deploy approach:** deploy the current theme code as-is to **Staging** (not Production) to
  see its current state, then iterate from there — rather than trying to perfect it before
  first deploy. Production remains gated behind the existing rule (owner + Claude review,
  production branch only).
- **Content model source:** SRC-106 ("The Epic Story of God Website Vision, Purpose &
  Requirements v1.0", Owner Approved) is adopted as the content model for the new
  Scripture → Research → Theology → Epic Story Chapter → Formation Theology Edition →
  Everyday-Man Edition lineage. This is additive to the existing site (six-door IA, Formation
  Matrix, Trail Markers) — it does not replace or restructure them.
- **Build sequencing:** vertical-slice proof of concept first — one full chapter, fully
  cross-linked in both directions, before populating the rest.
- **View scope:** of the five planned views (Story, Chapter, Scripture, Theology, Research),
  build only **Story View** and **Chapter View** for now. The other three are deferred, not
  cancelled.
- **Relationship scope:** build only a few bidirectional relationships to start (taxonomies
  may help this scale), to test whether the approach holds up before committing further.
  **A deeper planning/scaling review is scheduled at the end of Stage 2, before Stage 3
  begins** — do not proceed to populating the remaining 11 chapters until that review happens.
- **Formation Matrix Core: paused for this work.** Not being actively built, extended, or
  redeployed as part of this effort. Considered optional by the owner. Existing non-negotiable
  (preserve the 144 Coordinates, Trail Markers, IDs, slugs) still applies — "paused" means no
  new work on it, not removal. Open questions logged below for a future decision:
  - Is the live Formation Matrix Core plugin stable/final, or does it also need a rebuild
    (like the theme did) due to technical debt from the earlier ChatGPT-built version?
  - Does the SRC-106 lineage connect conceptually to the Formation Matrix (144 Coordinates)
    at all — e.g., do coordinates map to Theological Conclusions or Epic Story Chapters — or
    are they entirely separate systems on the same site?
  - Should the plugin's internal name eventually be updated to match the new branding, or
    does it stay historical/unaffected, the way the app repo does?
- **Airtable / Google Docs pipeline confirmed as-is:** Airtable remains the trigger/source of
  truth for structure; Google Docs become read-only archives after a one-time import; all
  further editing happens in WordPress only. Field-level mapping to the new seven-CPT model is
  a Stage 1 implementation detail, not a re-decision.

## 2026-09-08 — Project rename: HeroWithin → The Epic Story of God

Owner decision. The website is rebranded from "HeroWithin" to **The Epic Story of God**.

- **Full project name:** The Epic Story of God
- **Repo:** `kingdomview/epicstory` (was `herowithin-web`)
- **Public URL:** theepicstoryofgod.com (was discoverherowithin.com)
- **Visitor brand:** "HeroWithin" wordmark/hero/copy → "The Epic Story of God" (owner approved full public rebrand).
- **Theme slug:** `herowithin` → `epicstory` (theme folder, text-domain, `hw-`→`es-` CSS classes, `herowithin/*`→`epicstory/*` pattern slugs, `es-*` custom templates). Owner approved the fuller internal rename.

Deliberately NOT changed:
- **The mobile app repo `kingdomview/herowithin-app` stays HeroWithin** — it is a separate product with its own locked canon. This rename is website-only unless the owner says otherwise.
- **The `hw_coordinate` post type** stays — it is owned by the Formation Matrix plugin, not the theme.
- **The live Formation Matrix plugin is still named "HeroWithin Formation Matrix Core"** on the site. Renaming that plugin (and its handle) is a separate live-site task, not done here.
- **`reference/herowithin-v0.1.7-draft/`** and the two imported source docs (`build-brief.md`, `chatgpt-handoff.md`) keep their original wording as historical records; the source docs carry a naming-note banner instead.

Owner renamed the GitHub repo `herowithin-web` → `epicstory` (done 2026-09-08); GitHub auto-redirects the old URL, so existing clones keep working. (This build session's git proxy still authorizes the repo under its original name, so pushes here go through the redirecting old URL; a fresh clone of `kingdomview/epicstory` works normally.)

## 2026-08-25 — Initial clean-rebuild session

- **Separate repository.** The website lives in its own repo (`epicstory`), not inside
  the mobile app repo. WordPress/PHP is a different toolchain from the RN/Supabase app, and
  the app's AI/backend Control Plan governance does not apply to a formation website. Owner
  chose this over a monorepo subfolder.
- **Design canon adopted now.** `theme.json` uses the full Figma Epic Story of God palette and type
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
- **Seven `es-*` custom templates kept but leaned out.** Each shares a frame and is
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
