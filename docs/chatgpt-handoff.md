> **Naming note (2026-09-08):** This document predates the project rename and refers throughout to **"HeroWithin"** and **discoverherowithin.com**. The project is now **The Epic Story of God** (repo `kingdomview/epicstory`, site **theepicstoryofgod.com**), and the WordPress theme slug is `epicstory`. This file is kept verbatim as a historical source record — read the names accordingly. See `decision-log.md` for the rename.

HeroWithin WordPress Theme Rebuild — Complete Technical & Project Handoff for Claude / Claude Code
Handoff date: August 25, 2026
Current site: https://discoverherowithin.com/
Hosting: Pressable
Current development posture: Live URL, but still explicitly in active build mode
Current active child theme: HeroWithin v0.1.7-draft — confirmed by owner
Parent theme: Twenty Twenty-Five
Exact installed parent-theme version: Not currently verified. Claude should inspect it rather than infer it.
Accuracy Note
This document separates information into three categories:
Confirmed — established by owner statement, prior WordPress MCP inspection, or direct inspection of the current v0.1.7 theme ZIP.
Last verified — accurate at the last successful WordPress MCP audit, but Claude should re-check it on takeover.
Unknown / verify — I do not have enough evidence to state it as fact.
A fresh WordPress MCP read was attempted while preparing this handoff, but the connector became unavailable from the ChatGPT side. Therefore, current live WordPress state should be audited by Claude Code before it changes anything.
The governing operating principle remains:
WordPress is not canon.
The authoritative content/system-of-record layer remains approved HeroWithin governance records, Airtable, approved Google Docs/master documents, Scripture/theological governance, and applicable HKFF records. WordPress is the public presentation, discovery, review, and publishing layer.
1. Project Intent
What is this website for?
HeroWithin is a Christian men's formation ecosystem.
The website is intended primarily to help a man identify where he is, understand who God is forming him to become, encounter biblical truth in a usable way, and take a faithful next step rather than merely consume religious information.
The core public movement is:
Stay on the Path. Become the Man You Were Meant to Be. Help Another Man Find His Way.
A closely related internal True North movement is:
Hiding → Seen → God → Identity → Brotherhood → Faithful Action → Helping Another Man
The website should not feel like:
a conventional church website,
a blog archive,
a theological encyclopedia,
a course catalog,
a self-improvement site,
or a visible database of the underlying HeroWithin system.
The intended public experience is:
a map of becoming
The underlying architecture can be complex, but the visitor should encounter simple human questions such as:
Where am I?
Who am I becoming?
What am I struggling with?
Where do I want to grow?
Who is God?
What is God doing in me?
What is my next faithful step?
Who will walk with me?
Audience
The primary audience is adult men seeking spiritual growth, Christian formation, identity, maturity, brotherhood, and faithful action.
The site deliberately supports several entry audiences:
Christian men
Men who already believe but want formation that connects theology, identity, relationships, obedience, story, practice, and brotherhood.
Spiritually uncertain men
HeroWithin has a deliberate seeker pathway titled:
Not Sure What You Believe?
This is intended for:
atheists,
agnostics,
skeptics,
spiritually uncertain men,
men uncomfortable with dense Christian theology,
and men willing to begin with honest questions rather than assumed belief.
That pathway uses Trail Markers.
Trail Markers should begin with wonder, meaning, identity, suffering, morality, beauty, consciousness, purpose, longing, and similar human questions, then move responsibly toward God and ultimately toward the Father revealed in Jesus.
They are intentionally non-combative and should not make exaggerated scientific or apologetic claims.
Core goals originally established for the website
1. Build a public HeroWithin formation website rather than a generic marketing site.
2. Surface the deep HeroWithin formation architecture without making visitors learn the architecture first.
3. Build around multiple entry paths rather than one forced information hierarchy.
4. Make the Formation Matrix a central discovery system.
5. Allow men to begin with normal human-language questions such as:
"I want to grow in..."
"I'm struggling with..."
"Not sure what you believe?"
"Who am I becoming?"
6. Preserve the governing HeroWithin movement:
Identity
Formation
Maturity
7. Connect:
Scripture
theology
HeroWithin story/Chronicles
Solomon's teaching/wisdom
symbols
practices
Journeys
Steps
brotherhood
seeker content
into one relational system rather than separate content silos.
8. Make the site mobile-first or fully responsive.
9. Create an eventual governed publishing and expert-review workflow.
10. Use WordPress as presentation/discovery/review rather than the canonical source of truth.
11. Build a reusable, maintainable child theme rather than rely indefinitely on ad-hoc WordPress styling.
12. Ultimately establish a proper production pipeline with version control, QA, rollback, source reconciliation, and publishing traceability.
Essential website architecture
The approved global navigation direction is:
Explore | Become | Truth | Stories | Practice | Brotherhood
Special public entry paths include:
Not Sure What You Believe?
Formation Matrix
These are important architectural decisions.
A temporary simplified navigation used earlier in development should not be mistaken for the approved final IA.
Essential homepage sections
The full homepage prototype was approved as the direction.
The current conceptual sequence is:
1. Cinematic hero
2. Where Are You Today?
3. Trail Markers / seeker pathway
4. Who Are You Becoming?
5. Four Ways to Keep Moving
6. Formation Matrix / larger map
7. Closing brotherhood invitation
8. Footer
Hero
Current approved direction:
HEROWITHIN
Building Men.
Building Brothers.
Building Legacy.
Supporting line:
You were never meant to walk alone.
CTA:
Find Your Way
The visual uses men on the left beside a fire overlooking a cinematic mountain valley, with live text placed on the right.
The owner repeatedly requested that the text not obscure the men and that all white text remain readable.
Where Are You Today?
Two main paths:
I WANT TO GROW IN...
Courage
Wisdom
Faith
Brotherhood
Leadership
I'M STRUGGLING WITH...
Fear
Shame
Anger
Loneliness
Temptation
CTA:
Explore Formation
Trail Markers
Headline direction:
Not sure what you believe?
The goal is to offer a safe, intellectually responsible seeker entrance.
Who Are You Becoming?
The three-part formation presentation is:
IDENTITY
Who am I in Christ?
→
FORMATION
How is Jesus forming me?
→
MATURITY
What does faithful maturity look like?
The broader framework may also be described as:
Identity → Formation → Maturity
Four Ways to Keep Moving
Four public doors:
Truth
Understand what is true.
Examples:
Scripture
Theology
What If?
Stories
See formation lived.
Examples:
Chronicles
Solomon's Wisdom
Practice
Put truth into action.
Examples:
Practices
Journeys
Steps
Devotionals
Brotherhood
Do not walk alone.
Examples:
Campfire
Discussion
Formation Together
Want to See the Larger Map?
Three public Matrix views are being developed:
The Becoming Matrix
Who am I becoming as I follow Jesus?
The Kingdom Matrix
What is God doing in His Kingdom, and how is Jesus fulfilling it?
The People of God Matrix
Who is God making us into together?
The Becoming Matrix currently has the implemented 12 × 12 structure. The Kingdom and People of God views are progressing through separate governed theological research and should not be filled automatically by code.
Essential technical/features work
Essential or already-important:
responsive mobile-first child theme
Formation Matrix
Explore Formation
search/filtering by growth and struggle
Trail Markers
accessible layouts
explicit HeroWithin header/footer/navigation
reusable formation templates/patterns
performance
editable content
maintainable Git-based code
rollback capability
Nice-to-have / future infrastructure
These were planned or explored but are not prerequisites for the immediate theme rebuild:
private review site at Review.HeroWithinProject.com
Pressable staging as the review environment
full PublishPress reviewer workflow
Hypothesis annotation workflow
reviewer notifications
automated governed-source synchronization
Playwright-based QA & Publishing Agent
screenshot regression testing
automated release reports
advanced AI-powered frontend functionality
AI chatbot
Knowledge/embedding search
fully automated publication pipeline
These should not distract Claude from first rebuilding a clean, editable theme.
Did the direction change?
Yes, in several useful ways.
Governance became lighter during build mode
The original website governing process used a relatively formal gated sequence.
The owner later clarified that while the site is still being built, routine reversible development should proceed without repeatedly asking for approval.
Claude/Claude Code is authorized to independently:
inspect,
debug,
improve CSS,
improve responsive behavior,
correct spacing,
fix layout defects,
improve accessibility,
refactor code,
improve performance,
repair templates,
perform QA,
and iterate on reversible development work.
Owner approval should be reserved for:
canon changes,
major information architecture changes,
major strategic UX changes,
destructive changes,
difficult-to-reverse infrastructure decisions,
publication/governance decisions,
security-sensitive changes.
The "live" site became an active development environment
The Pressable site is public technically, but the owner explicitly stated that essentially no one knows about it yet.
Therefore it is being treated as a build environment.
Do not mistake "production URL" for "mature production governance."
Review architecture was deferred
PublishPress + Hypothesis and a separate review subdomain remain intended future architecture.
The owner deliberately deferred implementing that system so work could remain focused on the public site architecture and content.
Theme development changed direction
An earlier child theme, v0.1.4, had the better/full homepage structure but problematic card widths.
A separate v0.2.0 experiment handled card layouts more cleanly but omitted newer features.
The owner asked for the strengths of v0.2.0 to be merged back into v0.1.4.
That produced:
v0.1.5
v0.1.6
v0.1.7-draft
The current active version is confirmed by the owner as:
v0.1.7-draft
The visual design became progressively better, but the implementation also accumulated CSS overrides and created major editor usability problems.
That is why Claude should now rebuild the theme cleanly from scratch rather than continue layering fixes onto v0.1.7.
2. Current State — What Exists
Current WordPress/site state
Last verified through successful WordPress MCP work:
Site name: DiscoverHeroWithin
Current site: https://discoverherowithin.com/
static front page enabled
show_on_front = page
page_on_front = 356
page 356 = Home
page 315 = Explore Formation
page 162 = The HeroWithin Formation Matrix
Formation Matrix page used [herowithin_formation_matrix]
normal WordPress comments are disabled
existing content must be preserved
The owner has since confirmed that v0.1.7-draft is active.
Claude should re-audit IDs/state before relying on the historical values above.
Parent theme
Twenty Twenty-Five
Child theme header:
Template: twentytwentyfive
Parent theme version
Unknown / not currently verified.
Do not assume a version based on the child theme.
The current child theme says:
Requires at least: 6.7Tested up to: 6.9Requires PHP: 7.4
Those are declarations from the child theme, not proof of the currently installed WordPress or parent-theme version.
How the theme was built
A real child theme was built.
Current child-theme metadata:
Theme Name: HeroWithinTemplate: twentytwentyfiveVersion: 0.1.7-draftText Domain: herowithin
Directory/ZIP structure uses:
herowithin/
Parent theme was not intentionally edited directly
The intent was always to keep changes outside the parent theme.
I do not have evidence that I modified Twenty Twenty-Five files directly.
Gutenberg / Full Site Editing
The current HeroWithin theme is a block child theme.
It uses:
theme.json
block templates
block template parts
PHP-registered block patterns
Gutenberg blocks
Full Site Editing architecture
No Elementor, Beaver Builder, Divi, WPBakery, or similar page builder was used.
Additional CSS / Custom CSS history
Before the current child-theme implementation, I created a WordPress custom_css post through MCP and attached it to Twenty Twenty-Five's theme mods.
Historical details:
custom CSS post ID: 354
it was connected to theme_mods_twentytwentyfive
That was an interim method before the actual child theme became the primary design layer.
Important: I cannot confirm whether this old Custom CSS record currently affects the active child theme.
Claude should inventory:
all custom_css posts,
theme mods,
Global Styles,
Site Editor database overrides,
before removing or disabling anything.
It may simply be dormant technical debt.
Current child-theme files
The active v0.1.7 package contains 47 archive entries and includes the following significant files.
Core theme files
style.cssfunctions.phptheme.jsonREADME-HEROWITHIN.mdscreenshot.png
CSS
assets/css/herowithin.css
Image asset
assets/images/homepage-hero-clean.png
Templates
templates/404.htmltemplates/archive.htmltemplates/front-page.htmltemplates/hw-campfire.htmltemplates/hw-editorial.htmltemplates/hw-formation-hub.htmltemplates/hw-journey.htmltemplates/hw-landing.htmltemplates/hw-narrative.htmltemplates/hw-practice.htmltemplates/page.htmltemplates/search.htmltemplates/single-hw_coordinate.htmltemplates/single.html
Template parts
parts/header.htmlparts/footer.htmlparts/header-herowithin.htmlparts/footer-herowithin.html
Block patterns
patterns/campfire.phppatterns/cinematic-hero.phppatterns/formation-hero.phppatterns/home-becoming.phppatterns/home-closing.phppatterns/home-doorways.phppatterns/home-orientation.phppatterns/home-seeker.phppatterns/matrix-invitation.phppatterns/next-faithful-step.phppatterns/page-intro.phppatterns/practice.phppatterns/reflection.phppatterns/related-formation.phppatterns/scripture.php
Installed plugins
This is the last successfully audited plugin inventory, from August 24, 2026.
Claude should re-run the inventory because versions may have changed.
<w:tblPr><w:tblStyle w:val="TableGrid"/><w:tblW w:type="auto" w:w="0"/><w:jc w:val="center"/><w:tblLook w:firstColumn="1" w:firstRow="1" w:lastColumn="0" w:lastRow="0" w:noHBand="0" w:noVBand="1" w:val="04A0"/></w:tblPr><w:tblGrid><w:gridCol w:w="3312"/><w:gridCol w:w="3312"/><w:gridCol w:w="3312"/></w:tblGrid><w:tr><w:tc><w:tcPr><w:tcW w:type="dxa" w:w="3312"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Plugin
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Last verified version
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Known purpose/current role
<w:tc><w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Advanced Custom Fields
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>6.8.8
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Available for structured metadata/custom fields. I cannot confirm a specific ACF field group created by me. Do not remove until the site's metadata dependencies are audited.
<w:tc><w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>AI
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>1.3.0
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Installed plugin. I do not have enough reliable information to identify its precise active role from the plugin name alone. Audit before changing/removing.
<w:tc><w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>AI Engine
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>3.7.2
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>AI/MCP integration. Workspace, MCP, Public API, AI Keywords search and Vision were configured/explored.
<w:tc><w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Akismet
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>5.7.2
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Spam protection plugin. Comments are off. Owner reports no intentional external integration beyond known systems; verify whether Akismet is configured/needed.
<w:tc><w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>File Manager Advanced
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>5.4.13
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>WordPress-admin filesystem management capability. Exact current use should be audited.
<w:tc><w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>HeroWithin Formation Matrix Core
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>0.7.2
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Core custom HeroWithin Matrix plugin. Registers/serves the Formation Matrix architecture including Formation Coordinates and related taxonomies/features. Critical: preserve.
<w:tc><w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Jetpack
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>16.2-a.1
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Installed. Owner reports no intentional external integration beyond known systems. Audit which Jetpack modules, if any, are actually enabled before changing it.
<w:tc><w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>MCP Adapter
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>0.6.1
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Exposes/participates in the WordPress MCP connection used by AI assistants.
<w:tc><w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Pressable OnePress Login
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>1.4.0
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Pressable hosting login/SSO integration.
<w:tc><w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>PublishPress Capabilities
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>2.50.0
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Intended future role/capability management for review workflow.
<w:tc><w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>PublishPress Permissions Free
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>4.8.2
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Intended future permissions/review isolation.
<w:tc><w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>PublishPress Revisions Free
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>3.9.2
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Intended future editorial/revision workflow.
<w:tc><w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>WP Grid Builder
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>2.3.5
<w:tcPr><w:tcW w:type="dxa" w:w="3312"/><w:vAlign w:val="center"/></w:tcPr><w:p><w:pPr><w:spacing w:after="40" w:before="40"/></w:pPr><w:r><w:rPr><w:sz w:val="18"/></w:rPr><w:t>Matrix/grid discovery and filtering functionality.
Hypothesis
Hypothesis is part of the future review design.
The intended direction was to use the official Hypothesis web client rather than depend on an old WordPress-directory Hypothesis plugin.
Do not assume a Hypothesis WordPress plugin is currently installed.
Custom post types
hw_coordinate
Confirmed custom post type.
Purpose:
Represents the HeroWithin Formation Coordinates.
The last successful audit showed:
hw_coordinate
144 published coordinates
Formation Matrix Core v0.7.2 active
The conceptual system is:
12 Books × 12 Chapters = 144 Formation Coordinates
Example syntax:
B05-C07
Coordinates are useful internal architecture and advanced navigation.
They should not become the primary mental model for normal visitors.
Trail Markers
Trail Markers are definitely a governed HeroWithin content type conceptually.
However, I am not sufficiently certain that WordPress currently implements them as a dedicated custom post type.
The owner refers to the live items as Trail Marker pages and has attempted to edit them.
Claude should inspect their actual WordPress post_type before deciding how to preserve or migrate them.
Do not create a new Trail Marker CPT until the existing implementation is identified.
Custom taxonomies
The following taxonomies were last known to exist with the Formation Matrix system:
hw_strugglehw_growthhw_themehw_context
Known intended uses:
hw_struggle
Maps Formation Coordinates/content to human struggle entry points.
Examples conceptually include:
fear
shame
anger
loneliness
temptation
hw_growth
Maps Formation Coordinates/content to growth goals.
Examples include:
courage
wisdom
faith
brotherhood
leadership
hw_theme
Thematic classification for Formation content.
Exact current term inventory should be audited.
hw_context
Contextual classification.
Exact current term inventory should be audited.
Do not rename, merge, or delete these taxonomies during the initial theme rebuild.
Custom fields / post meta
Advanced Custom Fields is installed.
However:
I cannot accurately state that I personally created a specific ACF field group or provide a verified complete list of ACF fields.
The Formation Matrix plugin may use WordPress post meta/custom metadata internally.
Claude should inventory:
ACF field groups
registered meta
hw_coordinate post meta
WP Grid Builder field dependencies
shortcode/query dependencies
before changing the content model.
The theme rebuild should initially consume the current data model rather than redesign it.
Template Files — What Each One Does
templates/front-page.html
This is the most important file to understand.
It currently renders the homepage almost entirely from theme patterns:
<!-- wp:pattern {"slug":"herowithin/cinematic-hero"} /--><!-- wp:pattern {"slug":"herowithin/home-orientation"} /--><!-- wp:pattern {"slug":"herowithin/home-seeker"} /--><!-- wp:pattern {"slug":"herowithin/home-becoming"} /--><!-- wp:pattern {"slug":"herowithin/home-doorways"} /--><!-- wp:pattern {"slug":"herowithin/matrix-invitation"} /--><!-- wp:pattern {"slug":"herowithin/home-closing"} /-->
Critical: it does not contain a normal wp:post-content block for the Home page.
That is a major reason the homepage content visible to visitors is not actually available in the normal Home page editor.
This architecture should probably not be copied into the clean rebuild.
The visual composition can be preserved while the content should be made editable.
templates/page.html
Standard page template.
Uses:
governed HeroWithin header
page title
normal post/page content
HeroWithin footer
constrained content width and HeroWithin spacing
templates/single.html
Standard post template.
Adds:
HeroWithin header/footer
post title
featured image
reading-width content area
templates/single-hw_coordinate.html
Specific template for Formation Coordinates.
Uses:
HeroWithin header/footer
Formation Hero pattern
coordinate post content
Next Faithful Step pattern
This is an important specialized template to preserve conceptually.
templates/archive.html
Custom archive presentation.
It uses:
HeroWithin header/footer
archive title
query of posts
three-column card grid
featured image
linked title
excerpt
pagination
Claude should verify whether this generic archive query is appropriate for all existing archive contexts.
templates/search.html
Custom search results page.
Contains:
query title
search field
relevance-oriented query
titles/excerpts
pagination
HeroWithin header/footer
templates/404.html
HeroWithin-specific not-found experience.
Current copy:
The trail ends here.
Includes search and guidance back toward Explore.
Custom template files
The following are registered through theme.json:
hw-landinghw-formation-hubhw-editorialhw-narrativehw-practicehw-journeyhw-campfire
At the moment these files are structurally very similar.
They generally provide:
HeroWithin header
title
featured image
post content
Next Faithful Step pattern
HeroWithin footer
Their conceptual roles are useful, but the current implementations are not deeply differentiated yet.
hw-landing.html
Intended for public doorway/landing pages.
hw-formation-hub.html
Intended for Formation topic/hub content.Registered for pages and hw_coordinate.
hw-editorial.html
Intended for teaching/theological/editorial content.
hw-narrative.html
Intended for story/Chronicle-style narrative.
hw-practice.html
Intended for practices and application content.
hw-journey.html
Intended for Journey-style formation experiences.
hw-campfire.html
Intended for brotherhood/discussion/Campfire content.
Claude should preserve these conceptual distinctions, but it does not need to preserve seven almost-identical template files if a cleaner template-variation architecture can achieve the same result.
Header and Footer
parts/header-herowithin.html
This is the primary governed HeroWithin header currently used by theme templates.
It hardcodes the text wordmark:
HeroWithin
and the six primary navigation links:
ExploreBecomeTruthStoriesPracticeBrotherhood
It uses WordPress mobile navigation overlay behavior.
Important issue
Navigation links are currently embedded directly in the template-part file rather than relying entirely on a centrally editable navigation data structure.
Claude should consider normalizing this so the menu can be safely maintained without editing theme source.
parts/footer-herowithin.html
Contains four columns:
1. HeroWithin mission statement
2. Explore links
3. Find Your Way links
4. About links
The Find Your Way section includes:
Not Sure What You Believe?
Formation Matrix
Struggles & Growth Goals
Some About entries are currently plain text rather than links.
Generic header.html / footer.html
Earlier/generic HeroWithin versions also remain in the theme.
The later *-herowithin.html versions were introduced partly to avoid existing Site Editor database overrides of generic header/footer silently superseding the packaged design.
This duplication is another thing Claude can simplify once it has audited Site Editor overrides.
Current Theme PHP Functionality
The v0.1.7 child theme's functions.php is small.
There are no custom forms, payments, CRM integrations, or complex custom database queries in the theme itself.
1. Pattern category registration
The theme registers these block-pattern categories:
herowithin-orientationherowithin-formationherowithin-storyherowithin-practiceherowithin-discovery
Conceptually this organizes reusable HeroWithin blocks by function.
2. Theme support
The theme adds:
add_theme_support( 'title-tag' );add_theme_support( 'responsive-embeds' );add_theme_support( 'editor-styles' );add_editor_style( 'assets/css/herowithin.css' );
Purpose:
proper page title support
responsive embeds
block-editor styling
attempt to make editor styling resemble frontend styling
3. Font and stylesheet loading
The theme loads:
Libre Caslon Text
Work Sans
Twenty Twenty-Five parent stylesheet
HeroWithin CSS
Fonts come from Google Fonts.
There are no bundled custom font files in the current theme.
Important editor diagnostic lead
The same frontend asset-loading function is hooked into:
wp_enqueue_scripts
and:
enqueue_block_editor_assets
Therefore the block editor is receiving:
Google Fonts
parent-theme stylesheet
the entire HeroWithin frontend CSS file
This is a specific item Claude should test during editor-crash diagnosis.
I am not claiming that this causes the crashes.
It is simply an unusually broad editor enqueue and should be isolated during troubleshooting.
Formation Matrix Custom Functionality
Most Formation Matrix behavior lives in the separate:
HeroWithin Formation Matrix Core
plugin, not in the child theme.
Last verified version:
0.7.2
Known responsibilities include:
hw_coordinate custom post type
144 Formation Coordinates
Formation Matrix rendering
Formation-related taxonomies
Matrix discovery
integration with WP Grid Builder
shortcode rendering used on the Matrix page
struggle/growth discovery architecture
The exact plugin source should be imported into Git and audited separately from the theme.
Do not move Matrix business/domain logic into the child theme merely because Claude is rebuilding the theme.
Theme responsibility should remain presentation.
Current Design System
Where design values currently live
The design system is split between:
1. theme.json
2. assets/css/herowithin.css
3. block markup/pattern classes
4. some inline block style attributes
5. potentially historical WordPress Custom CSS / Global Styles database state
The rebuild should consolidate these more cleanly.
Colors
Current provisional palette from theme.json:
Ink      #171713Paper    #F4F0E7Stone    #D8D1C4Forest   #34483AEmber    #965632Brass    #A88952Slate    #50616AWhite    #FFFFFF
These are labeled provisional in the theme because broader HeroWithin visual-standard work exists separately.
The overall visual direction is approved:
cinematic realism
grounded masculinity
natural environments
restrained effects
reverence without cliché
formation rather than spectacle
warm paper backgrounds
dark forest/ink surfaces
subtle ember/brass accents
Claude should preserve the current look while allowing future token replacement.
Fonts
Editorial/display
Libre Caslon Text
Fallback:
Georgia, serif
Used for:
major headings
display questions
editorial/story tone
Interface/body
Work Sans
Fallback:
system-ui-apple-systemBlinkMacSystemFontSegoe UIsans-serif
Used for:
paragraphs
buttons
navigation
labels
UI
The fonts are currently loaded remotely from Google Fonts.
No self-hosted custom font files are currently bundled.
Typography scale
Current theme.json presets:
XS      0.8125remSmall   0.9375remBody    1.0625remLarge   1.25remXL      clamp(1.5rem, 2vw, 2rem)2XL     clamp(2rem, 4vw, 3.25rem)Hero    clamp(2.75rem, 7vw, 6.25rem)
Default body line height:
1.65
Heading line height:
1.12
Later CSS overrides some homepage display typography.
Spacing scale
Current spacing presets:
HW 1    0.5remHW 2    0.75remHW 3    1remHW 4    1.5remHW 5    2remHW 6    3remHW 7    4.5remHW 8    6rem
Layout widths
theme.json:
contentSize: 760pxwideSize: 1320px
Later homepage CSS introduced:
--hw-page-gutter: clamp(1.5rem, 4vw, 4rem);--hw-home-max: 1500px;
This was added because the inherited constrained WordPress layout kept making the homepage cards too narrow.
That concept is useful; the repeated !important overrides used to achieve it are not.
Buttons
Current default concept:
Forest background
White text
Work Sans
semibold
6px radius
approximately 0.8rem 1.2rem padding
Accessibility styling
Current CSS includes an explicit visible keyboard focus state for:
links
buttons
inputs
selects
text areas
WordPress button links
This behavior should be preserved.
3. What's Broken
This section is especially important.
A. The homepage content visible on the site is not present in the normal page editor
Confirmed.
The owner reports:
The homepage content is missing from the editor even though it appears live.
The owner can see the homepage on the public site but cannot select/edit its visible sections from the page editor.
Why this happens
This is directly explained by the current theme architecture.
front-page.html does not render the Home page's normal post-content.
Instead, it directly inserts theme-file patterns:
<!-- wp:pattern {"slug":"herowithin/cinematic-hero"} /--><!-- wp:pattern {"slug":"herowithin/home-orientation"} /--><!-- wp:pattern {"slug":"herowithin/home-seeker"} /--><!-- wp:pattern {"slug":"herowithin/home-becoming"} /--><!-- wp:pattern {"slug":"herowithin/home-doorways"} /--><!-- wp:pattern {"slug":"herowithin/matrix-invitation"} /--><!-- wp:pattern {"slug":"herowithin/home-closing"} /-->
Therefore the homepage visitor sees content coming from theme files, while the normal Home page editor is editing a different database content field.
This is a confirmed architectural problem for the desired workflow.
Rebuild requirement
Preserve the visual composition.
Do not preserve this editability problem.
The next theme should allow appropriate homepage copy/blocks to be edited in WordPress without editing PHP/theme source.
B. Page editing and saving crashes
Confirmed by owner.
The problem is broader than the homepage.
The owner reports:
"The page editor either won't let me save changes or crashes every time I try."
This has prevented manual changes after v0.1.7 was installed.
Root cause
Unknown.
I do not have evidence sufficient to name a plugin or theme as the cause.
Claude needs to reproduce it systematically.
Recommended isolation sequence:
1. Take a Pressable backup/snapshot.
2. Reproduce the crash with browser devtools open.
3. Capture:
JS console
network failures
WordPress REST errors
PHP logs
Pressable logs
4. Test whether the issue follows:
the HeroWithin theme
specific plugins
a specific post type
editor stylesheet loading
Site Editor overrides
REST/API permissions
5. Test on a staging/clone where plugins can be safely isolated.
C. Trail Marker editing crashes
Confirmed by owner.
The owner has attempted to edit Trail Marker pages.
The editor crashes rather than allowing reliable editing/saving.
This indicates that the problem is not just the homepage's pattern-only front-page template.
There are likely two separate problems:
Problem 1 — Homepage architecture
Confirmed:
Homepage content comes from theme patterns rather than Home page content.
Problem 2 — Gutenberg/editor stability
Confirmed symptom:
Page editor/save crashes, including Trail Marker pages.
Exact technical cause:
Unknown.
Claude should not assume fixing the homepage template alone will fix the editor crashes.
D. No other known errors
The owner reports:
No other known errors beyond the crashing when trying to edit or save pages.
There are no currently reported:
fatal PHP errors
blank white pages
Matrix failures
known search failures
reported plugin fatal conflicts
reported broken frontend rendering beyond the previously discussed layout defects
Claude should nevertheless run a fresh audit.
Current Live Workarounds / Fragile Areas
1. Homepage is effectively hardcoded through theme patterns
This is the biggest live workaround.
The design works visually because the full homepage content is coming from theme-controlled pattern files.
That means normal page editing does not control the rendered homepage.
Preserve the design; replace the implementation.
2. Large accumulated CSS override layer
assets/css/herowithin.css is approximately 27 KB and contains multiple generations of homepage fixes.
Later versions repeatedly override earlier rules.
Examples include repeated definitions for:
.hw-home-orientation
.hw-home-becoming
.hw-home-doorways
.hw-matrix-invitation
.hw-becoming-steps
.hw-doorway-grid
hero layout
responsive breakpoints
The latest section uses multiple !important declarations to force wide sections outside WordPress's constrained layout.
This made the screenshots better but created brittle CSS.
Claude should preserve the visual intent, not the accumulated cascade.
3. Hero text uses white-space: nowrap on desktop
The latest v0.1.7 fix used:
.hw-home-hero h1 {    white-space: nowrap;}
This was introduced because the owner wanted:
Building Men.
Building Brothers.
Building Legacy.
to stay as complete phrases rather than awkwardly wrap.
It solved one problem but can introduce width pressure at intermediate viewports.
A cleaner rebuild should solve this through intentional grid sizing and fluid typography rather than depending primarily on nowrap.
4. Multiple layers of header/footer implementation exist
Both of these exist:
header.htmlheader-herowithin.html
and:
footer.htmlfooter-herowithin.html
The governed versions were added to avoid Site Editor database overrides of generic parts unexpectedly replacing packaged theme parts.
That was a practical workaround, not an ideal final architecture.
Claude should inspect database template-part overrides and normalize this.
5. Hardcoded navigation exists in theme parts
The six navigation links are currently embedded in header-herowithin.html.
The footer also embeds navigation URLs directly.
That gives reliable theme rendering, but it is not ideal for ongoing manual content management.
A clean rebuild should determine the proper boundary between:
theme-defined navigation presentation
WordPress-managed navigation data
6. Historical Additional CSS may remain in the database
Historical Custom CSS post:
ID 354
was created before the child-theme approach matured.
It was tied to Twenty Twenty-Five theme mods.
Its current effect is unknown.
Claude should inspect it before deleting it.
7. The Home page may still contain older/stale database content
Page 356 previously received a separate homepage prototype through MCP.
The current front-page.html ignores normal Home page content in favor of theme patterns.
Therefore there may be old content sitting in post_content that is not currently visible.
Do not assume that database content is authoritative.
Compare it with the live visual design and current governed architecture.
8. README is inconsistent
The actual style.css correctly says:
Version: 0.1.7-draft
but README-HEROWITHIN.md still begins:
HeroWithin Block Child Theme — v0.1.5 Draft
and then appends v0.1.7 notes later.
This is a small but representative sign of iterative patching.
The rebuild should start with clean version documentation.
Editor Crash Diagnostic Suspects — NOT Confirmed Causes
Claude should investigate these but must not treat them as proven.
Full frontend CSS is loaded into Gutenberg
The same enqueue function runs on:
enqueue_block_editor_assets
and loads:
Google Fonts
parent theme frontend stylesheet
full HeroWithin CSS
This should be tested.
Site Editor database overrides
Block themes can store modified templates and template parts in the WordPress database.
These may supersede theme files and cause confusing mismatches.
Audit:
wp_template
wp_template_part
wp_global_styles
navigation objects
theme mods
Plugin/editor conflicts
Because Trail Marker editing also crashes, plugins or REST/editor interactions must be tested.
Do not deactivate things randomly on the live site without a backup.
4. Content and Data
Existing content must be preserved
Confirmed by owner.
This is not a blank-site redesign where content will simply be re-entered later.
The rebuild should preserve the existing WordPress content/data and replace/refactor the theme presentation layer around it.
Do not delete or recreate existing content merely to make the new theme easier.
Preserve:
pages
posts
Trail Markers
Formation Coordinates
taxonomies
taxonomy terms
metadata/custom fields
WordPress IDs
slugs
URLs where practical
media
featured images
published content
draft content
existing Matrix data
review/revision history where present
Formation Coordinates
There were last verified:
144 published hw_coordinate records
These form the implemented Formation Matrix.
They must be preserved.
Do not regenerate them unless an audit proves something is missing.
Trail Markers
Trail Marker content already exists on WordPress.
The owner has attempted to edit these pages and encounters editor crashes.
Preserve all of them.
Do not rewrite them from theme files.
Their approved article content comes from governed source/publication packages, not from whatever is easiest to reconstruct from the frontend.
Known pages from earlier audit
Historical verified examples include:
Home — page ID 356
Explore Formation — page ID 315
The HeroWithin Formation Matrix — page ID 162
Privacy Policy — page ID 3, previously draft
Sample Page — page ID 2, previously still present
These IDs should be re-verified.
The Sample Page/default WordPress content should not be deleted merely because this document says it existed.
Audit first.
Hope Page
The Hope Page prototype was approved as a design/content direction during the website work.
Claude should preserve any current Hope page/content if it exists.
I am not sufficiently certain of its current WordPress ID or exact live implementation to provide one.
Audit before changing it.
Third-Party Integrations
Pressable
Confirmed hosting platform.
Capabilities previously discussed include:
Sandbox
Staging
Production
backups/restore
logs
caching/platform performance
security
Pressable MCP
Use Pressable as part of the safe development/recovery workflow.
AI Engine + OpenAI
AI Engine is configured with OpenAI credentials.
The owner previously enabled/explored:
Workspace
MCP
Public API
AI Keywords search
Vision
PHP API
REST API
developer tools/task system
WordPress MCP endpoint previously shown
https://discoverherowithin.com/wp-json/mcp/v1/http
AI Engine REST base previously shown
https://discoverherowithin.com/wp-json/mwai/v1/
Screenshots showed endpoints including:
simpleTextQuerysimpleImageQuerysimpleChatbotQuerysimpleVisionQuerysimpleJsonQuerysimpleTranscribeAudiomoderationChecklistChatbotssimpleAuthCheck
Authentication uses a bearer token.
Never commit that token to Git.
Vision status
Vision originally failed due to the OpenAI account/API configuration.
The owner subsequently fixed that configuration.
The owner considers Vision fixed.
ChatGPT was unable to independently complete a final verification because its WordPress MCP connector later became unavailable/intermittent.
Claude should perform a new live Vision test.
AI Keywords search
AI Engine frontend search was configured to use:
AI Keywords
Website context entered into AI Engine was:
"This is a website for Christian men seeking spiritual growth, formation, and brotherhood."
Preserve the concept unless Claude has a reason to improve it.
Google Fonts
The theme makes an external request to Google Fonts for:
Libre Caslon Text
Work Sans
That is an external asset dependency, not a CRM/business integration.
Claude may self-host these later if performance/privacy considerations justify it.
No other intentional integrations
The owner has explicitly confirmed that no additional integrations were intentionally connected.
Specifically, there are no known intentional connections to:
Google Analytics
Google Search Console
Mailchimp
ConvertKit
other email marketing systems
external CRM
payment processor
Stripe
PayPal
external form service
Cloudflare
separate external search service
other business APIs
Jetpack and Akismet are installed plugins, but that should not be interpreted as confirmation that an external Jetpack/Akismet service connection is actively configured.
Audit before assuming.
5. Assets
Logo
There is no finalized HeroWithin logo for the website.
The owner has explicitly confirmed:
Logo not finalized.
The current header uses the text:
HeroWithin
as a wordmark.
Claude should not treat that text treatment as a finalized logo asset.
Do not invent a permanent logo during the theme rebuild.
Homepage hero image
The current v0.1.7 child theme contains:
assets/images/homepage-hero-clean.png
This is the current homepage design asset.
It depicts the cinematic HeroWithin mountain scene with men/campfire.
Approximate file size in the packaged theme:
3.31 MB
Claude should optimize responsive delivery rather than necessarily serving the original multi-megabyte file directly to every mobile visitor.
Preserve the original source before optimization.
WordPress media variants
Earlier WordPress audits identified mountain hero variants at media IDs:
322323
Alt text was set to:
Cinematic mountain landscape at dusk for the HeroWithin journey
Claude should verify the current media library rather than assuming these remain the final asset IDs.
Theme screenshot
Theme package also includes:
screenshot.png
This is the WordPress theme preview image, not a public site content asset.
Fonts
There are no custom font binaries inside the current child theme.
Fonts are loaded from Google Fonts.
Broader visual references
HeroWithin has broader visual standards and Figma work elsewhere in the project.
Those may be used as design references.
However, the website theme should not assume that every app/mobile visual asset is automatically a website asset.
The current homepage visual direction itself has already been owner-approved.
CSS Behaviors to Preserve Conceptually
These snippets illustrate behaviors the new theme should preserve.
Do not assume Claude should copy the code verbatim.
The current CSS has accumulated enough overrides that a clean rewrite is preferable.
A. Wide homepage content frame
Purpose: prevent WordPress's default constrained width from making homepage discovery cards narrow.
:root {    --hw-page-gutter: clamp(1.5rem, 4vw, 4rem);    --hw-home-max: 1500px;}.hw-home-orientation,.hw-home-becoming,.hw-home-doorways,.hw-matrix-invitation {    width: min(        calc(100vw - (2 * var(--hw-page-gutter))),        var(--hw-home-max)    );    margin-inline: auto;}
Preserve: generous wide homepage sections.
Rewrite: avoid unnecessary !important declarations.
B. Hero split layout
Purpose: keep men/image on the left and text on the right.
Current conceptual implementation:
.hw-home-hero__content {    grid-template-columns:        minmax(0, 46vw)        minmax(42rem, 58rem);}
The image uses dark gradients behind the right-hand text.
Preserve: right-side text reading zone, visible men, strong text contrast.
Improve: create cleaner responsive sizing for laptop/tablet widths.
C. Orientation cards
Purpose: make Growth and Struggle cards equal height and wide enough for text.
.hw-orientation-paths {    display: grid;    grid-template-columns: repeat(2, minmax(0, 1fr));    align-items: stretch;}.hw-path-card {    min-height: clamp(20rem, 25vw, 24rem);}
Preserve: equal-height two-column desktop design.
Improve: typography should fit naturally without oversized words or awkward wrapping.
D. Identity → Formation → Maturity
Purpose: align three formation cards with arrows on desktop.
.hw-becoming-steps {    display: grid;    grid-template-columns:        minmax(18rem, 1fr)        auto        minmax(18rem, 1fr)        auto        minmax(18rem, 1fr);    align-items: stretch;}
Preserve: three balanced cards with arrows.
On mobile:
stack vertically
rotate/reinterpret arrows
preserve logical reading order
E. Four Ways layout
Purpose: keep Truth, Stories, Practice and Brotherhood wide enough.
.hw-doorway-grid {    display: grid;    grid-template-columns: repeat(4, minmax(0, 1fr));}
Desired responsive behavior:
four across when there is genuinely enough width
two × two at medium widths
one column on mobile
Do not force four narrow cards onto screens that cannot support them.
F. Matrix invitation
Purpose: display three Matrix views side-by-side on desktop.
.hw-matrix-card-grid {    display: grid;    grid-template-columns: repeat(3, minmax(0, 1fr));    align-items: stretch;}
The owner explicitly preferred the earlier version where all three larger-map cards appeared in a single desktop row.
Preserve this.
G. Keyboard focus
Preserve a clear focus treatment conceptually similar to:
:where(    a,    button,    input,    select,    textarea,    .wp-block-button__link):focus-visible {    outline: 3px solid currentColor;    outline-offset: 4px;}
Exact styling may change.
The requirement is strong keyboard visibility.
PHP Concepts Worth Preserving
Pattern categories
Concept:
register_block_pattern_category(    'herowithin-formation',    array( 'label' => 'HeroWithin — Formation' ));
This keeps reusable HeroWithin patterns organized in Gutenberg.
Theme supports
Concept:
add_theme_support( 'title-tag' );add_theme_support( 'responsive-embeds' );add_theme_support( 'editor-styles' );
Preserve standard modern WordPress behavior.
Asset loading
Current concept:
wp_enqueue_style(    'herowithin-fonts',    'https://fonts.googleapis.com/css2?...');
and separate parent/child CSS loading.
Preserve the separation of parent and child assets.
However, reconsider loading the entire frontend stylesheet inside Gutenberg.
6. Anything Else — Lessons, Reversals, and Mistakes to Avoid
1. Rebuild the implementation, not the design
The current homepage design direction is good and owner-approved.
The problem is increasingly the implementation.
Claude should not interpret "rebuild theme from scratch" as:
redesign the site from scratch.
The correct interpretation is:
preserve the approved visual/UX direction while rebuilding the underlying child theme cleanly, editably, responsively, and under Git.
2. Do not continue adding CSS patches to v0.1.7
v0.1.7 is useful as a visual/reference artifact.
It should not become the permanent codebase merely through more CSS appended to the bottom of herowithin.css.
The cascade already contains repeated generations of overrides.
Claude should use it as a specification/reference and start a clean codebase.
3. WordPress content should be editable from WordPress
One mistake in the current implementation was moving too much real homepage content into PHP pattern files referenced directly by front-page.html.
That solved deployment consistency but defeated the owner's ability to edit the page normally.
New architecture should distinguish:
Theme responsibility
visual system
layout
components
block styles
templates
responsive behavior
WordPress content responsibility
headings
paragraphs
CTA text
links
editable page sections
governed published copy where appropriate
A content editor should not need to modify PHP to change ordinary page copy.
4. Preserve IDs and content instead of recreating everything
There is already meaningful WordPress data.
Avoid the shortcut:
"I'll just rebuild all the pages."
Instead:
inventory content
preserve IDs where practical
preserve slugs
preserve taxonomies
preserve Matrix records
reattach clean templates
This is a theme rebuild, not a data wipe.
5. Do not confuse WordPress with canon
WordPress is downstream presentation.
When content disagrees with:
approved Google Docs
Airtable
owner-approved theology
governance records
do not silently decide that the WordPress wording must be right because it is public.
Surface the discrepancy.
6. Do not generate theology from the Matrix structure
A Matrix coordinate or intersection does not authorize Claude to invent content.
This is especially important for:
People of God Matrix
Kingdom Matrix
relationship combinations
formation topics
The structure helps organize governed truth.
It does not create doctrine.
7. Do not expose internal complexity unnecessarily
The visitor should not need to understand:
144-cell architecture
coordinate IDs
CPT names
taxonomy architecture
WordPress internals
to use the site.
Continue translating complexity into questions such as:
Where are you today?
Who are you becoming?
What are you struggling with?
Where do you want to grow?
8. Avoid duplicating content into theme files
The HeroWithin architecture is meant to be relational.
If the same approved content appears in:
a Formation Topic
a Trail Marker
a Journey
a theological page
a homepage excerpt
prefer references/relationships/reusable rendering over uncontrolled duplicated copies.
9. v0.1.4 versus v0.2.0 was an important lesson
v0.1.4
Strength:
better/full site feature structure
Weakness:
cards and layout too narrow/inconsistent
v0.2.0
Strength:
cleaner card sizing
more reliable box rendering
Weakness:
did not include the latest/full homepage functionality
The owner explicitly wanted:
keep v0.1.4's richer structure and merge in the useful layout improvements from v0.2.0.
That led to v0.1.5 and later versions.
Claude should preserve both lessons:
do not lose features while cleaning code
do not accept broken layout just to preserve old code
10. The owner wants autonomous development
Do not repeatedly stop and ask:
Should I adjust this padding?
May I refactor this CSS?
Can I fix this responsive bug?
Can I change this noncanonical template markup?
The owner has explicitly authorized ordinary reversible development work during build mode.
Use:
Inspect → Improve → Verify → Report
Stop for owner decisions only when they are genuinely architectural, canonical, destructive, strategic, or difficult to reverse.
11. Use Git from the beginning of the rebuild
The next implementation should not depend on ZIP files being the only version history.
Recommended minimum:
Git repository
clean baseline
feature branches or small commits
meaningful commit messages
tags/releases
rollback
no secrets committed
child theme and Matrix plugin source tracked separately or clearly organized
The current ZIP progression is:
v0.1.4v0.2.0 experimental branchv0.1.5v0.1.6v0.1.7-draft
Current active version:
v0.1.7-draft
12. Use browser automation/Playwright as soon as practical
A future HeroWithin QA & Publishing Agent was already planned.
Playwright should eventually test:
desktop
tablet
mobile
homepage
menus
links
CTAs
Matrix
Explore Formation
Trail Markers
console errors
responsive overflow
accessibility basics
screenshot regression
editor functionality where automation allows
publication verification
Claude Code is a better environment for this than the prior ZIP-based ChatGPT workflow.
13. The current highest-priority technical problem is not visual polish
The site now looks substantially better than it did during early iterations.
The highest-priority technical problem at takeover is:
WordPress content editing is unreliable or impossible.
Specifically:
homepage content is not represented in the page editor
page saves crash/fail
Trail Marker editing crashes
Claude should make the site editable and maintainable before investing heavily in small cosmetic refinements.
Recommended Claude Code Takeover Sequence
Phase 1 — Protect what exists
Before editing:
1. Create/verify Pressable backup.
2. Export or snapshot database.
3. copy active child theme.
4. copy Formation Matrix plugin source.
5. inventory media/content.
6. inventory Site Editor database overrides.
7. capture screenshots of current site.
Phase 2 — Establish Git
Create a clean repository.
Import:
current v0.1.7 as a historical/reference tag
new clean child theme as the development branch
Matrix plugin source separately or in a clear plugin directory
Do not commit:
passwords
bearer tokens
OpenAI keys
Pressable secrets
Phase 3 — Diagnose editor crashes before rebuilding around assumptions
Test:
Gutenberg console
REST calls
PHP logs
network errors
browser console
theme isolation
plugin isolation on staging
editor stylesheet loading
Site Editor overrides
Document the actual root cause.
Phase 4 — Build the new child theme
Use Twenty Twenty-Five unless the audit reveals a strong technical reason to change parent themes.
Preserve:
design
typography
palette
homepage sections
Formation UX
Matrix templates
navigation architecture
Trail Marker experience
Replace:
hardcoded homepage content architecture
repeated CSS patches
unnecessary !important
duplicate header/footer workarounds
fragile width hacks
editor-breaking implementation
Phase 5 — Reconnect existing content
Do not recreate content unnecessarily.
Attach the existing:
Home
Trail Markers
Matrix
Explore Formation
Formation Coordinates
other pages
to the new theme.
Phase 6 — Visual QA
Compare against the current approved visual direction at:
large desktop
laptop
tablet landscape
tablet portrait
common phone sizes
Specific acceptance criteria:
Hero
men remain visible
text is right-side
all white text readable
Building Men / Building Brothers / Building Legacy retain intentional line structure
no horizontal overflow
Where Are You Today?
two balanced desktop cards
equal height
no malformed words
sensible typography
Becoming
three aligned desktop cards
equal visual weight
arrows aligned
clean mobile stack
Four Ways
wide readable cards
four-across only when space supports it
no cropped heading words
Larger Map
three cards side-by-side on desktop
equal visual treatment
stack cleanly on narrow screens
Phase 7 — Verify editing
Before declaring the theme ready, the owner must be able to:
1. open Home in WordPress
2. see/edit intended content
3. save successfully
4. reopen and see saved changes
5. edit a Trail Marker
6. save a Trail Marker
7. edit an ordinary page
8. use Site Editor where appropriate without crashes
This is a release acceptance requirement.
Final Non-Negotiable Guardrails for Claude
1. WordPress is not canon.
2. Preserve existing WordPress content/data.
3. Do not delete or regenerate the 144 Formation Coordinates.
4. Do not invent theology.
5. Do not redesign the approved homepage just because the theme code is being rebuilt.
6. Keep public complexity simple.
7. Maintain the six-door IA:Explore | Become | Truth | Stories | Practice | Brotherhood
8. Preserve:Not Sure What You Believe?andFormation Matrixas special entry paths.
9. Preserve:Identity → Formation → Maturity
10. Keep normal WordPress comments off.
11. Do not treat reviewer feedback as canonical content.
12. Keep Matrix/domain logic out of the presentation theme.
13. Build mobile-first.
14. Include accessibility and keyboard behavior.
15. Use Git and rollback.
16. Do not commit credentials.
17. Fix ordinary reversible development issues independently.
18. Ask the owner only for genuine strategic/canonical/destructive decisions.
19. Make ordinary content editable in WordPress.
20. Before declaring the rebuild finished, prove that the editor no longer crashes.
End of Handoff Document
