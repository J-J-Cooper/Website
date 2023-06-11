function darkToggle(x){
    var body = document.body;
    body.classList.toggle("dark-mode");

    x.classList.toggle("fa-moon");
}

function navActive(){
    document.querySelectorAll(".nav__a").forEach((link) => {
        if (link.href === window.location.href) {
            link.classList.add("nav__active");
            link.setAttribute("aria-current", "page");
        }
    });
}