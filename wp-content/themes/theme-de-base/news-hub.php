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
            <?php 
        $nouvelles = new WP_Query('post_type=nouvelle');
        while ( $nouvelles->have_posts() ) : $nouvelles->the_post(); 
?>
            <a href="news-article.html">

                <div class="news__card news__card--1">
                    <div class="card__content">
                        <h3 class="card__title"><?php print the_title();?></h3>

                        <?php echo the_excerpt();?>

                        <p class="card__info">22 août 2024</p>
                    </div>
                    <img class="card__img" src="<?php the_post_thumbnail();?>" />
                </div>
            </a>
            <?php endwhile; ?>
            <p class="news__pages">
                <span>Précedent</span> 1 2 3 4 5 <span>Suivant</span>
            </p>
        </div>
        <div class="news__archives">
            <h2 class="archive__title">Archives</h2>
            <ul class="archive__year">
                <li>
                    2024
                    <ul class="archive__month">
                        <li>Septembre</li>
                        <li>Août</li>
                        <li>Juillet</li>
                        <li>Juin</li>
                        <li>May</li>
                        <li>Avril</li>
                        <li>Mars</li>
                        <li>Février</li>
                        <li>Janvier</li>
                    </ul>
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