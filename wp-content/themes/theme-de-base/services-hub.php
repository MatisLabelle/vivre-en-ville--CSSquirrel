<?php 
/**
 * 	Template Name: Service hub
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<article>
    <section class="services_hub">
        <div class="about__chemin">
            <a href="index.html">Acceuil </a>>
            <a href="about.html"> Nos services</a>>
        </div>
        <h1>Nos services</h1>
        <div class="presentation">
            <p class="text">Polyvalente, rigoureuse et engagée, l’équipe de Vivre en Ville déploie un large éventail de
                compétences. Cette expertise diversifiée fait de l’organisation un acteur reconnu, tant pour ses <a
                    href="#recherches" id="recherches">recherches</a> et publications, ses activités de <a
                    href="#formation" id="formation">formation</a> et de <a href="#sensibilisation"
                    id="sensibilisation">sensibilisation</a> que pour son implication dans le débat public et pour ses
                services en <a href="#conseil" id="conseil">conseil et accompagnement</a>.</p>
        </div>
        <div class="service recherche" id="recherches">
            <div class="service__title">Recherche et innovation</div>
            <div class="service__text">Explorer, diffuser et expérimenter les meilleures pratiques de développement de
                collectivités viables.</div>
            <a href="service.html"><button class="service__button">En savoir plus</button></a>
        </div>
        <div class="service formation" id="formation">
            <div class="service__title">Formation</div>
            <div class="service__text">Une panoplie de conférences, d’ateliers, de colloques et de missions sur de
                nombreux thèmes liés aux collectivités viables.</div>
            <button class="service__button">En savoir plus</button>
        </div>
        <div class="service conseil" id="conseil">
            <div class="service__title">Conseil et accompagnement</div>
            <div class="service__text">Divisée en deux volets, notre offre variée permet aux municipalités,
                organisations publiques, ou entreprises de mettre en œuvre des projets d’avant-garde grâce aux
                compétences de notre équipe pluridisciplinaire.</div>
            <button class="service__button">En savoir plus</button>
        </div>
        <div class="service sensibilisation" id="sensibilisation">
            <div class="service__title">Sensibilisation</div>
            <div class="service__text">Une expérience pointue dans la sensibilisation du public et la vulgarisation :
                publications, conférences et conseils personnalisés s’articulent autour de campagnes et de tournées de
                sensibilisation.</div>
            <button class="service__button">En savoir plus</button>
        </div>

    </section>
</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>