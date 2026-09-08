# The Epic Story of God — Website (WordPress)

The public formation website at **theepicstoryofgod.com** — a Christ-centered
men's formation site by KingdomView Media, Inc. Hosted on **Pressable**, built as a block
child theme on **Twenty Twenty-Five**.

This repository is the **source of truth for the website's theme code**. It is separate from
the mobile app repo (`kingdomview/herowithin-app`, React Native + Supabase). The two share a
design canon (Figma) and will eventually share a content model, but they are different
codebases with different toolchains.

> **WordPress is not canon.** Content authority lives in approved Google Docs, Airtable, and
> The Epic Story of God governance records. WordPress is the presentation/discovery/publishing layer.
> If a rebuilt template surfaces a content discrepancy, surface it — don't silently resolve it.

## Repository layout

```
epicstory/
  themes/epicstory/               The clean rebuild (v2.0.0) — the active theme
  reference/herowithin-v0.1.7-draft/  ChatGPT's last theme, kept read-only for reference
  docs/
    build-brief.md                 Claude (chat) build brief
    chatgpt-handoff.md             Full ChatGPT technical handoff (reference)
    epic-story-content-model-handoff.md  Content model + Phase 0 / Stage 1–5 sequence
    editor-crash-diagnosis.md      Plan to reproduce/diagnose the Gutenberg save crash
    reattach-content.md            One-time steps to attach content to the new templates
    session-discipline.md          Git + Pressable workflow for every session
    decision-log.md                Decisions made during the rebuild
  CLAUDE.md                        Navigation/enforcement rules for Claude Code sessions
```

The **Formation Matrix Core plugin** (owns the `hw_coordinate` CPT and the 144 Formation
Coordinates) is a separate artifact. When its source is exported from the live site it
should land under `plugins/epicstory-formation-matrix-core/` and be audited independently —
its domain logic must never move into the theme.

## Current status

The clean theme is **built and code-complete**, but the live-site steps still require
Pressable/WordPress access that this build session did not have:

- [x] New repo + design system from Figma canon
- [x] Clean child theme: editable homepage, separate editor stylesheet, tokenized CSS
- [x] v0.1.7 imported as reference
- [ ] Reproduce/diagnose the editor-save crash on Staging (`docs/editor-crash-diagnosis.md`)
- [ ] Deploy theme to Pressable Staging
- [ ] Reattach existing content — Home, Trail Markers, Coordinates (`docs/reattach-content.md`)
- [ ] Visual QA at desktop/laptop/tablet/mobile
- [ ] Acceptance test: owner opens Home → edits → saves → reopens → sees the change

## Working here

Read `CLAUDE.md` and `docs/session-discipline.md` before starting. Every session:
`git status` → `git pull` → work → `git status` → commit → `git push`. Staging always
reflects the last pushed commit — treat it as downstream of Git.
