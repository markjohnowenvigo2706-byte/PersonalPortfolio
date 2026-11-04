<?php
/*
 * footer.php
 * The bottom of the page: brand, quick links, contact, social links.
 * Social links come from $socials in data.php.
 */
?>
<footer class="footer">
    <div class="footer-inner">

        <!-- Brand + social icons -->
        <div class="footer-brand">
            <a href="#home" class="logo"><?php echo $site_logo; ?></a>
            <p><?php echo $tagline; ?></p>

            <div class="social-row">
                <?php foreach ($socials as $s) {
                    if ($s["url"] != "") { ?>
                        <a class="social-btn" href="<?php echo $s['url']; ?>" target="_blank" rel="noopener"
                           aria-label="<?php echo $s['name']; ?>" title="<?php echo $s['name']; ?>">
                            <?php echo icon($s["icon"]); ?>
                        </a>
                <?php }
                } ?>
            </div>
        </div>

        <!-- Quick links -->
        <div class="footer-col">
            <h5>Explore</h5>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#resume">Resume</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </div>

        <!-- Contact -->
        <div class="footer-col">
            <h5>Contact</h5>
            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
            <?php if ($phone != "") { ?><span><?php echo $phone; ?></span><?php } ?>
            <?php if ($location != "") { ?><span><?php echo $location; ?></span><?php } ?>
        </div>

    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> <?php echo $full_name; ?>. Built with PHP, HTML, CSS and JavaScript.</p>
        <a href="#home">Back to top &uarr;</a>
    </div>
</footer>

<!-- Floating "back to top" button (appears after you scroll down) -->
<button class="to-top" id="toTop" aria-label="Back to top">&uarr;</button>

<script src="js/script.js"></script>
</body>
</html>
