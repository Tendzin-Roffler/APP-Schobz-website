<!DOCTYPE html>
<meta charset="UTF-8">
<html lang='fr'>
    <head>
        <title>Vérification d'email</title>
        <?php
        if (isset($_POST['envoyer'])) {
            $email = $_POST['mailform'];
            $header="Mine-Version: 1.0\r\n";
            $header.='From: "Contact.SCHBOTZ.com"<support@schobtz'."\n";
            $header.='Content-Type:text/html; charset="utf-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';

            $message ='
            <!DOCTYPE html>
            <html lang="fr">
                <body>
                    <div style="padding:0;margin:0 auto;font-size:16px;font-weight:normal;line-height:22px"> 
                        There’s one quick step you need to complete before creating your account. Let’s make sure this is the right email address for you — please confirm this is the right address to use for your new account. <br/>
                        <a href="http://localhost/verified.php?confirmation=yes&email='.$email.'">Verify here</a>
                    </div>                
                </body>
            </html>';
        
            mail($email,"Please verify your email address",$message,$header);
        }
        ?>
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
    </head>
    <body>
        <h1>
            Merci de votre inscription. Cependant, il reste une dernière étape. <br/>
            Il vous reste à vérifier votre adresse mail. Merci de renseigner votre addresse mail.
        </h1>
        <form method="POST" action="">
            <input type="email" placeholder="Recevoir un mail" name="mailform"> <!-- Permet d'envoyer un mail en un click -->
            <input type="submit" name="envoyer">
        </form>
    </body>
</html>