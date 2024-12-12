<?php 
/**
 * 	Template Name: Nous contacter
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
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
                    <input type="text" id="name" name="name" placeholder="<?php the_field('first-last-name'); ?>"
                        required>

                    <label for="email">Adresse courriel:</label>
                    <input type="email" id="email" name="email" placeholder="<?php the_field('email'); ?>" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" placeholder="<?php the_field('message'); ?>"
                        required></textarea>

                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </div>

        <!-- Montreal -->
        <div class="boxcontact">
            <div class="contact-info">
                <h2>Nous Joindre</h2>
                <!-- Coordonnées -->
                <div class="location">
                    <h3><?php the_field('locations'); ?></h3>
                    <p><?php the_field('place_name'); ?></p>
                    <p><?php the_field('address'); ?></p>
                    <p><?php the_field('postal_code'); ?></p>
                    <p><?php the_field('phone'); ?></p>
                </div>
                <!-- Quebec -->
                <div class="location">
                    <h3><?php the_field('locations_2'); ?></h3>
                    <p><?php the_field('place_name_2'); ?></p>
                    <p><?php the_field('address_2'); ?></p>
                    <p><?php the_field('postal_code_2'); ?></p>
                    <p><?php the_field('phone_2'); ?></p>
                </div>
                <!-- Gatineau -->
                <div class="location">
                    <h3><?php the_field('locations_3'); ?></h3>
                    <p><?php the_field('address_3'); ?></p>
                    <p><?php the_field('postal_code_3'); ?></p>
                    <p><?php the_field('phone_3'); ?></p>
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