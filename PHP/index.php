<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first site with PHP@</title>
</head>
<body>

    <?php 
        // "<?php" -> Balise indiquant que l'on va insérer un bloc de code PHP 

        // "//" -> Affiche un commentaire sur une seule ligne
        
        /*
            Affiche un
            commentaire sur
            plusieurs lignes
        */

        // On termine une instruction par un point-virgule ";" -> echo "Hello";

        // "?" -> Balise de fermeture du bloc de de code PHP        
    ?>
    
    <!-- Un autre bloc de code PHP (vous pouvez en placer autant que nécessaire) -->
    <?php

        // Utiliser les structures(p.24) "echo" et "print" pour afficher une résultat en PHP 
        echo 'Hello World !<br>'; // Affiche la chaîne Hello World ! avec un retour à la ligne <br>
        echo "<br>";
        // On délimite les chaînes de caractères avec des simple quote'' ou des guillemets ""
        echo 555; // Affiche le nombre 555
        echo "555"; // Affiche la chaîne 555

        // Même chose avec print'';
        print 'Hello World ! with print';
        print "<br>";
        print 777;
        print "777";

    ?>

</body>
</html>