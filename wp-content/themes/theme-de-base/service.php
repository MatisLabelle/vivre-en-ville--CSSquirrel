<?php
/**
 *  Template Name: Service
 *  Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if (have_posts()): // Est-ce que nous avons des pages à afficher ? 
    // Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
    while (have_posts()):
        the_post();
        ?>

        <article>
            <section class="recherche">
                <div class="breadcrumb" style="display: flex; flex-direction: row;">
                    <a href="<?php echo home_url('/'); ?>">Acceuil </a>>
                    <a href="service-hub.html"> Nos services</a>>
                    <a href="service.html"> Recherche et innovation</a>
                </div>

                <h1 class="recherche__title"><?php the_title(); ?></h1>
                <h2 class="recherche__subTitle"><?php the_field('subtitle'); ?></h2>
                <p class="recherche__text"><?php the_field('description'); ?></p>

                <div class="recherche__section">
                    <div class="bloc-1">
                        <h3 class="recherche__miniTitle"><?php the_field('bloc1_title'); ?></h3>
                        <p class="recherche__text"><?php the_field('bloc1_description'); ?></p>
                        <ul class="recherche__list">
                            <li><?php the_field('recherche1'); ?></li>
                            <li><?php the_field('recherche2'); ?></li>
                            <li><?php the_field('recherche3'); ?></li>
                            <li><?php the_field('recherche4'); ?></li>
                            <li><?php the_field('recherche5'); ?></li>
                            <li><?php the_field('recherche6'); ?></li>
                            <li><?php the_field('recherche7'); ?></li>
                            <li><?php the_field('recherche8'); ?></li>
                        </ul>
                    </div>
                    <div class="bloc-2">
                        <h3 class="recherche__miniTitle"><?php the_field('bloc2_title'); ?></h3>
                        <p class="recherche__text"><?php the_field('bloc2_description'); ?></p>
                    </div>
                    <div class="bloc-3">
                        <img src="<?php the_field('bloc_image'); ?>" alt="image_service">
                    </div>
                </div>

                <p class="recherche__text">
                    Consultez les <a href="#" class="textLink">réalisations</a> de Vivre en Ville ou les
                    <a href="#" class="textLink">interventions par thématiques</a>.
                </p>

                <h2 class="recherche__subTitle"><?php the_field('subtitle2'); ?></h2>
                <p class="recherche__text"><?php the_field('description2'); ?></p>

                <h3 class="recherche__miniTitle"><?php the_field('mini_title'); ?></h3>
                <ul>
                    <li><?php the_field('projet1'); ?></li>
                    <li><?php the_field('projet2'); ?></li>
                    <li><?php the_field('projet3'); ?></li>
                    <li><?php the_field('projet4'); ?></li>
                </ul>
            </section>
        </article>

    <?php endwhile; // Fermeture de la boucle

else: // Si aucune page n'a été trouvée
    get_template_part('partials/404'); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>