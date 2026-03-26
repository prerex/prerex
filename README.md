<p align="center">
  <img src="https://prerex.io/prerex-logo.svg" alt="Prerex" width="200">
</p>

<h1 align="center">Prerex</h1>

<p align="center">
  Smart prerendering for WordPress.<br>
  Make your full content visible to search engines, social bots, and AI crawlers.<br>
  <strong>Zero config.</strong>
</p>

<p align="center">
  <a href="https://wordpress.org/plugins/prerex/"><img src="https://img.shields.io/wordpress/plugin/v/prerex?label=WordPress&logo=wordpress" alt="WordPress Plugin"></a>
  <a href="https://wordpress.org/plugins/prerex/"><img src="https://img.shields.io/wordpress/plugin/rating/prerex" alt="Rating"></a>
  <a href="https://prerex.io"><img src="https://img.shields.io/badge/website-prerex.io-7c3aed" alt="Website"></a>
  <a href="https://github.com/prerex/prerex/issues"><img src="https://img.shields.io/github/issues/prerex/prerex" alt="Issues"></a>
</p>

---

## The Problem

Modern WordPress sites rely heavily on JavaScript: page builders, lazy loading, AJAX content, dynamic widgets, WooCommerce product data. Search engines don't always execute JavaScript fully, which means **bots may not see your actual content.**

## The Solution

When a bot visits your site, Prerex serves a fully-rendered version of the page — with all dynamic content visible, all images loaded, all JavaScript executed. Human visitors are never affected.

## How It Works

```
1. A search engine bot visits your page
2. Prerex detects the bot via user-agent + DNS verification
3. A fully-rendered HTML version is served from the cloud
4. The bot sees your complete content — instantly
```

## Features

- **Zero configuration** — Install, activate, done. No server setup, no code changes.
- **Rex Sense** — Adaptive rendering that waits for your content to fully load before capturing.
- **29+ bots detected** — Google, Bing, Facebook, Twitter, LinkedIn, Pinterest, GPTBot, ClaudeBot, and more.
- **DNS-verified bot detection** — Confirms bots are genuine using reverse+forward DNS lookup.
- **HTML cleanup** — Strips unnecessary scripts and styles, delivering pages up to 80% lighter.
- **Cache bypass** — Automatically bypasses WP Super Cache, WP Rocket, W3 Total Cache, and LiteSpeed Cache.
- **Social media previews** — Facebook, Twitter, LinkedIn, and Pinterest see your real content and images.
- **AI crawler support** — GPTBot, ClaudeBot, PerplexityBot get your complete content.
- **Works with everything** — Page builders (Elementor, Divi, WPBakery, Bricks), WooCommerce, multisite, any theme.

## Installation

### From WordPress.org (recommended)

1. In your WordPress admin, go to **Plugins > Add New**
2. Search for **"Prerex"**
3. Click **Install Now**, then **Activate**
4. That's it. Prerex works automatically.

### Manual installation

1. Download the latest release from [WordPress.org](https://wordpress.org/plugins/prerex/)
2. Upload the `prerex` folder to `/wp-content/plugins/`
3. Activate through the **Plugins** menu

## Plans

| | Free | Pro |
|---|---|---|
| **Price** | Free forever | EUR 9.99/mo or EUR 99/yr |
| **Renders** | 1,000/month | Unlimited |
| **Sites** | 1 | Unlimited |
| **SEO bots** | Google, Bing, Yandex, Baidu | All SEO bots |
| **Social bots** | - | Facebook, Twitter, LinkedIn, Pinterest |
| **AI bots** | - | GPTBot, ClaudeBot, PerplexityBot |
| **Rex Sense** | - | Adaptive rendering |
| **HTML cleanup** | - | Up to 80% lighter pages |
| **Bot policy** | - | Per-domain bot control |
| **Cache TTL** | 12 hours | 48 hours |

## Requirements

- WordPress 5.8 or higher
- PHP 7.4 or higher

## FAQ

**Does Google render JavaScript now?**
Yes, but it's delayed (hours to weeks), has a limited budget, and isn't perfect with complex sites. Other bots — Bing, Facebook, LinkedIn, AI crawlers — mostly don't render JavaScript at all.

**Does it slow down my site?**
No. Prerex only activates for bots — never for human visitors. Bot requests are served from cache in ~200ms.

**Does it work with my cache plugin?**
Yes. Prerex works alongside WP Super Cache, WP Rocket, W3 Total Cache, LiteSpeed Cache, and any other cache plugin. It automatically bypasses the cache for bots.

**What data does Prerex collect?**
Only what's needed to render pages: URLs visited by bots, bot user-agents, and bot IP addresses (for DNS verification). No personal visitor data, no analytics, no tracking. See our [Privacy Policy](https://prerex.io/privacy).

## Support

- [Report a bug](https://github.com/prerex/prerex/issues/new?template=bug_report.md)
- [Request a feature](https://github.com/prerex/prerex/issues/new?template=feature_request.md)
- [Website](https://prerex.io)
- [Privacy Policy](https://prerex.io/privacy)
- [Terms of Service](https://prerex.io/terms)

## License

GPL-2.0 — see [LICENSE](LICENSE) for details.
