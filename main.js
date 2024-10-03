gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(TextPlugin);

const swiper = new Swiper(".swiper", {
  direction: "vertical",
  loop: true,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});

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
 const accordionInputs = document.querySelectorAll('.services__input');

 accordionInputs.forEach(input => {
   input.addEventListener('change', () => {
     accordionInputs.forEach(i => {
       if (i !== input) {
         i.checked = false; 
       }
     });
   });
 });
