<?php include_once('../conf.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    
    <link href="../styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="../favicon.ico">

    <title>PHP : Les commentaires, echo, print</title>
</head>
<body>
<div class="container-fluid">  
    <nav class="mt-2 text-center mb-3">
        <a href="index.php" class="menu">Home</a>
    </nav>    
    <h1>
        <u>Ecrire ses premières lignes de code en PHP</u>
    </h1>
    <h2>Sommaire</h2>    
        <ol>
            <li>Les balises PHP (ouverture et fermeture)</li>
            <li>Les commentaires</li>
            <li>Le point-virgule de fin d'intruction</li>
            <li>Les structures d'affichage echo et print</li>
            <li>Les délimiteurs de chaînes de caractères : les single quotes ' ' et les double quotes " "</li>
            <li>Les structures avec des parenthèses</li>
            <li>Le caractère d'échappement \</li>
            <li>Affichage des balises HTML avec des single quotes ' '</li>
        </ol>
        <p class="alert alert-info text-center">
            <strong>
                A l'aide de votre éditeur (ex.: VS Code), accédez au code source du fichier <span class="pathfiles">/LPB2024/PHP/01.commentaires-echo-print.php</span><br>
                Lisez le code source ainsi que les commentaires pour comprendre les affichages ci-dessous.
            </strong></p>
        <p>--------------------------------------------------------</p>
        <h1>Ci-dessous, les affichages générés par l'interprétation du code source</h1>

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
        <footer>        
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p class="text-footer"><?php echo displayFooter(APP_YEAR, APP_UPDATE, APP_VERSION); ?></p>
                </div>
            </div>        
        </footer> 
    </div>   
</body>
</html>