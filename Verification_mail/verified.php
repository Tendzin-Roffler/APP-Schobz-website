<DOCTYPE html>
<html>
    <body>
        <?php
            $verification = $_GET['confirmation'];
            if ($verification == 'yes') {
                echo "Confirmé";
            } else { 
                echo "Pas confirmé"; 
            }
            
        ?>
    </body>
</html>