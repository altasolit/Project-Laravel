document.addEventListener("DOMContentLoaded", function () {
    flatpickr(".b-checkin-date", {
        dateFormat: "d-m-Y",
        minDate: "today"
    });
  
    flatpickr(".b-checkout-date", {
        dateFormat: "d-m-Y",
        minDate: "today"
    });
  });