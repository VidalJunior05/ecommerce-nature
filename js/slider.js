const swiper1 = new Swiper(".slider-1", {
    autoplay: {
        delay: 11000,
        disableOnInteraction: false,
    },
    grapbCursor: true,
    effect: "fade",
    loop: true,
    navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
    },
});
const swiper2 = new Swiper(".slider-2", {
    grapbCursor: true,
    spaceBetween:30,
    navigation: {
        nextEl: '.custom-next',
        prevEl: '.custom-prev',
    },
    breakpoints:{
        640: {
            slidesPerView:2,
        },
        768: {
            slidesPerView:3,
        },
        1024: {
            slidesPerView:4,
        },
    }
});
const swiper3 = new Swiper(".slider-3", {
    loop:true,
    grapbCursor: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    spaceBetween:30,
    slidesPerView: 2,
    breakpoints:{
        768: {
            slidesPerView:3,
        },
        1024: {
            slidesPerView:5,
        },
    }
});
