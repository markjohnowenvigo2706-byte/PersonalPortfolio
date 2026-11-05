<?php





$site_logo   = "Oeng";
$full_name   = "Mark Vigo";
$nickname    = "Owen";
$headline    = "An IT student turning ideas into digital experiences.";
$subheadline = "Exploring web development, interface design, and creative solutions through meaningful projects.";
$tagline     = "Building clean, useful websites one project at a time.";   


$course      = "Bachelor of Science in";
$course_name = "Information Technology";
$year_level  = "3-6";

$photo_hero = "images/owin.png";
if (!file_exists(__DIR__ . "/../" . $photo_hero)) {
    $photo_hero = "images/placeholder.svg";
}
$photo_welcome = "images/owe.png";
if (!file_exists(__DIR__ . "/../" . $photo_welcome)) {
    $photo_welcome = $photo_hero;
}

$welcome_tag   = "Welcome to my Portfolio";
$welcome_title = "Good to see you!";
$welcome_text  = "A collection of my projects, skills, and journey as an Information Technology student. "
               . "Take a look around and see what I have been building.";

$highlights = array(
    array("title" => "Personal Portfolio",     "caption" => "My work and projects"),
    array("title" => "Information Technology", "caption" => "My course"),
    array("title" => "3rd Year",               "caption" => "Current year level"),
);

$about_heading = "Get to Know Me";
$about_intro   = "I'm " . $nickname . ", an IT student who enjoys learning new things, exploring different interests, and making the most out of every experience.
I consider myself a curious and open-minded person who enjoys discovering new things, spending time on things I love, and challenging myself to grow. Whether it's exploring technology, working on creative projects, or simply enjoying life's little moments, I always find something new to learn along the way.";
$about_chips   = array("IT Student", "Section " . $year_level, "Open to Learning");

$about_tag   = "Introduction";
$about_title = "A Little About Me";
$about_paragraphs = array(
    "I am a dedicated and passionate third-year Bachelor of Science in Information Technology student who enjoys learning new things and exploring the world of technology. I have an interest in web development and UI/UX design, especially in turning creative ideas into functional and user-friendly websites, from designing layouts in Figma to bringing them to life through code.",
    "I am always willing to learn, improve my skills, and take on new challenges that help me grow both personally and professionally. I believe that every project is an opportunity to gain experience, explore new ideas, and become a better version of myself.",
);


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

$resume_file = "resume/resume.pdf";
$resume_text = "A quick look at my education, experience and certificates. You can also download the full resume.";


$education_list = array(
    array(
        "degree" => "Bachelor of Science in Information Technology",
        "school" => "Pamantasan ng Lungsod ng Valenzuela",
        "years"  => "2024 - Present",
        "note"   => "Currently in 3rd year. Focus on web development and interface design."
    ),
    array(
        "degree" => "Senior High School",
        "school" => "St.Bernadette College of Valenzuela",
        "years"  => "2022 - 2024",
        "note"   => "Information and Communications Technology (ICT) Strand."
    ),
);


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
        "role"    => "Community Extension Officer",
        "place"   => "Valenzuela Information Technology Society",
        "years"   => "2026 - 2027",
        "details" => array(
            "A Community Extension Officer is responsible for making sure that VITS does not only focus on its members but also contributes to the community through meaningful activities, outreach programs, and projects.",
        )
    ),
);


$certificates = array(
    array("title" => "NC II IN COMPUTER SYSTEMS", "issuer" => "Technical Education and Skills Development Authority", "year" => "2024"),
);

$soft_skills = array("Teamwork", "Problem Solving", "Communication", "Time Management");
$languages   = array("English", "Filipino");









