<?php
/**
 * Template Name: About
 * Template Post Type: post, page, about-us-card
 */

get_header(); // Display header.php

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
?>

<article>
    <div class="about__chemin">
        <a href="<?php echo home_url('/'); ?>">Accueil</a> >
        <a href="<?php echo get_permalink(); ?>">À propos de nous</a>
    </div>
    <h1 class="about__title">À propos de nous</h1>
    <div class="about__grid">
        <!-- Notre Approche Section -->
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

        <!-- Notre Mission Section -->
        <div class="mission">
            <h2 class="mission__title"><?php the_field('title'); ?></h2>
            <p class="mission__text">
                <i class="mission__alt"><?php the_field('title'); ?></i>
            </p>
            <p class="mission__text">
                <?php echo get_field('content'); ?>
            </p>
        </div>

        <!-- Un Peu D'Histoire Section -->
        <div class="histoire">
            <h2 class="histoire__title"><?php the_field('title'); ?></h2>
            <p class="histoire__text">
                <?php echo get_field('content'); ?>
            </p>
            <p class="histoire__text">
                <?php echo get_field('content'); ?>
            </p>
        </div>
    </div>
</article>
<?php 
    endwhile; 
else : 
    get_template_part( 'partials/404' ); 
endif;

get_footer(); // Display footer.php
?>