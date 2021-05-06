<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Toréa Patissier</title>
</head>

<body>

    <header>
        <!-- NAVBAR VERSION PC -->
        <nav class="white  black-text hide-on-small-only">
            <ul id="nav-mobile" class="left">
                <li><a class="navli" href="#apropos">A propos</a></li>
                <li><a class="navli" href="#competences">Compétences techniques</a></li>
                <li><a class="navli" href="#realisations">Projets réalisés</a></li>
                <li><a class="navli" href="#parcours">Parcours</a></li>
                <li><a class="navli" href="#contact">Contact</a></li>
            </ul>
        </nav>

        <!-- SIDENAV VERSION MOBILE -->
        <div class="hide-on-med-and-up">
            <ul id="slide-out" class="sidenav">
                <li><a href="#apropos"> A propos</a></li>
                <li><a href="#competences">Compétences Techniques</a></li>
                <li><a href="#realisations">Projets réalisés</a></li>
                <li><a href="#parcours">Parcours</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>

    </header><br />

    <main>

        <!-- Nom Prénom Version Mobile pas de Js -->
        <h4 class="hide-on-med-and-up center-align"> Toréa Patissier</h4>
        
        <!-- Image version mobile -->
        <div class="center-align hide-on-med-and-up">
            <img class="imageRondeMobile" src="images/torea.JPG">
        </div><br />


        <!-- Image version  PC  -->
        <div class="containerParallax">
            <div class="parallax-container hide-on-small-only">
                <div class="parallax"><img class="imageronde" src="images/torea2.JPG"></div>
            </div>
        </div>
        <!-- Nom Prénom version PC avec JS -->
        <h1 class="ml5 center-align hide-on-small-only">
            <span class="text-wrapper">
                <span class="line line1"></span>
                <span class="letters letters-left">Toréa </span>
                <span class="letters letters-right"> Patissier</span>
                <span class="line line2"></span>
            </span>
        </h1><br /><br />

        <!-- A PROPOS -->
        <div id="apropos"></div><br/><br/><br/>
            <h2 class="center-align hide-on-small-only">A propos : </h2><br /><br />
            <h3 class="center-align hide-on-med-and-up">A propos : </h3><br /><br />

        <!-- A propos version pc -->
        <h4 class="container left-align hide-on-small-only">
            Développeur Web fullstack en formation à la coding school de La Plateforme, école du numérique basé à Marseille depuis 2019.<br /><br />
            Je suis actuellement à la recherche d’une entreprise afin d’y effectuer mon
            alternance à partir de septembre 2021.
        </h4><br /><br />
        <hr class="container">

        <!-- A propos version mobile -->
        <h5 class="container left-align hide-on-med-and-up">
            Développeur Web fullstack en formation à la coding school de La Plateforme, école du numérique basé à Marseille depuis 2019.
            Je suis actuellement à la recherche d’une entreprise afin d’y effectuer mon
            alternance à partir de septembre 2021.
        </h5><br /><br />

        <!-- COMPETENCES -->
        <div id="competences"></div><br/><br/><br/>
            <h2 class="center-align hide-on-small-only"> Compétences Techniques : </h2><br />
            <h4 class="center-align hide-on-med-and-up"> Compétences Techniques : </h4><br />


        <!-- PARTIE FRONT-END -->
        <h3 class="center-align">Front-end</h3><br /><br />
        <div class="center-align">
            <img src="images/png-html.png">
            <img src="images/png-js.png">
            <img src="images/png-css.png">
        </div><br /><br />

        <!-- PARTIE FRAMEWORK ET VERSIONNING -->
        <div class="row">

            <div class="col s12 l7">
                <h3 class="center-align">Frameworks/CMS</h3><br /><br />
                <div class="center-align">
                    <img src="images/png-wordpress.png">
                    <img src="images/png-bootstrap.png">
                    <img class="hide-on-small-only" src="images/materialize.png">
                    <img class="hide-on-med-and-up" src="images/materialize.png" height="130">
                </div>
            </div>

            <div class="col s12 l5">
                <h3 class="center-align">Versioning</h3><br /><br />
                <div class="center-align">
                    <img src="images/png-github.png">
                </div>
            </div>
        </div><br /><br />


        <!-- PARTIE BACK-END // MAQUETTAGE -->
        <div class="row">
            <div class="col s12 l6">
                <h3 class="center-align">Back-end</h3><br /><br />
                <div class="center-align">
                    <img src="images/png-php.png">
                    <img src="images/png-sql.png">
                </div>
            </div>

            <div class="col s12 l6">
                <h3 class="center">Maquettage</h3><br /><br />
                <div class="center-align">
                    <img src="images/png-figma.png">
                </div>
            </div>
        </div><br /><br />
        <hr class="container"><br />

        <!-- REALISATIONS -->
        <div id="realisations"></div><br/><br/><br/>
            <h2 class="center-align hide-on-small-only"> Projets réalisés : </h2><br />
            <h4 class="center-align hide-on-med-and-up"> Projets réalisés : </h4><br />

        <!-- CAROUSEL AVEC LES PROJETS REALISE -->

        <!-- BOUTIQUE EN LIGNE -->
        <div class="row">
            <div class="col s12 l6">
                <div class=" container carousel carousel-slider center">
                    <div class="carousel-fixed-item center">
                    </div>
                    <div class="carousel-item black white-text" href="#one!" img src="images/png-php.png">
                        <h1>Boutique en ligne</h1>
                        <p class="white-text">Projet réalisé en HTML, CSS, PHP, JAVASCRIPT et avec Materialize,
                            reprenant le concept d'une boutique en ligne et comprenant toutes les fonctions d'une vraie boutique<br /><br />
                            c'est à dire une moyen de paiement, un panier, une barre de recherche et bien d'autres choses..
                            <br /><br />Lien à venir</p>
                    </div>
                    <img class="carousel-item" src="images/screenboutique.png">
                    <img class="carousel-item" src="images/screenBoutique1.png">
                    <img class="carousel-item" src="images/screenBoutique2.png">
                    <img class="carousel-item" src="images/screenBoutique3.png">

                </div><br />
            </div>
            <!-- JEUX DU PENDU -->
            <div class="col s12 l6">
                <div class=" container carousel carousel-slider center">
                    <div class="carousel-fixed-item center">
                    </div>
                    <div class="carousel-item black white-text" href="#two!">
                        <h1>Jeux du pendu</h1>
                        <p class="white-text">Projet en HTML, CSS, PHP plus technique qu'il n'en à l'air.<br /><br />
                            Nous avons repris le célèbre jeux du pendu, pas besoin de vous en dire plus, non?
                            <br /><br />Lien à venir</p>
                    </div>
                    <img class="carousel-item" src="images/screenPendu1.png">
                    <img class="carousel-item" src="images/screenPendu2.png">
                    <img class="carousel-item" src="images/screenPendu3.png">

                </div><br />
            </div>
        </div>

        <div class="row">

            <!-- VILLE DE MARSEILLE -->
            <div class="col s12 l6">
                <div class=" container carousel carousel-slider center">
                    <div class="carousel-fixed-item center">
                    </div>
                    <div class="carousel-item black white-text" href="#four!">
                        <h1>Ville de Marseille</h1>
                        <p class="white-text left">Projet en HTML et CSS, réalisation d'un blog sur la ville de Marseille<br /><br />on y retrouve des informations
                            concernant l'actualité, les endroits à visiter mais aussi l'histoire même de Marseille.<br /><br />Lien à venir</p>
                    </div>
                    <img class="carousel-item" src="images/screenMarseille.png">
                    <img class="carousel-item" src="images/screenMrs2.png">
                    <img class="carousel-item" src="images/screenMrs3.png">
                    <img class="carousel-item" src="images/screenMrs1.png">
                </div><br /><br />
            </div>
            <!-- ERREUR404 -->
            <div class="col s12 l6">

                <div class=" container carousel carousel-slider center">
                    <div class="carousel-fixed-item center">
                    </div>
                    <div class="carousel-item black white-text" href="#three!">
                        <h1>App favorites</h1>
                        <p class="white-text">Projet en HTML et CSS, le but ici était de présenter nos applications favorites.<br /><br />
                            J'ai choisis des écrans d'Iphone avec du texte, et un background aux couleurs de l'application pour les mettre en valeur. <br /><br />Lien à venir</p>
                    </div>
                    <img class="carousel-item" src="images/screenApp1.png">
                    <img class="carousel-item" src="images/screenApp2.png">
                    <img class="carousel-item" src="images/screenApp3.png">

                </div><br /><br />
            </div>
        </div>

        <hr class="container">

        <!-- PARCOURS -->
        <div id="parcours"></div><br /><br /><br/>
            <h2 class="center-align hide-on-small-only"> Parcours : </h2><br />
            <h4 class="center-align hide-on-med-and-up"> Parcours : </h4><br />
            
            <div class="container center-align">
                <h4>2020/2021</h4>
                <h5>Coding school à La Plateforme, école du numérique (Marseille)</h5><br/>
                <h4>2015/2020</h4>
                <h5>Légion Etrangère<br/><br/>2e Régiment Etranger de Parachutistes<br/><br/>Boutique E-commerce Amazon (2e activité)</h5><br/>
                <h4>2014</h4>
                <h5>Baccalauréat  Sciences et Technologies du Management et de la Gestion (Bastia)<br/><br/> spécialité Ressources Humaines et Communication</h5><br/>
            </div>


        <hr class="container">

        <div id="contact"></div><br/><br/><br/>
            <h2 class="center-align hide-on-small-only"> Contact : </h2><br />
            <h4 class="center-align hide-on-med-and-up"> Contact : </h4><br />

        <h4 class="container">Pour toutes informations, voici mes coordonnées, au plaisir d'échanger avec vous pour toutes
            questions, ou autre. </h4><br /><br />

        <div class="row container">
            <div class="col s12 m6 l6">
                <h4>Mail : <a href="mailto:p.torea@icloud.com">
                        <div class="mailLink">p.torea@icloud.com </div>
                    </a></h4><br />

                <h4>Tel: 06.81.47.23.29</h4><br />
                <h4>Mon CV</h4><br />
            </div>
            <div class="col s12 m3 l3">
                <h4>Github </h4><br /><a href="https://github.com/torea-patissier"><img class="gitHubLink" src="images/png-github2.png"></a>
            </div>
            <div class="col s12 m3 l3">

                <h4>LinkedIn</h4><br /><a href="https://www.linkedin.com/in/torea-patissier-4a281a151/"><img class="linkedInLink" src="images/png-linkedIn.png"></a>
            </div>
        </div>

    </main>


    <footer>
    </footer>

    <script src="js/materialize.min.js" type="text/javascript"></script><br />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
</body>

</html>