<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel='stylesheet' type='text/css' href='../footer-header/style.css'>
    <link rel='stylesheet' type='text/css' href='inscription2.css'>
    <title>Inscription et connexion</title>

</head>



<body>

<!--HEADER-->

<div class="topbar">

    <span class="menuduhautpartiegauche"> <!-- span c'est pour aligner les liens -->
        <a href="">Accueil</a>
        <a href="">Mon compte</a>
        <a href="">A propos de nous</a>
    </span>
    <span class="menuduhautpartiedroite"> <!-- span c'est pour aligner les liens -->
        <a href="">Recherche avancée</a>
        <a href="">F.A.Q</a>
    </span>
</div>


<div class="container">
    <div class="search-box">
        <label>
            <input type="text" class="search" placeholder="Rechercher" style="color: #615858">
        </label>  <!-- style pour le couleur dans le input de la barre de recherche -->
        <button type="submit" class="search-btn">
            <i class="fa fa-search"></i>
        </button>
    </div>
</div>

<!--INSCRIPTION ET CONNEXION-->
<div class="fond">
    <div class="form-box">

        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="Connexion()">Connexion</button>
            <button type="button" class="toggle-btn" onclick="Inscription()">Inscription</button>
        </div>
        <form  id="connexion" class="Connexion" method="post">
            <label>
                <input type='text' name='username' class="identif"3
                       placeholder="Identifiant" required="required">
            </label>

            <label>
                <input type="password" name="password" class="identif"
                       placeholder="Mot de passe" required="required">
            </label>

            <label>
                <input type="checkbox" class="check-box1" required="required"/> Remember Password
            </label>

            <button type="submit" class="connex1">Connexion</button>
            <input type="button" class="Motdepasseoubliee" onclick="window.location.href='#mdp_oublie';" value="Mot de passe oublié">
        </form>

        <form id="Inscription" class="Identification" method="post">
            <label>
                <select name="choixgenre" class="genre">
                    <option>Homme</option>
                    <option>Femme</option>
                    <option>Autre</option>
                </select>
            </label>
            <label>
                <input name="Nom" class="identif2"   type="text" placeholder="Nom" required="required"/>
            </label>
            <label>
                <input name="Prenom" class="identif2" type="text" placeholder="Prénoms" required="required"/>
            </label>
            <label>
                <input name="DateDeNaissance" class="identif2" type="date" placeholder="Date de Naissance" required="required"/>
            </label>

            <label>
                <input name="Email" class="identif2" type="email" placeholder="Adresse email" required="required"/>
            </label>
            <label>
                <input name="Password" class="identif2" type="password" placeholder="Mot de Passe" required="required"/>
            </label>
            <label>
                <input name="ConfirmPassword" class="identif2" type="password" placeholder="Confirmez votre Mot de Passe" required="required"/>
            </label>
            <label>
                <input name="NumeroDePermis" class="identif2" type="number" placeholder="Numéro de Permis" required="required"/>
            </label>
            <label>
                <input name="Numéro auto école" class="identif2" type="number"  placeholder="Numéro Auto école" required="required"/>
            </label>
            <label><input type="radio" class="CGU" name="choice" value="oui" required="required"/> J'ai lu et j'accepte les <a class="link_CGU" href=#popup_CGU>mentions legales & CGU </a>
            </label>
            <button type="submit" class="valider">Valider </button>
        </form>

        <div id="popup_CGU" class="overlay">
            <div class="popup">
                <h2>Mentions légales et CGU</h2>
                <a class="close" href="#">&times;</a>
                <span class="content">
                    <p class="p_cgu">Téléphone : 0781066685<br/><br/>
                    <b>Edition du site : </b><br/><br/>
                    Le site ‘driverpsychotechniquetest.fr’ est édité par la société SCHOBZ Corporation. Capital social de 60 euros, dont le siège social est situé 10 rue de vanves, 92130 Issy-les-moulineaux <br/><br/> 
                    <b>Responsable de rédaction :</b><br/><br/>
                    Schobz Corporation <br/>
                    
                    <b>Hébergeur : </b><br/><br/>
                    Le site ‘driverpsychotechniquetest.fr’ est hébergé par la société ISEP Paris <br/>
                    Adresse : 28 rue Notre Dame des Champs, 75006 Paris<br/><br/>
                    <b>L’utilisation des données personnelles : </b><br/><br/>
                    Aucune information personnelle ne sera collectée à votre insu. les informations que vous nous communiquez lors de l’inscription, renseignement, ou d’une demande de devis transmise par courrier, téléphone, e-mail ou par formulaire sont uniquement destinées à un traitement administratif et commercial de votre demande par la société ISEP Paris.
                    Conformément à la loi “ Informatique et Libertés”  n 78-17 du 6 janvier 1978, vous disposez d’un droit d'accès, de rectification et d’opposition aux données personnelles vous concernant. 
                    Afin de l’exercer, il suffit de nous en faire la demande par écrit à la coordonnée suivante : <br/>
                    ( mettre une adresse mail ou adresse postale ) <br/><br/>
                    <b>Droit d’auteur / copyright </b><br/><br/>
                    l’ensemble du contenu du présent site Internet, est la propriété de la société ISEP Paris, il est protégé par les lois en vigueur de la législation française sur la propriété intellectuelle.<br/><br/>
                    Aucun élément de ce site ne peut être copié, reproduit, détourné ou dénaturé, sur quelque support que ce soit, sans constituer un acte de contrefaçon au sens des articles L 335-2 et suivants du code de la propriété intellectuelle. 
                </p>
                </span>
            </div>
        </div>
        <div id="mdp_oublie" class="overlay">
            <div class="popup">
                <h2>
                    Merci de renseigner votre adresse mail. Nous vous y enverrons un message pour réinitialiser le mot de passe.
                </h2>
                <a class="close" href="#">&times;</a>
                <span class="content">
                    <input class="mdp_mail_imput" type="text" name="email" placeholder="E-mail" >
                </span>
            </div>
        </div>

    </div>
