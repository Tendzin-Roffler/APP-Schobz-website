<!DOCTYPE html>
<html>
<head>
    <title>
        Récupération de mot de passe
    </title>
</head>
<body>
    <h1>
        Récupération de mot de passe
    </h1>
    <form action="formulaire.php" method="POST">
        <input type="email" placeholder="Entrer votre email associé à votre compte" name="recup_mail">
        <input type="submit" value="Valider" name="recup_valide">
    </form>
    <?php
        if (isset($_GET['error'])) {
            echo '<p> '.$_GET['error']. '</p>';
        } else {
            if (isset ($GET_['confirmed'])) {
                echo '<p> Le mail est envoyé </p>';
            }
        }
    ?>
</body>
</html>