$projects = array(
    array(
        "title"       => "Personal Portfolio",
        "description" => "A personal portfolio website that showcases my projects, skills, and resume.",
        "details"     => "A one-page portfolio with smooth scrolling, a project filter, a resume section and a contact form that saves messages with PHP. Designed in Figma first, then coded by hand.",
        "tools"       => array("PHP", "HTML", "CSS", "JS", "XAMPP", "Figma"),
        "category"    => "Web",
        "year"        => "2026",
        "image"       => "images/projects/Portfolio.png",
        "github"      => "https://github.com/markjohnowenvigo2706-byte/PersonalPortfolio",
        "live"        => "",
        "drive"       => "",
        "featured"    => true
    ),
    array(
        "title"       => "Voluntier",
        "description" => "A website that connects volunteers with community organizations.",
        "details"     => "A volunteer management platform that allows users to find and sign up for volunteer opportunities. Built with HTML, CSS, and JavaScript for the frontend, and PHP with MySQL for the backend.",
        "tools"       => array("HTML", "CSS", "JS"),
        "category"    => "Web",
        "year"        => "2025",
        "image"       => "images/projects/Voluntier.png",
        "github"      => "https://github.com/markjohnowenvigo2706-byte/Voluntier",
        "live"        => "",
        "drive"       => "",
        "featured"    => true
    ),
    
    array(
        "title"       => "Resort Finder",
        "description" => "A school project that helps users find resorts based on location, amenities, and reviews.",
        "details"     => "Open the Google Drive folder to see the files for this project. (Replace this text with what the project is about.)",
        "tools"       => array("Microsoft Visual Studio", "HTML", "CSS", "JS", "MySQL"),
        "category"    => "School Work",
        "year"        => "2026",
        "image"       => "images/projects/Resort.png",
        "github"      => "",
        "live"        => "",
        "drive"       => "https://drive.google.com/drive/folders/1JJMzzEyi9hMClCp7R7apjFQiIp-kZDgk?usp=sharing",
        "featured"    => false
    ),
    array(
        "title"       => "Vig-Food Express",
        "description" => "A food delivery protoype designed in Figma.",
        "details"     => "A food delivery app prototype designed in Figma. It includes screens for browsing restaurants, viewing menus, placing orders, and tracking deliveries.",
        "tools"       => array("Figma"),
        "category"    => "Final Requirements",
        "year"        => "2024",
        "image"       => "images/projects/Figma.png",
        "github"      => "",
        "live"        => "https://www.figma.com/design/OqlziK2EkafK1n1xXzOUXX/VIGO_MARKJOHNOWEN_BSIT_1-6?node-id=0-1&t=dXJrG2F9jVzTkWoT-1",
        "drive"       => "",
        "featured"    => false
    ),
    array(
        "title"       => "XP-Station",
        "description" => "To provide fast, reliable, and affordable computer services and internet access to the community.",
        "tools"       => array("Canva"),
        "category"    => "Multimedia Project",
        "year"        => "2025",
        "image"       => "images/projects/xp.png",
        "github"      => "",
        "live"        => "https://canva.link/u2f1824cmyd3um5",
        "drive"       => "",
        "featured"    => false
    )
);




$skill_total = 0;
foreach ($skills as $group_list) {
    $skill_total += count($group_list);
}
$years_learning = 3;   

$stats = array(
    array("number" => count($projects),     "label" => "Projects"),
    array("number" => $skill_total,         "label" => "Technologies"),
    array("number" => count($certificates), "label" => "Certificates"),
    array("number" => $years_learning,      "label" => "Years Learning"),
);




$email         = "markjohnowenvigo2706@gmail.com";
$phone         = "+63 936 992 5302";          
$location      = "Valenzuela City, Philippines";         
$availability  = "Open for internships, freelance and collaborations";  
$response_time = "Usually replies within 24 hours";
$contact_text  = "Have a project in mind, a question, or just want to say hi? Send me a message and I'll get back to you.";

$services = array("Website Development", "UI / UX Design", "School Projects", "Collaboration");


$contact_subjects = array("General Inquiry", "Project Collaboration", "Internship / Job", "Freelance Work", "Feedback");





$socials = array(
    array("name" => "Facebook",  "icon" => "facebook",  "url" => "https://www.facebook.com/share/1CGo5yxjQ2/"),
    array("name" => "Instagram", "icon" => "instagram", "url" => "https://www.instagram.com/markvigoooo?rpxt=MW1vYmNscmR4MGtyeQ=="),
    array("name" => "GitHub",    "icon" => "github",    "url" => "https://github.com/markjohnowenvigo2706-byte"),
    array("name" => "LinkedIn",  "icon" => "linkedin",  "url" => ""),
);




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
