document.addEventListener("DOMContentLoaded", function () {
  const track = document.querySelector(".blog-track");
  const items = document.querySelectorAll(".blog-item");
  const prevBtn = document.querySelector(".blog-prev");
  const nextBtn = document.querySelector(".blog-next");

  let currentIndex = 0;
  const slidesToShow = 3; // Menampilkan 3 item per slide
  const totalSlides = Math.ceil(items.length / slidesToShow);
  const slideWidth = items[0].offsetWidth + 10; // Lebar satu slide + margin

  function updateCarousel() {
      track.style.transform = `translateX(-${currentIndex * slideWidth * slidesToShow}px)`;

      // Sembunyikan tombol prev di slide pertama, dan tombol next di slide terakhir
      prevBtn.disabled = currentIndex === 0;
      nextBtn.disabled = currentIndex === totalSlides - 1;
  }

  window.blogNextSlide = function () {
      if (currentIndex < totalSlides - 1) {
          currentIndex++;
          updateCarousel();
      }
  };

  window.blogPrevSlide = function () {
      if (currentIndex > 0) {
          currentIndex--;
          updateCarousel();
      }
  };

  // Pastikan tombol navigasi diperbarui saat halaman dimuat
  updateCarousel();
});