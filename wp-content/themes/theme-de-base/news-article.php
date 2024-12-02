<?php 
/**
 * 	Template Name: News article
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<main>
    <div class="chemin">
        <a href="<?php echo home_url('/'); ?>">Acceuil </a>>
        <a href="news-hub.html"> Actualités </a>>
        <a href="news-article.html"> Communiqué</a>
    </div>
    <div class="actu__date">22 août 2024</div>
    <h1 class="actu__title">
        Stratégie québécoise en habitation: Québec reconnaît la crise, mais
        sous-utilise les outils à sa disposition
    </h1>
    <div class="actu__grid">
        <div class="actu__post">
            <img class="actu__img" src="photos/images-news-1.png" />
            <p class="actu__credit">PHOTO PEXEL</p>
            <h2 class="actu__info">Québec, le 22 août 2024</h2>
            <p class="actu__text">
                Vivre en Ville accueille avec intérêt la Stratégie québécoise en
                habitation dévoilée cet après-midi par la ministre France-Élaine
                Duranceau. En déployant une action interministérielle, le
                gouvernement du Québec reconnaît pour une première fois l’envergure
                du problème et l’importance de considérer une diversité de facteurs
                à l’origine de la crise de l’habitation. Cela dit, la cible
                nationale de mises en chantier et les moyens annoncés témoignent
                d’une timidité étonnante.
            </p>
            <h3 class="actu__sous-titre">
                Une cible, mais beaucoup de questions en suspens
            </h3>
            <p class="actu__text">
                Vivre en Ville salue l’adoption d’une cible nationale de
                construction d’unités d’habitation, mais comme plusieurs acteurs du
                milieu de l’habitation, considère que le nombre de 560 000 d’ici
                2034 est tout à fait insuffisant. Il s’agit de moins de la moitié de
                la recommandation du groupe de travail pour l’Habitation et le
                Climat, avec un échéancier plus long. La cible de logements à but
                non lucratif apparaît quant à elle en dessous de ce qui serait
                requis pour rééquilibrer les forces du marché.
                <br />
                De plus, bien que Vivre en Ville apprécie que le gouvernement
                reconnaisse l’importance de mobiliser les outils d’urbanisme pour
                faire face à la crise de l’habitation, l’organisation note que la
                conformité de la planification régionale avec l’objectif national de
                mise en chantier n’est pas exigée. <br />
                Le gouvernement devra certes accompagner les MRC dans l’évaluation
                des besoins, mais aussi exiger que la planification territoriale
                s’inscrive en cohérence avec ceux-ci (et avec la cible nationale),
                sans quoi il demeurera possible de planifier une sous-production de
                logements. Il faudra reconnaître, le plus rapidement possible, que
                le gouvernement national a une responsabilité de leadership en
                habitation qu’il ne peut pas déléguer. Tout le monde qui habite au
                Québec habite au Québec, et c’est donc l’échelle conséquente pour
                uniformiser et dynamiser le contexte dans lequel la construction
                résidentielle a lieu. <br />
                « Nous avons enfin une cible de mise en chantier, voilà un pas
                important qui deviendra assurément un précédent. Bravo! Reste que
                beaucoup de questions demeurent en suspens. La cible est
                insuffisante et les moyens pour l'atteindre ne semblent pas être au
                rendez-vous. On s’en remet beaucoup aux municipalités, qui ont
                certainement un rôle à jouer, mais des moyens fiscaux et financiers
                très limités et d’importants défis, en matière d’infrastructures
                notamment. Les efforts risquent d’être lacunaires et disparates
                d’une région à l’autre » déclare Christian Savard, directeur général
                de Vivre en Ville.
            </p>
            <h3 class="actu__sous-titre">Une stratégie multisectorielle</h3>
            <p class="actu__text">
                Vivre en Ville tient néanmoins à souligner qu’un des mérites de la
                Stratégie est qu’il s’agit d’un véritable plan d’action
                interministériel, qui dépasse nettement le domaine d’intervention de
                la Société d’Habitation du Québec (SHQ).
                <br />
                Cette reconnaissance nouvelle de la part du gouvernement est
                prometteuse et correspond à une des principales prémisses de «
                Portes ouvertes: vers une sortie de crise en habitation ». Vivre en
                Ville constate certaines actions liées à chacun des quatre grands
                chantiers à mener simultanément en habitation:
            </p>
            <ul>
                <li>
                    Construire plus que la demande, près des emplois, des transports
                    et des services
                </li>
                <li>Protéger la population des excès du marché immobilier</li>
                <li>Construire une abondance de logements à but non lucratif</li>
                <li>Réapprendre à construire efficacement et durablement</li>
                <p class="actu__text">
                    À titre d'exemple, l’intention de miser sur la modélisation
                    numérique pour accroître la productivité est une mesure porteuse
                    dont le potentiel gagnera à être déployé au cours des prochaines
                    années.
                    <br />
                    Néanmoins, Vivre en Ville considère que trop peu est fait pour
                    s’attaquer au problème de la spéculation. En effet, les mesures de
                    préservation du parc existant seront insuffisantes sans un
                    registre des loyers et d’autres mesures pour faire appliquer les
                    lois exceptionnelles que nous avons déjà au Québec - celles qui
                    ont historiquement protégé le Québec des crises dévastatrices qui
                    font des ravages dans le Canada anglais, et qui doivent servir de
                    fer de lance pour la préservation du parc existant.
                </p>
            </ul>
            <div class="actu__auteur">
                <h4 class="actu__auteur-name">Thalie Labonté</h4>
                <p class="actu__auteur-info">
                    Coordonnatrice - Relations stratégiques et communication
                </p>
                <p class="actu__auteur-info">
                    514-893-7998 | thalie.labonte@vivreenville.org
                </p>
            </div>
        </div>
        <div class="actu__more">
            <h2 class="actu__alike">Articles Similaires</h2>
            <div class="actu__plus">
                <div class="actu__plus--1"></div>
                <div class="actu__plus--2"></div>
                <div class="actu__plus--3"></div>
            </div>
            <div class="actu__cta">
                <h2 class="actu__help">Aidez nous!</h2>
                <button class="actu__donner">Donner</button>
            </div>
        </div>
    </div>
    <div class="actu__nav">
        <p class="actu__last">Nouvelle précédente</p>
        <p class="actu__next">Nouvelle suivante</p>
    </div>
</main>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>