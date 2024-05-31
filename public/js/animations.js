// public/js/animations.js
document.addEventListener('DOMContentLoaded', function () {
    const elements = document.querySelectorAll('.fade-in');
    elements.forEach(element => {
        element.classList.add('fade-in');
    });

    // Slider functionality
    const slides = document.querySelector('.slides');
    const slideImages = document.querySelectorAll('.slides img');
    let currentIndex = 0;

    document.querySelector('.next').addEventListener('click', () => {
        if (currentIndex >= slideImages.length - 1) return;
        currentIndex++;
        updateSlidePosition();
    });

    document.querySelector('.prev').addEventListener('click', () => {
        if (currentIndex <= 0) return;
        currentIndex--;
        updateSlidePosition();
    });

    function updateSlidePosition() {
        slides.style.transform = `translateX(${-currentIndex * 100}%)`;
    }
});
