const swiper = new Swiper('.text-slider', {
    // Optional parameters
    loop: true,

    autoplay: {
        delay: 3000,
        disableOnInteraction: true,
    },

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});