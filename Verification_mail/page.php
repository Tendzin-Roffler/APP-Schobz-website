<!DOCTYPE html>
<meta charset="UTF-8">
<html lang='fr'>
    <head>
        <title>Vérification d'email</title>
        <?php 
            $dBHost = "localhost";
            $dBUser = "root";
            $dBPassword = "root";
            $dBDatabase = "schobz_data";
            $port = "3306";


            $conn = mysqli_connect($dBHost, $dBUser, $dBPassword, $dBDatabase, $port);

            if (!$conn) {
                die("Échec de la connexion:" . mysqli_connect_error());
            } 
        ?>
        <?php
        if (isset($_POST['envoyer'])) {
            $username = $_POST['nom'];
            $email = $_POST['mailform'];
            $header="Mine-Version: 1.0\r\n";
            $header.='From: "Contact.SCHBOTZ.com"<support@schobtz'."\n";
            $header.='Content-Type:text/html; charset="utf-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';
            if (isset($username,$email)){
            $message ='
            <!DOCTYPE html>
            <html lang="fr">
                <body>
                    <div style="padding:0;margin:0 auto;font-size:16px;font-weight:normal;line-height:22px"> 
                        Bonjour,'.$username.'. Merci de votre inscription dans la formation. Cependant, il reste une dernière étape avant la validation de votre compte. Il suffit de cliquer sur le lien ci-joint:<br/>
                        <a href="http://localhost/verified.php?verified=1&nom='.$username.'&email='.$email.'">Verify here</a>
                    </div>                
                </body>
            </html>';
        
            mail($email,"Une dernière étape,".$username,$message,$header);
            } else {
                echo "<p>Merci de bien renseigner vos informations</p>";
            }
        }
        ?>
        
    </head>
    <body>
        <h1>
            Merci de votre inscription. Cependant, il reste une dernière étape. <br/>
            Il vous reste à vérifier votre adresse mail. Merci de renseigner votre addresse mail.
        </h1>
        <form method="POST">
            <input type="nom" placeholder="Renseigner votre nom" name="nom">
            <input type="email" placeholder="Recevoir un mail" name="mailform"> <!-- Permet d'envoyer un mail en un click -->
            <input type="submit" name="envoyer">
        </form>
    </body>
</html>