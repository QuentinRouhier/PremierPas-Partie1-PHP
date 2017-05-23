<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            //creation d'une variable Nom de type string
            $Nom = 'Rouhier';
            //creation d'une variable Nom de type string
            $Penom = 'Quentin';
            //creation d'une variable Nom de type int
            $Age = 19;
            // affiche les variables en les concatenant
            echo $Nom . $Penom . $Age;
            ?>
        </p>
    </body>
</html>
<!-- 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Partie 1 exo 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Exercice 2 Partie 1 Php</h1>
        <div>
            <p>Voici mes variables :</p>
            <?php
            // Déclaration des variables nom, prenom et age
            $nom = 'Lefebvre';
            $prenom = 'Priscillia';
            $age = 23;
             ?>
            <p>Je m'appelle <?php echo $nom . ' ' . $prenom ?></p>
            <p>J'ai <?php echo $age ?> ans.</p>
        </div>
    </body>
</html>
-->