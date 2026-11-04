/*
 * script.js  -  the JavaScript for the portfolio
 * Each part below does ONE small job:
 *   1) Navbar background + scroll progress bar + back-to-top button
 *   2) The nav link of the section you are viewing lights up
 *   3) Elements fade in as you scroll down
 *   4) Numbers count up (Resume section)
 *   5) Projects: filter buttons + search box
 *   6) Projects: the Details pop-up window
 *   7) Contact form: letter counter
 *   8) Phone menu open / close
 */

// ---------- 1) Navbar, progress bar, back-to-top ----------
var navbar   = document.getElementById("navbar");
var progress = document.getElementById("progress");
var toTop    = document.getElementById("toTop");

window.addEventListener("scroll", function () {

    // blurred navbar after a little scrolling
    if (window.scrollY > 30) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }

    // progress bar: how far down the page are we? (0% - 100%)
    var scrollable = document.documentElement.scrollHeight - window.innerHeight;
    progress.style.width = (window.scrollY / scrollable * 100) + "%";

    // show the back-to-top button after 600px
    if (window.scrollY > 600) {
        toTop.classList.add("show");
    } else {
        toTop.classList.remove("show");
    }
});

toTop.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
});


// ---------- 2) Highlight the nav link of the current section ----------
var sections = document.querySelectorAll("section");
var navLinks = document.querySelectorAll(".nav-links a[data-section]");

// IntersectionObserver tells us when a section is in the middle of the screen
var sectionObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
        if (entry.isIntersecting) {
            navLinks.forEach(function (link) {
                link.classList.remove("active");
                if (link.dataset.section === entry.target.id) {
                    link.classList.add("active");
                }
            });
        }
    });
}, { rootMargin: "-45% 0px -50% 0px" });

sections.forEach(function (section) {
    sectionObserver.observe(section);
});


// ---------- 3) Fade-in on scroll ----------
var revealItems = document.querySelectorAll(".reveal");

var revealObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
        if (entry.isIntersecting) {
            entry.target.classList.add("visible");
            revealObserver.unobserve(entry.target);   // only animate once
        }
    });
}, { threshold: 0.12 });

revealItems.forEach(function (item) {
    revealObserver.observe(item);
});


// ---------- 4) Numbers that count up ----------
var counters = document.querySelectorAll(".count");

var countObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
        if (!entry.isIntersecting) { return; }

        var el     = entry.target;
        var target = parseInt(el.dataset.target, 10);
        var current = 0;

        // add 1 step every 60 milliseconds until we reach the target
        var timer = setInterval(function () {
            current++;
            el.textContent = current;
            if (current >= target) { clearInterval(timer); }
        }, 60);

        if (target === 0) { clearInterval(timer); }
        countObserver.unobserve(el);
    });
}, { threshold: 0.6 });

counters.forEach(function (counter) {
    countObserver.observe(counter);
});


// ---------- 5) Projects: filter buttons + search ----------
var filterButtons = document.querySelectorAll(".filter");
var projectCards  = document.querySelectorAll(".project-card");
var searchBox     = document.getElementById("projectSearch");
var emptyNote     = document.getElementById("emptyNote");
var chosenFilter  = "all";

// Decides which cards to show, using BOTH the filter and the search text
function updateProjects() {
    var text = searchBox.value.toLowerCase().trim();
    var visible = 0;

    projectCards.forEach(function (card) {
        var matchesFilter = (chosenFilter === "all" || card.dataset.category === chosenFilter);
        var matchesSearch = card.textContent.toLowerCase().indexOf(text) !== -1;

        if (matchesFilter && matchesSearch) {
            card.classList.remove("hide");
            visible++;
        } else {
            card.classList.add("hide");
        }
    });

    emptyNote.hidden = (visible !== 0);   // show "No projects match" when nothing is left
}

filterButtons.forEach(function (button) {
    button.addEventListener("click", function () {
        filterButtons.forEach(function (b) { b.classList.remove("active"); });
        button.classList.add("active");
        chosenFilter = button.dataset.filter;
        updateProjects();
    });
});

searchBox.addEventListener("input", updateProjects);


// ---------- 6) Projects: Details pop-up ----------
var modal     = document.getElementById("modal");
var modalBody = document.getElementById("modalBody");

function openModal(card) {
    // copy the hidden <template> of this card into the pop-up
    modalBody.innerHTML = card.querySelector(".project-modal-content").innerHTML;
    modal.hidden = false;
    document.body.style.overflow = "hidden";   // stop the page scrolling behind
}

function closeModal() {
    modal.hidden = true;
    document.body.style.overflow = "";
}

document.querySelectorAll(".details-btn").forEach(function (button) {
    button.addEventListener("click", function () {
        openModal(button.closest(".project-card"));
    });
});

// close with the X, by clicking outside, or with the Escape key
modal.querySelectorAll("[data-close]").forEach(function (el) {
    el.addEventListener("click", closeModal);
});
document.addEventListener("keydown", function (event) {
    if (event.key === "Escape" && !modal.hidden) { closeModal(); }
});


// ---------- 7) Contact form: letter counter ----------
var messageBox = document.getElementById("message");
var charCount  = document.getElementById("charCount");

messageBox.addEventListener("input", function () {
    charCount.textContent = messageBox.value.length;
});


// ---------- 8) Phone menu ----------
var menuBtn     = document.getElementById("menuBtn");
var navLinksBox = document.getElementById("navLinks");

menuBtn.addEventListener("click", function () {
    navLinksBox.classList.toggle("open");
});

// close the menu after tapping a link
navLinksBox.querySelectorAll("a").forEach(function (link) {
    link.addEventListener("click", function () {
        navLinksBox.classList.remove("open");
    });
});
