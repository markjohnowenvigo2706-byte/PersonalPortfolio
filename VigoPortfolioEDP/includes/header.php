<?php
/*
 * header.php
 * The <head> and the navigation bar. Loaded once at the top of index.php.
 */
require_once __DIR__ . "/data.php";   // load our info (name, skills, etc.)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $full_name; ?> | Portfolio</title>
    <meta name="description" content="<?php echo $headline; ?>">

    <!-- Fonts (needs internet; the site still works without them) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Instrument+Serif&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <!-- Tells the CSS that JavaScript is available (used for fade-in effects) -->
    <script>document.documentElement.classList.add("js");</script>
</head>
<body>

<!-- Thin bar at the very top that fills as you scroll down -->
<div class="progress" id="progress"></div>

<!-- ===== NAVIGATION BAR (stays at the top while you scroll) ===== -->
<header class="navbar" id="navbar">
    <div class="nav-inner">
        <a href="#home" class="logo"><?php echo $site_logo; ?></a>

        <nav class="nav-links" id="navLinks">
            <!-- Each link scrolls to the section with the same id -->
            <a href="#home"     data-section="home" class="active">Home</a>
            <a href="#about"    data-section="about">About</a>
            <a href="#resume"   data-section="resume">Resume</a>
            <a href="#projects" data-section="projects">Projects</a>
            <!-- Only visible on phones, inside the menu -->
            <a href="#contact"  class="nav-contact-mobile">Get In Touch</a>
        </nav>

        <a href="#contact" class="btn-dark nav-cta">Get In Touch <span>&rarr;</span></a>

        <!-- Menu button (phones only) -->
        <button class="menu-btn" id="menuBtn" aria-label="Open menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
