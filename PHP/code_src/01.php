<?php 
    // "<?php" -> Balise indiquant que l'on va insérer un bloc de code PHP 

    // "//" -> Affiche un commentaire sur une seule ligne
            
    /*
        Affiche un
        commentaire sur
        plusieurs lignes
    */

    // On termine une instruction par un point-virgule ";" -> echo "Hello";

    // On peut insérer autant de bloc PHP que l'on souhaite dans un fichier .php

    // "?" -> Balise de fermeture du bloc de de code PHP        
?>
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