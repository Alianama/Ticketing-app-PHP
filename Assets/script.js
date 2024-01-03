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
  const deleteBtn = document.getElementById("delete-btn");
  const cancelDelete = document.getElementById("cancel-delete");
  const yesDelete = document.getElementById("yes-delete");
  const deleteIdInput = document.getElementById("delete-id");

  if (deleteBtn && deleteIdInput && deleteTicketModal) {
    deleteBtn.addEventListener("click", function (event) {
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
  }

  cancelDelete.addEventListener("click", function () {
    if (deleteTicketModal.style.display === "flex") {
      deleteTicketModal.style.display = "none";
    }
  });

  // edit Button
  const editBtn = document.getElementById("edit-btn");
  const editForm = document.getElementById("edit-form");

  editBtn.addEventListener("click", function (event) {
    if (editForm.style.display === "none" || editForm.style.display === "") {
      editForm.style.display = "flex";
      console.log(event);
    }
  });

  editForm.addEventListener("click", function (e) {
    if (e.target.id === "edit-form") {
      if (editForm.style.display === "flex") {
        editForm.style.display = "none";
      }
    }
  });

  const newName = document.getElementById("new-name");
  const newKerusakan = document.getElementById("new-kerusakan");
  const newTanggal = document.getElementById("new-tanggal");
});
