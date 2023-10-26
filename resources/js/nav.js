const mobileNavButton = document.querySelector(".nav--mobile__button");
const mobileNav = document.querySelector(".nav--mobile__nav");
const mobileProductsItem = document.querySelector(".nav--mobile__item--products");
const mobileNavToggle = document.querySelector("#navi-toggle");
const nav = document.querySelector(".nav");
let prevScrollPos = window.scrollY;

const toggleMobileNav = () => {
    document.body.classList.toggle("no-scroll", !mobileNavToggle.checked);
    nav.classList.toggle("nav--background", mobileNavToggle.checked);
};

const toggleMobileProducts = () => {
    document.querySelector(".nav__dropdown--mobile").classList.toggle("show-products");
};

mobileNavButton.addEventListener('click', toggleMobileNav);
mobileProductsItem.addEventListener('click', toggleMobileProducts);

const scrollHandler = () => {
    const currentScrollPos = window.scrollY;
    if (prevScrollPos > currentScrollPos) {
        nav.style.top = "0";
    } else {
        nav.style.top = "-9rem";
    }
    nav.classList.toggle("nav--background", currentScrollPos > 10);
    prevScrollPos = currentScrollPos;
};

window.onscroll = scrollHandler;