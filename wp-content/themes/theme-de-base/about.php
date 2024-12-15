<?php
/**
* Template Name: About
* Template Post Type: about-us-card, page, post
* Modèle permettant d'afficher une page.
*/

get_header(); // Affiche header.php

// Détection de la langue active
$current_language = function_exists('pll_current_language') ? pll_current_language() : 'fr';

// Définir les noms des sections selon la langue
$sections = [
    'approche' => ($current_language === 'en') ? 'About us' : 'Notre approche',
    'mission'  => ($current_language === 'en') ? 'Our mission' : 'Notre mission',
    'histoire' => ($current_language === 'en') ? 'A bit of history' : 'Un peu d\'histoire'
];

// IDs des cartes (identiques pour toutes les langues)
$card_ids = [179, 180, 181];
?>

<article>
    <div class="about__chemin">
        <a href="<?php echo home_url('/'); ?>">
            <?php echo ($current_language === 'en') ? 'Home' : 'Accueil'; ?>
        </a> >
        <a href="<?php echo get_permalink(); ?>">
            <?php echo ($current_language === 'en') ? 'About Us' : 'À propos de nous'; ?>
        </a>
    </div>
    <div class="about__grid">
        <?php
        // Boucle sur les cartes
        foreach ($card_ids as $index => $card_id) :
            $card = get_post($card_id);
            if ($card) :
                $title = get_field('title', $card->ID);
                $description = get_field('description', $card->ID);
                $content = get_field('content', $card->ID);
                $section_key = array_keys($sections)[$index];
        ?>
        <div class="<?php echo esc_attr($section_key); ?>">
            <h2><?php echo esc_html($title ?: 'No Description Available'); ?></h2>
            <p><?php echo esc_html($description ?: 'No Description Available'); ?></p>
            <p><?php echo esc_html($content ?: 'No Content Available'); ?></p>
        </div>
        <?php
            else :
                echo '<p>' . (($current_language === 'en') ? 'No information available for this card.' : 'Aucune information disponible pour cette carte.') . '</p>';
            endif;
        endforeach;
        ?>
    </div>
</article>

<?php
get_footer(); // Affiche footer.php
?>