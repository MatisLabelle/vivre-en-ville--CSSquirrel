<?php
/**
 * Template Post Type: url, url-404
 */

get_header(); // Affiche header.php
?>

<section>
    <div class="404 erreur">
        <div class="mainbox">
            <div class="titre404">
                <span class="err">4</span>
                <i class="far fa-question-circle fa-spin"></i>
                <span class="err2">4</span>
                <div class="msg">
                    <?php 
                    // Récupérer le champ ACF 'url-404'
                    $url_404 = get_field('url-404');
                    
                    // Utiliser l'URL si elle existe, sinon fallback vers une URL par défaut
                    $fallback_url = 'http://localhost/css_squirrel_vivre_en_ville/index.php/acceuil/';
                    $redirect_url = $url_404 ? $url_404 : $fallback_url;
                    ?>
                    <a class="taville" href="<?php echo esc_url($redirect_url); ?>">
                        Cliques ici et retournons à ta ville.
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer(); // Affiche footer.php
?>