</div>

<script>
    var x = document.getElementById("connexion");
    var y = document.getElementById("Inscription");
    var z = document.getElementById("btn");
    function  Inscription(){
        x.style.left= "-400px";
        y.style.left= "50px";
        z.style.left= "110px";
    }
    function  Connexion(){
        x.style.left= "50px";
        y.style.left= "450px";
        z.style.left= "0";
    }

</script>

<!--FOOTER-->

<link rel="stylesheet" href="style.css">
<div class="footer">

    <span class="menudubaspartiegauche">
        <a href="https://twitter.com"> <img id="twitter" src="twitterT.png" alt=""></a>
        <a href="https://www.instagram.com"> <img id="instagram" src="instagramT.png" alt=""></a>
        <a href="https://www.facebook.com"><img id="facebook" src="facebookT.png" alt=""></a>
        <a href="https://www.linkedin.com"><img id="linkedin" src="linkedinT.png" alt=""></a>
    </span>

    <form class="menudubaspartiecentre">
        <span class="Nous_contacter_titre">
        Nous contacter
        </span>
        <div class="Nous_contacter_collect" data-validate="Merci de renseigner votre nom et prénom">
            <label>
                <input class="Nous_contacter_imput" type="text" name="name" placeholder="Nom et Prénom">
            </label>
            <span class="focus-Nous_contacter"></span>
            <span></span></div>
        <div class="Nous_contacter_collect" data-validate="Merci de renseigner votre adresse mail valide: e@a.x">
            <label>
                <input class="Nous_contacter_imput" type="text" name="email" placeholder="E-mail" >
            </label>
            <span class="focus-Nous_contacter"></span>
            <span></span></div>
        <div class="Nous_contacter_collect_imput_textarea" data-validate="Merci de renseigner votre message.">
            <label>
                <textarea class="Nous_contacter_imput_textarea" name="message" placeholder="Votre message"></textarea>
            </label>
            <span class="focus-Nous_contacter"></span>
        </div>
        <input type="submit" value="Envoyer"
               class="Nous_contacter_bouton" style="color: #484848"/>
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
    <img id="maison" src="maisonT.png" alt="">
    <img id="horloge" src="horlogeT.png" alt="">
    <img id="telephone" src="telephoneT.png" alt="">
</div>

</body>
</html>
