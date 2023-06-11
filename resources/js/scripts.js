function darkToggle(x){
    var body = document.body;
    body.classList.toggle("dark-mode");

    x.classList.toggle("fa-moon");
}

function navActive(){
    //var active = document.getElementById("nav__index");
    //active.classList.toggle("nav__active");

    document.querySelectorAll(".nav__a").forEach((link) => {
        if (link.href === window.location.href) {
            link.classList.add("nav__active");
            link.setAttribute("aria-current", "page");
        }
    });
}