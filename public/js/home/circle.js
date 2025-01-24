const slider = document.querySelector("#circle-slider .d-flex");
  const leftArrow = document.getElementById("left-arrow");
  const rightArrow = document.getElementById("right-arrow");

  let currentOffset = 0;
  const scrollAmount = 100; // Geser sejauh 100px setiap kali klik

  // Tombol Panah Kanan
  rightArrow.addEventListener("click", () => {
    const maxOffset = slider.scrollWidth - slider.parentElement.clientWidth;
    currentOffset = Math.min(currentOffset + scrollAmount, maxOffset);
    slider.style.transform = `translateX(-${currentOffset}px)`;
  });

  // Tombol Panah Kiri
  leftArrow.addEventListener("click", () => {
    currentOffset = Math.max(currentOffset - scrollAmount, 0);
    slider.style.transform = `translateX(-${currentOffset}px)`;
  });
