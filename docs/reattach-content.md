# Reattaching existing content to the new theme

Goal: switch to the v2.0.0 theme **without recreating content**. Preserve pages, Trail
Markers, the 144 Formation Coordinates, taxonomies, IDs, and slugs. Requires live
WordPress/Staging access.

> Re-audit IDs before relying on them. Historical values from the ChatGPT handoff:
> Home = 356, Explore Formation = 315, Formation Matrix = 162, Privacy Policy = 3.
> `show_on_front = page`, `page_on_front = 356`. Confirm on the live site first.

## 1. Deploy the theme to Staging

Deploy `themes/herowithin/` to `wp-content/themes/herowithin/` (Git export or SFTP). Twenty
Twenty-Five must remain installed (parent). Activate the new `herowithin` theme on Staging.

## 2. Fix the homepage (the editability change)

The new `front-page.html` renders the Home page's real content, so the homepage starts blank
until content is attached. One time:

1. Edit the **Home** page (ID 356) in the normal page editor.
2. If old/stale blocks are present, review them against the approved design first (the
   handoff warns page 356 may hold stale `post_content` the old front-page ignored).
3. Insert the **"HeroWithin — Full Homepage"** pattern (inserter → Patterns → HeroWithin —
   Homepage). It lays down all seven sections as **editable blocks**.
   - Or insert the seven section patterns individually: Cinematic Hero, Where Are You Today,
     Trail Markers / Seeker, Who Are You Becoming, Four Ways to Keep Moving, Matrix
     Invitation, Closing Invitation.
4. Set the hero scene image on the Cinematic Hero group (or add a Cover block). Optimize the
   3.31MB `homepage-hero-clean.png` for responsive delivery; preserve the original source.
5. Save. Reload the homepage — it should match the approved design and now be fully editable.

## 3. Verify Trail Markers and ordinary pages

Confirm each renders under the new templates. Do **not** rewrite Trail Marker content from
theme files — their approved copy comes from governed sources. Inspect the actual
`post_type` of Trail Markers before deciding how they map (the handoff is unsure whether
they're a dedicated CPT or ordinary pages). Do not create a new Trail Marker CPT until the
existing implementation is identified.

## 4. Formation Coordinates

`single-hw_coordinate.html` frames the `hw_coordinate` content with a Formation Hero and a
Next Faithful Step. The Formation Matrix Core plugin still owns the CPT and Matrix rendering.
Verify a coordinate (e.g. `B05-C07`) renders correctly. Do not regenerate the 144 coordinates.

## 5. Menus (optional cleanup)

Header/footer nav links are inline in the template parts for reliable out-of-the-box
rendering. To make the menu editable without touching theme source, create a WordPress
navigation menu and point the header's Navigation block at it.

## 6. Acceptance test (release bar for this phase)

- Open Home → edit a heading → save → reopen → change persisted.
- Same for an ordinary page.
- Same for a Trail Marker.
- No editor crash on save in any of the three.
