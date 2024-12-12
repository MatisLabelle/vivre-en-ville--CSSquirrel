<?php 
/**
 * 	Template Name: 404
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
                    <a class="taville" href="<?php echo home_url(); ?>">Cliques ici et retournons à ta ville.</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); // Affiche footer.php ?>