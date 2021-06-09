<?php
    $t2 = time() / 60 / 60 / 24;
    $t1 = mktime(0, 0, 0, 5, 16, 2016);
    $t1 = $t1 / 60 / 60 / 24;
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

        echo 'Timestamp actuel: ' .$t2. '<br>';
        echo 'Timestamp 02 aout 2016 00h00 en jour: ' .$t1. '<br>';
        $t1 = $t2 - $t1;
        echo 'Nombre de jour d\'écart : '.$t1;
        
    ?>
</body>
</html>