let blogCurrentIndex = 0;

function blogUpdateCarousel() {
  const track = document.querySelector(".blog-track");
  const items = document.querySelectorAll(".blog-item");
  const totalItems = items.length;

  if (blogCurrentIndex < 0) {
    blogCurrentIndex = totalItems - 1;
  } else if (blogCurrentIndex >= totalItems) {
    blogCurrentIndex = 0;
  }

  const offset = -blogCurrentIndex * (items[0].offsetWidth + 20); // 20px is margin
  track.style.transform = `translateX(${offset}px)`;
}

function blogPrevSlide() {
  blogCurrentIndex--;
  blogUpdateCarousel();
}

function blogNextSlide() {
  blogCurrentIndex++;
  blogUpdateCarousel();
}

// Initial setup
document.addEventListener("DOMContentLoaded", blogUpdateCarousel);
