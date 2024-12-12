<?php 
/**
 * Template Name: Nous contacter
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
    while ( have_posts() ) : the_post(); 
?>

<article>
    <div class="boxcontact-container">
        <!-- Formulaire de contact -->
        <div class="boxcontact">
            <div class="contact-form">
                <h2>Contactez-nous</h2>
                <form action="/submit_form" method="POST">
                    <label for="name">Nom & Prénom:</label>
                    <input type="text" id="name" name="name" placeholder="Entrez votre nom et prénom" required>

                    <label for="email">Adresse courriel:</label>
                    <input type="email" id="email" name="email" placeholder="Entrez votre adresse courriel" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" placeholder="Écrivez votre message ici"
                        required></textarea>

                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </div>

        <!-- Coordonnées -->
        <div class="boxcontact">
            <div class="contact-info">
                <h2>Nous Joindre</h2>

                <?php
                // Requête pour récupérer les adresses (Post Type "adresse")
                $args = array(
                    'post_type' => 'adresse', // Le nom de votre Post Type personnalisé
                    'posts_per_page' => -1 // Récupérer toutes les adresses disponibles
                );
                $adresse_query = new WP_Query($args);

                // Vérifier si des adresses existent
                if ($adresse_query->have_posts()) : 
                    while ($adresse_query->have_posts()) : $adresse_query->the_post();
                        // Afficher les informations de chaque adresse
                ?>
                <div class="location">
                    <h3><?php the_title(); ?></h3> <!-- Affiche le titre du post (Nom de l'endroit) -->
                    <p><?php the_field('place_name'); ?></p> <!-- Nom du lieu -->
                    <p><?php the_field('address'); ?></p> <!-- Adresse -->
                    <p><?php the_field('postal_code'); ?></p> <!-- Code postal -->
                    <p>T. <?php the_field('phone'); ?></p> <!-- Numéro de téléphone -->
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata(); // Réinitialise la requête après le custom loop
                else :
                    // Message si aucune adresse n'est disponible
                    echo '<p>Aucune adresse disponible pour le moment.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</article>

<?php endwhile; // Fermeture de la boucle
else : // Si aucune page n'a été trouvée
    get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>