const mobileNavButton = document.querySelector(".nav--mobile__button");
const mobileNav = document.querySelector(".nav--mobile__nav");
const mobileProductsItems = document.querySelectorAll(".nav--mobile__item--products");
const mobileNavToggle = document.querySelector("#navi-toggle");
const nav = document.querySelector(".nav");
let prevScrollPos = window.scrollY;

const toggleMobileNav = () => {
    document.body.classList.toggle("no-scroll", !mobileNavToggle.checked);
    nav.classList.toggle("nav--background", mobileNavToggle.checked);
};

const toggleMobileProducts = (e) => {
    e.target.firstElementChild.classList.toggle("nav__dropdown--mobile--active");
};

mobileNavButton.addEventListener('click', toggleMobileNav);
mobileProductsItems.forEach((element)=>{
    element.addEventListener('click', (e) => {
        toggleMobileProducts(e);
    });
}) 

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