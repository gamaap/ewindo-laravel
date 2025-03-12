import "./bootstrap";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Navigation, Pagination, Autoplay } from "swiper/modules";
import Swiper from "swiper";

// Swiper
new Swiper(".swiper-plant", {
    modules: [Navigation, Pagination, Autoplay],

    // Optional parameters
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,

    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    },

    pagination: {
        el: ".swiper-pagination-plant",
        clickable: true,
    },

    navigation: {
        nextEl: ".swiper-button-next-plant",
        prevEl: ".swiper-button-prev-plant",
    },
});

// new Swiper(".swiper-certificate", {
//     slidesPerView: 4,
//     spaceBetween: 20,
//     slidesPerGroup: 4,
//     navigation: {
//         nextEl: ".swiper-button-next-certificate",
//         prevEl: ".swiper-button-prev-certificate",
//     },
// });

// Document Fragments
document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll("div[id]");
    const navLinks = document.querySelectorAll(".nav-link");

    function updateActiveLink() {
        let scrollY = window.scrollY;

        sections.forEach((section) => {
            const sectionTop = section.offsetTop - 150; // Adjust offset to match nav height
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute("id");

            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                navLinks.forEach((link) =>
                    link.classList.remove(
                        "border-b-4",
                        "border-yellow-500",
                        "text-yellow-500"
                    )
                );
                document
                    .querySelector(`.nav-link[href="#${sectionId}"]`)
                    .classList.add(
                        "border-b-4",
                        "border-yellow-500",
                        "text-yellow-500"
                    );
            }
        });
    }

    window.addEventListener("scroll", updateActiveLink);
    updateActiveLink(); // Call on load in case user refreshes in the middle of page
});
