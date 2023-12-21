document.addEventListener("DOMContentLoaded", function () {
  const showInput = document.getElementById("show-form");

  showInput.addEventListener("click", function () {
    const formInput = document.getElementById("menu-form");

    if (formInput.style.display === "none") {
      formInput.style.display = "flex";
    }
  });

  const ousideModal = document.getElementById("menu-form");
  ousideModal.addEventListener("click", function (e) {
    if (e.target.id === "menu-form") {
      if (ousideModal.style.display === "flex") {
        ousideModal.style.display = "none";
      }
    }
  });
});
