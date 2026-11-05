<?php

?>
<section id="home" class="section-home">

    
    <div class="container hero">
        <div class="hero-stage">

            
            <h1 class="big-name"><?php echo strtoupper($full_name); ?></h1>

            
            <div class="arch"></div>
            <picture class="hero-portrait">
                <source media="(max-width: 900px)" srcset="images/owin-mobile.png">
                <img class="photo-hero" src="<?php echo $photo_hero; ?>" alt="Photo of <?php echo $full_name; ?>">
            </picture>

            
            <div class="pill pill-name">
                <?php echo $full_name; ?>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 4-7 8-7s8 3 8 7"/>
                </svg>
            </div>

            
            <a href="#projects" class="pill pill-projects">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 7h6l2 2h10v10H3z"/>
                </svg>
                Projects
            </a>

            
            <div class="hero-text">
                <p class="hello">Hey, I'm <?php echo $nickname; ?></p>
                <h2><?php echo $headline; ?></h2>
                <p class="sub"><?php echo $subheadline; ?></p>
            </div>

            <!-- Bottom-right school card -->
            <div class="school-card">
                <div class="school-card-inner">
                    <small><?php echo $course; ?><br><strong><?php echo $course_name; ?></strong></small>
                    <span class="year"><?php echo $year_level; ?></span>
                </div>
                <div class="school-card-inner reflection" aria-hidden="true">
                    <small><?php echo $course; ?><br><strong><?php echo $course_name; ?></strong></small>
                    <span class="year"><?php echo $year_level; ?></span>
                </div>
            </div>

        </div>
    </div>

    <!-- ========== PART 2: WELCOME BOX ========== -->
    <div class="container welcome">

        <div class="welcome-card glass reveal">
            <div class="welcome-text">
                <span class="tag"><i class="dot"></i><?php echo $welcome_tag; ?></span>
                <h2 class="display"><?php echo $welcome_title; ?></h2>
                <p><?php echo $welcome_text; ?></p>
                <div class="btn-row">
                    <a href="#contact" class="btn-dark">Contact Me <span>&rarr;</span></a>
                    <a href="#projects" class="btn-light">View Projects</a>
                    <?php if (file_exists(__DIR__ . "/../../" . $resume_file)) { ?>
                        <a href="<?php echo $resume_file; ?>" class="btn-light" download>Resume <?php echo icon("download"); ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="welcome-photo">
                <img class="photo-welcome" src="<?php echo $photo_welcome; ?>" alt="<?php echo $full_name; ?>">
            </div>
        </div>

        <!-- ========== PART 3a: HIGHLIGHT CARDS ========== -->
        <div class="highlights">
            <?php foreach ($highlights as $item) { ?>
                <div class="highlight glass reveal">
                    <strong><?php echo $item["title"]; ?></strong>
                    <span><?php echo $item["caption"]; ?></span>
                </div>
            <?php } ?>
        </div>

        <!-- ========== PART 3b: FEATURED PROJECTS ========== -->
        <div class="featured">
            <?php
            $shown = 0;                       // counts how many we displayed
            foreach ($projects as $p) {
                if ($p["featured"] && $shown < 2) {
                    $shown++;
            ?>
                <a href="#projects" class="featured-card glass reveal">
                    <div class="featured-image">
                        <img src="<?php echo $p['image']; ?>" alt="<?php echo $p['title']; ?> preview">
                    </div>
                    <h3 class="display-sm"><?php echo $p["title"]; ?></h3>
                    <p><?php echo $p["description"]; ?></p>
                </a>
            <?php
                }
            }
            ?>
        </div>

    </div>
</section>
