<?php
/**
 * Template Name: Service
 * Template Post Type: service-page, page, post
 * Modèle permettant d'afficher une page.
 */

get_header(); // Affiche header.php

if (have_posts()): // Est-ce que nous avons des pages à afficher ? 
    // Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
    while (have_posts()):
        the_post();
        ?>

        <article>
            <section class="recherche">
                <div class="breadcrumb">
                    <a href="<?php echo home_url('/'); ?>">Accueil&nbsp;</a>
                    <p>>&nbsp;</p><a href="services-hub.html">Nos services&nbsp;</a>
                    <p>>&nbsp;</p><a href="service.html">Recherche et innovation</a>
                </div>
                <h1 class="recherche__title"><?php the_title(); ?></h1>
                <h2 class="recherche__subTitle"><?php the_field('subtitle'); ?></h2>
                <p class="recherche__text"><?php the_field('intro_text'); ?></p>
                <div class="recherche__section">
                    <div class="bloc-1">
                        <h3 class="recherche__miniTitle"><?php the_field('current_research_title'); ?></h3>
                        <p class="recherche__text"><?php the_field('current_research_description'); ?></p>
                        <ul class="recherche__list">
                            <?php if (have_rows('current_research_topics')): ?>
                                <?php while (have_rows('current_research_topics')):
                                    the_row(); ?>
                                    <li><?php the_sub_field('topic'); ?></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="bloc-2">
                        <h3 class="recherche__miniTitle"><?php the_field('research_missions_title'); ?></h3>
                        <p class="recherche__text"><?php the_field('research_missions_description'); ?></p>
                    </div>
                    <div class="bloc-3">
                        <img src="<?php the_field('image'); ?>" alt="<?php the_field('image_alt'); ?>">
                    </div>
                </div>
                <p class="recherche__text">Consultez les <a href="<?php the_field('realizations_link'); ?>"
                        class="textLink">réalisations</a> de Vivre en Ville ou les <a href="<?php the_field('themes_link'); ?>"
                        class="textLink">interventions par thématiques</a>.</p>
                <h2 class="recherche__subTitle"><?php the_field('innovation_title'); ?></h2>
                <p class="recherche__text"><?php the_field('innovation_description'); ?></p>
                <h3 class="recherche__miniTitle"><?php the_field('pilot_projects_title'); ?></h3>
                <ul>
                    <?php if (have_rows('pilot_projects')): ?>
                        <?php while (have_rows('pilot_projects')):
                            the_row(); ?>
                            <li>
                                <a href="<?php the_sub_field('project_link'); ?>"
                                    class="textLink"><?php the_sub_field('project_name'); ?></a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </section>
        </article>
    <?php endwhile; // Fermeture de la boucle

else: // Si aucune page n'a été trouvée
    get_template_part('partials/404'); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>