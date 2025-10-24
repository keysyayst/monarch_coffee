const hamburger = document.getElementById("hamburger");
const navLinks = document.getElementById("navLinks");
const header = document.getElementById("mainHeader");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("active");
  hamburger.classList.toggle("open");
});

window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});
AOS.init({
  duration: 1000,
  once: true
});
