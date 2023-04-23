const menuBtn = document.getElementById("menu-btn");
const mobileMenu = document.getElementById("mobile-Menu");
const menuTable = document.getElementById("table-pagination-div");

menuBtn.addEventListener("click", navToggle);

function navToggle() {
  menuBtn.classList.toggle("open");
  mobileMenu.classList.toggle("hidden");
  menuTable.classList.toggle("hidden");
}
