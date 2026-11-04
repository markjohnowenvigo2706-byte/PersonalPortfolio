<?php
/*
 * data.php
 * ---------------------------------------------------------
 * THIS IS THE ONLY FILE YOU NEED TO EDIT to change your info.
 * Every section of the website reads its text from here.
 *
 * Quick PHP guide:
 *   $name = "Owen";            -> a variable holding text
 *   array("a", "b", "c")       -> a list of things
 *   "key" => "value"           -> a labeled item inside a list
 *   Leave a link as "" to hide it.
 * ---------------------------------------------------------
 */

// =========================================================
// BASIC INFO (landing page)
// =========================================================
$site_logo   = "Oeng";
$full_name   = "Mark Vigo";
$nickname    = "Owen";
$headline    = "An IT student turning ideas into digital experiences.";
$subheadline = "Exploring web development, interface design, and creative solutions through meaningful projects.";
$tagline     = "Building clean, useful websites one project at a time.";   // shown in the footer

// School card (bottom-right of the landing page)
$course      = "Bachelor of Science in";
$course_name = "Information Technology";
$year_level  = "3-6";

// =========================================================
// PHOTOS  (two separate photos, so each can have its own size)
// =========================================================
// Landing page photo: save as images/owen.png        (transparent PNG looks best)
// "Good to see you" photo: save as images/owen-welcome.png
// If the second one is missing, the landing photo is used instead.
// To change SIZE or POSITION, see the "IMAGE SIZE CONTROLS" at the top of css/style.css
$photo_hero = "images/owin.png";
if (!file_exists(__DIR__ . "/../" . $photo_hero)) {
    $photo_hero = "images/placeholder.svg";
}
$photo_welcome = "images/owe.png";
if (!file_exists(__DIR__ . "/../" . $photo_welcome)) {
    $photo_welcome = $photo_hero;
}

// =========================================================
// HOME SECTION ("Good to see you!")
// =========================================================
$welcome_tag   = "Welcome to my Portfolio";
$welcome_title = "Good to see you!";
$welcome_text  = "A collection of my projects, skills, and journey as an Information Technology student. "
               . "Take a look around and see what I have been building.";

$highlights = array(
    array("title" => "Personal Portfolio",     "caption" => "My work and projects"),
    array("title" => "Information Technology", "caption" => "My course"),
    array("title" => "3rd Year",               "caption" => "Current year level"),
);

// =========================================================
// ABOUT SECTION
// =========================================================
$about_heading = "Get to Know Me";
$about_intro   = "I'm " . $nickname . ", an IT student who enjoys building websites, designing clean "
               . "interfaces and learning something new with every project.";
$about_chips   = array("IT Student", "Section " . $year_level, "Open to Learning");

$about_tag   = "Introduction";
$about_title = "A Little About Me";
$about_paragraphs = array(
    "I am currently pursuing a Bachelor of Science in Information Technology. I like turning ideas "
    . "into real, working websites, from the first sketch in Figma to the final line of code.",
    "Outside of school I enjoy exploring new tools, improving my design eye and working on small "
    . "projects that help me grow as a developer."
);

// Skills, grouped. Add or remove names freely.
$skills = array(
    "Frontend" => array("HTML", "CSS", "JavaScript"),
    "Backend"  => array("PHP", "MySQL"),
    "Tools"    => array("Git", "GitHub", "Figma", "XAMPP"),
);

$interests = array(
    array("title" => "Coding",   "text" => "Building things with code"),
    array("title" => "Design",   "text" => "Clean and friendly interfaces"),
    array("title" => "Games",    "text" => "Playing and breaking things"),
    array("title" => "Learning", "text" => "Always picking up new skills"),
);

// =========================================================
// RESUME SECTION
// =========================================================
// Put your resume PDF in the "resume" folder and name it resume.pdf
// (or change the name below). If the file is missing, the download button is hidden.
$resume_file = "resume/resume.pdf";
$resume_text = "A quick look at my education, experience and certificates. You can also download the full resume.";

