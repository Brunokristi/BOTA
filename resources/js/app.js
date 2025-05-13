import './bootstrap';
import '../css/style.css';

window.moveSlide = function (direction) {
    const slider = document.getElementById('slider');
    const scrollAmount = 320;

    const atEnd = slider.scrollLeft + slider.clientWidth >= slider.scrollWidth - 10;

    if (atEnd && direction > 0) {
        slider.scrollTo({ left: 0, behavior: 'smooth' });
    } else {
        slider.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
    }
};

window.togglePricing = function () {
    const showableItems = document.querySelectorAll('.pricing-item.showable');
    const button = document.getElementById('show');

    const isExpanding = [...showableItems].some(item => !item.classList.contains('visible'));

    showableItems.forEach(item => {
        if (isExpanding) {
            item.classList.add('visible');
        } else {
            item.classList.remove('visible');
        }
    });

    button.textContent = isExpanding ? 'Zobraziť menej' : 'Zobraziť viac';
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
    updateNavbarTheme();



    const select = document.querySelector('.form-select');
    const textarea = document.getElementById('contact');

    select.addEventListener('change', () => {
        const value = select.value;

        switch (value) {
            case 'telefon':
                textarea.placeholder = 'Telefónne číslo';
                break;
            case 'email':
                textarea.placeholder = 'E-mailová adresa';
                break;
            case 'sprava':
                textarea.placeholder = 'Telefónne číslo';
                break;
            default:
                textarea.placeholder = 'Kontakt';
        }
    });
});

