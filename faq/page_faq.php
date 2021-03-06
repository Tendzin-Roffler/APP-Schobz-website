<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="faqcss.css">
        <link rel="stylesheet" type="text/css" href="../footer-header/style.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <title>FAQ</title>
    </head>
    <body>
        
        <!-- Header à ajouter -->
        <div class="topbar">

            <span class="menuduhautpartiegauche"> <!-- span c'est pour aligner les liens -->
                <a class="menuduhaut_bouton" href="">Accueil</a>
                <a class="menuduhaut_bouton" href="">Mon compte</a>
                <a class="menuduhaut_bouton" href="">A propos de nous</a>
            </span>
        
            <span class="menuduhautpartiedroite"> <!-- span c'est pour aligner les liens -->
                <a class="menuduhaut_bouton" href="">Recherche avancée</a>
                <a class="menuduhaut_bouton" href="">F.A.Q</a>
            </span>
        
        </div>

        <div class="container">
            <div class="search-box">
                <input type="text" class="search" placeholder="Rechercher" style="color: #615858">  <!-- style pour le couleur dans le input de la barre de recherche -->
                <button type="submit" class="search-btn">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>


        <!-- Corps principal -->
        <div class="regroupement">
            <div class="categorie-QT">
                <a class="entête" href="#popup_QT">
                    Questions techniques
                </a>
                <p class="Talk">
                  Pour toutes questions concernant le fonctionnement du sites, de la lecture des résultats ou du relevé des mesures.
                </p>
            </div>
            <div class="categorie-InfoCap">
                <a class="entête" href="#popup_InfoCap">
                    Information capteur
                </a>
                <p class="Talk">
                    Pour toutes questions sur le fonctionnement des appareils de mesures.
                </p>
            </div>
            <div class="categorie-ProbCap">
                <a class="entête" href="#popup_ProbCap">
                    Problème capteur
                </a>
                <p class="Talk">
                    Pour tout endommagement du système, veuillez le signaler à votre auto-école.
                </p>
            </div>
            <div class="categorie-QF">
                <a class="entête" href="#popup_QF">
                    Questions fréquentes
                </a>
                <p class="Talk">
                    Pour toutes questions en générales concernant le fonctionnement du service.
                </p>
            </div>
            <div class="categorie-AddF">
                <a class="entête" href="#popup_AddF">
                    Ajouter une question
                </a>
                <p class="Talk">
                    Pour tout autre demandes.
                </p>
            </div>
        </div>


        <!-- Popup -->
        <div id="popup_QT" class="overlay">
            <div class="popup">
                <h2>
                    Questions techniques
                </h2>
                <a class="close" href="#">&times;</a>
                <span class="content">
                    <h3>Comment lire les résultats?</h3>
                    <p>Il est possible de lire les résultats via le profile, rubrique Mes Résultats. Vous pourrez ainsi suivre votre progression.</p>
                    <h3>Comment suivre le relevé de mesures?</h3>
                    <p>Vous avez accès aux mesures depuis votre profile. Votre suivi peut alors se faire directement par des graphiques.</p>
                </span>
            </div>
        </div>

        <div id="popup_InfoCap" class="overlay">
            <div class="popup">
                <h2>
                    Informations sur les capteurs
                </h2>
                <a class="close" href="#">&times;</a>
                <span class="content">
                    <h3>Que font les appareils de mesures</h3>
                    <h3>À quoi servent-ils?</h3>
                    <h3>Comment fonctionnent-ils?</h3>
                </span>
            </div>
        </div>

        <div id="popup_ProbCap" class="overlay">
            <div class="popup">
                <h2>
                    Problèmes avec les capteurs
                </h2>
                <a class="close" href="#">&times;</a>
                <span class="content">
                    <h3>Que faire lorsqu'un appareil ne s'active pas?</h3>
                </span>
            </div>
        </div>

        <div id="popup_QF" class="overlay">
            <div class="popup">
                <h2>
                    Questions fréquentes
                </h2>
                <a class="close" href="#">&times;</a>
                <span class="content">
                    Pour toutes questions en générales à propos du fonctionnement du service.
                    <h3>Comment accéder à son profil?</h3> 
                    <p>Le profil est accessible via le bouton "Profil" situé en haut de page.</p>
                </span>
            </div>
        </div>

        <div id="popup_AddF" class="overlay">
            <div class="popup">
                <h2>Ajouter une question</h2>
                <a class="close" href="#">&times;</a>
                <span class="content">
                    <h3>Pour tout autre demande, merci de vous référer à la rubrique Nous Contacter en bas de page pour y envoyer un message.</h3>
                </span>
            </div>
        </div>

        <!-- Bas de page à ajouter - Footer-->
        
        <div class="footer">

            <span class="menudubaspartiegauche">
                <a href="https://twitter.com"> <img id="twitter" src="images/twitter.png"></a>
                <a href="https://www.instagram.com"> <img id="instagram" src="images/instagram.png"></a>
                <a href="https://www.facebook.com"><img id="facebook" src="images/facebook.png"></a>
                <a href="https://www.linkedin.com"><img id="linkedin" src="images/linkedin.png"></a>
            </span>
        
            
            <form class="menudubaspartiecentre">
                <span class="Nous_contacter_titre">
                    Nous contacter
                </span>
                <div class="Nous_contacter_collect" data-validate="Merci de renseigner votre nom et prénom">
                    <input class="Nous_contacter_imput" type="text" name="name" placeholder="Nom et Prénom">
                    <span class="focus-Nous_contacter"></span>
                <span></span></div>
                <div class="Nous_contacter_collect" data-validate="Merci de renseigner votre adresse mail valide: e@a.x">
                    <input class="Nous_contacter_imput" type="text" name="email" placeholder="E-mail" >
                    <span class="focus-Nous_contacter"></span>
                <span></span></div>
                <div class="<Nous_contacter_collect>" data-validate="Merci de renseigner votre message.">
                    <textarea class="Nous_contacter_imput_textarea" name="message" placeholder="Votre message"></textarea>
                <span class="focus-Nous_contacter"></span>
                </div>
                <div class="BLoc_Bouton">
                    <button class="Nous_contacter_bouton">
                        <span>
                            <i aria-hidden="true"></i>
                                Envoyer
                        </span>
                    </button>
                </div>
            </form>
        
            <div class="adresse_premierepartie">
                <a href="">10 rue de vanves, 92130</a>
            </div>
        
            <div class="adresse_deuxiemepartie">
                <a href="">Issy-Les-Moulineaux, France</a>
            </div>
        
            <div class="horaire">
                <a href="">8h30-12h, 13h-18h</a>
            </div>
        
            <div class="telephone">
                <a href="">07 81 06 65 85</a>
            </div>
        
            <img id="maison" src="images/maison.png">
            <img id="horloge" src="images/horloge.png">
            <img id="telephone" src="images/telephone.png">
        
        </div>
        

    </body>
</html>
