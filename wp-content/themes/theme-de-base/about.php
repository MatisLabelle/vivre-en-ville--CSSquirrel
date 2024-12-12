<?php
/**
* Template Name: About
* Template Post Type: about-us-card, page, post
* Modèle permettant d'afficher une page.
*/
 
get_header(); // Affiche header.php
?>
<article>
    <div class="about__chemin">
        <a href="<?php echo home_url('/'); ?>">Accueil</a> >
        <a href="<?php echo get_permalink(); ?>">À propos de nous</a>
    </div>
    <div class="about__grid">
        <!-- Section pour la carte "Notre approche" (ID 179) -->
        <div class="approche">
            <?php
            // Récupérer la carte "À propos de nous" en utilisant son ID (179)
            $card_1 = get_post(179); 
            if ($card_1) :
            $card_1_title = get_field('title', $card_1->ID);
            $card_1_description = get_field('description', $card_1->ID);
            $card_1_content = get_field('content', $card_1->ID);
            ?>
            <h2><?php echo esc_html($card_1_title ?: 'No Description Available'); ?></h2>
            <p><?php echo esc_html($card_1_description ?: 'No Description Available'); ?></p>
            <p><?php echo esc_html($card_1_content ?: 'No Content Available'); ?></p>
            <?php else: ?>
            <p>Aucune information disponible pour cette carte.</p>
            <?php endif; ?>
        </div>

        <!-- Section pour la carte "Notre mission" (ID 180) -->
        <div class="mission">
            <?php
            // Récupérer la carte "Notre mission" en utilisant son ID (180)
            $card_2 = get_post(180); 
            if ($card_2) :
                $card_2_title = get_field('title', $card_2->ID);
                $card_2_description = get_field('description', $card_2->ID);
                $card_2_content = get_field('content', $card_2->ID);
            ?>
            <h2><?php echo esc_html($card_2_title ?: 'No Description Available'); ?></h2>
            <p><?php echo esc_html($card_2_description ?: 'No Description Available'); ?></p>
            <p><?php echo esc_html($card_2_content ?: 'No Content Available'); ?></p>
            <?php else: ?>
            <p>Aucune information disponible pour cette carte.</p>
            <?php endif; ?>
        </div>

        <!-- Section pour la carte "Un peu d'histoire" (ID 181) -->
        <div class="histoire">
            <?php
            // Récupérer la carte "Un peu d'histoire" en utilisant son ID (181)
            $card_3 = get_post(181); 
            if ($card_3) :
                $card_3_title = get_field('title', $card_3->ID);
                $card_3_description = get_field('description', $card_3->ID);
                $card_3_content = get_field('content', $card_3->ID);
            ?>
            <h2><?php echo esc_html($card_3_title ?: 'No Description Available'); ?></h2>
            <p><?php echo esc_html($card_3_description ?: 'No Description Available'); ?></p>
            <p><?php echo esc_html($card_3_content ?: 'No Content Available'); ?></p>
            <?php else: ?>
            <p>Aucune information disponible pour cette carte.</p>
            <?php endif; ?>
        </div>
    </div>
</article>
<?php



get_footer(); // Affiche footer.php
?>