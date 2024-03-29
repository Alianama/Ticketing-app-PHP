document.addEventListener("DOMContentLoaded", function () {
  // Add Ticket Modal
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

  // delete ticket modal
  const deleteTicketModal = document.getElementById("delete-modal");
  const deleteBtn = document.getElementsByClassName("delete-btn");
  const cancelDelete = document.getElementById("cancel-delete");
  const deleteIdInput = document.getElementById("delete-id");

  [...deleteBtn].forEach((element) => {
    element.addEventListener("click", function (event) {
      if (
        deleteTicketModal.style.display === "none" ||
        deleteTicketModal.style.display === ""
      ) {
        deleteTicketModal.style.display = "flex";
      }

      deleteIdInput.value =
        event.currentTarget.parentElement.querySelector(
          "input[name='id']"
        ).value;
    });
  });

  cancelDelete.addEventListener("click", function () {
    if (deleteTicketModal.style.display === "flex") {
      deleteTicketModal.style.display = "none";
    }
  });

  // edit Button
  const editBtn = document.getElementsByClassName("edit-btn");
  const editForm = document.getElementById("edit-form");
  const editIdInput = document.getElementById("edit-id");
  const newName = document.getElementById("new-name");
  const newKerusakan = document.getElementById("new-kerusakan");
  const newTanggal = document.getElementById("new-tanggal");

  [...editBtn].forEach((element) => {
    element.addEventListener("click", function (event) {
      const editNameid = document.getElementById("name-" + event.target.id);
      const editkesusakanid = document.getElementById(
        "kerusakan-" + event.target.id
      );
      const edittanggalid = document.getElementById(
        "tanggal-" + event.target.id
      );
      if (editForm.style.display === "none" || editForm.style.display === "") {
        editForm.style.display = "flex";
        editIdInput.value =
          event.currentTarget.parentElement.querySelector(
            "input[name='id']"
          ).value;
        newName.value = editNameid.innerHTML;
        newKerusakan.value = editkesusakanid.innerHTML;
        newTanggal.value = edittanggalid.innerHTML;
      }
    });
  });

  editForm.addEventListener("click", function (e) {
    if (e.target.id === "edit-form") {
      if (editForm.style.display === "flex") {
        editForm.style.display = "none";
      }
    }
  });

  // Profil Modal
  const profilBtn = document.getElementById("profil-btn");
  const profilModal = document.getElementById("profil-modal-container");
  const body = document.body;

  profilBtn.addEventListener("click", function (e) {
    e.stopPropagation();

    if (getComputedStyle(profilModal).display === "none") {
      profilModal.style.display = "flex";

      const closeOnOutsideClick = function () {
        profilModal.style.display = "none";
        body.removeEventListener("click", closeOnOutsideClick);
      };

      body.addEventListener("click", closeOnOutsideClick);
    }
  });
});
