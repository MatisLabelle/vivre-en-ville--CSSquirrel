// Import Swiper and modules
import Swiper, { Pagination } from 'swiper';
import './node_modules/swiper'; // Importation des styles

// Initialise Swiper
document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.swiper-container', {
        loop: true, // Permet de boucler le carrousel
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});
