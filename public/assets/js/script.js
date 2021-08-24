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
