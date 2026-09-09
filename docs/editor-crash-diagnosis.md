# Editor save-crash — diagnosis plan

**Status:** not yet reproduced. Requires live Pressable/Staging access this build session did
not have. Do this before declaring the rebuild done (it's an acceptance criterion), but the
rebuild was intentionally *not* gated on fixing it first.

## The two confirmed problems

1. **Homepage content isn't in the editor.** Root cause is understood and fixed in v2.0.0:
   `v0.1.7 front-page.html` injected `wp:pattern` blocks instead of rendering the Home page's
   `post_content`, so the visible homepage was never the page you edit. The new
   `front-page.html` renders `wp:post-content`; homepage sections ship as insertable patterns.

2. **Editor save crashes on ordinary pages *and* Trail Markers.** Root cause **unconfirmed.**
   Because Trail Markers crash too, it is not the front-page architecture alone.

## Documented lead (not proven)

The v0.1.7 `functions.php` hooked its asset-enqueue function into **both**
`wp_enqueue_scripts` and `enqueue_block_editor_assets`, loading Google Fonts + the parent
stylesheet + the full ~27KB frontend CSS into Gutenberg. The v2.0.0 theme avoids this: the
editor gets only `assets/css/editor.css` (fonts + light typography). If the crash was caused
by the broad editor enqueue, switching to this theme resolves it — but that must be verified,
not assumed.

## Reproduction sequence (on Staging, with a backup first)

1. Take a Pressable snapshot/backup.
2. Open an ordinary page and a Trail Marker in the editor with browser devtools open.
3. Attempt an edit + save. Capture, before changing anything:
   - JS console errors
   - Network tab: failed requests, especially `POST /wp-json/wp/v2/...` (REST save)
   - WordPress REST error payloads (status + body)
   - PHP error log (Pressable dashboard / logs)
   - Pressable platform logs
4. Bisect what the crash follows:
   - Theme: switch to the new `epicstory` v2.0.0 — does saving work?
   - Plugins: with a backup, isolate on Staging (ACF, AI Engine, WP Grid Builder,
     PublishPress suite, Jetpack, MCP Adapter). AI Engine + MCP Adapter are prime suspects
     for editor/REST interference.
   - Post type: page vs. Trail Marker vs. `hw_coordinate`.
   - Editor stylesheet loading (addressed in v2.0.0).
   - Site Editor DB overrides (see below).
   - REST/API permissions (PublishPress Permissions/Capabilities can gate REST saves).
5. Document the actual root cause here before building further assumptions on it.

## Findings (2026-09-09) — on Staging, under the epicstory theme

- **Editor save-crash: resolved.** Under the epicstory theme, pages, ordinary pages, and Trail
  Markers open, edit, save, and reopen with the change persisted. The original hard crash is
  gone — consistent with the v0.1.7 broad editor enqueue (full frontend CSS into Gutenberg)
  having been a contributor, which the rebuild avoids.
- **Residual "Saving…" spinner hang (separate issue).** The save/publish succeeds (content is
  written), but the editor button stays on "Saving…" indefinitely. This is a post-save
  lifecycle hang, not data loss, and not the theme.
  - **Prime cause: PublishPress Revisions (`revisionary`).** On a *published* post it intercepts
    the update into a revision, and the response Gutenberg receives doesn't resolve the save
    state → the spinner never clears. It's an unneeded-for-MVP review-workflow plugin.
  - **Isolation test in progress:** `revisionary` deactivated on Staging (via `active_plugins`)
    2026-09-09, leaving PublishPress Permissions (`press-permit-core`) and Capabilities
    (`capability-manager-enhanced`) active. Owner to retest a save in the editor.
    - If the spinner is gone → root cause confirmed = revisionary; keep it deactivated for MVP.
    - If it persists → deactivate `press-permit-core`, then `capability-manager-enhanced`, and
      finally check the admin-ajax heartbeat / post-lock and the `wp/v2/.../autosaves` response.
  - **Restore point** — original `active_plugins` before the test (to re-enable revisionary):
    `mobilook, advanced-custom-fields/acf, ai-engine, ai, akismet,
    capability-manager-enhanced/capsman-enhanced, file-manager-advanced,
    herowithin-formation-matrix-core, mcp-adapter, press-permit-core,
    pressable-onepress-login, revisionary/revisionary, wp-grid-builder`.

## Also audit (Site Editor DB overrides can silently supersede theme files)

- `wp_template`, `wp_template_part` (DB copies overriding the theme's HTML files)
- `wp_global_styles` (Global Styles overriding theme.json)
- `wp_navigation` posts (menu data)
- `theme_mods_twentytwentyfive`
- The historical Custom CSS post **ID 354** tied to Twenty Twenty-Five theme mods — inventory
  before deleting; it may be dormant debt or may still inject CSS.

Inventory these before removing or disabling anything.
