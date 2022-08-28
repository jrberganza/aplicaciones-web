let navMenu = document.getElementById("navigation-menu");
let navIcon = document.getElementById("nav-icon");

navMenu.classList.add("closed");
navIcon.onclick = function (e) {
    e.preventDefault();

    if (navMenu.classList.contains("closed")) {
        navMenu.classList.remove("closed");
    } else {
        navMenu.classList.add("closed");
    }

    return false;
}