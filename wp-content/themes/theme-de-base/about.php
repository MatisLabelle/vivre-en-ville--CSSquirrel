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
                    'posts_per_page' => -1,
                );
                $about_us_cards = get_posts($args);
                
                if ($about_us_cards) {
                    foreach ($about_us_cards as $card) {
                        $card_title = get_field('title', $card->ID);
                        $card_description = get_field('description', $card->ID);
                        $card_content = get_field('content', $card->ID);
                ?>
                <li>
                    <h3><?php echo esc_html($card_title ?: 'No Title Available'); ?></h3>
                    <p><?php echo esc_html($card_description ?: 'No Description Available'); ?></p>
                    <p><?php echo esc_html($card_content ?: 'No Content Available'); ?></p>
                </li>
                <?php 
                    }
                } else {
                    echo '<p>No About Us Cards found.</p>';
                }
                ?>
            </ul>
        </div>

        <!-- Notre Mission Section -->
        <div class="mission">
            <h2 class="mission__title"><?php the_field('title'); ?></h2>
            <p class="mission__text">
                <i class="mission__alt"><?php the_field('description'); ?></i>
            </p>
            <p class="mission__text">
                <?php the_field('content'); ?>
            </p>
        </div>

        <!-- Un Peu D'Histoire Section -->
        <div class="histoire">
            <h2 class="histoire__title"><?php the_field('title'); ?></h2>
            <p class="histoire__text">
                <?php the_field('description'); ?>
            </p>
            <p class="histoire__text">
                <?php the_field('content'); ?>
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