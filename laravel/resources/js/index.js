const ham = document.querySelector('.ham-menu');
const menuBottom = document.querySelector('.menu-bot');
const header = document.querySelector('header');
const sent = document.querySelector('.bg-cGreen-100');
const sentFail = document.querySelector('.bg-cRed-100');
const main = document.querySelector('main');
const DEFAULT_DELAY = 7000; //slide auto play

const mediaQuery = window.matchMedia("(min-width: 1024px)");

if (window.pageYOffset <= 100) header.classList.remove('header-shadow');
else header.classList.add('header-shadow');

windowResizeCheck();
window.addEventListener('resize', _ => {
    windowResizeCheck();
});
window.addEventListener('scroll', _ => {
    if (window.pageYOffset <= 500) header.classList.remove('header-shadow');
    else header.classList.add('header-shadow');

});

main.addEventListener('click', _ => {
    if (!mediaQuery.matches) menuBottom.classList.remove('menu-open')
});

ham.addEventListener('click', e => {
    if (e.target.classList.contains('ham-menu')) {
        menuBottom.classList.toggle('menu-open');
    }
});


function windowResizeCheck() {
    if (mediaQuery.matches) {
        menuBottom.classList.add('menu-open');
        menuBottom.classList.add('large-nav');
    } else {
        menuBottom.classList.remove('menu-open');
        menuBottom.classList.remove('large-nav');
    }
}

window.addEventListener('load', _ => registerServiceWorker());
async function registerServiceWorker() {
    if ('serviceWorker' in navigator) {
        try {
            await navigator.serviceWorker.register('../sw.js');
        } catch (e) {
            console.log(`SW registration failed`);
        }
    }
}
let flashMessage = document.querySelector('.flash-message');
setTimeout(_ => {
    flashMessage?.classList.remove('show-message');
    flashMessage?.classList.add('hide-message');
}, 2000);
setTimeout(() => {
    flashMessage?.remove();
}, 3000);


import Swiper, { Navigation, Pagination, Autoplay, Keyboard, EffectCreative } from 'swiper'
import { players } from './plyr';


const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    allowTouchMove: true,
    spaceBetween: 30,
    roundLengths: true,
    centeredSlides: true,
    //disables transition when the element is focused on
    focusableElements: ".video-player",
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    effect: 'creative',
    creativeEffect: {
        prev: { translate: [0, 0, -400], },
        next: { translate: ['100%', 0, 0], },
    },

    modules: [Navigation, Pagination, Autoplay, Keyboard, EffectCreative],

    //autoplay
    autoplay: {
        delay: DEFAULT_DELAY,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
    keyboard: {
        enabled: true,
        onlyInViewport: false,
    },
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        bulletActiveClass: "swiper-pagination-bullet--active",
        bulletClass: "swiper-pagination-bullet swiper-pagination-bullet--color",
        clickable: true,
        // dynamicBullets: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});


swiper.on('slideChange', function (e) {
    if (e.slides[e.activeIndex]?.dataset.type === 'video') {
        e.allowTouchMove = false;
        const video = players[e.visibleSlides[0].dataset.videoIndex];
        e.params.autoplay.delay = Math.floor(video.duration * 1000);
        video.play();
    }
    else {
        e.allowTouchMove = true;
        players[e.visibleSlides[0].dataset?.videoIndex]?.pause();
        e.params.autoplay.delay = DEFAULT_DELAY;
    }
});