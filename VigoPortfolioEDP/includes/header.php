<?php

require_once __DIR__ . "/data.php";   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $full_name; ?> | Portfolio</title>
    <meta name="description" content="<?php echo $headline; ?>">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Instrument+Serif&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    
    <script>
        document.documentElement.classList.add("js");
        try { if (localStorage.getItem("vigo-theme") === "dark") document.documentElement.setAttribute("data-theme", "dark"); } catch (e) {}
    </script>
</head>
<body>


<div class="progress" id="progress"></div>


<header class="navbar" id="navbar">
    <div class="nav-inner">
        <a href="#home" class="logo"><?php echo $site_logo; ?></a>

        <nav class="nav-links" id="navLinks">
            
            <a href="#home"     data-section="home" class="active">Home</a>
            <a href="#about"    data-section="about">About</a>
            <a href="#resume"   data-section="resume">Resume</a>
            <a href="#projects" data-section="projects">Projects</a>
            
            <a href="#contact"  class="nav-contact-mobile">Get In Touch</a>
        </nav>

        <button type="button" class="theme-toggle" id="themeToggle" aria-label="Switch to dark mode" aria-pressed="false" title="Toggle dark mode">
            <svg class="theme-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.5 14.2A8.5 8.5 0 0 1 9.8 3.5 8.5 8.5 0 1 0 20.5 14.2Z"/></svg>
            <svg class="theme-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32 1.41 1.41M2 12h2m16 0h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"/></svg>
        </button>
        <a href="#contact" class="btn-dark nav-cta">Get In Touch <span>&rarr;</span></a>

        
        <button class="menu-btn" id="menuBtn" aria-label="Open menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
