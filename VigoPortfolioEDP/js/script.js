


var navbar   = document.getElementById("navbar");
var progress = document.getElementById("progress");
var toTop    = document.getElementById("toTop");

window.addEventListener("scroll", function () {

    
    if (window.scrollY > 30) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }

    
    var scrollable = document.documentElement.scrollHeight - window.innerHeight;
    progress.style.width = (window.scrollY / scrollable * 100) + "%";

    
    if (window.scrollY > 600) {
        toTop.classList.add("show");
    } else {
        toTop.classList.remove("show");
    }
});

toTop.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
});



var sections = document.querySelectorAll("section");
var navLinks = document.querySelectorAll(".nav-links a[data-section]");


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



var revealItems = document.querySelectorAll(".reveal");

var revealObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
        if (entry.isIntersecting) {
            entry.target.classList.add("visible");
            revealObserver.unobserve(entry.target);   
        }
    });
}, { threshold: 0.12 });

revealItems.forEach(function (item) {
    revealObserver.observe(item);
});



var counters = document.querySelectorAll(".count");

var countObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
        if (!entry.isIntersecting) { return; }

        var el     = entry.target;
        var target = parseInt(el.dataset.target, 10);
        var current = 0;

        
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



var filterButtons = document.querySelectorAll(".filter");
var projectCards  = document.querySelectorAll(".project-card");
var searchBox     = document.getElementById("projectSearch");
var emptyNote     = document.getElementById("emptyNote");
var chosenFilter  = "all";


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

    emptyNote.hidden = (visible !== 0);   
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



var modal     = document.getElementById("modal");
var modalBody = document.getElementById("modalBody");

function openModal(card) {
    
    modalBody.innerHTML = card.querySelector(".project-modal-content").innerHTML;
    modal.hidden = false;
    document.body.style.overflow = "hidden";   
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


modal.querySelectorAll("[data-close]").forEach(function (el) {
    el.addEventListener("click", closeModal);
});
document.addEventListener("keydown", function (event) {
    if (event.key === "Escape" && !modal.hidden) { closeModal(); }
});



var messageBox = document.getElementById("message");
var charCount  = document.getElementById("charCount");

messageBox.addEventListener("input", function () {
    charCount.textContent = messageBox.value.length;
});



var menuBtn     = document.getElementById("menuBtn");
var navLinksBox = document.getElementById("navLinks");

menuBtn.addEventListener("click", function () {
    navLinksBox.classList.toggle("open");
});


navLinksBox.querySelectorAll("a").forEach(function (link) {
    link.addEventListener("click", function () {
        navLinksBox.classList.remove("open");
    });
});
