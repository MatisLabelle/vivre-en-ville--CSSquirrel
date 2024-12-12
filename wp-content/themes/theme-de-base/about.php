<?php 
/**
 * 	Template Name: À propos
 *  Template Post Type: post, page, about-us-card
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
<article>
    <div class="about__chemin">
        <a href="<?php echo home_url('/'); ?>">Acceuil </a>>
        <a href="about.html"> À propos de nous</a>>
    </div>
    <h1 class="about__title">À propos de nous</h1>
    <div class="about__grid">
        <div class="approche">
            <h2 class="approche__title">Notre approche</h2>
            <ul class="approche__text">
                <?php
                $args = array(
                    'post_type' => 'about-us-card',
                    'posts_per_page' => -1
                );
                $about_us_cards = get_posts($args);
                foreach ($about_us_cards as $card) {
                    ?>
                <p>
                    <?php echo get_field('description', $card->ID); ?>
                </p>
                <li>
                    <strong><?php echo get_field('title', $card->ID); ?></strong>
                    <?php echo get_field('content', $card->ID); ?>
                </li>
                <?php } ?>
            </ul>
        </div>

        <div class="mission">
            <h2 class="mission__title">Notre mission</h2>
            <p class="mission__text">
                <i class="mission__alt"><?php the_field('title'); ?></i>
            </p>
            <p class="mission__text">
                <?php echo get_field('content'); ?>
            </p>
        </div>
        <div class="histoire">
            <h2 class="histoire__title">Un peu d'histoire</h2>
            <p class="histoire__text">
                <?php echo get_field('content'); ?>
            </p>
            <h4 class="histoire__question">
                Qu'est-ce qu'une collectivité viable?
            </h4>
            <p class="histoire__text">
                <?php echo get_field('content'); ?>
            </p>
        </div>
    </div>
</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>