<!--
@access: public
@author: Marie Dadomo
@copyright : Copyright
@version : 1
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Horizon Maritime</title>
    <link href="styles/index.css" rel="stylesheet" type="text/css" media="all" />

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="js/liste_deroulante_choix_multiple.js"></script>
    <script type="text/javascript" src="js/carousel_index.js"></script>
    <script type="text/javascript" src="js/liste_derniere_offre.js"></script>
    <script type="text/javascript" src="js/list_deroulante_formation.js"></script>




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css'>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css'>

    <link rel="stylesheet" href="styles/index.css">
</head>

<body>
<!-------------Header--------------->
<!---------------------------------->
    <header>
        <nav class="nav_header">
            <div class="connection_header">
                <div id="connection_header_2">
                    <a href="login.php">Se connecter</a>
                    <a href="register.php">S'inscrire</a>
                </div>
                <a href="offre_recruteur.php" id="publiez_anno">Accès Recruteurs<span><br>Publiez vous annonces</span></a>
            </div>
            <div class="navigation_site_header">
                <a href="#">Offre d'emploi</a>
                <a href="#">Déposer un CV</a>
                <a href="#">Formation</a>
            </div>
        </nav>
        <hr align="right" >
    </header>


<!--------Recherche sur le site ---->
<!---------------------------------->

    <div class="recherche_index">
        <h2>Recherche d'emploi</h2>
        <form method="post" action="">

            <div class="tout_sur_meme_ligne">
                <div class="mot_clef">
                    <input type="text" name="mot_cle" placeholder="mot-clé : second capitaine" class="mot_cle_recherche"/>
                    <input type="text" name="lieu" placeholder="localisation: ville, departement, ..." class="localisation_recherche"/>
                </div>






                <div class="select-menu js-select-menu" id="unique-id">
                    <input class="boutton_recherche_index" type="button" name="nom" value="">
                </div>
            </div>

            </div>
        </form>
    </div>
<!----------consulter offfres tt---->
<!---------------------------------->
    <div class="consulter_toutes_offres">
        <p>Vous êtes à la recherche d'un emploi ? <a href="#">Lancez-vous ></a></p>
    </div>

<!----------entreprise ------------->
<!---------------------------------->


    <div class="entreprise_confiance">
        <h2>Ils nous font confiance</h2>
    </div>

    <div class="carousel-wrap">
        <div class="owl-carousel">
            <div class="item"><img src="http://placehold.it/150x150"></div>
            <div class="item"><img src="http://placehold.it/150x150"></div>
            <div class="item"><img src="http://placehold.it/150x150"></div>
            <div class="item"><img src="http://placehold.it/150x150"></div>
            <div class="item"><img src="http://placehold.it/150x150"></div>
            <div class="item"><img src="http://placehold.it/150x150"></div>
            <div class="item"><img src="http://placehold.it/150x150"></div>
            <div class="item"><img src="http://placehold.it/150x150"></div>
            <div class="item"><img src="http://placehold.it/150x150"></div>
            <div class="item"><img src="http://placehold.it/150x150"></div>
            <div class="item"><img src="http://placehold.it/150x150"></div>
            <div class="item"><img src="http://placehold.it/150x150"></div>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js'></script>
    <script src='https://use.fontawesome.com/826a7e3dce.js'></script>
    <script  src="js/carousel_index.js"></script>






        <!-------------Derniere annonce----->
        <!---------------------------------->

    <div class="dernieres_offres">
        <h2>Offres d'emploie maritime et naval</h2>
        <div id="notebooks" ng-app="notebooks" ng-controller="NotebookListCtrl">
            <input type="text" id="query" ng-model="query"/>
            <ul id="notebook_ul">
                <li ng-repeat="notebook in notebooks | filter:query | orderBy: orderList">
                    name: {{notebook.name}}<br/>
                    procesor: {{notebook.procesor}}<br/>
                    <div class="right top">{{notebook.age}}</div>
                </li>
            </ul>
        </div>

    </div>
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js'></script>
    <script src='https://pxtrack.herokuapp.com/embed/eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyIjoxLCJ0aXRsZSI6ImNvZGVwZW4uaW8gaGl0cyIsImlhdCI6MTQ1ODYwMzAzNX0.iveKvifh0UE3q-1ym6_nvyQ_4cJu_ewGPhrt5eTCicQ/pxtrack.js'></script>
    <script  src="js/liste_derniere_offre.js"></script>


