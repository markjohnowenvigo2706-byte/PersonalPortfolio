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
2. Make sure the project folder is at:

   ```text
   C:\xampp\htdocs\PersonalPortfolio\VigoPortfolioEDP\
   ```

   If you put the folder directly in `htdocs` or rename it, adjust the URL in the next step accordingly.
3. In the XAMPP Control Panel, start **Apache**. MySQL is not required for this portfolio.
4. Open the site in a browser:

   ```text
   http://localhost/PersonalPortfolio/VigoPortfolioEDP/
   ```
5. To view the contact inbox, open:

   ```text
   http://localhost/PersonalPortfolio/VigoPortfolioEDP/admin.php
   ```

### Deploy to a web host

1. Choose a hosting provider that supports PHP and Apache-compatible PHP hosting. GitHub Pages alone cannot run this PHP project.
2. Upload the project files and folders to the site's document root or to a subfolder. Visit the matching domain or subfolder URL to open `index.php`.
3. Before exposing the site, copy `includes/config.sample.php` to `includes/config.php` and replace the sample admin password with a strong, unique password. Do not use the sample password on a public site.
4. Ensure PHP can write to `messages/messages.txt` (and the `messages` folder). Keep saved messages and `includes/config.php` private; do not publish local messages or the real config file.
5. Enable HTTPS on the hosted site, then test the portfolio, contact form, and admin login.

The form stores messages in a local text file; it does not send email or use a database.

## Software needed / requirements

- Windows with XAMPP for the documented local setup.
- Apache with PHP 7.0 or newer (a currently supported PHP release is recommended).
- A modern web browser.
- A writable `messages` folder for contact form submissions.
- Internet access for the Google Fonts loaded by the page (the rest of the site files are local).

MySQL is not needed to run this project.

## Features

- **Home:** introduction, profile images, portfolio highlights, and featured projects.
- **About:** biography, education, technical skills, and interests.
- **Resume:** experience, education, certificates, strengths, languages, statistics, and resume PDF links.
- **Projects:** project descriptions, images, categories, tools, links, search, filters, and details pop-ups.
- **Contact:** contact information and a validated form with basic spam and repeat-submission checks.
- **Admin inbox:** password-protected viewing and deletion of saved contact messages.
- **Responsive interface:** mobile navigation, light/dark theme preference, and scroll/reveal effects.

## Project structure / folder guide

The paths below are relative to the `VigoPortfolioEDP` project folder:

```text
VigoPortfolioEDP/
├── index.php                    Assembles the public portfolio page
├── send.php                     Validates and saves contact form submissions
├── admin.php                    Password-protected message inbox
├── includes/
│   ├── data.php                 Portfolio text, links, skills, resume, and project data
│   ├── config.sample.php        Sample admin password configuration
│   ├── config.php               Create this from config.sample.php; keep it private
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
│   ├── style.css                Site layout, responsive rules, and themes
│   └── READme.md                This project guide
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

- Edit `includes/data.php` to update profile details, contact links, skills, education, resume entries, and project cards.
- Put project images in `images/projects/` and update each project's `image` value in `includes/data.php`.
- Replace `resume/resume.pdf` to update the downloadable resume.
- Adjust colors, typography, and layout in `css/style.css`.

## Development tools and software applications

- **PHP** for page composition, content rendering, and form handling.
- **HTML, CSS, and JavaScript** for the interface and browser interactions.
- **XAMPP / Apache** for local PHP development and testing.
- **Figma** for interface and prototype design.
- **Git and GitHub** for version control and project hosting.
- **Visual Studio Code** or another code editor.
