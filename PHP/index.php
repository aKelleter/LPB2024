<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first site with PHP</title>
</head>
<body>

    <h1><u>Ecrire ses premières lignes de code en PHP</u></h1>    
    <ol>
        <li>La balise PHP</li>
        <li>Les commentaires</li>
        <li>Le point-virgule</li>
        <li>Les structures d'affichage echo et print</li>
        <li>Les délimiteurs de chaînes de caractères : les single quotes ' ' et les double quotes " "</li>
        <li>Les structures avec des parenthèses</li>
        <li>Le caractère d'échappement \</li>
        <li>Affichage des balises HTML avec des single quotes ' '</li>
    </ol>
    <p>Lire le code source du fichier "index.php" ainsi que les commentaires.</p>
    <p>--------------------------------------------------------</p>
    <h1><u>Ci-dessous, les affichages générés par l'interprêtation du code source</u></h1>

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
    
    <!-- Un second bloc de code PHP (vous pouvez en placer autant que nécessaire) -->
    <?php

        // Utiliser les structures(p.24) "echo" et "print" pour afficher une résultat en PHP 
        echo 'Hello World !<br>'; // Affiche la chaîne Hello World ! avec un retour à la ligne <br>
        
        /* On délimite les chaînes de caractères avec:
            - des simple quote : '' 
            - ou des guillemets : ""
        */

        echo 555; // Affiche le nombre 555
        echo "<br>";
        echo "555"; // Affiche la chaîne 555
        echo "<br>";

        // Même chose avec la structure print'';
        print 'Hello World ! with print';
        print "<br>";
        print 777+1; // Si besoin, on peut manipuler des nombres lors de l'affichage 
        echo "<br>";
        print "777";
        echo "<br>";

        // Les structure echo et print peuvent également utiliser des parenthèses ()
        echo ('echo avec des parenthèses ()<br>');
        print ('print avec des parenthèses ()<br>');

        // Pour afficher des appostrophes 
        // avec une chaîne délimitée par des appostrophes '' (single quotes)
        // on utilise le caractères d'échappement '\' : le carctère backslash
        // même chose avec les guillemets
        echo 'Aujourd\'hui<br>';
        echo "Bonjour \"John\", il est l'heure de se lever<br>";

        // Pour afficher des balises HTML et éviter ainsi les échappements avec '\'
        // préférez délimiter vos chaînes avec des single quotes ''
        echo'<div id="myID" class="article">My article</div>';

    ?>

</body>
</html>