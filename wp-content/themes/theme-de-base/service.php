<?php 
/**
 * 	Template Name: Service
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<article>
    <section class="recherche">
        <div class="breadcrumb"><a href="index.html">Accueil&nbsp;</a>
            <p>>&nbsp;</p><a href="services-hub.html">Nos services&nbsp;</a>
            <p>>&nbsp;</p><a href="service.html">Recherche et innovation</a>
        </div>
        <h1 class="recherche__title">Recherche et innovation</h1>
        <h2 class="recherche__subTitle">Développer les connaissances</h2>
        <p class="recherche__text">Pour diffuser auprès des intervenants québécois les meilleurs exemples de
            développement
            de collectivités viables, Vivre en Ville mène depuis 20 ans des recherches approfondies dans ce domaine. Une
            veille scientifique permanente, des missions de recherche au Québec et à l’international, la rencontre
            d’experts
            de domaines variés, la participation à de nombreux colloques et conférences ont permis à son équipe de
            développer une vision intégrée et des connaissances pointues sur les différents aspects du développement
            viable
            des collectivités.</p>
        <div class="recherche__section">
            <div class="bloc-1">
                <h3 class="recherche__miniTitle">Recherches en cours</h3>
                <p class="recherche__text">De nombreux thèmes sont abordés dans le cadre de notre travail en raison de
                    leur
                    pertinence et de leur actualité dans le contexte québécois. Voici quelques-uns des domaines de
                    recherche qui
                    occupent l'équipe en ce moment :</p>
                <ul class="recherche__list">
                    <li>le contrôle de l’étalement urbain,</li>
                    <li>l’aménagement de milieux de vie de qualité,</li>
                    <li>le déploiement d’une offre de mobilité durable,</li>
                    <li>le climat et le mode de développement urbain,</li>
                    <li>le lien entre environnement bâti et santé,</li>
                    <li>les petites et moyennes collectivités,</li>
                    <li>la localisation des activités,</li>
                    <li>les questions sociales et la participation citoyenne, etc.</li>
                </ul>
            </div>
            <div class="bloc-2">
                <h3 class="recherche__miniTitle">Missions de recherche</h3>
                <p class="recherche__text">L'équipe de Vivre en Ville effectue fréquemment des missions de recherche.
                    Ces dernières sont destinées à étudier des exemples et pratiques ailleurs dans le monde afin
                    d'alimenter la réflexion et de pouvoir transmettre ces connaissances aux acteurs québécois.</p>
            </div>
            <div class="bloc-3">
                <img src="photos/image_service.jpg" alt="image_service">
            </div>
        </div>
        <p class="recherche__text">Consultez les <a href="#" class="textLink">réalisations</a> de Vivre en Ville ou les
            <a href="#" class="textLink">interventions par thématiques</a>.</p>
        <h2 class="recherche__subTitle">Innover sur le terrain</h2>
        <p class="recherche__text">À la fine pointe de la connaissance, Vivre en Ville met ses recherches à profit dans
            le cadre de projets pilotes afin de stimuler l’émergence de nombreux projets innovants. Inspirées des
            meilleures pratiques, nos idées prennent vie en partenariat avec des acteurs motivés.</p>
        <h3 class="recherche__miniTitle">Nos projets pilotes</h3>
        <ul>
            <li>Végétalisation du <a href="#" class="textLink">Centre culture et environnement Frédéric Back &#8599;</a>
            </li>
            <li><a href="#" class="textLink">Verdir un milieu de vie</a> : Cœur vaillant</li>
            <li>Mise en place des centres de gestion des déplacements de la Capitale Nationale et de l’Outaouais (<a
                    href="#" class="textLink">Mobili-T &#8599;</a> et <a href="#" class="textLink">MOBI-O &#8599;</a>)
            </li>
            <li><a href="#" class="textLink">Aménager des milieux de vie favorables à un vieillissement en santé</a>
            </li>
        </ul>
    </section>
</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>