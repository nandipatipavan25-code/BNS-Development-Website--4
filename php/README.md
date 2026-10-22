# BNS Development — PHP Architecture & Deployment Guide

This directory contains the production-ready, standalone **PHP version** of the BNS Development corporate website.

---

## 🚀 Quick Local Development

You can run this website instantly using PHP's built-in web server:

```bash
cd php-website
php -S localhost:8000
```

Open your browser and navigate to:
**`http://localhost:8000`**

---

## 📁 Architecture Overview

```
php-website/
├── api/
│   └── contact.php              # Secure POST endpoint with email dispatch & log fallback
├── assets/
│   ├── css/
│   │   ├── style.css            # Production compiled Tailwind & architectural styling
│   │   └── custom.css           # Glassmorphism, typography & physics overrides
│   └── js/
│       ├── main.js              # Lenis smooth scrolling, navigation & accordions
│       └── contact.js           # AJAX form submissions & validation
├── data/
│   ├── jobs.php                 # Open career roles & specifications
│   ├── news.php                 # Press releases & corporate announcements
│   ├── project-types.php        # 12 building sectors & verified imagery
│   ├── projects.php             # Landmark portfolio case studies (Marriott, District 36)
│   ├── services.php             # 5 core building disciplines & deliverables
│   └── team.php                 # Executive leadership profiles (Bradford Smith, etc.)
├── images/                      # Full-resolution commercial photography & architectural banners
├── includes/
│   ├── config.php               # Dynamic base URL resolution, company constants & CSRF
│   ├── cta-banner.php           # Reusable "Let's Develop What's Next" conversion section
│   ├── footer.php               # 4-column architectural footer, license info & legal links
│   └── header.php               # SEO metadata, Google Fonts, Lucide icons & sticky nav
├── logos/                       # Vector SVGs and transparent PNG brand marks
├── videos/                      # Architectural ambient video reels
├── .htaccess                    # Apache URL rewriting (clean URLs), Gzip & caching headers
├── index.php                    # Home page
├── about.php                    # About Us & Executive Leadership
├── services.php                 # All Services Directory
├── preconstruction.php          # Pre-Development Services
├── design-build.php             # Design-Build Delivery
├── residential.php              # Residential Development
├── tenant-improvements.php      # Tenant Improvements
├── ground-up.php                # Ground-Up Construction
├── portfolio.php                # Work & Landmark Portfolio
├── project-detail.php           # Dynamic Project Case Study Template
├── careers.php                  # Careers & Company Culture
├── career-detail.php            # Dynamic Career Role Template & Application Form
├── subcontractors.php           # Trade Partner Onboarding (Construkt.ai)
├── contact.php                  # Interactive Contact Studio
├── news.php                     # News & Press Releases Directory
├── news-detail.php              # Dynamic Press Release Article Template
├── privacy-policy.php           # Privacy Policy
└── terms-conditions.php         # Terms of Service
```

---

## 🌐 Production Deployment (Apache / cPanel / Shared Hosting)

1. **Upload Files:** Upload the contents of `php-website/` to your server's document root (e.g., `public_html/` or a virtual host directory).
2. **PHP Requirements:** PHP 7.4 or PHP 8.x with `json` and `mbstring` enabled (standard on all hosts).
3. **Apache Mod Rewrite:** The included `.htaccess` file provides clean URLs, Gzip compression, and security headers out of the box.
4. **Form Submissions:** Inquiries are sent directly via PHP `mail()` and automatically backed up to `api/inquiries.log`. Configure your email recipient in `includes/config.php` under `CONTACT_EMAIL`.

---

## ⚡ Zero Build Steps Needed
No Node.js, npm, or build tools are required on the production server. All stylesheets, scripts, and media are pre-bundled and run directly on standard PHP hosting.
