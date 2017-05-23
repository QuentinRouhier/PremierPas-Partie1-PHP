<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 7</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            //creation de trois variables
            $nom = 'Le Guilcher';
            $prenom = 'Virginie';
            $age = 33;
            // avec un concatenation des trois plus du texte
            echo 'Bonjour ' . $nom . ' ' . $prenom . ', tu as ' . $age . " ans";
            ?>
        </p>
    </body>
</html>