<?php
	/*-----------------------------------------------------------------------------------*/
	/* Ce fichier est présent sur chaque page
	/* Vous pouvez y ajouter des fonctions au besoin
	/*-----------------------------------------------------------------------------------*/

/* --------------------------------
Ajoute les vignettes dans les posts de type Article */
add_theme_support( 'post-thumbnails' );


/* --------------------------------
Déclare le menu principal */
register_nav_menus( 
	array(
		/* 
			1. 'main-menu' = Nom dans le code
			2. 'Menu principal' = Nom dans l'admin
			3. 'Menu principal du site' = Description dans l'admin */
		'main-menu' => __( 'Menu principal', 'Menu principal du site' ), 
		/* Dupliquer cette ligne si vous désirez déclarer d'autres menus */
	)
);


/* --------------------------------
Function déclarant la barre latérale principale */
function add_sidebars() {
	/*
	register_sidebar(array(	
		'main-sidebar' => __( 'Barre laterale principale', 'Barre latérale principale du site' ), 
	));
	*/
} 
/* Appel la fonction déclarant la barre latérale au moment de l'init des widgets */
add_action('widgets_init', 'add_sidebars');


/* -------------------------------- 
Function ajoutant les styles et scripts */
function add_styles_and_scripts() { 
    // Ajout du fichier CSS principal
    wp_enqueue_style(
        'default', 
        get_template_directory_uri() . '/style.css?v='.time()
    );

    // Ajout du fichier JavaScript principal
    wp_enqueue_script(
        'main-js', 
        get_template_directory_uri() . '/main.js?v='.time(), 
        array('jquery'), // Dépendances (si besoin, ex : jQuery)
        null, 
        true // Charge dans le footer
    );

    // Localisation des données pour AJAX
    wp_localize_script(
        'main-js',
        'ajaxData',
        array(
            'ajaxUrl' => admin_url('admin-ajax.php'), // URL pour les appels AJAX
        )
    );
}
add_action('wp_enqueue_scripts', 'add_styles_and_scripts'); 

function load_more_nouvelles() {
    $offset = intval($_GET['offset']);
    $order = sanitize_text_field($_GET['order']);

    $arguments = array(
        'post_type' => 'nouvelle',
        'posts_per_page' => 4,
        'offset' => $offset,
        'orderby' => 'date',
        'order' => $order,
    );

    $nouvelles = new WP_Query($arguments);

    if ($nouvelles->have_posts()) :
        while ($nouvelles->have_posts()) : $nouvelles->the_post(); ?>
<a href="<?php the_permalink(); ?>">
    <div class="news__card">
        <div class="card__content">
            <h3 class="card__title"><?php the_title(); ?></h3>
            <p class="card__info"><?php the_field('date'); ?></p>
        </div>
        <img class="card__img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
    </div>
</a>
<?php endwhile;
    else :
        echo ''; // Rien à afficher
    endif;

    wp_die();
}
add_action('wp_ajax_load_more_nouvelles', 'load_more_nouvelles');
add_action('wp_ajax_nopriv_load_more_nouvelles', 'load_more_nouvelles');




function enqueue_custom_scripts() {
    wp_enqueue_script(
        'main-js', 
        get_template_directory_uri() . '/js/main.js', 
        array('jquery'), 
        null, 
        true
    );

    // Passer l'URL AJAX à JavaScript
    wp_localize_script('main-js', 'ajaxData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');