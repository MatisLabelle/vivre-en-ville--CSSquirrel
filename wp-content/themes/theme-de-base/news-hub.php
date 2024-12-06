<?php 
/**
 * 	Template Name: News hub
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<main>
    <div class="chemin">
        <a href="<?php echo home_url('/'); ?>">Acceuil </a>>
        <a href="news-hub.html"> Actualités</a>
    </div>

    <h1 class="news__title">Actualités</h1>
    <div class="news__grid">
        <div class="news__list">
            <form method="GET" id="order-form">
                <label for="order">Trier par :</label>
                <select name="order" id="order" onchange="this.form.submit()">
                    <option value="DESC" <?php selected($_GET['order'], 'DESC'); ?>>Plus récentes</option>
                    <option value="ASC" <?php selected($_GET['order'], 'ASC'); ?>>Plus anciennes</option>
                </select>
            </form>

            <?php 
            $order = isset($_GET['order']) ? $_GET['order'] : 'DESC';
            $arguments = array(
                'post_type' => 'nouvelle',
                'posts_per_page' => 4,
                'orderby' => 'date',
                'order' => $order,
                'meta_key' => 'article', // Assurez-vous que ce champ existe
            );
            $nouvelles = new WP_Query($arguments);
            if ( $nouvelles->have_posts() ) :
            $first = true;
            while ( $nouvelles->have_posts() ) : $nouvelles->the_post(); ?>
            <a href="<?php the_permalink()?>">
                <div class="news__card news__card--1">
                    <div class="card__content">
                        <h3 class="card__title"><?php print the_title();?></h3>

                        <?php the_field('article');?>

                        <p class="card__info"><?php the_field('date'); ?></p>
                    </div>
                    <img class="card__img" src="<?php the_post_thumbnail_url();?>">
                </div>
            </a>
            <?php
                $first = false;    
                endwhile; 
                wp_reset_postdata(); 
                endif;
            ?>
            <p class=" news__pages">
                <button id="load-more" data-offset="4" data-order="DESC">Voir plus</button>
            </p>
        </div>
        <div class="news__archives">
            <h2 class="archive__title">Archives</h2>
            <ul class="archive__year">
                <li>
                    2024
                </li>
                <li>2023</li>
                <li>2022</li>
                <li>2021</li>
                <li>2020</li>
                <li>2019</li>
                <li>2018</li>
                <li>2017</li>
                <li>2016</li>
                <li>2015</li>
                <li>2014</li>
                <li>2013</li>
            </ul>

            <p class="archive__more">Voir plus</p>
        </div>
    </div>
</main>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>