> **Mirror — do not edit here.** The authoritative copy is
> `src-docs/SRC-111-cross-surface-content-model-and-visibility-standard.md` in
> `kingdomview/herowithin-governance`. Changes are made there and re-mirrored.
>
> For this repo, Section 6 is the build list: the content types the site must add
> to the SRC-106 model in `docs/epic-story-content-model-handoff.md`.

---
doc_id: SRC-111
title: "Cross-Surface Content Model & Visibility Standard (App and Website)"
status: approved
version: 1.0
approved_date: 2026-09-18
amends: [SRC-067, SRC-070, SRC-106]
---

# Cross-Surface Content Model & Visibility Standard

**SRC-111 — OWNER APPROVED — v1.0 — 2026-09-18**

*Note on numbering: the SRC-111 identifier is provisional until confirmed against the Source Authority Register.*

## Purpose

This standard defines one content chain serving two surfaces — the HeroWithin mobile app and TheEpicStoryOfGod.com website — and states, for every layer of that chain, whether the layer is surfaced to users and in what form.

The production process behind the chain is the same for both surfaces. What is surfaced differs by medium. This document governs that difference so that the app and the website can be built against one model rather than two.

It creates no new theology and no new canon. It records owner decisions made on 2026-09-18 and names the amendments those decisions make to existing standards (Section 9).

## 1. Governing Principles

1. **One chain, two surfaces.** Every piece of reader-facing content on either surface traces back through the same chain to approved theology and Scripture.
2. **One authoring home.** Long-form and theological content is authored and published in WordPress. The app pulls that text and renders it natively. A more scalable delivery mechanism will be built when it is needed, not before.
3. **Two-way tracing on both surfaces.** A man can move from story or practice back to theology and Scripture, and from theology forward into where it is lived. This is the Dig Deeper mechanism (Section 5), and it works the same way in the app and on the website.
4. **Format follows medium.** The same formation goal may be expressed as an experiential Quest in the app and as a readable Teaching Article on the website. These are sibling formats from one source, not copies of each other.
5. **Production machinery stays hidden.** Coordinates, axes, lineage roles, statuses, guardrails and routing records are never shown to users on either surface.

## 2. Visibility Levels

- **Public destination** — the content has its own page or screen a user can open, browse and link to.
- **Public in context** — the content is shown inside other content. It has no destination of its own.
- **Reviewer-only** — published in WordPress but visible only to signed-in Reviewers (theologians). Never public, never in the app.
- **Behind the scenes** — production and governance only. Never surfaced on either surface.

## 3. The Chain at a Glance

| # | Layer | App | Website |
|---|---|---|---|
| 1 | Scripture | Public in context (verse pop-up) | Public in context (verse pop-up) |
| 2 | Wisdom Council Research (questions + evidence) | Behind the scenes | Reviewer-only |
| 3 | Theological Conclusions | Behind the scenes | Reviewer-only |
| 4 | Concept page (public theological explanation) | Public destination (pulled from WordPress) | Public destination |
| 5 | Three-Axis theological lens | Behind the scenes | Behind the scenes |
| 6 | Epic Story of God, Book 0 — Everyday-Man Edition | Public destination | Public destination |
| 6a | Epic Story of God, Book 0 — Formation Theology Edition | Public behind a toggle | Public behind a toggle |
| 7 | Chronicles chapters (144) — story prose | Public destination | Public destination |
| 7a | Chapter structural identity (Axis X, Axis Z) | Behind the scenes | Behind the scenes |
| 8 | 1,728 Formation Coordinates | Behind the scenes (temporary scaffold) | Behind the scenes (temporary scaffold) |
| 9 | Formation Matrix coordinates (144, static) | Behind the scenes as records | Behind the scenes as records |
| 10 | Formation Matrix entries | Public destination | Public destination |
| 11 | Journey | Public destination | Public destination (Journey page gathering Teaching Articles) |
| 12 | Quest / Teaching Article | Public destination (Quest) | Public destination (Teaching Article) |
| 13 | Step and Experience | Public in context (inside a Quest) | Not used |
| 14 | Expedition elements | Public in context | Not used (material sits inside a Teaching Article) |
| 15 | Trail Markers | Public destination | Public destination |
| 16 | Guardrails | Behind the scenes | Behind the scenes |
| 17 | Dig Deeper button | Public on every content surface | Public on every content surface |
| 17a | Dig Deeper route record | Behind the scenes | Behind the scenes |
| 18 | Real-world formation fruit | Public in context (reflection, action, progress) | Not used — no user state at launch |
| — | Theology lineage roles, statuses, FSAM symbols | Behind the scenes | Behind the scenes |

## 4. Layer Decisions in Detail

### 4.1 Scripture

Verses appear inside Steps, story and articles on both surfaces. Tapping or clicking a verse opens a pop-up of that verse. There is no page per Scripture passage on either surface.

Scripture Passage records remain behind the scenes as connective data: which concept, conclusion and chapter each passage belongs to, and the content of the pop-up. The rationale for selecting a passage is behind the scenes.

