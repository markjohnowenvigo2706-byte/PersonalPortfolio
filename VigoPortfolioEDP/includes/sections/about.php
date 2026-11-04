<?php

?>
<section id="about" class="section">
    <div class="container">

        
        <div class="about-top">
            <div class="about-top-text reveal">
                <h2 class="display"><?php echo $about_heading; ?></h2>
                <p class="lead"><?php echo $about_intro; ?></p>
                <div class="chips">
                    <?php foreach ($about_chips as $chip) { ?>
                        <span class="chip chip-white"><?php echo $chip; ?></span>
                    <?php } ?>
                </div>
            </div>
            <div class="about-top-art reveal">
                <img src="images/about-laptop.svg" alt="Laptop illustration">
            </div>
        </div>

        
        <div class="about-mid glass reveal">
            <div class="about-picture">
                <img src="images/about-desk.svg" alt="My desk setup">
            </div>
            <div class="about-story">
                <span class="tag"><i class="dot"></i><?php echo $about_tag; ?></span>
                <h3 class="display-sm"><?php echo $about_title; ?></h3>
                <?php foreach ($about_paragraphs as $paragraph) { ?>
                    <p><?php echo $paragraph; ?></p>
                <?php } ?>
            </div>
        </div>

        
        <div class="about-grid">

            <div class="info-card glass reveal">
                <h4>Education</h4>
                
                <strong><?php echo $education_list[0]["degree"]; ?></strong>
                <p><?php echo $education_list[0]["school"]; ?></p>
                <small><?php echo $education_list[0]["years"]; ?></small>
            </div>

            <div class="info-card glass reveal">
                <h4>Skills</h4>
                <?php foreach ($skills as $group => $list) { ?>
                    <div class="skill-group">
                        <small><?php echo $group; ?></small>
                        <div class="chips">
                            <?php foreach ($list as $skill) { ?>
                                <span class="chip"><?php echo $skill; ?></span>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>

        
        <div class="interests">
            <?php foreach ($interests as $interest) { ?>
                <div class="interest glass reveal">
                    <strong><?php echo $interest["title"]; ?></strong>
                    <span><?php echo $interest["text"]; ?></span>
                </div>
            <?php } ?>
        </div>

    </div>
</section>
