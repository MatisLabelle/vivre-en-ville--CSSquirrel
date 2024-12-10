<?php 
/**
 * 	Template Name: News article
 * Template post type: nouvelle
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>


<div class="chemin">
    <a href="<?php echo home_url('/'); ?>">Acceuil </a>>
    <a href="news-hub.html"> Actualités </a>>
    <a href="news-article.html"> Communiqué</a>
</div>
<div class="actu__date"><?php the_field('date');?></div>
<h1 class="actu__title">
    <?php print the_title();?>
</h1>
<div class="actu__grid">
    <div class="actu__post">
        <img class="actu__img" src="<?php the_post_thumbnail_url();?>" />
        <p class="actu__credit">PHOTO PEXEL</p>

        <div class="actu__text">
            <?php the_content(); ?>
        </div>

        <div class="actu__auteur">
            <h4 class="actu__auteur-name"><?php the_field('auteur');?></h4>
            <p class="actu__auteur-info">
                <?php the_field('role');?>
            </p>
            <p class="actu__auteur-info">
                <?php the_field('phone');?> | <?php the_field('email');?>
            </p>
        </div>

    </div>
    <div class="actu__more">
        <h2 class="actu__alike"><?php the_field('more');?></h2>
        <div class="actu__plus">
            <?php 
            $order = isset($_GET['order']) ? $_GET['order'] : 'DESC';
            $arguments = array(
                'post_type' => 'nouvelle',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => "DESC",
                'meta_key' => 'article', // Assurez-vous que ce champ existe
            );
            $nouvelles = new WP_Query($arguments);
            if ( $nouvelles->have_posts() ) :
            $first = true;
            while ( $nouvelles->have_posts() ) : $nouvelles->the_post(); ?>

            <a href="<?php the_permalink()?>">
                <div class="actu__plus--1">
                    <img src="<?php the_post_thumbnail_url();?>" alt="News 1" class="news-image" />

                    <h3><?php print the_title();?></h3>
                </div>
            </a>


            <?php
                $first = false;    
                endwhile; 
                wp_reset_postdata(); 
                endif;
            ?>
        </div>
        <div class="actu__cta">
            <h2 class="actu__help"><?php the_field('help');?></h2>
            <button class="actu__donner">Donner</button>
        </div>
    </div>
</div>
</main>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>