Before any passage text is published, the chosen translation's quotation permissions must be confirmed. Limits vary by publisher.

### 4.2 Wisdom Council Research

Research Questions and Research Evidence merge into a single reviewer-only content type, with one Research View. The public never sees research or research evidence on either surface, and it is never summarized for them. The app holds none of it.

### 4.3 Theological Conclusions

Reviewer-only as records, with their status and supporting evidence visible to Reviewers. The public meets conclusions only as the prose of a concept page.

### 4.4 The concept page

One page per biblical concept, tying many scriptures together. This is the public theological explanation required by SRC-070 §7, and the single destination for Dig Deeper on both surfaces.

A concept page carries the concept explained in common language, the Scripture verses tied to it as pop-ups, the theological conclusions that came out of the research, and links forward to where this truth is lived (Section 5).

A concept page may state publicly that a topic is still being researched, using wording such as: "This topic is currently being researched by our theologians. If you are a theologian and would like to help, contact us." It may not present unresolved research as settled doctrine. This is the only place a status reaches the public on either surface.

### 4.5 The Three-Axis theological lens

Applied to every significant concept as three structured fields: what the Father is doing through this truth in the Kingdom He is giving the Son; how it is revealed and fulfilled in Jesus; what kind of person and people the Father is forming through it.

Behind the scenes on both surfaces. It disciplines the writing and is checked by Reviewers. It is never displayed.

### 4.6 The Epic Story of God (Book 0)

- **Everyday-Man Edition** — the default public read on both surfaces.
- **Formation Theology Edition** — public behind a deliberate toggle on the chapter page. No login required. Reviewer comments on it remain reviewer-only.
- **Chapter record** — behind the scenes, holding the two editions together and carrying links to concepts and Scripture.

Book 0 text is authored in WordPress and pulled into the app.

### 4.7 The Chronicles (144 chapters)

All published story prose is public on both surfaces. A paywall may be introduced later; the model is not designed around one now.

A chapter's structural identity — Axis X (Formation Identity), Axis Z (Sonship Formation Path), formation purpose, shadow, light truth, story turn — stays behind the scenes. Readers see a chapter, not its coordinates. Dig Deeper is what surfaces the connection to theology.

### 4.8 The 1,728 Formation Coordinates

A temporary production scaffold, used by the Owner and Claude only. A draft exists. Once approved they are static. They are never surfaced anywhere, on any surface, in any form.

### 4.9 The Formation Matrix coordinates (144)

Offline, the 1,728 reduce to 144 public-facing coordinates. The reduction method is the Owner's decision and happens offline. Once finalized the 144 are static.

Each carries a theological lineage that is never shown to users.

These 144 drive Quests, Teaching Articles, Trail Markers, Chronicles chapters and concept pages. They are the hub of the production model.

**Two different sets of 144 exist. They must always be named explicitly:**

- **Formation Matrix coordinates** — the 144 public-facing coordinates described here.
- **Chronicles chapters** — the 144 story chapters (Axis X × Axis Z).

The phrase "the 144" is not to be used alone in any document, ticket, or conversation. Note for this repo: the 144 `hw_coordinate` records held by the Formation Matrix Core plugin are the Formation Matrix coordinates, not the Chronicles chapters.

### 4.10 Formation Matrix entries

The reader-facing expression of coordinate content, written from one or more Formation Matrix coordinates. Public destination on both surfaces. Not yet developed.

Each entry must have exactly one primary source coordinate, on the same reasoning that governed Journey Assemblies: an entry written from several coordinates with no clear center has no formation focus.

### 4.11 Journey

A lifelong formation theme a man grows toward and never completes.

- **App:** public destination. A man sees his Journeys and the Quests within them.
- **Website:** public destination. A Journey page gathers the Teaching Articles under that theme.

### 4.12 Quest (app) and Teaching Article (website)

Both come from a Formation Matrix coordinate and share the same lineage and the same formation goal. They are different formats of related content, not two versions of one thing.

- **Quest (app only):** focused, completable, experiential, walked through Steps.
- **Teaching Article (website only):** a self-contained written piece a man can work through alone or in a group, in the manner of a Bible study. Each is its own WordPress post. Many already exist and are unsurfaced. They may become printed Bible study workbooks later, so they are written to stand alone rather than as web-only pieces.

**Terminology is fixed: Quest in the app, Teaching Article on the website.** The terms are not interchangeable and neither term is used on the other surface.

### 4.13 Steps and Experiences

Step is the third hierarchy level, inside a Quest, in the app only. Experience classifies the kind of encounter within a Step — story, Solomon conversation, reflection, Scripture encounter, discernment beat, real-world action. Screen is the surface an Experience renders on. Neither Experience nor Screen is a hierarchy level.

A Teaching Article has its own internal structure — sections, questions, practices — and does not mirror a Quest's Steps.

Experience type remains a behind-the-scenes production field.

### 4.14 Expedition elements, Trail Markers, guardrails

