// Register page
const showTab = () => {
  const shown = document.getElementsByClassName("active");
  const hidden = document.getElementsByClassName("tabs");

  for (const itemsShown of shown) {
    itemsShown.style.display = "none";
  }

  for (const itemsHidden of hidden) {
    itemsHidden.style.display = "block";
  }
};

// Account page edit-save telepon
const editTelepon = () => {
  document.getElementById("telepon").disabled = false;
  document
    .getElementById("save-telepon")
    .classList.replace("d-none", "d-inline");
};
const saveTelepon = () => {
  document.getElementById("telepon").disabled = true;
  document
    .getElementById("save-telepon")
    .classList.replace("d-inline", "d-none");
};

// Account page edit-save telepon
const editEmail = () => {
  document.getElementById("email").disabled = false;
  document.getElementById("save-email").classList.replace("d-none", "d-inline");
};
const saveEmail = () => {
  document.getElementById("email").disabled = true;
  document.getElementById("save-email").classList.replace("d-inline", "d-none");
};

// Account page edit-save-see password
const editPassword = () => {
  document.getElementById("password").disabled = false;
  document
    .getElementById("save-password")
    .classList.replace("d-none", "d-inline");
};
const savePassword = () => {
  document.getElementById("password").disabled = true;
  document
    .getElementById("save-password")
    .classList.replace("d-inline", "d-none");
};

document.getElementById("see-password").addEventListener("click", () => {
  const icon = document.getElementById("password-icon");
  if (icon.classList.contains("bi-eye")) {
    icon.classList.replace("bi-eye", "bi-eye-slash");
    document.getElementById("password").setAttribute("type", "text");
  } else {
    icon.classList.replace("bi-eye-slash", "bi-eye");
    document.getElementById("password").setAttribute("type", "password");
  }
});
