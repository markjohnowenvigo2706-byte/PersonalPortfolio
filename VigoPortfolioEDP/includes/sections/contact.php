<?php



$notice_text = "";
$notice_type = "";
$status = $_GET["status"] ?? "";

if ($status == "sent") {
    $notice_text = "Thank you! Your message was sent. I'll get back to you soon.";
    $notice_type = "success";
} elseif ($status == "empty") {
    $notice_text = "Please fill in the name, email and message fields.";
    $notice_type = "error";
} elseif ($status == "invalid") {
    $notice_text = "Please enter a valid email address.";
    $notice_type = "error";
} elseif ($status == "wait") {
    $notice_text = "Please wait a moment before sending another message.";
    $notice_type = "error";
}
?>
<section id="contact" class="section">
    <div class="container">

        <div class="section-head reveal">
            <span class="tag"><i class="dot"></i>Get In Touch</span>
            <h2 class="display">Let's Talk</h2>
            <p class="lead"><?php echo $contact_text; ?></p>
        </div>

        <div class="contact-wrap">

            <!-- ===== LEFT: details ===== -->
            <div class="contact-info">

                <?php if ($availability != "") { ?>
                    <div class="availability glass reveal">
                        <i class="pulse"></i> <?php echo $availability; ?>
                    </div>
                <?php } ?>

                <div class="contact-cards">
                    <a class="contact-card glass reveal" href="mailto:<?php echo $email; ?>">
                        <span class="ci"><?php echo icon("mail"); ?></span>
                        <div><small>Email</small><strong><?php echo $email; ?></strong></div>
                    </a>

                    <?php if ($phone != "") { ?>
                        <div class="contact-card glass reveal">
                            <span class="ci"><?php echo icon("phone"); ?></span>
                            <div><small>Phone</small><strong><?php echo $phone; ?></strong></div>
                        </div>
                    <?php } ?>

                    <?php if ($location != "") { ?>
                        <div class="contact-card glass reveal">
                            <span class="ci"><?php echo icon("pin"); ?></span>
                            <div><small>Location</small><strong><?php echo $location; ?></strong></div>
                        </div>
                    <?php } ?>

                    <div class="contact-card glass reveal">
                        <span class="ci"><?php echo icon("clock"); ?></span>
                        <div><small>Response time</small><strong><?php echo $response_time; ?></strong></div>
                    </div>
                </div>

                <div class="info-card glass reveal">
                    <h4>How I Can Help</h4>
                    <div class="chips">
                        <?php foreach ($services as $service) { ?>
                            <span class="chip"><?php echo $service; ?></span>
                        <?php } ?>
                    </div>

                    <h4 class="follow">Find Me Online</h4>
                    <div class="social-row">
                        <?php foreach ($socials as $s) {
                            if ($s["url"] != "") { ?>
                                <a class="social-pill" href="<?php echo $s['url']; ?>" target="_blank" rel="noopener">
                                    <?php echo icon($s["icon"]); ?> <?php echo $s["name"]; ?>
                                </a>
                        <?php }
                        } ?>
                    </div>
                </div>

            </div>

            <!-- ===== RIGHT: form ===== -->
            <form class="contact-form glass reveal" method="post" action="send.php">
                <h3 class="display-sm">Send a Message</h3>

                <?php if ($notice_text != "") { ?>
                    <p class="notice <?php echo $notice_type; ?>"><?php echo $notice_text; ?></p>
                <?php } ?>

                <div class="form-row">
                    <div>
                        <label for="name">Name *</label>
                        <input type="text" id="name" name="name" placeholder="Your name" maxlength="80">
                    </div>
                    <div>
                        <label for="email">Email *</label>
                        <input type="text" id="email" name="email" placeholder="you@example.com">
                    </div>
                </div>

                <div class="form-row">
                    <div>
                        <label for="phone">Phone (optional)</label>
                        <input type="text" id="phone" name="phone" placeholder="Your number" maxlength="30">
                    </div>
                    <div>
                        <label for="subject">Subject</label>
                        <select id="subject" name="subject">
                            <?php foreach ($contact_subjects as $subject) { ?>
                                <option value="<?php echo $subject; ?>"><?php echo $subject; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <label for="message">Message *</label>
                <textarea id="message" name="message" rows="5" maxlength="2000" placeholder="Write your message..."></textarea>
                <small class="counter"><span id="charCount">0</span> / 2000</small>

                <!-- Hidden trap for spam bots. Real people never see or fill this. -->
                <div class="hp" aria-hidden="true">
                    <label for="website">Leave this empty</label>
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                </div>

                <button type="submit" class="btn-dark">Send Message <span>&rarr;</span></button>
            </form>

        </div>

    </div>
</section>
