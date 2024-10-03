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

// Toujours 1 accordeon ouvert
const accordionInputs = document.querySelectorAll(".services__input");

accordionInputs.forEach((input) => {
  input.addEventListener("change", () => {
    accordionInputs.forEach((i) => {
      if (i !== input) {
        i.checked = false;
      }
    });
  });
});
