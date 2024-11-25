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
                <div class="location">
                    <h3>Montréal</h3>
                    <p>Maison du développement durable</p>
                    <p>50, rue Ste-Catherine Ouest, bur. 480</p>
                    <p>Montréal (Québec) H2X 3V4</p>
                    <p>T. (514) 394-1125</p>
                </div>
                <div class="location">
                    <h3>Québec</h3>
                    <p>Centre culture et environnement Frédéric Back</p>
                    <p>870, avenue De Salaberry, bureau 311</p>
                    <p>Québec (Québec) G1R 2T9</p>
                    <p>T. (418) 522-0011</p>
                </div>
                <div class="location">
                    <h3>Gatineau</h3>
                    <p>200-A, boulevard Saint-Joseph</p>
                    <p>Gatineau (Québec) J8Y 3W9</p>
                    <p>T. (819) 205-2053</p>
                </div>
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