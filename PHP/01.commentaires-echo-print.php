<?php include_once('../conf.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    

    <link rel=stylesheet href="../assets/codemirror/lib/codemirror.css">
    <link rel=stylesheet href="../assets/codemirror/addon/display/fullscreen.css">
    <link rel=stylesheet href="../assets/codemirror/theme/material.css">
    <link href="../styles.css" rel="stylesheet">

    <title>PHP : Les commentaires, echo, print</title>
</head>
<body>
<div class="container-fluid">  
    <nav class="mt-2 text-center mb-3">
        <a href="index.php" class="menu">Back</a>
    </nav>    
    <h1 class="lpb-h1-script">Ecrire ses premières lignes de code en PHP</h1>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h2>Sommaire</h2> 
            <p>Présents dans le code source:</p>   
            <ol>
                <li>Les balises PHP (ouverture et fermeture)</li>
                <li>Les commentaires</li>
                <li>Le point-virgule de fin d'intruction</li>
                <li>Les structures d'affichage echo et print</li>
                <li>Les délimiteurs de chaînes de caractères : les single quotes ' ' et les double quotes " "</li>
                <li>Les structures avec des parenthèses</li>
                <li>Le caractère d'échappement '\' (backslash ou antislash)</li>
                <li>Afficher du code HTML avec des single quotes ' '</li>
            </ol>        
        </div>
        <div class="col-3"></div>
    </div>
    <p class="lpb-info">            
        Accédez au code source du fichier a l'aide, soit de votre éditeur, <span class="pathfiles">/LPB2024/PHP/code_src/01.php</span>, soit à l'aide de l'affichage du code source intégré à la page, ci-dessous <br>
        <span class="lpb-marker">Lisez le code source ainsi que les commentaires pour comprendre les affichages ci-dessous.</span>
    </p>        
    <hr class="lpb-hr">
    <h1 class="lpb-h1-script">Les affichages générés par l'interprétation du code source</h1>

    <!-- Inclusion du code source pour interprétation-->
    <?php include('code_src/01.php'); ?>

    <!-- Affichage du code source -->
    <h1 class="lpb-h1-script mt-3">Le code source</h1>
    <?php (file_exists('code_src/01.php'))? $contenu = file_get_contents('code_src/01.php') : $contenu = "Sorry, no file exist"; ?>
    <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%"> <?php echo $contenu; ?> </textarea>

    <footer>        
      <div class="row mt-5">
            <div class="col-12 text-center">
                <p class="text-footer"><?php echo displayFooter(APP_YEAR, APP_UPDATE, APP_VERSION); ?></p>
            </div>
        </div>        
    </footer> 
</div>   
<script src="../assets/jquery/jquery.min.js"></script>
<script src="../assets/codemirror/lib/codemirror.js"></script>
<script src="../assets/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script src="../assets/codemirror/mode/javascript/javascript.js"></script>
<script src="../assets/codemirror/mode/css/css.js"></script>
<script src="../assets/codemirror/mode/php/php.js"></script>
<script src="../assets/codemirror/mode/sql/sql.js"></script>   
<script src="../assets/codemirror/addon/edit/matchbrackets.js"></script>
<script src="../assets/codemirror/addon/display/fullscreen.js"></script>
<script src="../assets/lpb/lpb.js"></script>
</body>
</html>