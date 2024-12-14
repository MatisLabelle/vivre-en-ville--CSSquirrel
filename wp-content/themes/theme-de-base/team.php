<?php
/**
 * Template Name: Team
 * Template Post Type: team-member, page, post
 * Modèle permettant d'afficher une page.
 */
get_header(); // Affiche header.php

// Est-ce que nous avons des pages à afficher ?
if (have_posts()):
    // Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
    while (have_posts()):
        the_post();
        ?>

        <main>
            <section class="equipe">
                <div class="equipe__container">
                    <div class="chemin">
                        <a href="<?php echo home_url('/'); ?>">Acceuil </a>>
                        <a href="news-hub.html"> Notre équipe</a>
                    </div>
                    <div class="equipe__description">
                        <h2 class="equipe__title"><?php the_title(); ?></h2>
                        <p class="equipe__text">Son équipe polyvalente, rigoureuse et engagée fait de Vivre en Ville un acteur
                            reconnu au service des collectivités viables au Québec.</p>
                    </div>
                    <div class="equipe__grid">
                        <?php
                        // Query for custom post type 'team-member'
                        $team_query = new WP_Query(array(
                            'post_type' => 'team-member',
                            'posts_per_page' => -1,
                            'orderby' => 'title',
                            'order' => 'ASC'
                        ));
                        ?>

                        <?php if ($team_query->have_posts()): ?>
                            <?php while ($team_query->have_posts()):
                                $team_query->the_post(); ?>
                                <div class="equipe__card" style="background-color: <?php the_field('background_color'); ?>;">
                                    <h3 class="equipe__name"><?php the_field('name'); ?></h3>
                                    <p class="equipe__position"><?php the_field('role'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p class="no-team">Aucun membre de l'équipe trouvé.</p>
                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>
        </main>

    <?php endwhile; // Fermeture de la boucle

else: // Si aucune page n'a été trouvée
    get_template_part('partials/404'); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>