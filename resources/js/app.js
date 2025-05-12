import './bootstrap';
import '../css/style.css';

window.moveSlide = function (direction) {
    const slider = document.getElementById('slider');
    const scrollAmount = 320;

    slider.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
    });
};

window.togglePricing = function () {
    const hiddenItems = document.querySelectorAll('.showable');
    const button = document.getElementById('show');

    hiddenItems.forEach(item => item.classList.toggle('hidden'));

    button.textContent =
        button.textContent === 'Zobraziť viac' ? 'Zobraziť menej' : 'Zobraziť viac';
};

window.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.navbar');
    const sections = document.querySelectorAll('.section');

    function updateNavbarTheme() {
        let currentTheme = null;

        sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            if (rect.top <= navbar.offsetHeight) {
                currentTheme = section.dataset.theme;
            }
        });

        if (currentTheme) {
            navbar.classList.remove('light', 'dark');
            navbar.classList.add(currentTheme);
        }
    }

    window.addEventListener('scroll', updateNavbarTheme);
    updateNavbarTheme(); // call once on load
});

