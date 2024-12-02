<?php
/**
 * Template Name: Team
 * Modèle permettant d'afficher une page.
 */

get_header(); // Affiche header.php

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<main>
    <section class="equipe">
        <div class="equipe__container">
            <div class="chemin">
                <a href="<?php echo home_url('/'); ?>">Acceuil </a>>
                <a href="news-hub.html"> Équipe</a>
            </div>
            <div class="equipe__description">
                <h2 class="equipe__title">Notre équipe</h2>
                <p class="equipe__text">Son équipe polyvalente, rigoureuse et engagée fait de Vivre en Ville un acteur
                    reconnu au service des collectivités viables au Québec.</p>
            </div>
            <div class="equipe__grid">
                <div class="equipe__card">
                    <h3 class="equipe__name">Alexandre Turgeon</h3>
                    <p class="equipe__position">Fondateur et président exécutif</p>
                </div>
                <div class="equipe__card">
                    <h3 class="equipe__name">Christian Savard</h3>
                    <p class="equipe__position">Directeur général</p>
                </div>
                <div class="equipe__card">
                    <h3 class="equipe__name">Jeanne Robin</h3>
                    <p class="equipe__position">Directrice principale</p>
                </div>
                <div class="equipe__card">
                    <h3 class="equipe__name">Capucine</h3>
                    <p class="equipe__position">Directrice - Communications</p>
                </div>
                <div class="equipe__card">
                    <h3 class="equipe__name">Marie-Hélène Coll</h3>
                    <p class="equipe__position">Directrice générale adjointe</p>
                </div>
                <div class="equipe__card">
                    <h3 class="equipe__name">Alejandra de la Cruz Boulianne</h3>
                    <p class="equipe__position">Directrice - Aménagement du territoire et urbanisme</p>
                </div>
                <div class="equipe__card">
                    <h3 class="equipe__name">Adam Mongrain</h3>
                    <p class="equipe__position">Directeur - Habitation</p>
                </div>
                <div class="equipe__card">
                    <h3 class="equipe__name">Chantal de Montigny</h3>
                    <p class="equipe__position">Directrice - Système alimentaires de proximité</p>
                </div>
                <div class="equipe__card">
                    <h3 class="equipe__name">Vanessa Normand</h3>
                    <p class="equipe__position">Directrice général adjointe</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>