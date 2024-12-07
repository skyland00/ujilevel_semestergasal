var swiper = new Swiper("#default-carousel", {
    loop: true, // Looping carousel
    autoplay: {
        delay: 3000, // Interval 3 detik
        disableOnInteraction: false, // Agar tetap autoplay meskipun user berinteraksi
    },
    navigation: {
        nextEl: "[data-carousel-next]",
        prevEl: "[data-carousel-prev]",
    },
    pagination: {
        el: "[data-carousel-indicators]",
        clickable: true,
    },
});

import "./bootstrap";
import "flowbite";

// Toggle Mobile Menu
document.getElementById('mobileMenuButton').addEventListener('click', function () {
    const mobileMenu = document.getElementById('mobileMenu');
    mobileMenu.classList.toggle('hidden');
});

// Toggle User Dropdown
document.getElementById('userDropdownButton').addEventListener('click', function () {
    const userDropdown = document.getElementById('userDropdown');
    userDropdown.classList.toggle('hidden');
});
