# SabiWP HTML to WordPress Starter

A deliberately small **classic WordPress theme** for the [HTML for WordPress Development course](https://www.sabiwp.com/courses/html-for-wordpress-developers-learn-how-to-build-pro-layout/) from [SabiWP](https://www.sabiwp.com).

The starter gives students a working theme structure without introducing a build tool or CSS/JavaScript framework. The aim is to learn how static HTML becomes reusable WordPress template files.

## Tutor

Dapo Obembe  
Email: [hello@dapoobembe.com](mailto:hello@dapoobembe.com)

## Requirements

- WordPress 6.0+
- PHP 7.4+
- A local WordPress installation (LocalWP, Studio, XAMPP, MAMP, etc.)

## Installation

1. Clone this repository into your WordPress installation's `wp-content/themes/` directory. The cloned folder should be named `sabiwp-html-wp-starter`.
2. In WordPress, open **Appearance → Themes**.
3. Activate **SabiWP HTML to WordPress Starter**.
4. Add a few posts and pages to see the templates in action.
5. Assign a menu under **Appearance → Menus** or **Appearance → Editor** (depending on the WordPress version and available admin interface).

## Project structure

```text
sabiwp-html-wp-starter/
├── assets/
│   ├── css/
│   │   └── main.css
│   └── js/
│       └── main.js
├── template-parts/
│   ├── content-none.php
│   ├── content-page.php
│   ├── content-single.php
│   └── content.php
├── 404.php
├── archive.php
├── comments.php
├── footer.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── search.php
├── single.php
└── style.css
```

## What students should explore

- `style.css`: the required WordPress theme header.
- `functions.php`: theme supports, menu locations, and asset enqueueing.
- `header.php` / `footer.php`: shared site markup and WordPress hooks.
- `index.php`: the main template fallback and The Loop.
- `single.php` / `page.php`: post and page templates.
- `archive.php` / `search.php` / `404.php`: other common template types.
- `template-parts/`: reusable content markup.
- `assets/css/main.css`: the starter styling.
- `assets/js/main.js`: a small accessible mobile navigation interaction.

## Suggested classroom exercises

1. Change the site header HTML and inspect the result.
2. Create a navigation menu and assign it to the Primary Menu location.
3. Add a custom post card layout in `template-parts/content.php`.
4. Display author information and post categories.
5. Create a `category.php` template and compare it with `archive.php`.
6. Build a static HTML page, then split it into `header.php`, `footer.php`, and a page template.
7. Experiment with `get_template_part()` to reuse template markup.

## Important learning notes

- This is a **classic theme**, not a block/FSE theme.
- There is no Node.js, Vite, Tailwind CSS, Alpine.js, or HTMX dependency.
- Keep `wp_head()` before the closing `</head>` tag.
- Keep `wp_footer()` before the closing `</body>` tag.
- Use WordPress escaping functions when outputting dynamic values.
- Use `wp_enqueue_style()` and `wp_enqueue_script()` rather than hardcoding asset tags.

This is a teaching starter, not a production-ready theme framework. Extend and review it before using it on a production website.
# sabiwp-html-wp-starter
# sabiwp-html-wp-starter
