<!DOCTYPE html>
<meta charset="UTF-8">
<html lang='fr'>
    <head>
        <title>Vérification d'email</title>
        <?php
        if (isset($_POST['envoyer'])) {
            $header="Mine-Version: 1.0\r\n";
            $header.='From: "Contact.SCHBOTZ.com"<support@schobtz'."\n";
            $header.='Content-Type:text/html; charset="utf-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';

            $message ='
            <!DOCTYPE html>
            <html lang="fr">
                <body>
                    <div style="padding:0;margin:0 auto;font-size:16px;font-weight:normal;line-height:22px"> 
                        There’s one quick step you need to complete before creating your account. Let’s make sure this is the right email address for you — please confirm this is the right address to use for your new account. 
                    </div>                
                </body>
            </html>';
        
            mail($_POST['mailform'],"Please verify your email address",$message,$header);
        }
        ?>
    </head>
    <body>
        <h1>
            Merci de votre inscription. Cependant, il reste une dernière étape. <br/>
            Il vous reste à vérifier votre adresse mail. Merci de renseigner votre addresse mail.
        </h1>
        <form method="POST" action="">
            <input type="email" value="Recevoir un mail" name="mailform"> <!-- Permet d'envoyer un mail en un click -->
            <input type="submit" name="envoyer">
        </form>
    </body>
</html>