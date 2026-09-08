# Session discipline — Git + Pressable

Applies to every Claude Code session, on either machine (Dave's or Claude's).

## Every session start

1. `git status` — confirm no uncommitted local changes are lurking.
2. `git pull` — get the latest from the repo.
3. If step 1 showed unpushed local changes, resolve them before starting new work.

## Every session end (before switching machines)

4. `git status`, commit anything meaningful (even WIP), `git push`.

## Pressable Staging discipline

- Staging always reflects the **last pushed commit** — treat it as downstream of Git, never
  ahead of it.
- If either the owner or Claude edits directly in wp-admin on Staging, pull that change back
  into Git (SFTP diff or Pressable Git export) **before** the next code session starts.
- Before pushing repo changes to Staging, check Pressable's dashboard for uncommitted
  wp-admin edits first.

## Pressable Git deploy (Staging) — keep it scoped to the theme

Staging deploys from `kingdomview/epicstory` via Pressable's GitHub Integration. The two path
fields MUST stay scoped to the theme:

- **Repository Directory to Deploy From:** `themes/epicstory`
- **Deployment Path:** `wp-content/themes/epicstory`
- Branch: `main`

Why it matters: Pressable's deploy **mirror-deletes** within the deployment path. If the path
is widened to `wp-content` (or root), a deploy will delete anything under it that isn't in the
repo — this repo has no plugins/uploads, so a wide path wipes them. On 2026-09-08 a
`wp-content`/`wp-content` misconfig deleted WP Grid Builder's `includes/` and took Staging down
with a PHP fatal. Recovery was a Pressable backup restore. Never widen these fields.

## Production push gate

- Only from the production branch, only after **both** owner and Claude have reviewed Staging.
- Never a direct push from a feature branch to production.

## Branching

- One change → one branch → one PR. Branch names: `feature/<slug>` or `fix/<slug>`.
- PRs open as drafts. Never commit secrets (Pressable, OpenAI/AI Engine bearer tokens,
  WordPress credentials).

## Never commit

- `wp-config.php`, `.env` files, `*.key`/`*.pem`, any bearer token or password.
- The WordPress MCP endpoint bearer token, the AI Engine / OpenAI keys, Pressable secrets.
  (These are enforced by `.gitignore`, but stay alert — a token pasted into a doc or comment
  bypasses it.)
