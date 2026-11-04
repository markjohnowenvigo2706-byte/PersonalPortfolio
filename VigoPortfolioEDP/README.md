# Owen's Portfolio (PHP + HTML + CSS + JS)

A one-page personal portfolio. The navigation links (Home, About, Projects)
scroll smoothly to each section.

## How to run in XAMPP
1. Copy this whole `portfolio` folder into `C:\xampp\htdocs\`
2. Open the XAMPP Control Panel and click **Start** next to **Apache**
3. Visit **http://localhost/portfolio/** in your browser

## Folder guide
```
portfolio/
├── index.php              The one page (stacks the sections)
├── send.php               Saves contact form messages
├── includes/
│   ├── data.php           <-- EDIT YOUR INFO HERE
│   ├── header.php         <head> + navigation bar
│   ├── footer.php         Footer + loads script.js
│   └── sections/
│       ├── home.php       Landing hero + welcome + featured projects
│       ├── about.php      Get to Know Me
│       ├── projects.php   All projects + filter buttons
│       └── contact.php    Contact form
├── css/style.css          Colors, fonts, layout
├── js/script.js           Smooth nav, fade-ins, project filter, phone menu
├── images/                Your photo (owen.png) and project screenshots
└── messages/              Contact messages are saved here (not uploaded to Git)
```

## Common changes
- **Your photo:** save a transparent PNG as `images/owen.png`
- **Text, skills, education, projects, links:** edit `includes/data.php`
- **Add a project:** copy one block inside `$projects` in `data.php`, change the text, and
  put a screenshot in `images/projects/`
- **Colors:** edit the `:root` block at the top of `css/style.css`

## Putting it on GitHub
- Upload the whole folder to a GitHub repository (messages are ignored by `.gitignore`).
- Note: **GitHub Pages cannot run PHP.** The repo is great for showing your code, but to have a
  live website that works (including the contact form) you need a PHP host, for example
  InfinityFree or any shared hosting.
