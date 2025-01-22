let currentIndex = 0;

function updateSlide() {
  const slides = document.querySelector('.slides');
  const totalSlides = document.querySelectorAll('.slide').length;

  // Ensure the index loops around correctly
  if (currentIndex < 0) {
    currentIndex = totalSlides - 1;
  } else if (currentIndex >= totalSlides) {
    currentIndex = 0;
  }

  slides.style.transform = `translateX(-${currentIndex * 100}%)`;
}

function prevSlide() {
  currentIndex--;
  updateSlide();
}

function nextSlide() {
  currentIndex++;
  updateSlide();
}
