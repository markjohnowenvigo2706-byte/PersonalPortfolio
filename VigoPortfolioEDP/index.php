<?php
/*
 * index.php  -  the ONE page of the website.
 * It simply stacks the sections on top of each other.
 * The navigation links scroll down to each section.
 *
 * To change a section's layout, open its file in includes/sections/
 * To change the text, open includes/data.php
 */

include "includes/header.php";                 // top: <head> + navigation bar

include "includes/sections/home.php";          // landing hero + welcome + featured
include "includes/sections/about.php";         // about me
include "includes/sections/resume.php";        // resume, experience, certificates
include "includes/sections/projects.php";      // all projects
include "includes/sections/contact.php";       // contact info + form

include "includes/footer.php";                 // bottom: footer + JavaScript