// Education (newest first). Add more blocks if you like.
$education_list = array(
    array(
        "degree" => "Bachelor of Science in Information Technology",
        "school" => "Your University Name",
        "years"  => "2023 - Present",
        "note"   => "Currently in 3rd year. Focus on web development and interface design."
    ),
    array(
        "degree" => "Senior High School",
        "school" => "Your Senior High School",
        "years"  => "2021 - 2023",
        "note"   => "Your strand or track here."
    ),
);

// Experience / activities (projects, internships, organizations...)
$experience = array(
    array(
        "role"    => "Web Development Student Projects",
        "place"   => "School Requirements",
        "years"   => "2024 - Present",
        "details" => array(
            "Built websites and systems using HTML, CSS, JavaScript, PHP and MySQL.",
            "Designed interfaces in Figma and turned them into working pages."
        )
    ),
    array(
        "role"    => "Your Role Here",
        "place"   => "Organization or Company",
        "years"   => "Year - Year",
        "details" => array(
            "Describe what you did here.",
            "Add as many lines as you need."
        )
    ),
);

// Certificates and trainings
$certificates = array(
    array("title" => "Your Certificate Name", "issuer" => "Issuer / Platform", "year" => "2025"),
    array("title" => "Another Certificate",   "issuer" => "Issuer / Platform", "year" => "2025"),
);

$soft_skills = array("Teamwork", "Problem Solving", "Communication", "Time Management");
$languages   = array("English", "Filipino");

// =========================================================
// PROJECTS SECTION
// =========================================================
// "featured" => true shows the project on the Home section too (max 2 shown).
// "category" is used by the filter buttons.
// "details"  is the longer text shown when someone clicks "Details".
// "github", "live", "drive": leave as "" to hide that button.
// "image": put a screenshot in images/projects/ and change the file name.
$projects = array(
    array(
        "title"       => "Personal Portfolio",
        "description" => "The website you are looking at right now, built with PHP, HTML, CSS and JavaScript.",
        "details"     => "A one-page portfolio with smooth scrolling, a project filter, a resume section and a contact form that saves messages with PHP. Designed in Figma first, then coded by hand.",
        "tools"       => array("PHP", "HTML", "CSS", "JS"),
        "category"    => "Web",
        "year"        => "2026",
        "image"       => "images/projects/portfolio.svg",
        "github"      => "https://github.com/",
        "live"        => "",
        "drive"       => "",
        "featured"    => true
    ),
    array(
        "title"       => "Dead Stars",
        "description" => "A space-themed website that explores how stars live and die, with a dark, glowing design.",
        "details"     => "A themed informational website about the life cycle of stars. Focuses on dark visuals, glowing effects and clear sections that are easy to read.",
        "tools"       => array("HTML", "CSS", "JS"),
        "category"    => "Web",
        "year"        => "2026",
        "image"       => "images/projects/dead-stars.svg",
        "github"      => "https://github.com/",
        "live"        => "",
        "drive"       => "",
        "featured"    => true
    ),
    // ---- Your two Google Drive folders. Rename them once you decide on titles. ----
    array(
        "title"       => "School Project Files 1",
        "description" => "Files and documentation for this project are stored in Google Drive.",
        "details"     => "Open the Google Drive folder to see the files for this project. (Replace this text with what the project is about.)",
        "tools"       => array("Google Drive"),
        "category"    => "School Work",
        "year"        => "2026",
        "image"       => "images/projects/generic.svg",
        "github"      => "",
        "live"        => "",
        "drive"       => "https://drive.google.com/drive/folders/1qfZR2zx2-5f4nZDPJvUtGHqTAw7byUcQ",
        "featured"    => false
    ),
    array(
        "title"       => "School Project Files 2",
        "description" => "Files and documentation for this project are stored in Google Drive.",
        "details"     => "Open the Google Drive folder to see the files for this project. (Replace this text with what the project is about.)",
        "tools"       => array("Google Drive"),
        "category"    => "School Work",
        "year"        => "2026",
        "image"       => "images/projects/generic.svg",
        "github"      => "",
        "live"        => "",
        "drive"       => "https://drive.google.com/drive/folders/1UQTTNQOG36NLzxEqHGeltHAE71jO7D2w",
        "featured"    => false
    ),
    array(
        "title"       => "Student Records System",
        "description" => "Add, view, edit and delete student records using PHP and a MySQL database.",
        "details"     => "A CRUD system for managing student records. Practiced forms, validation, database queries and keeping the code organized.",
        "tools"       => array("PHP", "MySQL"),
        "category"    => "Web",
        "year"        => "2025",
        "image"       => "images/projects/generic.svg",
        "github"      => "https://github.com/",
        "live"        => "",
        "drive"       => "",
        "featured"    => false
    ),
    array(
        "title"       => "Landing Page Design",
        "description" => "A clean interface designed in Figma, then coded into a responsive web page.",
        "details"     => "A landing page concept designed in Figma with a soft blue style, then built with HTML and CSS so it works on phones and computers.",
        "tools"       => array("Figma", "HTML", "CSS"),
        "category"    => "Design",
        "year"        => "2025",
        "image"       => "images/projects/generic.svg",
        "github"      => "",
        "live"        => "",
        "drive"       => "",
        "featured"    => false
    ),
);

