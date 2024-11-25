<?php 
/**
 * 	Template Name: Acceuil
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<article>
    <main>
        <section class="section__hero">
            <svg class="dashed-hero" width="374" height="535" viewBox="0 0 374 535" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M356.928 650.7C426.263 419.825 181.076 417.025 145.547 315.762C127.557 264.49 167.279 146.629 131.22 57.8769C95.1608 -30.8754 -92.797 -6.94694 -118.997 117.669C-135.168 194.588 -247.276 248.197 -269 240.494"
                    stroke="#FBAB1A" stroke-width="8" stroke-linecap="round" stroke-dasharray="20 20" />
            </svg>
            <svg class="batiment" width="297" height="297" viewBox="0 0 297 297" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_29_823)">
                    <path
                        d="M86.2481 3.71387C86.2481 2.05702 84.905 0.713867 83.2481 0.713867H80.5469C78.8901 0.713867 77.5469 2.05701 77.5469 3.71387V40.9795C77.5469 42.6364 76.2038 43.9795 74.5469 43.9795H70.3321C68.6753 43.9795 67.3321 42.6364 67.3321 40.9795V20.8262C67.3321 19.1693 65.989 17.8262 64.3321 17.8262H61.6309C59.9741 17.8262 58.6309 19.1693 58.6309 20.8262V40.9795C58.6309 42.6364 57.2878 43.9795 55.6309 43.9795H49.6147C47.9579 43.9795 46.6147 45.3227 46.6147 46.9795V285.299C46.6147 286.956 45.2716 288.299 43.6147 288.299H29.1035C27.4467 288.299 26.1035 289.642 26.1035 291.299V294C26.1035 295.657 27.4467 297 29.1035 297H145.792C147.449 297 148.792 295.657 148.792 294V46.9795C148.792 45.3227 147.449 43.9795 145.792 43.9795H89.2481C87.5912 43.9795 86.2481 42.6364 86.2481 40.9795V3.71387ZM140.091 285.299C140.091 286.956 138.748 288.299 137.091 288.299H58.3159C56.659 288.299 55.3159 286.956 55.3159 285.299V55.6807C55.3159 54.0239 56.659 52.6807 58.3159 52.6807H137.091C138.748 52.6807 140.091 54.0239 140.091 55.6807V285.299Z"
                        fill="#FBAB1A" />
                    <path
                        d="M195.477 140.884C193.82 140.884 192.477 142.227 192.477 143.884V276.992C192.477 278.649 193.82 279.992 195.477 279.992H213.543C215.2 279.992 216.543 278.649 216.543 276.992V143.884C216.543 142.227 215.2 140.884 213.543 140.884H195.477ZM207.842 268.291C207.842 269.948 206.499 271.291 204.842 271.291H204.178C202.521 271.291 201.178 269.948 201.178 268.291V152.585C201.178 150.929 202.521 149.585 204.178 149.585H204.842C206.499 149.585 207.842 150.929 207.842 152.585V268.291Z"
                        fill="#FBAB1A" />
                    <path
                        d="M163.792 140.884C162.136 140.884 160.792 142.227 160.792 143.884V276.992C160.792 278.649 162.136 279.992 163.792 279.992H181.859C183.516 279.992 184.859 278.649 184.859 276.992V143.884C184.859 142.227 183.516 140.884 181.859 140.884H163.792ZM176.158 268.291C176.158 269.948 174.815 271.291 173.158 271.291H172.494C170.837 271.291 169.494 269.948 169.494 268.291V152.585C169.494 150.929 170.837 149.585 172.494 149.585H173.158C174.815 149.585 176.158 150.929 176.158 152.585V268.291Z"
                        fill="#FBAB1A" />
                    <path
                        d="M132.292 79.2759C132.292 77.619 130.949 76.2759 129.292 76.2759H66.1152C64.4584 76.2759 63.1152 77.619 63.1152 79.2759V100.2C63.1152 101.857 64.4584 103.2 66.1152 103.2H129.292C130.949 103.2 132.292 101.857 132.292 100.2V79.2759ZM123.591 91.4985C123.591 93.1553 122.247 94.4985 120.591 94.4985H74.8164C73.1595 94.4985 71.8164 93.1553 71.8164 91.4985V87.9771C71.8164 86.3202 73.1596 84.9771 74.8164 84.9771H120.591C122.248 84.9771 123.591 86.3202 123.591 87.9771V91.4985Z"
                        fill="#FBAB1A" />
                    <path
                        d="M132.292 116.868C132.292 115.211 130.949 113.868 129.292 113.868H66.1152C64.4584 113.868 63.1152 115.211 63.1152 116.868V137.794C63.1152 139.451 64.4584 140.794 66.1152 140.794H129.292C130.949 140.794 132.292 139.451 132.292 137.794V116.868ZM123.591 129.093C123.591 130.749 122.247 132.093 120.591 132.093H74.8164C73.1595 132.093 71.8164 130.749 71.8164 129.093V125.569C71.8164 123.912 73.1596 122.569 74.8164 122.569H120.591C122.248 122.569 123.591 123.912 123.591 125.569V129.093Z"
                        fill="#FBAB1A" />
                    <path
                        d="M132.292 154.461C132.292 152.805 130.949 151.461 129.292 151.461H66.1152C64.4584 151.461 63.1152 152.805 63.1152 154.461V175.385C63.1152 177.042 64.4584 178.385 66.1152 178.385H129.292C130.949 178.385 132.292 177.042 132.292 175.385V154.461ZM123.591 166.684C123.591 168.341 122.247 169.684 120.591 169.684H74.8164C73.1595 169.684 71.8164 168.341 71.8164 166.684V163.163C71.8164 161.506 73.1596 160.163 74.8164 160.163H120.591C122.248 160.163 123.591 161.506 123.591 163.163V166.684Z"
                        fill="#FBAB1A" />
                    <path
                        d="M132.292 194.053C132.292 191.292 130.053 189.053 127.292 189.053H68.1152C65.3538 189.053 63.1152 191.292 63.1152 194.053V210.977C63.1152 213.738 65.3538 215.977 68.1152 215.977H127.292C130.053 215.977 132.292 213.738 132.292 210.977V194.053ZM123.591 202.515C123.591 205.144 121.459 207.276 118.83 207.276H76.5771C73.9478 207.276 71.8164 205.144 71.8164 202.515C71.8164 199.886 73.9479 197.754 76.5771 197.754H118.83C121.459 197.754 123.591 199.886 123.591 202.515Z"
                        fill="#FBAB1A" />
                    <path
                        d="M132.292 229.647C132.292 227.991 130.949 226.647 129.292 226.647H66.1152C64.4584 226.647 63.1152 227.991 63.1152 229.647V250.571C63.1152 252.228 64.4584 253.571 66.1152 253.571H129.292C130.949 253.571 132.292 252.228 132.292 250.571V229.647ZM123.591 241.87C123.591 243.527 122.247 244.87 120.591 244.87H74.8164C73.1595 244.87 71.8164 243.527 71.8164 241.87V238.349C71.8164 236.692 73.1596 235.349 74.8164 235.349H120.591C122.248 235.349 123.591 236.692 123.591 238.349V241.87Z"
                        fill="#FBAB1A" />
                    <path
                        d="M237.245 130.425C237.245 129.274 236.586 128.224 235.548 127.723L181.69 101.745C179.83 100.848 179.412 98.3823 180.872 96.9217L197.793 80.0005C198.356 79.4379 199.119 79.1218 199.915 79.1218H229.38C231.037 79.1218 232.38 77.7786 232.38 76.1218V73.4206C232.38 71.7638 231.037 70.4206 229.38 70.4206H214.616C211.944 70.4206 210.605 67.189 212.495 65.2992L226.516 51.2797C227.079 50.7171 227.842 50.4011 228.638 50.4011H244.888C246.545 50.4011 247.888 49.058 247.888 47.4011V44.6999C247.888 43.0431 246.545 41.6999 244.888 41.6999H243.338C240.665 41.6999 239.327 38.4688 241.216 36.5788L247.704 30.0897C248.876 28.9181 248.876 27.0188 247.704 25.8473L245.795 23.9376C244.623 22.7661 242.724 22.766 241.552 23.9375L226.047 39.4411C224.157 41.3309 220.926 39.9923 220.926 37.3197V32.2283C220.926 30.5714 219.583 29.2283 217.926 29.2283H215.225C213.568 29.2283 212.225 30.5714 212.225 32.2283V52.0205C212.225 52.816 211.909 53.579 211.346 54.1416L198.432 67.0569C196.542 68.947 193.311 67.6085 193.311 64.9357V45.5225C193.311 43.8656 191.968 42.5225 190.311 42.5225H187.61C185.953 42.5225 184.61 43.8656 184.61 45.5225V79.6375C184.61 80.4332 184.294 81.1962 183.731 81.7588L171.088 94.4016C170.186 95.3036 168.812 95.5365 167.663 94.9823L160.635 91.5918C159.143 90.8719 157.349 91.4981 156.629 92.9904L155.457 95.4217C154.737 96.9141 155.363 98.7074 156.855 99.4272L226.847 133.187C227.884 133.687 228.544 134.737 228.544 135.889V285.299C228.544 286.956 227.201 288.299 225.544 288.299H159.043C157.386 288.299 156.043 289.642 156.043 291.299V294C156.043 295.657 157.386 297 159.043 297H254.758C256.415 297 257.758 295.657 257.758 294V291.299C257.758 289.642 256.415 288.299 254.758 288.299H240.245C238.588 288.299 237.245 286.956 237.245 285.299V130.425Z"
                        fill="#FBAB1A" />
                    <path
                        d="M265.993 0.754555C262.832 1.17602 188.326 11.3115 169.322 30.3181C155.327 44.3111 150.769 64.8134 157.32 83.2888C157.874 84.8504 159.642 85.5661 161.169 84.9232L163.659 83.8751C165.186 83.2322 165.891 81.4752 165.356 79.9071C160.174 64.7157 163.994 47.9518 175.474 36.4701C187.705 24.2388 232.379 14.8748 257.427 10.826C259.423 10.5033 261.132 12.2118 260.809 14.208C256.761 39.2574 247.399 83.9301 235.165 96.1616C230.754 100.573 225.406 103.953 219.562 106.047C218.003 106.606 217.065 108.25 217.511 109.846L218.237 112.447C218.682 114.043 220.34 114.984 221.906 114.445C229.187 111.939 235.849 107.781 241.317 102.316C260.324 83.3092 270.459 8.80314 270.883 5.64217L271.116 3.89025C271.378 1.93042 269.705 0.25815 267.745 0.520235L265.993 0.754555Z"
                        fill="#FBAB1A" />
                    <path
                        d="M132.097 64.4272C132.097 66.0841 130.754 67.4272 129.097 67.4272H115.81C114.153 67.4272 112.81 66.0841 112.81 64.4272V61.7261C112.81 60.0692 114.153 58.7261 115.81 58.7261H129.097C130.754 58.7261 132.097 60.0692 132.097 61.7261V64.4272ZM107.009 64.4272C107.009 66.0841 105.666 67.4272 104.009 67.4272H101.308C99.6508 67.4272 98.3076 66.0841 98.3076 64.4272V61.7261C98.3076 60.0692 99.6508 58.7261 101.308 58.7261H104.009C105.666 58.7261 107.009 60.0692 107.009 61.7261V64.4272ZM92.5068 64.4272C92.5068 66.0841 91.1637 67.4272 89.5068 67.4272H86.8057C85.1488 67.4272 83.8057 66.0841 83.8057 64.4272V61.7261C83.8057 60.0692 85.1488 58.7261 86.8057 58.7261H89.5068C91.1637 58.7261 92.5068 60.0692 92.5068 61.7261V64.4272Z"
                        fill="#FBAB1A" />
                    <path
                        d="M210.689 101.779C209.051 102.019 207.622 100.753 207.516 99.0999L207.342 96.4042C207.235 94.7501 208.495 93.3396 210.129 93.0576C210.629 92.9712 211.126 92.8713 211.62 92.7579C213.235 92.3871 214.943 93.1977 215.487 94.7628L216.374 97.3146C216.918 98.8793 216.093 100.602 214.489 101.014C213.239 101.336 211.971 101.591 210.689 101.779ZM201.486 98.9536C201.3 100.6 199.81 101.797 198.184 101.477C196.081 101.063 194.026 100.466 192.034 99.69C190.49 99.0886 189.876 97.2795 190.603 95.7905L191.788 93.3638C192.515 91.8745 194.308 91.2742 195.868 91.8351C196.946 92.2228 198.047 92.5425 199.168 92.7931C200.785 93.1547 201.975 94.6235 201.789 96.27L201.486 98.9536ZM225.9 95.8384C224.531 96.7737 222.691 96.2597 221.872 94.8186L220.538 92.4703C219.72 91.0299 220.235 89.2111 221.578 88.2413C221.992 87.9424 222.398 87.6318 222.797 87.3097C224.085 86.2685 225.974 86.2546 227.145 87.4256L229.056 89.3363C230.227 90.5079 230.235 92.418 228.972 93.4913C227.988 94.3288 226.962 95.1121 225.9 95.8384Z"
                        fill="#FBAB1A" />
                </g>
                <defs>
                    <clipPath id="clip0_29_823">
                        <rect width="297" height="297" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <div class="hero__text">
                <span class="hero__orange">Mieux construire</span> nos bâtiments, nos
                rues, nos quartiers, nos agglomérations
                <br />
                <a href="https://vivreenville.org/">
                    <button class="hero__donner">Donner</button>
                </a>
            </div>
            </div>
            <svg class="demi-lune" viewBox="0 0 375 226" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M467 115.494L465.816 114.321C394.5 43.6448 296.448 0 188.235 0C79.268 0 -19.3939 44.2541 -90.8306 115.799L-92 116.971V118.626V222V226H-88H187.5H463H467V222V117.162V115.494Z"
                    fill="#FBAB1A" stroke="white" stroke-width="8" />
            </svg>
        </section>

        <!-- section à propos -->
        <section class="section propos">
            <h2 class="propos__titre">À propos de nous</h2>
            <div class="propos__grid">
                <div class="propos__mission">
                    <h3 class="propos__mission">Mission</h3>
                    <p class="propos__p">
                        Organisation d'intérêt public, Vivre en Ville contribue, partout
                        au Québec, au développement de collectivités viables, œuvrant tant
                        à l'échelle du bâtiment qu'à celles de la rue, du quartier et de
                        l'agglomération.
                    </p>
                </div>
                <div class="propos__approche">
                    <h3 class="propos__approche">Approche</h3>
                    <p class="propos__p">
                        Vivre en Ville vise un profond changement dans le mode de
                        développement des collectivités. 
                    </p>
                </div>
            </div>

            <a href="https://vivreenville.org/">
                <button class="propos__donner">
                    <div class="coeur-btn">
                        <svg class="coeur-btn__1" width="56" height="52" viewBox="0 0 56 52" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M26.832 14.7391C18.1705 3.20694 -0.702953 9.30985 3.35194 25.7768C7.40683 42.2437 35.4863 49.8842 35.4863 49.8842C35.4863 49.8842 56.8074 30.0791 52.7525 13.6122C48.6976 -2.85475 29.1484 0.50369 26.832 14.7391Z"
                                fill="#FBAB1A" stroke="white" stroke-width="4" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <svg class="coeur-btn__2" width="56" height="52" viewBox="0 0 56 52" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M26.832 14.7391C18.1705 3.20694 -0.702953 9.30985 3.35194 25.7768C7.40683 42.2437 35.4863 49.8842 35.4863 49.8842C35.4863 49.8842 56.8074 30.0791 52.7525 13.6122C48.6976 -2.85475 29.1484 0.50369 26.832 14.7391Z"
                                fill="#FBAB1A" stroke="white" stroke-width="4" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>

                    Donner
                    <svg class="fleche-btn" width="57" height="57" viewBox="0 0 57 57" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.3483 50.9093L2.24058 8.82667C1.95143 7.90723 1.92234 6.92669 2.15648 5.99198C2.39062 5.05726 2.879 4.20424 3.56838 3.52593C4.25775 2.84761 5.12166 2.37003 6.06591 2.14526C7.01016 1.92049 7.9985 1.95715 8.92318 2.25125L51.3524 16.2437C52.4135 16.5897 53.3374 17.259 53.9924 18.1563C54.6474 19.0537 55 20.1332 55 21.2411C55 22.3489 54.6474 23.4284 53.9924 24.3258C53.3374 25.2231 52.4135 25.8925 51.3524 26.2384L35.4414 31.4987C34.6486 31.7556 33.9281 32.1944 33.3383 32.7793C32.7485 33.3643 32.3061 34.079 32.0471 34.8653L26.7435 50.6463C26.5323 51.843 25.9101 52.9303 24.9825 53.7236C24.0548 54.5169 22.8789 54.9673 21.6544 54.9983C20.43 55.0293 19.2324 54.6389 18.2652 53.8936C17.298 53.1482 16.6207 52.0938 16.3483 50.9093Z"
                            fill="#FBAB1A" stroke="white" stroke-width="4" stroke-miterlimit="10" />
                    </svg>
                </button>
            </a>

        </section>

        <!------- SECTION SERVICE ------->
        <section class="section__services">
            <div class="services__container">
                <h2 class="services__titre"><a href="services-hub.html">Nos services</a></h2>

                <section class="accordion">
                    <button class="accordion__button">
                        <div class="accordion_title">Recherche et innovation</div>
                        <div class="accordion__icon">+</div>
                    </button>
                    <div class="accordion__panel">
                        <p class="accordion__text">Explorer, diffuser et expérimenter les meilleures pratiques de
                            développement de
                            collectivités viables.
                        </p>
                        <a href="service.html"><button class="accordion__bouton">En savoir plus</button></a>
                    </div>
                </section>

                <section class="accordion">
                    <button class="accordion__button">
                        <div class="accordion_title">Formation</div>
                        <div class="accordion__icon">+</div>
                    </button>
                    <div class="accordion__panel">
                        <p class="accordion__text">Explorer, diffuser et expérimenter les meilleures pratiques de
                            développement de
                            collectivités viables.
                        </p>
                        <button class="accordion__bouton">En savoir plus</button>
                    </div>
                </section>


                <section class="accordion">
                    <button class="accordion__button">
                        <div class="accordion_title">Conseil et accompagnment</div>
                        <div class="accordion__icon">+</div>
                    </button>
                    <div class="accordion__panel">
                        <p class="accordion__text">Explorer, diffuser et expérimenter les meilleures pratiques de
                            développement de
                            collectivités viables.
                        </p>
                        <button class="accordion__bouton">En savoir plus</button>
                    </div>
                </section>


                <section class="accordion">
                    <button class="accordion__button">
                        <div class="accordion_title">Sensibilisation</div>
                        <div class="accordion__icon">+</div>
                    </button>
                    <div class="accordion__panel">
                        <p class="accordion__text">Explorer, diffuser et expérimenter les meilleures pratiques de
                            développement de
                            collectivités viables.
                        </p>
                        <button class="accordion__bouton">En savoir plus</button>
                    </div>
                </section>

            </div>
        </section>

        <!--SECTION NOUVELLES -->
        <section class="news-section">
            <h2 class="titre-news">À la une</h2>
            <div class="news-card">
                <img src="<?php echo get_template_directory_uri(); ?>./photos/road.jpg" alt="News 1"
                    class="news-image" />
                <div class="news-content">
                    <h3 class="news-title">Projet structurant de l'Est</h3>
                    <h4 class="news-date">19 septembre 2024</h4>
                    <p class="news-summary">
                        Vivre en Ville appelle à adopter une approche cohérente et
                        ambitieuse 19 septembre 2024.
                    </p>
                    <a href="#" class="news-link">Lire plus</a>
                </div>
            </div>

            <div class="news-card">
                <img src="<?php echo get_template_directory_uri(); ?>./photos/lake.jpg" alt="News 2"
                    class="news-image" />
                <div class="news-content">
                    <h3 class="news-title">
                        Projet de loi 61 créant Mobilité Infra Québec
                    </h3>
                    <h4 class="news-date">12 septembre 2024</h4>
                    <p class="news-summary">
                        De bonnes intentions dans un projet de loi imprécis qui suscite de
                        nombreuses questions.
                    </p>
                    <a href="#" class="news-link">Lire plus</a>
                </div>
            </div>

            <div class="news-card">
                <img src="<?php echo get_template_directory_uri(); ?>./photos/train.jpg" alt="News 3"
                    class="news-image" />
                <div class="news-content">
                    <h3 class="news-title">PL61</h3>
                    <h4 class="news-date">19 septembre 2024</h4>
                    <p class="news-summary">
                        Pour une gouvernance favorisant le transport collectif.
                    </p>
                    <a href="#" class="news-link">Lire plus</a>
                </div>
            </div>

            <h3 class="titre voir-plus">
                <a href="liste-nouvelle.html"> Voir toutes les publications > </a>
            </h3>
        </section>

        <!--SECTION TEMOIGNAGNES-->
        <section class="section__temoignages">
            <div class="swiper mySwiper temoignanes">
                <div class="swiper-wrapper temoignanes-swiper">

                    <!-- Témoignage 1 -->
                    <div class="swiper-slide temoignane-1">
                        <div class="temoignage-content">
                            <img src="<?php echo get_template_directory_uri(); ?>/photos/marie.jpg" alt="Marie L"
                                class="temoignage-photo" />
                            <h3 class="temoignage-nom">Marie L.</h3>
                            <h6 class="temoignage-profession"> Avocate </h6>
                            <p class="temoignage-texte">
                                "Grâce à Vivre en ville, j'ai découvert de nombreuses initiatives locales qui m'ont
                                permis de m'engager
                                davantage dans ma communauté. Les événements et services proposés m'ont aidée à mieux
                                connaître mon
                                quartier
                                et à rencontrer des personnes partageant les mêmes valeurs. Aujourd'hui, je me sens
                                vraiment chez moi et
                                je
                                participe activement à la vie de la ville."
                            </p>
                        </div>
                    </div>

                    <!-- Témoignage 2 -->
                    <div class="swiper-slide temoignane-2">
                        <div class="temoignage-content">
                            <img src="<?php echo get_template_directory_uri(); ?>/photos/thomas.jpg" alt="Thomas G."
                                class="temoignage-photo" />
                            <h3 class="temoignage-nom">Thomas G.</h3>
                            <h6 class="temoignage-profession"> Physiciste </h6>
                            <p class="temoignage-texte">
                                "J'étais à la recherche d'un moyen de contribuer à la protection de l'environnement tout
                                en restant
                                proche
                                de chez moi. Avec Vivre en ville, j'ai pu m'impliquer dans des projets de développement
                                durable,
                                rencontrer
                                des experts locaux et même apporter des idées pour améliorer la qualité de vie dans
                                notre quartier.
                                C'est un
                                vrai plaisir de voir l'impact que nous avons ensemble."
                            </p>
                        </div>
                    </div>

                    <!-- Témoignage 3 -->
                    <div class="swiper-slide temoignane-3">
                        <div class="temoignage-content">
                            <img src="<?php echo get_template_directory_uri(); ?>/photos/sophie.jpg" alt="Sophie"
                                class="temoignage-photo" />
                            <h3 class="temoignage-nom">Sophie D.</h3>
                            <h6 class="temoignage-profession"> Professeure</h6>
                            <p class="temoignage-texte">
                                "Après avoir déménagé en ville, je me sentais un peu perdue. Heureusement, Vivre en
                                ville m'a aidée à
                                trouver des activités adaptées à mes intérêts et à faire des rencontres enrichissantes.
                                Leur plateforme
                                est
                                devenue mon guide pour découvrir les services et les événements qui animent ma nouvelle
                                vie citadine.
                                C'est
                                vraiment une ressource indispensable pour les nouveaux arrivants !"
                            </p>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--SECTION INFOLETTRE-->
        <section class="section info-lettre">
            <div class="info-lettre__form">
                <h2 class="info-lettre__titre">S’abonner à l’infolettre</h2>
                <div class="info-lettre__input-group">
                    <input type="email" class="info-lettre__email" placeholder="exemple@domaine.com" />
                    <button class="info-lettre__submit" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" viewBox="0 0 82 82" fill="none">
                            <path d="M36.167 27.333L49.8337 40.9997L36.167 54.6663" stroke="#FBAB1A" stroke-width="5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></button>
                </div>
            </div>
            <svg class="info-lettre__newsletter" width="152" height="151" viewBox="0 0 152 151" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_18_734)">
                    <path
                        d="M89.1329 38.2058C88.5432 36.5995 87.1944 35.4164 85.5253 35.041C83.8557 34.6656 82.1305 35.1574 80.9097 36.3562C80.8743 36.3911 80.84 36.4267 80.8067 36.4636L66.7576 52.0049L50.0388 58.143C47.9883 58.8959 46.729 60.8561 46.7577 62.9259L41.7797 64.7534C40.5222 65.215 39.5197 66.139 38.9568 67.3548C38.3941 68.5706 38.3383 69.9327 38.8002 71.1902L40.5289 75.8989C41.3901 78.2449 43.8308 79.5621 46.2089 79.0911C46.4626 79.0409 51.9418 77.0516 51.9418 77.0516C53.2775 78.7415 55.8716 79.3843 57.9505 78.4238L60.1562 84.4316C60.8488 86.3181 62.2346 87.8218 64.0581 88.666C65.5175 89.3417 67.1173 89.53 68.6649 89.2235C69.0513 89.147 69.4345 89.0397 69.8115 88.9012C71.698 88.2086 73.2019 86.8228 74.0461 84.9993C74.8903 83.1756 74.9737 81.1324 74.2811 79.2459L72.0754 73.2381L74.2962 72.4226C74.2962 72.4226 94.9 74.528 94.9243 74.5298C95.382 74.5631 95.8343 74.5343 96.2714 74.4477C97.4636 74.2116 98.5408 73.5461 99.2944 72.5461C100.324 71.1796 100.587 69.4048 99.9971 67.7988L89.1329 38.2058ZM69.4945 82.8923C69.213 83.5002 68.7118 83.9621 68.0829 84.193C67.4549 84.4235 66.7733 84.396 66.1652 84.1146C65.5572 83.8331 65.0954 83.3319 64.8645 82.7032L62.659 76.6953L67.3674 74.9667L69.5732 80.9745C69.8036 81.6035 69.776 82.2844 69.4945 82.8923ZM45.2371 74.1705L43.5084 69.4618L48.2169 67.7331L49.9455 72.4416L45.2371 74.1705ZM55.8116 73.8662L51.7675 62.8514L66.7132 57.3644L70.757 68.3792L55.8116 73.8662ZM75.7896 67.5335L71.0794 54.7038L84.4263 39.939L95.2889 69.5261L75.7896 67.5335Z"
                        fill="white" />
                    <path
                        d="M102.881 52.04L105.215 51.0613C106.493 50.5256 107.094 49.0559 106.559 47.7788C106.023 46.5017 104.554 45.9008 103.276 46.4356L100.942 47.4144C99.6645 47.9501 99.0633 49.4198 99.5987 50.6969C100.068 51.8148 101.252 52.4148 102.396 52.1881C102.559 52.1561 102.722 52.1068 102.881 52.04Z"
                        fill="white" />
                    <path
                        d="M100.291 43.2527L101.823 41.2379C102.662 40.1355 102.448 38.5622 101.345 37.7237C100.243 36.8855 98.6693 37.0994 97.8309 38.2021L96.2986 40.2169C95.4604 41.3194 95.6745 42.8926 96.777 43.7311C97.3718 44.1833 98.1034 44.3293 98.783 44.1947C99.3635 44.0797 99.9054 43.7604 100.291 43.2527Z"
                        fill="white" />
                    <path
                        d="M107.465 56.8743L104.954 56.5548C103.58 56.3802 102.325 57.352 102.15 58.7262C101.975 60.1003 102.947 61.3558 104.321 61.5305L106.832 61.8499C107.108 61.8849 107.378 61.8739 107.636 61.8228C108.666 61.6189 109.497 60.7771 109.636 59.6786C109.811 58.3046 108.839 57.0492 107.465 56.8743Z"
                        fill="white" />
                    <path
                        d="M88.3058 137.631C89.6618 137.363 90.5433 136.046 90.2747 134.69C90.0062 133.334 88.6892 132.452 87.3332 132.721C85.9772 132.989 85.0957 134.306 85.3642 135.662C85.6328 137.018 86.9498 137.9 88.3058 137.631Z"
                        fill="white" />
                    <path
                        d="M137.295 55.3534C137.263 54.5167 136.816 53.7146 136.035 53.2689L116.189 41.9382L112.497 23.2945C111.959 20.5817 109.315 18.8117 106.602 19.349L84.3401 23.7583C84.3168 23.744 84.2955 23.7281 84.2717 23.7145L67.1571 13.9423C65.004 12.7128 62.2325 13.2617 60.7106 15.2191L48.5605 30.8451L26.3046 35.2532C23.5918 35.7905 21.8217 38.435 22.359 41.1478L26.0517 59.7915L12.0234 77.8315C11.4714 78.5412 11.3635 79.4533 11.6529 80.239C11.6579 80.3689 24.5076 145.314 24.5076 145.314C25.0449 148.027 27.6893 149.797 30.4021 149.259L77.3089 139.969C78.6677 139.7 79.5509 138.38 79.2818 137.021C79.0127 135.663 77.6931 134.779 76.3344 135.048L34.0771 143.418L66.3768 102.246L79.5664 107.408C80.4732 107.763 81.4463 107.837 82.3687 107.655C83.2909 107.472 84.1624 107.032 84.8654 106.359L95.5577 96.1117L141.617 122.118L98.3892 130.68C97.0304 130.949 96.1472 132.269 96.4163 133.628C96.6854 134.987 98.005 135.87 99.3637 135.601L146.27 126.31C148.983 125.773 150.753 123.128 150.216 120.415C150.216 120.415 137.34 55.4755 137.295 55.3534ZM130.364 55.8069L120.759 65.0119L117.479 48.4503L130.364 55.8069ZM64.6701 18.2979L76.8361 25.2446L56.0703 29.3576L64.6701 18.2979ZM27.3416 66.3035L30.6219 82.8651L18.2333 78.0163L27.3416 66.3035ZM28.9342 141.848L17.2846 83.0313L61.4995 100.337L28.9342 141.848ZM81.3948 102.738L66.5815 96.9396C66.507 96.9064 66.4318 96.8769 66.3555 96.8512L36.1646 85.0346L27.2791 40.1733L107.577 24.269L116.462 69.1303L81.3948 102.738ZM144.637 118.063L99.3394 92.487L133.153 60.0814L144.637 118.064L144.637 118.063Z"
                        fill="white" />
                </g>
                <defs>
                    <clipPath id="clip0_18_734">
                        <rect width="128.151" height="128.151" fill="white"
                            transform="translate(0.712891 25.1802) rotate(-11.2034)" />
                    </clipPath>
                </defs>
            </svg>
            <svg class="info-lettre__send" width="129" height="128" viewBox="0 0 129 128" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_18_511)">
                    <path
                        d="M67.0082 27.787C68.1327 28.3998 68.7918 29.6157 68.6924 30.9072L68.6923 30.9078L66.1892 63.3957L85.9024 89.3401C86.702 90.3926 86.7954 91.8068 86.1406 92.9432C85.5082 94.0407 84.2908 94.6489 83.0392 94.4926L4.43682 84.6767C3.17243 84.5187 2.12042 83.6145 1.75493 82.3731C1.38959 81.1318 1.78419 79.8017 2.7604 78.9844L63.4934 28.1297C64.4607 27.32 65.8133 27.1712 66.9396 27.7506C66.9625 27.7625 66.9856 27.7747 67.0082 27.787ZM78.608 88.5612L61.4673 66.0025C60.98 65.3603 60.7462 64.5658 60.8082 63.764L62.9847 35.5162L9.88509 79.9789L78.608 88.5612Z"
                        fill="white" />
                    <path
                        d="M64.8071 61.8354C65.4068 62.1622 65.8817 62.7178 66.0899 63.4245C66.5063 64.8383 65.6978 66.3218 64.2841 66.738L41.7932 73.3623C40.3796 73.7788 38.8959 72.9702 38.4797 71.5566C38.0633 70.1428 38.8717 68.6595 40.2854 68.2431L62.7764 61.6188C63.4831 61.4107 64.2075 61.5086 64.8071 61.8354Z"
                        fill="white" />
                    <path
                        d="M107.419 49.2845C108.019 49.6113 108.494 50.1669 108.702 50.8737C109.119 52.2872 108.31 53.7709 106.897 54.1871L80.9569 61.8271C79.5435 62.2435 78.0598 61.4349 77.6435 60.0214C77.227 58.6078 78.0355 57.1242 79.4492 56.7079L105.389 49.0679C106.095 48.8598 106.82 48.9578 107.419 49.2845Z"
                        fill="white" />
                    <path
                        d="M102.638 31.1132C103.237 31.44 103.712 31.9956 103.92 32.7023C104.337 34.1159 103.528 35.5996 102.115 36.0158L85.4043 40.9375C83.9908 41.3539 82.5071 40.5453 82.0908 39.1318C81.6743 37.7182 82.4828 36.2346 83.8965 35.8183L100.607 30.8966C101.314 30.6884 102.038 30.7864 102.638 31.1132Z"
                        fill="white" />
                    <path
                        d="M113.259 67.1736C113.858 67.5004 114.333 68.0558 114.542 68.7627C114.958 70.1763 114.15 71.66 112.736 72.0762L96.0254 76.998C94.6117 77.4144 93.1283 76.606 92.7119 75.1922C92.2955 73.7787 93.104 72.295 94.5177 71.8788L111.228 66.957C111.935 66.7489 112.659 66.8469 113.259 67.1736Z"
                        fill="white" />
                </g>
                <defs>
                    <clipPath id="clip0_18_511">
                        <rect width="94.2197" height="94.2197" fill="white"
                            transform="translate(83.2573 127.818) rotate(-151.411)" />
                    </clipPath>
                </defs>
            </svg>
        </section>
    </main>
</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>