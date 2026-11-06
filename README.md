# Mark Vigo's Portfolio

## Portfolio description

This is a responsive, single-page portfolio for Mark Vigo, an Information Technology student. It presents personal information, skills, education, experience, certificates, selected projects, a downloadable resume, and contact details. The site is built with PHP, HTML, CSS, and JavaScript.

## Highlights

- Portfolio content and project cards are generated from PHP data.
- Contact form submissions are validated and saved to `messages/messages.txt`.
- A password-protected admin inbox is available at `admin.php`.
- Resume PDF can be viewed or downloaded from the Resume section.
- Project cards support category filtering, text search, and a details modal.
- Responsive navigation, a dark-mode toggle, scroll progress, reveal effects, and animated statistics.

## How to run locally (XAMPP) or deploy

### Run locally with XAMPP

1. Install and open XAMPP.
2. Keep the project folder at:

   ```text
   C:\xampp\htdocs\PersonalPortfolio\VigoPortfolioEDP\
   ```

3. In the XAMPP Control Panel, start **Apache**. MySQL is not required.
4. Open this URL in your browser:

   ```text
   http://localhost/PersonalPortfolio/VigoPortfolioEDP/
   ```
5. To open the contact inbox, visit:

   ```text
   http://localhost/PersonalPortfolio/VigoPortfolioEDP/admin.php
   ```

### Deploy to a web host

1. Use a host that supports PHP. GitHub Pages alone cannot run this PHP project.
2. Upload the contents of `VigoPortfolioEDP` to the host's document root or a subfolder.
3. Copy `includes/config.sample.php` to `includes/config.php` and change the sample admin password to a strong, unique password before making the site public.
4. Ensure PHP can write to `messages/messages.txt` and keep the messages and real `includes/config.php` private.
5. Enable HTTPS and test the portfolio, contact form, and admin login.

The contact form appends submissions to a text file. It does not send email or use a database.

## Software needed / requirements

- Windows and XAMPP for the documented local setup.
- Apache with PHP 7.0 or newer; use a currently supported PHP release when possible.
- A modern web browser.
- A writable `messages` folder for contact form submissions.
- Internet access for the Google Fonts loaded by the page.

MySQL is not required.

## Features

- **Home:** introduction, profile images, portfolio highlights, and featured projects.
- **About:** biography, education, technical skills, and interests.
- **Resume:** experience, education, certificates, strengths, languages, statistics, and resume PDF links.
- **Projects:** project descriptions, images, categories, tools, links, search, filters, and details pop-ups.
- **Contact:** contact information and a validated form with basic spam and repeat-submission checks.
- **Admin inbox:** password-protected viewing and deletion of saved contact messages.
- **Responsive interface:** mobile navigation, light/dark theme preference, and scroll/reveal effects.

## Project structure / folder guide

Paths are relative to `VigoPortfolioEDP`:

```text
VigoPortfolioEDP/
├── index.php                    Assembles the public portfolio page
├── send.php                     Validates and saves contact form submissions
├── admin.php                    Password-protected message inbox
├── includes/
│   ├── data.php                 Portfolio text, links, skills, resume, and project data
│   ├── config.sample.php        Sample admin password configuration
│   ├── config.php               Create from config.sample.php; keep private
│   ├── header.php               HTML head, navigation, and shared page header
│   ├── footer.php               Shared footer and JavaScript loading
│   └── sections/
│       ├── home.php             Hero, introduction, highlights, featured projects
│       ├── about.php            Biography, education, skills, and interests
│       ├── resume.php           Resume, experience, education, and certificates
│       ├── projects.php         Project cards, filters, search, and details modal
│       ├── contact.php          Contact information and form
│       └── mon.php              Additional section file (not included by index.php)
├── css/
│   └── style.css                Site layout, responsive rules, and themes
├── js/
│   └── script.js                Theme, navigation, animations, and project interactions
├── images/                      Profile, about, and project images
│   └── projects/                Project preview images
├── messages/
│   └── messages.txt             Contact form message storage
└── resume/
    ├── resume.pdf               Downloadable resume
    └── README.pdf               Additional PDF
```

### Updating portfolio content

- Edit `VigoPortfolioEDP/includes/data.php` to update profile details, contact links, skills, education, resume entries, and project cards.
- Add project images to `VigoPortfolioEDP/images/projects/` and update each project's `image` value in `data.php`.
- Replace `VigoPortfolioEDP/resume/resume.pdf` to update the downloadable resume.
- Adjust colors, typography, and layout in `VigoPortfolioEDP/css/style.css`.

## Development tools and software applications

- **PHP** for page composition, content rendering, and form handling.
- **HTML, CSS, and JavaScript** for the interface and browser interactions.
- **XAMPP / Apache** for local PHP development and testing.
- **Figma** for interface and prototype design.
- **Git and GitHub** for version control and project hosting.
- **Visual Studio Code** or another code editor.
