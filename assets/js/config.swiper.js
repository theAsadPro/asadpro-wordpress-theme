document.addEventListener('DOMContentLoaded', function () {    
    //swiper
const swiper = new Swiper(".swiper", {
    // Optional parameters
    loop: true,
    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    effect: "gl",
    speed: 1500,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    });
})