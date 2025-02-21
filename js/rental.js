// Toggle class active
const navbarNav = document.querySelector(".navbar-nav");

// Fungsi untuk membuka form pemesanan
function openBookingForm(carName) {
  document.getElementById("selectedCar").textContent = carName;
  document.getElementById("bookingForm").style.display = "flex";
}

// Fungsi untuk menutup form pemesanan
function closeBookingForm() {
  document.getElementById("bookingForm").style.display = "none";
}

document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});
