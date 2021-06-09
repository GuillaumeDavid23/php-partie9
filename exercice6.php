<?php
  
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP partie 9</title>
</head>
<body>
    <?php
        $mois = 2; // Pour février
        echo date("t",mktime(0,0,0,$mois,1,2016)); // Affiche 29
        
    ?>
</body>
</html>