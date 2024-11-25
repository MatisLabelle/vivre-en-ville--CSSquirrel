<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/* Template Name: Header
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title>
        <?php bloginfo('name'); // Affiche le nom du blog ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
    </title>
    <?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head(); 
/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
</head>

<body <?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>>

    <header>
        <header>
            <!--La NAV BAR-->
            <!-- Top Bar Section -->
            <div class="">
                <div class="topbar">
                    <div class="topbar-items">
                        <a href="#" class="topbar-link">English</a>
                        <a href="#" class="topbar-link">Recherche</a>
                        <a href="#" class="topbar-link">S'abonner</a>
                    </div>
                </div>
            </div>
            <nav>
                <a class="logo" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/photos/LOGO.png" alt="logo" />
                </a>
                <ul>
                    <li>
                        <a href="/about.html">À propos</a>
                    </li>
                    <li>
                        <a href="/news-hub.html">Actualités</a>
                    </li>
                    <li>
                        <a href="/services-hub.html">Nos services</a>
                    </li>
                    <li>
                        <a href="/equipe.html">Équipe</a>
                    </li>
                    <li>
                        <a href="/contact.html">Contactez-nous</a>
                    </li>
                    <li>
                        <button class="btn-donner">Donner</button>
                    </li>
                </ul>
                <div class="nav-end">
                    <button class="btn-donner-2">Donner</button>
                    <div class="hamburger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
            </nav>
            <div class="menubar">
                <ul>
                    <li>
                        <a href="/home.php">Accueil</a>
                    </li>
                    <li>
                        <a href="/about.html">À propos</a>
                    </li>
                    <li>
                        <a href="/news-hub.html">Actualités</a>
                    </li>
                    <li>
                        <a href="/services-hub.html">Nos services</a>
                    </li>
                    <li>
                        <a href="/equipe.html">Équipe</a>
                    </li>
                    <li>
                        <a href="/contact.html">Contactez-nous</a>
                    </li>
                    <li>
                        <a href="#">S'abonner</a>
                    </li>
                    <li>
                        <a href="#">Rechercher</a>
                    </li>
                    <li>
                        <a href="#">English</a>
                    </li>
                </ul>
            </div>

        </header>
    </header>

    <main>
        <!-- Débute le contenu principal de notre site -->