<?php 
/**
 * 	Template Name: À propos
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<article>
    <div class="about__chemin">
        <a href="index.html">Acceuil </a>>
        <a href="about.html"> À propos de nous</a>>
    </div>
    <h1 class="about__title">À propos de nous</h1>
    <div class="about__grid">
        <div class="approche">
            <h2 class="approche__title">Notre approche</h2>
            <ul class="approche__text">
                <p>
                    Vivre en Ville vise un profond changement dans le mode de
                    développement des collectivités. Dans ses projets, ses
                    interventions et ses collaborations, l’organisation adopte une
                    approche :
                </p>
                <li>
                    <strong>ancrée</strong> sur le territoire, qui s’intéresse en
                    particulier à la forme urbaine, à l’aménagement du territoire et à
                    l’urbanisme;
                </li>
                <li>
                    <strong>transversale</strong>
                    , qui tend à l’arrimage des pratiques et à la multidisciplinarité;
                </li>
                <li>
                    <strong>structurée</strong>
                    , qui se décline à plusieurs échelles, du bâtiment à la rue, au
                    quartier, et à l’agglomération;
                </li>
                <li>
                    <strong>inspirante</strong>
                    , qui stimule l’innovation par la recherche, la formation, la
                    démonstration, le conseil et l’accompagnement;
                </li>
                <li>
                    <strong>ambitieuse</strong>
                    , qui prône un changement radical dans le mode de développement
                    urbain;
                </li>
                <li>
                    <strong>accessible</strong>
                    , qui s’adresse aux citoyens aussi bien qu’aux spécialistes;
                </li>
                <li>
                    <strong>impliquée</strong>
                    , qui passe par la participation au débat public sur les lois,
                    politiques et pratiques touchant la qualité des milieux de vie;
                </li>
                <li>
                    <strong>réaliste</strong>
                    , qui s’adapte au type de collectivité et au contexte du milieu;
                </li>
                <li>
                    <strong>mobilisatrice</strong>, qui mise sur l’alliance et le
                    partenariat;
                </li>
                <li>
                    <strong>rigoureuse</strong>
                    , qui allie persévérance, travail de qualité et professionnalisme.
                </li>
            </ul>
        </div>

        <div class="mission">
            <h2 class="mission__title">Notre mission</h2>
            <p class="mission__text">
                <i class="mission__alt">Mieux construire nos bâtiments, nos rues, nos quartiers, nos
                    agglomérations</i>
            </p>
            <p class="mission__text">
                Organisation d'intérêt public, Vivre en Ville contribue, partout au
                Québec, au développement de collectivités viables, œuvrant tant à
                l'échelle du bâtiment qu'à celles de la rue, du quartier et de
                l'agglomération.
            </p>
            <p class="mission__text">
                Par ses actions, Vivre en Ville stimule l'innovation et accompagne
                les décideurs, les professionnels et les citoyens dans le
                développement de milieux de vie de qualité, prospères et favorables
                au bien-être de chacun, dans la recherche de l'intérêt collectif et
                le respect de la capacité des écosystèmes.
            </p>
            <p class="mission__text">
                Polyvalente, rigoureuse et engagée, l'équipe de Vivre en Ville
                déploie un éventail de compétences en urbanisme, mobilité,
                verdissement, design urbain, politiques publiques, efficacité
                énergétique, etc. Cette expertise diversifiée fait de l'organisation
                un acteur reconnu, tant pour ses activités de recherche, de
                formation et de sensibilisation que pour son implication dans le
                débat public et pour ses services de conseil et d'accompagnement.
            </p>
        </div>
        <div class="histoire">
            <h2 class="histoire__title">Un peu d'histoire</h2>
            <p class="histoire__text">
                L’origine de Vivre en Ville remonte au début de février 1993. C’est
                à la veille des audiences publiques du Groupe de travail sur
                Montréal et sa région qu’a émergé l’idée de former un groupe qui
                aurait pour but de promouvoir des idées novatrices en matière
                d’urbanisme, de gestion métropolitaine, d’habitation, de transport,
                d’environnement, de fiscalité et de développement durable.
            </p>
            <p class="histoire__text">
                En avril 1995, Vivre en Ville est officiellement fondée avec une
                première assemblée générale qui en donne les grandes orientations.
                Depuis 1996, l’équipe de Vivre en Ville s’est structurée en
                développant une expertise diversifiée qui permet à l'organisme
                d’intervenir sur l'ensemble des domaines reliés aux collectivités
                viables.
            </p>
            <h4 class="histoire__question">
                Qu'est-ce qu'une collectivité viable?
            </h4>
            <p class="histoire__text">
                C’est un milieu de vie qui répond aux besoins fondamentaux de ses
                résidents, est favorable à leur santé et assure leur qualité de vie.
                Son mode de développement favorise l’équité, respecte la capacité
                des écosystèmes et permet d’épargner les ressources naturelles,
                énergétiques et financières: elle peut se maintenir à long terme.
                Une collectivité viable assure la protection de son patrimoine
                naturel, culturel et bâti. Aménagée à échelle humaine, elle se
                caractérise notamment par la compacité de sa forme urbaine, la
                mixité des fonctions, une offre de transport diversifiée et une
                bonne localisation des activités. Elle rend ainsi accessibles à tous
                des espaces publics de qualité et des espaces verts abondants, une
                variété de services et un environnement riche en activités
                économiques, sociales, récréatives et culturelles.
            </p>
        </div>
    </div>
</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>