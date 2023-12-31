import Swiper from 'swiper';
import { Navigation, Pagination, Thumbs } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

var swiper = new Swiper(".mySwiper", {
    lazy: true,
    modules: [Navigation, Pagination, Thumbs],
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
    modules: [Navigation, Pagination, Thumbs],
    lazy: true,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});
// import AOS from 'aos';
// import 'aos/dist/aos.css';

// AOS.init();

let elements = document.querySelectorAll('.odometer');

elements.forEach((el, index) => {
    const od = new Odometer({
        el: el,
        value: 0,
        format: '',
        theme: 'minimal'
    });

    od.update(el.getAttribute('value'));
})
document.querySelector("#cards").onmousemove = e => {
    for (const card of document.getElementsByClassName("card")) {
        const rect = card.getBoundingClientRect(),
            x = e.clientX - rect.left,
            y = e.clientY - rect.top;

        card.style.setProperty("--mouse-x", `${x - 50}px`);
        card.style.setProperty("--mouse-y", `${y}px`);
    };
}
document.querySelector(".cards2").onmousemove = e => {
    for (const card of document.getElementsByClassName("card")) {
        const rect = card.getBoundingClientRect(),
            x = e.clientX - rect.left,
            y = e.clientY - rect.top;

        card.style.setProperty("--mouse-x", `${x - 50}px`);
        card.style.setProperty("--mouse-y", `${y}px`);
    };
}