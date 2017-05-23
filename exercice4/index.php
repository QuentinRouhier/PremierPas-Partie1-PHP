<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            // creation d'un variable de type string 
            $string = 'creation d\'un variable de type string';
            // creation d'un variable de type int 
            $int = 458965;
            // creation d'un variable de type float
            $float = 452.32585235254;
            // creation de deux variables de type $boolean
            $boolean = true;
            $bool = false;
            //affiche les differente viraible en les concatenant avec des espaces
            echo $string . ' ' . $int . ' ' . $float . ' ' . $boolean . ' ' . $bool;
            ?>
        </p>
    </body>
</html>