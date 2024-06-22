// add
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
// delete
let rowToDelete = null;

function confirmDelete(deleteData) {
  rowToDelete = deleteData.parentNode.parentNode;
  document.getElementById("overlay-delete").classList.remove("hidden");
  document.getElementById("popup-delete").classList.remove("hidden");
}

function deleteRow() {
  if (rowToDelete) {
    rowToDelete.parentNode.removeChild(rowToDelete);
    closePopup();
    location.reload();
  }
}

function closePopup() {
  document.getElementById("overlay-delete").classList.add("hidden");
  document.getElementById("popup-delete").classList.add("hidden");
  rowToDelete = null;
}
