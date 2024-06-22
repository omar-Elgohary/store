document.addEventListener("DOMContentLoaded", () => {
  const dropZone = document.querySelector(".drop-zone");
  const fileInput = document.getElementById("file-input");
  const imagePreview = document.getElementById("image-preview");
  const popupOverlayImg = document.getElementById("popup-overlay-img");
  const popupImg = document.getElementById("popup-img");
  const closePopupButtonImg = document.getElementById("close-popup-img");

  dropZone.addEventListener("click", () => fileInput.click());

  fileInput.addEventListener("change", handleFiles);
  dropZone.addEventListener("dragover", handleDragOver);
  dropZone.addEventListener("drop", handleDrop);
  closePopupButtonImg.addEventListener("click", closePopup);

  function handleFiles(event) {
    const files = event.target.files || event.dataTransfer.files;
    if (imagePreview.children.length + files.length > 4) {
      showPopup();
    } else {
      Array.from(files).forEach(previewFile);
    }
  }

  function handleDragOver(event) {
    event.preventDefault();
    event.stopPropagation();
    dropZone.classList.add("bg-gray-200");
  }

  function handleDrop(event) {
    event.preventDefault();
    event.stopPropagation();
    dropZone.classList.remove("bg-gray-200");
    handleFiles(event);
  }

  function previewFile(file) {
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onloadend = () => {
      const img = document.createElement("img");
      img.src = reader.result;
      img.classList.add("max-w-full", "max-h-32", "rounded-[4px]");

      const imgContainer = document.createElement("div");
      imgContainer.classList.add("image-container", "mx-2", "my-2", "relative");

      const deleteButton = document.createElement("button");
      deleteButton.classList.add(
        "delete-button",
        "absolute",
        "top-[4px]",
        "right-[4px]",
        "bg-red-500",
        "text-white",
        "rounded-full",
        "w-6",
        "h-6",
        "flex",
        "items-center",
        "justify-center"
      );
      deleteButton.innerHTML = "&times;";
      deleteButton.addEventListener("click", () => imgContainer.remove());

      imgContainer.appendChild(img);
      imgContainer.appendChild(deleteButton);
      imagePreview.appendChild(imgContainer);
    };
  }

  function showPopup() {
    popupOverlayImg.classList.remove("hidden");
    popupImg.classList.remove("hidden");
  }

  function closePopup() {
    popupOverlayImg.classList.add("hidden");
    popupImg.classList.add("hidden");
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const openPopupButton = document.getElementById("open-popup");
  const popupOverlay = document.getElementById("popup-overlay");
  const popup = document.getElementById("popup");
  const closeButton = document.getElementById("close-popup");

  // Function to open the popup
  function openPopup() {
    popupOverlay.classList.remove("hidden");
    popup.classList.remove("hidden");
  }

  // Function to close the popup
  function closePopup() {
    popupOverlay.classList.add("hidden");
    popup.classList.add("hidden");
  }

  // Event listener for opening the popup
  openPopupButton.addEventListener("click", openPopup);

  // Event listener for closing the popup
  closeButton.addEventListener("click", closePopup);
});
