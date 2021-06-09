<?php
    $date = new DateTime("2-8-2016");
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
        echo time();
        echo date('d-m-Y', $date->getTimestamp() - time());

        //BONUS
        
        echo 'BONUS =>'.$date->getTimestamp();
    ?>
</body>
</html>