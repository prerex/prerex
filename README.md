<p align="center">
  <img src="prerex-logo.png" alt="Prerex" width="350">
</p>

<h3 align="center">Your WordPress site is invisible to Google.<br>Fix it in 2 minutes.</h3>

<p align="center">
  Prerex renders your pages in the cloud and serves clean, complete HTML to search engines, social bots, and AI crawlers. Install the plugin, activate it, done.
</p>

<p align="center">
  <a href="https://prerex.io/angel"><strong>🚀 First 250 users get Pro free for 6 months → Join the launch</strong></a>
</p>

<p align="center">
  <a href="https://prerex.io"><img src="https://img.shields.io/badge/website-prerex.io-7c3aed" alt="Website"></a>
  <a href="https://github.com/prerex/prerex/issues"><img src="https://img.shields.io/github/issues/prerex/prerex" alt="Issues"></a>
  <img src="https://img.shields.io/badge/WordPress-5.8%2B-21759b?logo=wordpress" alt="WordPress 5.8+">
  <img src="https://img.shields.io/badge/PHP-7.4%2B-777bb4?logo=php" alt="PHP 7.4+">
</p>

---

<p align="center">
  <strong>29+ bots detected</strong> · <strong>~200ms response</strong> · <strong>Zero config</strong> · <strong>Works with any theme & page builder</strong>
</p>

---

## Why Prerex?

Modern WordPress sites are full of JavaScript — page builders, lazy loading, WooCommerce, dynamic widgets. **Google, Bing, Facebook, and AI crawlers don't always see your actual content.** That means lost rankings, broken social previews, and invisible pages.

Prerex fixes this. When a bot visits your site, it gets a fully-rendered version of your page — every image loaded, every script executed, all content visible. **Your visitors notice nothing. Bots see everything.**

## How It Works

```
       Visitor arrives
            │
     ┌──────┴──────┐
     │              │
   Human           Bot
     │              │
  Your site      Prerex serves
  as usual       rendered HTML
                 from cloud
                     │
              Complete content
              in ~200ms
```

## Features

| | What it does |
|---|---|
| **Zero config** | Install, activate, done. No server setup, no code changes. |
| **Rex Sense** | Adaptive rendering — waits for your content to fully load before capturing. |
| **29+ bots** | Google, Bing, Facebook, Twitter, LinkedIn, Pinterest, GPTBot, ClaudeBot, and more. |
| **DNS verification** | Confirms bots are genuine. Blocks spoofed user-agents. |
| **HTML cleanup** | Strips unnecessary scripts and styles — pages up to 80% lighter. |
| **Cache compatible** | Works alongside WP Super Cache, WP Rocket, W3 Total Cache, LiteSpeed — no conflicts. |
| **Social previews** | Facebook, Twitter, LinkedIn see your real content and images. |
| **AI crawlers** | GPTBot, ClaudeBot, PerplexityBot get your complete content. |
| **Works with everything** | Elementor, Divi, WPBakery, Bricks, WooCommerce, multisite, any theme. |

## Quick Start

