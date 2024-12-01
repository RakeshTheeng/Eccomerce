const slides = document.querySelector('.slides');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');

let currentIndex = 0;

function showSlide(index) {
    const slideWidth = slides.clientWidth;
    slides.style.transform = `translateX(-${index * slideWidth}px)`;
}

prevButton.addEventListener('click', () => {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : slides.children.length - 1;
    showSlide(currentIndex);
    resetInterval(); // Reset the interval when manually changing slides
});

nextButton.addEventListener('click', () => {
    currentIndex = (currentIndex < slides.children.length - 1) ? currentIndex + 1 : 0;
    showSlide(currentIndex);
    resetInterval(); // Reset the interval when manually changing slides
});

function autoSlide() {
    currentIndex = (currentIndex < slides.children.length - 1) ? currentIndex + 1 : 0;
    showSlide(currentIndex);
}

let slideInterval = setInterval(autoSlide, 3000); // Change slide every 3 seconds

function resetInterval() {
    clearInterval(slideInterval);
    slideInterval = setInterval(autoSlide, 3000);
}

showSlide(currentIndex);
