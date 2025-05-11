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
