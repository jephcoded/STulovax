<div align="center">

<img src="./favicon.svg" alt="Stulovax logo" width="72" />

# Stulovax

**Structure for Ambitious Businesses**

A business management and execution-support website for founders who want to run their businesses in Nigeria with structure, clarity, and control, wherever they live.

[![Live Site](https://img.shields.io/badge/Live-stulovax.com-0A66C2?style=for-the-badge)](https://stulovax.com)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![WordPress](https://img.shields.io/badge/WordPress-21759B?style=for-the-badge&logo=wordpress&logoColor=white)

</div>

---

## 📖 About

Stulovax gives business owners, including those in the diaspora, the operating system they need to lead their Nigerian operations remotely. Services include management dashboards, execution coordination, team oversight, and growth support.

This repository contains the full marketing website. It's built with plain HTML, CSS, and JavaScript, uses PHP form handlers, and ships with a matching WordPress theme.

🔗 **Live:** [stulovax.com](https://stulovax.com)

## ✨ Features

- **Responsive design** that works on desktop, tablet, and mobile, with a collapsible navigation menu
- **Hero slideshow** that autoplays, pauses on hover or focus, and has dot navigation
- **Scroll-triggered animations**: directional slide-ins, scale-ins, and staggered card grids
- **Consultation form** with validation and a honeypot spam trap. It emails the team, then sends the client on to Calendly to book a call
- **Investor briefing landing page** (`/financial`) with its own registration form and thank-you page
- **FAQ accordion**, cookie consent banner, and a scroll-to-top button
- **SEO ready**: meta descriptions, `sitemap.xml`, and `robots.txt`
- **WordPress theme** version of the site, packaged as an installable zip

## 🗂️ Project Structure

```
stulovax/
├── index.html              # Homepage
├── about.html              # About page
├── styles.css              # Global styles
├── script.js               # Interactions & animations
├── contact-handler.php     # Consultation form handler
├── favicon.svg
├── robots.txt
├── sitemap.xml
├── *.jfif / *.webp         # Images (hero slides, photos)
├── financial/              # Investor briefing landing page
│   ├── index.html
│   ├── stulovax-form.css
│   ├── submit.php          # Registration form handler
│   └── thank-you.html
└── wordpress-theme/
    ├── stulovax-theme/     # WordPress theme source
    └── stulovax-theme.zip  # Ready-to-upload theme
```

## 🛠️ Tech Stack

| Layer      | Technology                                   |
|------------|----------------------------------------------|
| Frontend   | HTML5, CSS3, vanilla JavaScript              |
| Backend    | PHP (`mail()`-based form handlers)           |
| CMS option | Custom WordPress theme                       |
| Fonts      | Google Fonts                                 |
| Booking    | Calendly                                     |

## 🚀 Getting Started

### Run locally

The static pages open directly in a browser. To test the PHP forms, use PHP's built-in server:

```bash
git clone https://github.com/<your-username>/stulovax.git
cd stulovax
php -S localhost:8000
```

Then open [http://localhost:8000](http://localhost:8000).

> **Note:** The forms send email with PHP's `mail()` function, which needs a configured mail server. On most local machines the form will redirect to the error state. This is expected.

### Deploy

Upload all the files to any host that supports PHP, such as cPanel shared hosting. Before going live, update the email addresses and redirect URLs at the top of `contact-handler.php` and `financial/submit.php`.

### WordPress

1. Go to **Appearance → Themes → Add New → Upload Theme** and upload `wordpress-theme/stulovax-theme.zip`.
2. Activate the theme.
3. Create a page called **About** with the slug `about`.
4. Set **Settings → Permalinks** to *Post name*.

See [`wordpress-theme/stulovax-theme/README.txt`](./wordpress-theme/stulovax-theme/README.txt) for full details.

## 📬 Contact

- 🌐 Website: [stulovax.com](https://stulovax.com)
- ✉️ Email: [hello@stulovax.com](mailto:hello@stulovax.com)

## 📄 License

© 2026 Stulovax. All rights reserved. This code is shared for portfolio purposes. Please don't reuse it without permission.