<!-- -----------footer ------------->
<!---------------------------------->
    <footer>
        <div class="block_footer">
            <div class="dif_liens_footer">
                <h3>Espace candidats</h3>
                <ul>
                    <li><a href="#">Recherchez un emploi</a></li>
                    <li><a href="#">Desposez votre CV</a></li>
                    <li><a href="#">Plan du site</a></li>
                    <li><a href="#">Aide</a></li>
                </ul>
            </div>
            <div class="dif_liens_footer">
                <h3>Espace recruteurs</h3>
                <ul>
                    <li><a href="#">Publiez une offre</a></li>
                    <li><a href="#">Cherchez des CV</a></li>
                    <li><a href="#">Communiquez sur Horizon Maritime</a></li>
                    <li><a href="#">Plan du site</a></li>
                    <li><a href="#">Aide</a></li>
                </ul>
            </div>
            <div class="dif_liens_footer">
                <h3>Formation</h3>
            </div>
            <div class="dif_liens_footer">
                <h3>A propos</h3>
                <ul>
                    <li><a href="#">A propos</a></li>
                    <li><a href="#">Mentions légales</a></li>
                    <li><a href="#">Espace presse</a></li>
                </ul>
            </div>
            <div class="dif_liens_footer">
                <h3>Liens utiles</h3>
                <ul>
                    <li><a href="#">Contactez-nous</a></li>
                    <li><a href="#">Conditions d'utilisation</a></li>
                    <li><a href="#">Donées personnelles</a></li>
                    <li><a href="#">Centre de sécurité</a></li>
                    <li><a href="#">Accessibilité</a></li>
                </ul>
            </div>
        </div>

        <h3 id="reseaux_sauciaux_h3"> Retrouvez-nous sur les réseaux sociaux :</h3>
        <div class="reseaux_sociaux">
            <a href="#"> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 96.124 96.123" style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve"> <path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803 c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654 c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246 c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"/> </svg> </a>
            <a href="#"> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"  viewBox="0 0 430.117 430.117" style="enable-background:new 0 0 430.117 430.117;" xml:space="preserve"> <path id="LinkedIn" d="M430.117,261.543V420.56h-92.188V272.193c0-37.271-13.334-62.707-46.703-62.707 c-25.473,0-40.632,17.142-47.301,33.724c-2.432,5.928-3.058,14.179-3.058,22.477V420.56h-92.219c0,0,1.242-251.285,0-277.32h92.21 v39.309c-0.187,0.294-0.43,0.611-0.606,0.896h0.606v-0.896c12.251-18.869,34.13-45.824,83.102-45.824 C384.633,136.724,430.117,176.361,430.117,261.543z M52.183,9.558C20.635,9.558,0,30.251,0,57.463 c0,26.619,20.038,47.94,50.959,47.94h0.616c32.159,0,52.159-21.317,52.159-47.94C103.128,30.251,83.734,9.558,52.183,9.558z M5.477,420.56h92.184v-277.32H5.477V420.56z"/> </svg> </a>
            <a href="#"> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve"> <path style="fill:#010002;" d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411 c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513 c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101 c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104 c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194 c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485 c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z"/> </svg> </a>
            <a href="#"> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 511.627 511.627" style="enable-background:new 0 0 511.627 511.627;" xml:space="preserve"> <path d="M459.954,264.376c-2.471-11.233-7.949-20.653-16.416-28.264c-8.474-7.611-18.227-12.085-29.27-13.418 c-35.02-3.806-87.837-5.708-158.457-5.708c-70.618,0-123.341,1.903-158.174,5.708c-11.227,1.333-21.029,5.807-29.407,13.418 c-8.376,7.614-13.896,17.035-16.562,28.264c-4.948,22.083-7.423,55.391-7.423,99.931c0,45.299,2.475,78.61,7.423,99.93 c2.478,11.225,7.951,20.653,16.421,28.261c8.47,7.614,18.225,11.991,29.263,13.134c35.026,3.997,87.847,5.996,158.461,5.996 c70.609,0,123.44-1.999,158.453-5.996c11.043-1.143,20.748-5.52,29.126-13.134c8.377-7.607,13.897-17.036,16.56-28.261 c4.948-22.083,7.426-55.391,7.426-99.93C467.377,319.007,464.899,285.695,459.954,264.376z M165.025,293.218h-30.549v162.45 h-28.549v-162.45h-29.98v-26.837h89.079V293.218z M242.11,455.668H216.7v-15.421c-10.278,11.615-19.989,17.419-29.125,17.419 c-8.754,0-14.275-3.524-16.556-10.564c-1.521-4.568-2.286-11.519-2.286-20.844V314.627h25.41v103.924 c0,6.088,0.096,9.421,0.288,9.993c0.571,3.997,2.568,5.995,5.996,5.995c5.138,0,10.566-3.997,16.274-11.991V314.627h25.41V455.668 z M339.183,413.411c0,13.894-0.855,23.417-2.56,28.558c-3.244,10.462-9.996,15.697-20.273,15.697 c-9.137,0-17.986-5.235-26.556-15.697v13.702h-25.406v-189.29h25.406v61.955c8.189-10.273,17.036-15.413,26.556-15.413 c10.277,0,17.029,5.331,20.273,15.988c1.704,4.948,2.56,14.369,2.56,28.264V413.411z M435.685,390.003h-51.104v24.839 c0,13.134,4.374,19.697,13.131,19.697c6.279,0,10.089-3.422,11.42-10.28c0.376-1.902,0.571-7.706,0.571-17.412h25.981v3.71 c0,9.329-0.195,14.846-0.572,16.563c-0.567,5.133-2.56,10.273-5.995,15.413c-6.852,10.089-17.139,15.133-30.841,15.133 c-13.127,0-23.407-4.855-30.833-14.558c-5.517-7.043-8.275-18.083-8.275-33.12v-49.396c0-15.036,2.662-26.076,7.987-33.119 c7.427-9.705,17.61-14.558,30.557-14.558c12.755,0,22.85,4.853,30.263,14.558c5.146,7.043,7.71,18.083,7.71,33.119V390.003 L435.685,390.003z"/> <path d="M302.634,336.043c-4.38,0-8.658,2.101-12.847,6.283v85.934c4.188,4.186,8.467,6.279,12.847,6.279 c7.419,0,11.14-6.372,11.14-19.13v-60.236C313.773,342.418,310.061,336.043,302.634,336.043z"/> <path d="M397.428,336.043c-8.565,0-12.847,6.475-12.847,19.41v13.134h25.693v-13.134 C410.274,342.511,405.99,336.043,397.428,336.043z"/> <path d="M148.473,113.917v77.375h28.549v-77.375L211.563,0h-29.121l-19.41,75.089L142.759,0h-30.262 c5.33,15.99,11.516,33.785,18.559,53.391C140.003,79.656,145.805,99.835,148.473,113.917z"/> <path d="M249.82,193.291c13.134,0,23.219-4.854,30.262-14.561c5.332-7.043,7.994-18.274,7.994-33.689V95.075 c0-15.225-2.669-26.363-7.994-33.406c-7.043-9.707-17.128-14.561-30.262-14.561c-12.756,0-22.75,4.854-29.98,14.561 c-5.327,7.043-7.992,18.181-7.992,33.406v49.965c0,15.225,2.662,26.457,7.992,33.689 C227.073,188.437,237.063,193.291,249.82,193.291z M237.541,89.935c0-13.134,4.093-19.701,12.279-19.701 s12.275,6.567,12.275,19.701v59.955c0,13.328-4.089,19.985-12.275,19.985s-12.279-6.661-12.279-19.985V89.935z"/> <path d="M328.328,193.291c9.523,0,19.328-5.901,29.413-17.705v15.703h25.981V48.822h-25.981v108.777 c-5.712,8.186-11.133,12.275-16.279,12.275c-3.429,0-5.428-2.093-5.996-6.28c-0.191-0.381-0.287-3.715-0.287-9.994V48.822h-25.981 v112.492c0,9.705,0.767,16.84,2.286,21.411C313.961,189.768,319.574,193.291,328.328,193.291z"/></svg></a>
        </div>
        <p id="copyright">Copyright © 2017</p>
    </footer>








</body>
</html>


