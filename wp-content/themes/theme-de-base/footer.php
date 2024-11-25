<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/* Template Name: Footer
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer>
    <img class="logo-footer" src="<?php echo get_template_directory_uri(); ?>/photos/LOGO.png" />
    <a href="https://vivreenville.org/">
        <button class="footer__donner">Donner</button>
    </a>

    <h3 class="h3-footer">Nous Joindre</h3>
    <div class="grid-footer">
        <div class="mtl">
            <h3 class="ville-footer">Montréal</h3>
            <p class="p-footer">Maison du développement durable</p>
            <a href="https://maps.app.goo.gl/VWFogEsZZv9bmNpG8">
                <p class="p-footer">
                    50, rue Ste-Catherine Ouest, bur. 480 Montréal (Québec) H2X 3V4
                </p>
            </a>
            <p class="p-footer">T. (514) 394-1125</p>
        </div>
        <div class="quebec">
            <h3 class="ville-footer">Québec</h3>
            <p class="p-footer">Centre culture et environnement Frédéric Back</p>
            <a href="https://maps.app.goo.gl/3ccr8rJZNoKu5q2o7">
                <p class="p-footer">
                    870, avenue De Salaberry, bureau 311 Québec (Québec) G1R 2T9
                </p>
            </a>
            <p class="p-footer">T. (418) 522-0011</p>
        </div>
        <div class="gatineau">
            <h3 class="ville-footer">Gatineau</h3>
            <a href="https://maps.app.goo.gl/dPfhjC2F64kHWYtJ9">
                <p class="p-footer">
                    200-A, boulevard Saint-Joseph Gatineau (Québec) J8Y 3W9
                </p>
            </a>
            <p class="p-footer">T. (819) 205-2053</p>
        </div>
    </div>
    <div class="partenaire">
        <h3 class="partenaire-footer">Nos partenaire</h3>
        <div class="grid-footer__partenaire">
            <a href="https://carrefour.vivreenville.org/">
                <img class="logo-footer" src="<?php echo get_template_directory_uri(); ?>/photos/carrefour.png"
                    alt="carrefour de vivre en ville" />
            </a>

            <a href="https://montreal.ca/en/">
                <img class="logo-footer" src="<?php echo get_template_directory_uri(); ?>/photos/Logo_Montréal.svg.png"
                    alt="Ville de Montréal" />
            </a>
            <a href="https://www.ville.quebec.qc.ca/">
                <img class="logo-footer" src="<?php echo get_template_directory_uri(); ?>/photos/Quebec_City.svg.png"
                    alt="Ville de Québec" />
            </a>
            <a href="https://www.gatineau.ca/portail/default.aspx?c=en-CA&p=guichet_municipal">
                <img class="logo-footer"
                    src="<?php echo get_template_directory_uri(); ?>/photos/800px-Logo_Gatineau.svg.webp"
                    alt="Ville de Gatineau" />
            </a>
        </div>

    </div>
    <img class="email-footer" src="<?php echo get_template_directory_uri(); ?>/photos/Mail.png" />
    <p id="copyright-footer" class="p-footer">
        @2024 Vivre en ville, CSSquirrel
    </p>
</footer>

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>

</html>