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
                <h2><?php the_field('contactez-nous-titre');?></h2>
                <form action="/submit_form" method="POST">
                    <label for="name"><?php the_field('first-last-name');?>:</label>
                    <input type="text" id="name" name="name" placeholder="Nom/Name" required>

                    <label for="email"><?php the_field('email');?></label>
                    <input type="email" id="email" name="email"
                        placeholder="Entrez votre adresse courriel / Enter your email address" required>

                    <label for="message"><?php the_field('message');?>:</label>
                    <textarea id="message" name="message" rows="4"
                        placeholder="Écrivez votre message ici / Write your message here" required></textarea>

                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </div>


        <div class="boxcontact">
            <div class="contact-info">
                <h2><?php the_field('nous-joindre-titre');?></h2>
                <!-- Montreal -->
                <div class="location">
                    <!--Rajout manuel vu que le field location marche pas-->
                    <h3><?php the_field('locations'); ?></h3>
                    <p><?php the_field('place_name');?></p>
                    <p><?php the_field('address'); ?></p>
                    <p><?php the_field('postal_code');?></p>
                    <p><?php the_field('phone'); ?></p>
                </div>
                <!-- Québec -->
                <div class="location">
                    <h3><?php the_field('locations2'); ?></h3>
                    <p><?php the_field('place_name2'); ?></p>
                    <p><?php the_field('address_2'); ?></p>
                    <p><?php the_field('postal_code2'); ?></p>
                    <p><?php the_field('phone2'); ?></p>
                </div>
                <!-- Gatineau -->
                <div class="location">
                    <h3><?php the_field('locations3'); ?></h3>
                    <p><?php the_field('address3'); ?></p>
                    <p><?php the_field('postal_code3'); ?></p>
                    <p><?php the_field('phone3'); ?></p>
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