// =========================================================
// NUMBERS (calculated automatically - no need to edit)
// =========================================================
$skill_total = 0;
foreach ($skills as $group_list) {
    $skill_total += count($group_list);
}
$years_learning = 3;   // change this number yourself

$stats = array(
    array("number" => count($projects),     "label" => "Projects"),
    array("number" => $skill_total,         "label" => "Technologies"),
    array("number" => count($certificates), "label" => "Certificates"),
    array("number" => $years_learning,      "label" => "Years Learning"),
);

// =========================================================
// CONTACT
// =========================================================
$email         = "itlympixs@gmail.com";
$phone         = "+00 000 000 0000";           // "" hides it
$location      = "Your City, Country";         // "" hides it
$availability  = "Open for internships, freelance and collaborations";   // "" hides the badge
$response_time = "Usually replies within 24 hours";
$contact_text  = "Have a project in mind, a question, or just want to say hi? Send me a message and I'll get back to you.";

// Chips under "How I can help"
$services = array("Website Development", "UI / UX Design", "School Projects", "Collaboration");

// Choices in the "Subject" dropdown of the contact form
$contact_subjects = array("General Inquiry", "Project Collaboration", "Internship / Job", "Freelance Work", "Feedback");

// ---------------------------------------------------------
// SOCIAL LINKS (used in the Contact section AND the footer)
// Paste your real profile links. Leave "" to hide one.
// ---------------------------------------------------------
$socials = array(
    array("name" => "Facebook",  "icon" => "facebook",  "url" => "https://facebook.com/"),
    array("name" => "Instagram", "icon" => "instagram", "url" => "https://instagram.com/"),
    array("name" => "GitHub",    "icon" => "github",    "url" => "https://github.com/"),
    array("name" => "LinkedIn",  "icon" => "linkedin",  "url" => ""),
);

// ---------------------------------------------------------
// icon("name") returns a small SVG picture. You don't need to edit this.
// ---------------------------------------------------------
function icon($name)
{
    $start = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">';
    $paths = array(
        "facebook"  => '<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>',
        "instagram" => '<rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>',
        "github"    => '<path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/>',
        "linkedin"  => '<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/>',
        "mail"      => '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>',
        "phone"     => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/>',
        "pin"       => '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>',
        "clock"     => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
        "download"  => '<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/>',
    );
    return $start . ($paths[$name] ?? '') . '</svg>';
}
?>
