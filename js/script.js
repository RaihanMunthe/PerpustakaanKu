// Toggle class active
const navbarNav = document.querySelector(".navbar-nav");
// ketika humberger menu active ada slide warna
document.querySelector("#menu").onclick = () => {
  navbarNav.classList.toggle("active");
};
// bisa klik dimana saja untuk menon-active kan menu
const menu = document.querySelector("#menu");

document.addEventListener("click", function (e) {
  if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});
