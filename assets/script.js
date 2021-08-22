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

// Mitra account page
function addLayanan() {
  const layananTersedia = document.getElementById("layanan-tersedia");

  const addLayanan = document.querySelector(".add-layanan");

  const divRow = document.createElement("div");
  divRow.classList.add("row");
  divRow.classList.add("my-3");

  const divCol8 = document.createElement("div");
  divCol8.classList.add("col-sm-8");

  const divCol4 = document.createElement("div");
  divCol4.classList.add("col-sm-4");

  const divInputGroup = document.createElement("div");
  divInputGroup.classList.add("input-group");

  const inputLayanan = document.createElement("input");
  inputLayanan.type = "text";
  inputLayanan.name = "layanan[]";
  inputLayanan.classList.add("form-control");
  inputLayanan.classList.add("me-2");

  const spanRp = document.createElement("span");
  spanRp.classList.add("input-group-text");
  spanRp.innerText = "Rp";

  const hargaLayanan = document.createElement("input");
  hargaLayanan.type = "number";
  hargaLayanan.name = "harga-layanan[]";
  hargaLayanan.classList.add("form-control");
  hargaLayanan.classList.add("me-2");

  const buttonDelete = document.createElement("button");
  buttonDelete.classList.add("btn");
  buttonDelete.classList.add("btn-outline-dark");
  buttonDelete.type = "button";
  buttonDelete.onclick = "deleteLayanan()";

  const spanDelete = document.createElement("span");
  spanDelete.classList.add("bi");
  spanDelete.classList.add("bi-x-lg");

  buttonDelete.append(spanDelete);
  divInputGroup.append(spanRp, hargaLayanan, buttonDelete);
  divCol4.append(divInputGroup);
  divCol8.append(inputLayanan);
  divRow.append(divCol8, divCol4);
  layananTersedia.insertBefore(divRow, addLayanan);
}

function editLayanan() {
  const btnEdit = document.getElementById("edit-layanan");
  const btnSave = document.getElementById("save-layanan");
  const forms = document.querySelectorAll(".form-control");
  forms.forEach((elem) => {
    elem.disabled = false;
  });

  const layanan = document.querySelector(".add-layanan");
  layanan.classList.remove("d-none");
  btnEdit.classList.add("d-none");
  btnSave.classList.remove("d-none");
}

function saveLayanan() {
  const btnEdit = document.getElementById("edit-layanan");
  const btnSave = document.getElementById("save-layanan");
  const forms = document.querySelectorAll(".form-control");
  forms.forEach((elem) => {
    elem.disabled = true;
  });

  const layanan = document.querySelector(".add-layanan");
  layanan.classList.add("d-none");
  btnEdit.classList.remove("d-none");
  btnSave.classList.add("d-none");
}

function deleteLayanan(event) {
  console.log(event.target.parentElement.parentElement.parentElement);
}
