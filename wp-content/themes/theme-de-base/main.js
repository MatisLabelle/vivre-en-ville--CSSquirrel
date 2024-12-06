/* Wow, tellement un beau spot pour écrire du JS */

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

// voir plus de nouvelles

const ajaxUrl = ajaxData.ajaxUrl; // Récupère l'URL dynamique

document.getElementById("load-more").addEventListener("click", function () {
  const button = this;
  const offset = parseInt(button.getAttribute("data-offset"), 10);
  const order = button.getAttribute("data-order");

  // Vérifiez si ajaxData est correctement défini
  if (!ajaxData || !ajaxData.ajaxUrl) {
    console.error("ajaxData n'est pas défini.");
    return;
  }

  fetch(
    `${ajaxData.ajaxUrl}?action=load_more_nouvelles&offset=${offset}&order=${order}`
  )
    .then((response) => {
      if (!response.ok) {
        throw new Error(`Erreur HTTP ! Statut : ${response.status}`);
      }
      return response.text();
    })
    .then((data) => {
      if (data.trim() === "") {
        button.style.display = "none"; // Cache le bouton si aucune donnée
      } else {
        document
          .querySelector(".news__list")
          .insertAdjacentHTML("beforeend", data);
        button.setAttribute("data-offset", offset + 4); // Augmente l'offset
      }
    })
    .catch((error) =>
      console.error("Erreur lors du chargement des nouvelles :", error)
    );
});
// menu deroulant order

document.getElementById("order").addEventListener("change", function () {
  const form = document.getElementById("order-form");
  form.submit(); // Soumet le formulaire pour recharger la page avec le nouvel ordre
});
