# Epic Story Content Model — Handoff to Claude Code

Companion to `CLAUDE.md` and `docs/decision-log.md` (see the 2026-09-08 "Epic Story content
model" entry for the reasoning behind everything here). This document defines the new
Scripture/Theology/Story content model and the scoped next steps for this build cycle. It is
additive to the existing site — the six-door IA, Formation Matrix, and Trail Markers are
unaffected and not to be restructured.

## Immediate next step: finish Phase 0

Before any of the new content model work below, finish what's already documented and pending:

1. Reproduce/diagnose the editor-save crash on Staging (`docs/editor-crash-diagnosis.md`)
2. Deploy the current theme **as-is to Staging** (not Production) — the owner wants to see its
   current real state and iterate from there, rather than perfecting it pre-deploy
3. Reattach existing content — Home, Trail Markers, Coordinates (`docs/reattach-content.md`)
4. Visual QA across breakpoints
5. Acceptance test: owner opens Home → edits → saves → reopens → sees the change (same for an
   ordinary page and a Trail Marker, per `CLAUDE.md` non-negotiable #10)

Production deploys stay gated behind the existing rule in `CLAUDE.md`: production branch
only, after owner + Claude review. Nothing above changes that.

## Formation Matrix Core — paused, not removed

Do not build, extend, or redeploy anything in the Formation Matrix Core plugin as part of this
work. It's optional in the owner's mind right now; the existing non-negotiable (never delete
or regenerate the 144 Coordinates, Trail Markers, IDs, or slugs) still fully applies — paused
means no new work, not removal or neglect.

Open questions for a future owner decision (don't resolve these unilaterally):
- Is the live plugin stable/final, or does it need its own rebuild like the theme did?
- Does the new Epic Story lineage (below) connect conceptually to the 144 Coordinates at all,
  or are they entirely separate systems sharing a site?
- Should the plugin's internal name eventually match the new branding, or stay historical like
  the app repo does?

## The content model (source: SRC-106, owner-approved vision document)

**Lineage:** Scripture → Research Questions → Research Evidence → Theological Conclusions →
Epic Story Chapters → Formation Theology Edition → Everyday-Man Edition — bidirectional at
every link.

| CPT | Purpose |
|---|---|
| **Scripture Passages** | Key passages with literary/canonical context — not a verse-by-verse database |
| **Research Questions** | The explicit questions being investigated |
| **Research Evidence** | Sources, language notes, commentary, competing interpretations feeding a question |
| **Theological Conclusions** | The claim itself. Becomes "Canonized" once Owner-approved after theological review |
| **Epic Story Chapters** (12) | The narrative-synthesis container per chapter |
| **Formation Theology Editions** (12, one per chapter) | Theologian-facing detailed chapter content — sources, footnotes, alternative views, qualifications |
| **Everyday-Man Editions** (12, one per chapter) | The accessible prose — the original reader-facing book content |

**Taxonomies:**
- Theological Topics (Creation, Kingdom, Humanity, Image of God, etc.)
- Status: Draft → In Theological Review → Theologically Approved → Owner Approved →
  Canonized (Theological Conclusions only) → Published

**Roles:**
- Owner (Dave): full edit everywhere
- Reviewer (Theologian): read, comment, suggest edits/revisions on permitted content; cannot
  publish, install plugins, or touch theme/site settings

**Editing:** role-gated "Edit this page" link on the front end → opens the standard WordPress
editor. No custom inline editing, no page builder — consistent with `CLAUDE.md`'s
editability rules.

**Content pipeline (confirmed, unchanged):** Airtable is the trigger/source of truth for
structure (order, status, cross-references). Google Docs become read-only archives after a
one-time import; all further editing happens in WordPress only. Mapping Airtable fields to
the seven CPTs above is implementation detail for Stage 1, not an open decision.

## Build sequence for this cycle

### Stage 1 — Add the content model
Build the seven CPTs, taxonomies, ACF Pro relationship fields, and roles above, alongside the
existing theme — additive, not a rebuild. Add the role-gated "Edit this page" link to the new
templates.

**Gate:** owner approves the model as built.

### Stage 2 — One real chapter, vertical slice
Populate one full vertical slice: a few Scripture passages → a Research Question/Evidence →
1–2 Theological Conclusions → 1 Epic Story Chapter → its Formation Theology Edition +
Everyday-Man Edition, cross-linked in both directions.

**Build only two views against this slice — no more:**
- **Story View** — the chapter read in sequence
- **Chapter View** — the chapter's Formation Theology Edition + Everyday-Man Edition plus the
  Conclusions/Scripture/Research it draws on

Scripture View, Theology View, and Research View are the long-term goal (five views total)
but are explicitly deferred past this build cycle.

**Relationships:** build only a few bidirectional relationships to start — enough to prove the
pattern, not the full web. Taxonomies may help this scale without a relationship field for
every pairing; use them where they reduce the number of explicit ACF relationships needed.

**Gate:** owner tests editing and traceability on this one chapter, both directions, before
scaling.

### Stage 2.5 — Relationship & scaling review (required before Stage 3)
Do not proceed to populating the remaining 11 chapters until this happens. A dedicated
planning session with the owner to evaluate: did the relationship approach from Stage 2 hold
up at the volume of one full chapter? What needs to change before it's repeated 11 more times?
Does the taxonomy-assisted approach need adjustment?

### Stage 3 — Populate remaining chapters (after the Stage 2.5 review, not before)
Airtable-triggered imports for the rest. Routine execution once Stage 2.5 has set the pattern.

### Stage 4 — Reviewer access
Test theologian account, confirm access boundaries, confirm traceability holds at scale.

**Gate:** owner authorizes real theologian invitations.

### Stage 5 — Remaining views + live review (later, not this cycle)
Scripture View, Theology View, Research View. Theologians review; owner makes final calls.
