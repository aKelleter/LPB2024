<?php 
    /*
        <?php -> Balise d'ouverture qui signale le début d'un bloc de code PHP 
        // -> Le double slash permet d'afficher un commentaire sur une seule ligne
    */

    /*
        Ce bloc affiche un
        commentaire sur
        plusieurs lignes
    */

    /*
        En PHP, on termine une instruction par un point-virgule ";" Exemple -> echo "Hello";
        On peut insérer autant de blocs PHP qu'on le souhaite dans un fichier .php
        ?> -> C'est  la balise de fermeture d'un bloc de de code PHP 
    */       
?>
<?php

    // Utiliser les structures(p.24) "echo" et "print" pour afficher une résultat en PHP 
    echo 'Hello World !<br>'; // Affiche la chaîne Hello World ! avec un retour à la ligne <br>
            
    /* 
        On délimite les chaînes de caractères avec:
        - des simple quote : '' 
        - ou des guillemets : ""
    */
    
    // Afficher le nombre 555 avec la structure echo
    echo 555; 
    echo "<br>";
    
    // Afficher la chaîne de caractère "555" avec la structure echo
    echo "555"; 
    echo "<br>";

    // Même type d'affichage avec la structure print'';
    print 'Hello World ! with print';
    print "<br>";
    
    // Si besoin, on peut manipuler des nombres lors de l'affichage 
    print 777 + 1; 
    echo "<br>";

    // Avec des guillemets comme délimiteur
    print "777";
    echo "<br>";

    // Les structure 'echo' et 'print' peuvent également s'utiliser avec des parenthèses ()
    echo ('echo avec des parenthèses ()<br>');
    print ('print avec des parenthèses ()<br>');

    /*
        Pour afficher des appostrophes ''
        avec une chaîne délimitée par des appostrophes '' (single quotes)
        on utilise le caractère d'échappement '\' : le caractère backslash ou antislash
        même principe pour afficher des guillemets "" avec une chaîne délimitée par des guillemets "" (double quotes)
    */

    // Pour afficher l'apostrophe du mot "Aujourd'hui", on utilise le caractère d'échappement '\'
    echo 'Aujourd\'hui<br>'; 

    // Pour afficher les guillemets qui entoure le prénom John, on utilise le caractère d'échappement '\'
    echo "Bonjour \"John\", il est l'heure de se lever<br>"; 

    /*
        Pour afficher du code HTML et éviter ainsi de nombreux échappements avec l'antislash '\',
        préférez délimiter vos chaînes avec des single quotes '' (apostrophes) plutôt que des double quotes ""
        En effet, les balise HTML peuvent contenir plusieurs attributs dont les valeurs sont délimitées par des double quotes ""
     */
    echo'<div id="myID" class="article">My article</div>';
  
?>