- **Expedition elements:** app only, public in context, supporting an existing Journey. On the website this material belongs inside a Teaching Article.
- **Trail Markers:** public destination on both surfaces, under the same name on both. They orient or summarize without requiring a full transformation arc.
- **Guardrails:** behind the scenes on both surfaces, always. A guardrail limits what may be claimed and never becomes content.

### 4.15 Real-world formation fruit

App only, public in context: reflections, actions and progress inside a Quest. Never a page, never a score.

The website carries no user state at launch. Teaching Articles are readable without an account. Group study features may come later.

## 5. The Dig Deeper Standard, Applied to Both Surfaces

**The button is public on every content surface** — Chronicles story, Book 0, Quest, Teaching Article, Trail Marker, Formation Matrix entry — in both the app and the website.

**It always lands on the concept page.** The concept page is the single public theological destination.

**From the concept page a man can travel in both directions:**

- Backward: to the Scripture verses behind the concept, and to the Book 0 chapter that synthesizes it. This completes the reverse path of SRC-070 §8A.
- Forward: to where this truth is lived — the Chronicles chapters, Quests and Teaching Articles that draw on it. This makes reader-facing what SRC-070 §9 previously described only as an internal query, and is a new requirement introduced by this standard.

**The route record is behind the scenes on both surfaces:** source surface, source reference, exact trigger text, target concept and anchor, verification date, guardrail, and readiness state.

**Readiness governs rendering, silently.** Only a Ready route renders a button. A route that is Production Needed or Theology Blocked renders nothing. Readiness language is never shown to a user.

## 6. What the Website Must Add

Against the SRC-106 content model as it stands, the website needs:

1. **Concept page** as a content type — the public theological explanation and Dig Deeper destination.
2. **Dig Deeper route** as a record, with readiness governing whether the button renders.
3. **Merged Research content type** (questions and evidence), reviewer-only, with a single Research View.
4. **Live Theology Library record ID** on each Theological Conclusion.
5. **Three-Axis fields** on each concept, behind the scenes.
6. **Teaching Article** as a content type, with a Journey page that gathers them.
7. **Chronicles chapter** content type for story prose.
8. **Formation Matrix entry** content type.
9. **Relationship role field** on each relationship, carrying the lineage role (Directly Governs, Supports, Constrains, Provides Research Context).
10. **Status mapping** between the website's status list and the governance statuses for theology, research and public entries.

Items 1 and 2 are what make Dig Deeper work at all, and should be built first.

## 7. Roles and Permissions

- **Reviewer (theologian):** sees the working home and the Theology Library index in WordPress; suggests edits; leaves and reads comments. Cannot publish.
- **Administrator (Dave):** accepts suggestions and publishes. Standard WordPress Administrator role. Administrator and Owner are the same person and the same permission set.
- Research and unpublished conclusions are visible to Reviewers and Administrator only.

## 8. Delivery Pattern

Long-form and theological content lives in WordPress and its text is pulled into the app. This applies to Book 0, concept pages, Chronicles prose, Trail Markers and Formation Matrix entries.

Quests, Steps, Experiences, Expedition elements and all user state are app-native.

A more scalable content delivery approach will be designed when scale requires it. Until then, this pattern is the standard and is not to be worked around with parallel copies of content.

## 9. Governance Amendments Made by This Standard

These amend existing owner-approved documents. Each requires the amended document to be updated in place before it can be relied on as written.

1. **Theology's authoritative home moves to WordPress.** WordPress becomes the authoritative working and publishing home for theology. Airtable retains the Source Authority Register and the operational records the app consumes. *Amends SRC-067, and SRC-070 §5 and §14.*
2. **The 1,728 Formation Coordinates become a temporary scaffold.** *Amends SRC-070 §4 and §16.1.*
3. **The Formation Matrix coordinates (144) move upstream.** *Amends SRC-070 §16.1's chain order.*
4. **Journey Assembly Lineage is retired.** *Retires SRC-070 §6; §11, §13A and §16.1 need consequent revision.*
5. **Three new destinations join the §17.4 routing list:** Formation Matrix entry, Teaching Article, concept page.
6. **Forward traceability becomes reader-facing.** *Extends SRC-070 §9.*
7. **SRC-106's content model is extended,** not replaced, by Section 6 above.

## 10. Open Items

- Confirm the SRC-111 number against the Source Authority Register, and renumber if taken.
- Amend SRC-070 in place for items 1 through 6 in Section 9 — requires the Owner's explicit review.
- Amend SRC-067 for item 1.
- Decide the reduction method from 1,728 coordinates to the 144 Formation Matrix coordinates (offline, Owner).
- Design how a Formation Matrix entry renders on each surface.
- Confirm Bible translation quotation permissions before publishing passage text.
- Decide whether Teaching Articles need a print-oriented export path for the future workbook use.

## Approval Record

Decided by Dave in session with Claude, 2026-09-18, layer by layer across the full chain. Recorded as the governing structure for both the app build and the website build.
