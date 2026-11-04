<?php



$categories = array();
foreach ($projects as $p) {
    if (!in_array($p["category"], $categories)) {
        $categories[] = $p["category"];
    }
}
?>
<section id="projects" class="section">
    <div class="container">

        <div class="section-head reveal">
            <h2 class="display">My Projects</h2>
            <p class="lead">Things I have built and designed as an IT student. Click a card's Details button to learn more.</p>
        </div>

        <!-- Search + filter buttons -->
        <div class="project-tools reveal">
            <div class="filters">
                <button class="filter active" data-filter="all">All</button>
                <?php foreach ($categories as $cat) { ?>
                    <button class="filter" data-filter="<?php echo $cat; ?>"><?php echo $cat; ?></button>
                <?php } ?>
            </div>
            <input type="search" id="projectSearch" class="search" placeholder="Search projects or tools...">
        </div>

        <!-- Project cards -->
        <div class="project-grid">
            <?php foreach ($projects as $p) { ?>
                <article class="project-card glass reveal" data-category="<?php echo $p['category']; ?>">

                    <div class="project-thumb">
                        <img src="<?php echo $p['image']; ?>" alt="<?php echo $p['title']; ?> preview">
                    </div>

                    <div class="project-body">
                        <small class="project-meta"><?php echo $p["year"]; ?> &middot; <?php echo $p["category"]; ?></small>
                        <h3><?php echo $p["title"]; ?></h3>
                        <p><?php echo $p["description"]; ?></p>

                        <div class="chips">
                            <?php foreach ($p["tools"] as $tool) { ?>
                                <span class="chip"><?php echo $tool; ?></span>
                            <?php } ?>
                        </div>

                        <div class="project-links">
                            <button type="button" class="details-btn">Details</button>
                            <?php if ($p["drive"] != "") { ?>
                                <a href="<?php echo $p['drive']; ?>" target="_blank" rel="noopener">Open in Drive &nearr;</a>
                            <?php } ?>
                            <?php if ($p["github"] != "") { ?>
                                <a href="<?php echo $p['github']; ?>" target="_blank" rel="noopener">GitHub &nearr;</a>
                            <?php } ?>
                            <?php if ($p["live"] != "") { ?>
                                <a href="<?php echo $p['live']; ?>" target="_blank" rel="noopener">Live Demo &nearr;</a>
                            <?php } ?>
                        </div>
                    </div>

                    <!-- Content for the Details window (hidden until the button is clicked) -->
                    <template class="project-modal-content">
                        <img src="<?php echo $p['image']; ?>" alt="">
                        <small class="project-meta"><?php echo $p["year"]; ?> &middot; <?php echo $p["category"]; ?></small>
                        <h3 class="display-sm"><?php echo $p["title"]; ?></h3>
                        <p><?php echo $p["details"]; ?></p>
                        <div class="chips">
                            <?php foreach ($p["tools"] as $tool) { ?>
                                <span class="chip"><?php echo $tool; ?></span>
                            <?php } ?>
                        </div>
                        <div class="btn-row">
                            <?php if ($p["drive"] != "") { ?>
                                <a class="btn-dark" href="<?php echo $p['drive']; ?>" target="_blank" rel="noopener">Open in Drive &nearr;</a>
                            <?php } ?>
                            <?php if ($p["github"] != "") { ?>
                                <a class="btn-light" href="<?php echo $p['github']; ?>" target="_blank" rel="noopener">GitHub &nearr;</a>
                            <?php } ?>
                            <?php if ($p["live"] != "") { ?>
                                <a class="btn-light" href="<?php echo $p['live']; ?>" target="_blank" rel="noopener">Live Demo &nearr;</a>
                            <?php } ?>
                        </div>
                    </template>

                </article>
            <?php } ?>
        </div>

        <p class="empty-note" id="emptyNote" hidden>No projects match your search.</p>

    </div>
</section>

<!-- The Details window (pop-up) -->
<div class="modal" id="modal" hidden>
    <div class="modal-backdrop" data-close></div>
    <div class="modal-box glass">
        <button class="modal-close" data-close aria-label="Close">&times;</button>
        <div class="modal-body" id="modalBody"></div>
    </div>
</div>
