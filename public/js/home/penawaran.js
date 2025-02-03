let penawaranCurrentIndex = 0;

function penawaranUpdateCarousel() {
  const track = document.querySelector(".penawaran-track");
  const items = document.querySelectorAll(".penawaran-item");
  const totalItems = items.length;

  if (penawaranCurrentIndex < 0) {
    penawaranCurrentIndex = totalItems - 1;
  } else if (penawaranCurrentIndex >= totalItems) {
    penawaranCurrentIndex = 0;
  }

  const offset = -penawaranCurrentIndex * (items[0].offsetWidth + 20); // 20px is margin
  track.style.transform = `translateX(${offset}px)`;
}

function penawaranPrevSlide() {
  penawaranCurrentIndex--;
  penawaranUpdateCarousel();
}

function penawaranNextSlide() {
  penawaranCurrentIndex++;
  penawaranUpdateCarousel();
}

// Initial setup
document.addEventListener("DOMContentLoaded", penawaranUpdateCarousel);
