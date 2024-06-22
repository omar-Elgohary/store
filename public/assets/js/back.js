document.addEventListener("DOMContentLoaded", function () {
  const popupTriggers = document.querySelectorAll(".popup-trigger");
  const popup = document.querySelector(".popup");
  const closePopup = document.querySelector(".close-popup");

  popupTriggers.forEach((trigger) => {
    trigger.addEventListener("click", function () {
      popup.classList.remove("hidden");
    });
  });

  closePopup.addEventListener("click", function () {
    popup.classList.add("hidden");
  });

  // Close popup when clicking outside of it
  window.addEventListener("click", function (e) {
    if (e.target === popup) {
      popup.classList.add("hidden");
    }
  });
});
