<?php 
    $recup_mail = $POST_['recup_mail'];
    if (isset($recup_mail)) {
        $mail = htmlspecialchars($recup_mail);
        if(filter_var($mail,FILTER_VALIDATE_EMAIL)) {
            header('Location:page.php?confirmed=true');
        } else {
            $error = "Adresse-mail invalide";
        }
    }   else {
        $error = "Veuillez entrer votre addresse-mail";
    }    
    header('Location:page.php?error='.$error)
?>