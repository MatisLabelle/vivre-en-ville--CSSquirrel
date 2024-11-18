gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(TextPlugin);

// Initialisation de Swiper après le chargement du DOM

let swiper = new Swiper(".mySwiper", {
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
});
//Infolettre
gsap
  .timeline({
    scrollTrigger: {
      trigger: ".info-lettre",
      start: "top bottom",
    },
  })
  .from(".info-lettre__newsletter", { y: "-60vh", duration: 2 })
  .from(".info-lettre__send", { y: "-60vh", x: "-100vw", duration: 2 });

ScrollTrigger.refresh();

// Accordion

var acc = document.getElementsByClassName("accordion__button");

for (let i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");

    // Toggle between hiding and showing the active panel
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
      this.querySelector(".accordion__icon").textContent = "+"; // Change to plus when closed
    } else {
      panel.style.display = "block";
      this.querySelector(".accordion__icon").textContent = "−"; // Change to minus when open
    }
  });
}

// NAVBAR

const mobileNav = document.querySelector(".hamburger");
const navbar = document.querySelector(".menubar");

const toggleNav = () => {
  navbar.classList.toggle("active");
  mobileNav.classList.toggle("hamburger-active");
};
mobileNav.addEventListener("click", () => toggleNav());