1. Download the plugin from [prerex.io](https://prerex.io)
2. In WordPress admin: **Plugins > Add New > Upload Plugin**
3. Upload the ZIP, activate, done. No API keys, no configuration.

## Plans

| | Free | Pro |
|---|---|---|
| **Price** | **Free forever** | **EUR 9.99/mo** or EUR 99/yr |
| Renders | 1,000/month | Unlimited |
| Sites | 1 | Unlimited |
| SEO bots (Google, Bing) | Yes | Yes |
| Social bots (Facebook, Twitter, LinkedIn) | — | Yes |
| AI bots (GPTBot, ClaudeBot) | — | Yes |
| Rex Sense | — | Yes |
| HTML cleanup | — | Yes |
| Custom bot policy | — | Yes |
| Cache TTL | 12h | 48h |

<p align="center">
  <a href="https://prerex.io/angel"><strong>🚀 First 250 users get Pro free for 6 months →</strong></a>
</p>

## Requirements

- WordPress 5.8+
- PHP 7.4+

## FAQ

<details>
<summary><strong>WordPress already renders HTML. Why do I need this?</strong></summary>
<br>
WordPress generates server-side HTML, but modern sites are far from "just HTML." Page builders inject heavy JavaScript, lazy loading hides content, WooCommerce loads prices via API calls. The result: what Google sees is NOT what your visitors see.
</details>

<details>
<summary><strong>Doesn't Google render JavaScript?</strong></summary>
<br>
Yes, but it's delayed (hours to weeks), has a limited budget (not all pages get rendered), and isn't perfect with complex sites. Other bots — Bing, Facebook, LinkedIn, AI crawlers — mostly don't render JavaScript at all.
</details>

<details>
<summary><strong>Does it slow down my site?</strong></summary>
<br>
No. Prerex only activates for bots — never for human visitors. Bot requests are served from cache in ~200ms.
</details>

<details>
<summary><strong>Does it work with my cache plugin?</strong></summary>
<br>
Yes. Prerex works alongside WP Super Cache, WP Rocket, W3 Total Cache, LiteSpeed Cache, and any other cache plugin. It automatically installs a must-use plugin that bypasses the cache for bots only.
</details>

<details>
<summary><strong>What data does Prerex collect?</strong></summary>
<br>
Only what's needed to render pages: URLs visited by bots, bot user-agents, and bot IPs (for DNS verification). No personal visitor data, no analytics, no tracking. <a href="https://prerex.io/privacy">Privacy Policy →</a>
</details>

<details>
<summary><strong>How is this different from Prerender.io?</strong></summary>
<br>
Prerex is WordPress-specific: zero config, built-in bot detection with DNS verification, automatic cache bypass, deep WordPress hooks. Prerender.io is a generic service that requires server configuration and has no WordPress integration.
</details>

## Under the Hood

Built by engineers, not marketers.

- **Cloud rendering engine** with sub-second response times — pages served in ~200ms from edge cache
- **DNS-verified bot detection** — reverse + forward DNS lookup confirms every bot is genuine. No spoofing gets through.
- **Adaptive wait technology (Rex Sense)** — captures content when it's truly ready, not on a fixed timer. Handles lazy-loaded images, AJAX calls, and deferred scripts.
- **Three-tier network isolation** — the rendering sandbox never touches your data. Separate networks for public traffic, internal services, and database layer.
- **SSRF protection** — URL validation blocks private IPs, DNS rebinding, octal notation, and internal hostnames. Rendering can't be weaponized.
- **Every input validated** — all API endpoints enforce strict schema validation. Every user-submitted regex checked for catastrophic backtracking (ReDoS).
- **Credentials hashed at rest** — bcrypt for passwords and API keys, SHA-256 for verification codes. Nothing stored in plaintext.
- **Revocable sessions** — JWT tokens can be invalidated instantly on logout or password change. No stale sessions.
- **Rate limiting everywhere** — login, registration, rendering, webhooks. Multi-layer: application-level per key, infrastructure-level per IP.
- **HTML cleanup pipeline** — strips scripts, styles, event handlers, and tracking pixels. Preserves JSON-LD, Open Graph, images, and semantic structure. Pages up to 80% lighter.
- **Smart cache integration** — coexists with WP Super Cache, WP Rocket, W3 Total Cache, LiteSpeed, and any object cache. Ensures bots always get fresh rendered content without disrupting your existing cache setup.
- **154 automated tests**, zero tolerance for regressions

We don't ship features. We ship guarantees.

## Architecture Overview

```
                    ┌─────────────┐
                    │   Nginx     │
                    │  SSL + Rate │
                    │   Limiting  │
                    └──────┬──────┘
                           │
              ┌────────────┼────────────┐
              │            │            │
        ┌─────┴─────┐ ┌───┴───┐ ┌─────┴─────┐
        │    API     │ │  App  │ │  Status   │
        │  Engine    │ │ Dash  │ │  Monitor  │
        └─────┬──────┘ └───────┘ └───────────┘
              │
     ┌────────┼────────┐
     │        │        │
┌────┴───┐ ┌──┴──┐ ┌──┴──┐
│Renderer│ │Queue│ │Cache│
│Sandbox │ │     │ │     │
└────────┘ └──┬──┘ └─────┘
              │
     ┌────────┴────────┐
     │    Database      │
     │  (isolated net)  │
     └─────────────────┘
```

The renderer runs in a sandboxed environment with no access to the database network. Even if the rendering engine is compromised, your data stays safe.

## Bot Coverage

Prerex detects and serves optimized content to **29+ bot families** across 4 categories:

| Category | Bots | Free | Pro |
|---|---|---|---|
| **SEO** | Googlebot, Bingbot, Yandex, Baidu, DuckDuckBot, Sogou, Naver, Seznam, and more | Yes | Yes |
| **Social** | Facebook, Twitter/X, LinkedIn, Pinterest, Telegram, WhatsApp, Discord, Slack | — | Yes |
| **AI** | GPTBot, ClaudeBot, PerplexityBot, Google-Extended, Cohere, Meta AI | — | Yes |
| **QA** | Lighthouse, PageSpeed Insights, GTmetrix, Pingdom | — | Yes |

Every bot is verified using **reverse + forward DNS lookup** — not just user-agent matching. This means:
- `crawl-66-249-66-1.googlebot.com` → Verified Google bot → Served
- `fake-googlebot.com` → DNS mismatch → Blocked

## Performance

| Metric | Value |
|---|---|
| Cache hit response | ~200ms |
| Fresh render | 2-8s (depending on page complexity) |
| HTML size reduction | Up to 80% |
| Bot detection overhead | < 1ms |
| Cache TTL (Free) | 12 hours |
| Cache TTL (Pro) | 48 hours |

## Compatibility

Tested and verified with:

| Page Builders | Cache Plugins | eCommerce | Other |
|---|---|---|---|
| Elementor | WP Super Cache | WooCommerce | Multisite |
| Divi | WP Rocket | Easy Digital Downloads | WPML |
| WPBakery | W3 Total Cache | | Polylang |
| Bricks | LiteSpeed Cache | | Yoast SEO |
| Beaver Builder | Cloudflare | | Rank Math |
| Oxygen | Fastly | | |

## Support

- [Report a bug](https://github.com/prerex/prerex/issues/new?template=bug_report.md)
- [Request a feature](https://github.com/prerex/prerex/issues/new?template=feature_request.md)
- [Website](https://prerex.io)
- [Privacy Policy](https://prerex.io/privacy) · [Terms of Service](https://prerex.io/terms)

## Security

Found a vulnerability? **Do not open a public issue.** Email [security@prerex.io](mailto:security@prerex.io). See [SECURITY.md](SECURITY.md) for details.

## License

GPL-2.0 — see [LICENSE](LICENSE).
