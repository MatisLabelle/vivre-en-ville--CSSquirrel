<?php
/**
 * Template Name: Service Hub
 * Template Post Type: service, page, post
 * Modèle permettant d'afficher une page.
 */


get_header(); // Affiche header.php

if (have_posts()): // Est-ce que nous avons des pages à afficher ? 
    // Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
    while (have_posts()):
        the_post();
        ?>

        <article>
            <section class="services_hub">
                <div class="about__chemin">
                    <a href="<?php echo home_url('/'); ?>">Acceuil </a>>
                    <a href="service-hub.html"> Nos services</a>>
                </div>
                <h1><?php the_title(); ?></h1>
                <div class="presentation">
                    <p class="text"><?php the_content(); ?></p>
                </div>

                <?php
                $services_query = new WP_Query(array(
                    'post_type' => 'service',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC'
                ));
                ?>

                <?php if ($services_query->have_posts()): ?>
                    <?php while ($services_query->have_posts()):
                        $services_query->the_post(); ?>
                        <div class="service <?php echo sanitize_title(get_field('service_category')); ?>"
                            id="<?php echo sanitize_title(get_field('service_category')); ?>"
                            style="background-color: <?php the_field('background_color'); ?>;">
                            <?php echo sanitize_title(get_field('service_category')); ?>
                            <div class="service__title"><?php the_field('service_title'); ?></div>
                            <div class="service__text"><?php the_field('service_description'); ?></div>
                            <a href="<?php the_permalink(); ?>">
                                <button class="service__button" style="color: <?php the_field('background_color'); ?>;">En savoir
                                    plus</button>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p class="no-service">Aucun service trouvé.</p>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>
            </section>
        </article>
    <?php endwhile; // Fermeture de la boucle

else: // Si aucune page n'a été trouvée
    get_template_part('partials/404'); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>