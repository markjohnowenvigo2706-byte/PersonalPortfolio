<?php
/*
 * resume.php  -  RESUME section
 * Shows your numbers, education, experience, certificates and a download button.
 * All the text comes from data.php.
 */

// Only show the download buttons if the PDF file really exists
$has_resume = file_exists(__DIR__ . "/../../" . $resume_file);
?>
<section id="resume" class="section">
    <div class="container">

        <!-- ===== Heading + download buttons ===== -->
        <div class="section-head reveal">
            <h2 class="display">My Resume</h2>
            <p class="lead"><?php echo $resume_text; ?></p>

            <div class="btn-row">
                <?php if ($has_resume) { ?>
                    <a href="<?php echo $resume_file; ?>" class="btn-dark" download>
                        Download Resume <?php echo icon("download"); ?>
                    </a>
                    <a href="<?php echo $resume_file; ?>" class="btn-light" target="_blank" rel="noopener">View in new tab</a>
                <?php } else { ?>
                    <!-- Shown until you add resume/resume.pdf -->
                    <span class="chip chip-white">Resume PDF coming soon</span>
                <?php } ?>
            </div>
        </div>

        <!-- ===== Numbers (they count up when you scroll to them) ===== -->
        <div class="stats">
            <?php foreach ($stats as $stat) { ?>
                <div class="stat glass reveal">
                    <strong class="count" data-target="<?php echo $stat['number']; ?>">0</strong>
                    <span><?php echo $stat["label"]; ?></span>
                </div>
            <?php } ?>
        </div>

        <!-- ===== Two columns: Experience | Education ===== -->
        <div class="resume-grid">

            <div class="resume-col">
                <h3 class="col-title reveal">Experience</h3>
                <div class="timeline">
                    <?php foreach ($experience as $job) { ?>
                        <div class="timeline-item glass reveal">
                            <small><?php echo $job["years"]; ?></small>
                            <h4><?php echo $job["role"]; ?></h4>
                            <p class="place"><?php echo $job["place"]; ?></p>
                            <ul>
                                <?php foreach ($job["details"] as $line) { ?>
                                    <li><?php echo $line; ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="resume-col">
                <h3 class="col-title reveal">Education</h3>
                <div class="timeline">
                    <?php foreach ($education_list as $edu) { ?>
                        <div class="timeline-item glass reveal">
                            <small><?php echo $edu["years"]; ?></small>
                            <h4><?php echo $edu["degree"]; ?></h4>
                            <p class="place"><?php echo $edu["school"]; ?></p>
                            <p><?php echo $edu["note"]; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>

        <!-- ===== Certificates + extra skills ===== -->
        <div class="resume-grid">

            <div class="info-card glass reveal">
                <h4>Certificates</h4>
                <?php foreach ($certificates as $cert) { ?>
                    <div class="cert">
                        <div>
                            <strong><?php echo $cert["title"]; ?></strong>
                            <p><?php echo $cert["issuer"]; ?></p>
                        </div>
                        <small><?php echo $cert["year"]; ?></small>
                    </div>
                <?php } ?>
            </div>

            <div class="info-card glass reveal">
                <h4>Strengths &amp; Languages</h4>
                <div class="skill-group">
                    <small>Soft skills</small>
                    <div class="chips">
                        <?php foreach ($soft_skills as $item) { ?>
                            <span class="chip"><?php echo $item; ?></span>
                        <?php } ?>
                    </div>
                </div>
                <div class="skill-group">
                    <small>Languages</small>
                    <div class="chips">
                        <?php foreach ($languages as $item) { ?>
                            <span class="chip"><?php echo $item; ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
