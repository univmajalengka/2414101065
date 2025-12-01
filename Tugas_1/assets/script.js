// ============= Mobile Navbar =============
document.getElementById("navToggle").onclick = function () {
    const nav = document.getElementById("navMenu");
    nav.classList.toggle("hidden");
};

// ============= Banner Slider =============
let index = 0;
const slider = document.querySelector(".banner-slider");
const totalSlides = slider.children.length;

setInterval(() => {
    index = (index + 1) % totalSlides;
    slider.style.transform = `translateX(-${index * 100}%)`;
}, 3500);
