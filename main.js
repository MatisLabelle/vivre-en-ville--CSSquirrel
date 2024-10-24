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

// Accordeon

var acc = document.getElementsByClassName("accordion__button");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
} 
