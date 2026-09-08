# The Epic Story of God child theme (v2.0.0)

A clean rebuild of the ChatGPT `v0.1.7-draft` theme. Block child theme on **Twenty
Twenty-Five**. Presentation only — Formation Matrix domain logic stays in the separate
**The Epic Story of God Formation Matrix Core** plugin.

## What changed from v0.1.7 (and why)

| Area | v0.1.7-draft | v2.0.0 rebuild |
|---|---|---|
| Design tokens | Provisional Ink/Paper/Stone/Forest palette, Libre Caslon / Work Sans | Figma Epic Story of God canon — Charcoal/Forged-Gold palette, Playfair Display / Outfit / Inter |
| Homepage | `front-page.html` injected `wp:pattern` blocks; page content unreachable in the editor | `front-page.html` renders real `wp:post-content`; homepage ships as insertable patterns |
| Editor CSS | Full ~27KB frontend stylesheet enqueued into Gutenberg | Small, separate `assets/css/editor.css`; fonts only, no layout CSS |
| Frontend CSS | ~27KB of stacked `!important` overrides | Rewritten, tokenized, mobile-first, no override cascade |
| Header/footer | Duplicated generic + `-epicstory` parts | Single `header.html` / `footer.html` |

## Structure

```
epicstory/
  style.css              Theme header only
  theme.json             Design system — palette, type ramp, spacing, shadows (canon)
  functions.php          Supports, pattern categories, block styles, asset loading
  assets/css/
    epicstory.css       Frontend styles (enqueued on wp_enqueue_scripts only)
    editor.css           Minimal editor styles (add_editor_style)
  parts/                 header.html, footer.html
  templates/             front-page, index, page, single, single-hw_coordinate,
                         archive, search, 404, + 7 es-* custom templates
  patterns/              Homepage sections + supporting patterns (see below)
```

## Homepage patterns (the editability fix)

The homepage is **not** injected by the template. Each section is a registered pattern:
`cinematic-hero`, `home-orientation`, `home-seeker`, `home-becoming`, `home-doorways`,
`matrix-invitation`, `home-closing`. The composite `homepage` pattern lays down all seven
as editable blocks in one insert. See `/docs/reattach-content.md` for the one-time step
that attaches them to the Home page (ID 356).

## Install

Child theme only — Twenty Twenty-Five must be present. Zip the `epicstory/` folder and
upload under Appearance → Themes, or deploy via Git/SFTP to
`wp-content/themes/epicstory/`.

## Guardrails

- Do not move Formation Matrix logic into this theme.
- Fonts load from Google Fonts; self-hosting is a documented future optimization.
- Keep the editor stylesheet minimal — do not re-enqueue the frontend CSS into Gutenberg.
