<?php 
   include('../../conf.php'); 
   
   // Déclaration et initialisations des variables 

   // Message si fichier absent
   $noFileMsg = 'no-file.php';
   // Message généré par l'application
   $msg = null;

   // Code du cours
   $code = null;

   // Fichier code source du cours
   $codeSrcFile = null;
   // Fichier titre du cours
   $titleFile = null;
   // Fichier du contenu (sommaire) du cours
   $contentFile = null;

   // Variable contenant le titre du cours 
   $title = null;
   // Variable contenant le sommaire du cours
   $content = null;
   // Variable contenant le code source du cours
   $codeSrc = null;
   
   // Aller chercher les différents contenus si le paramètre code est présent dans l'URL
   if(!empty($_GET['code'])) {
       $code = $_GET['code'];  
       
       $codeSrcFile = $code.'/code.php';
       (file_exists($codeSrcFile))? $codeSrc = file_get_contents($codeSrcFile) : $codeSrc = file_get_contents($noFileMsg);
       
       $titleFile = $code.'/title.html';  
       (file_exists($titleFile))? $title = file_get_contents($titleFile) : $title = file_get_contents($noFileMsg);  

       $contentFile = $code.'/content.html';     
       (file_exists($contentFile))? $content = file_get_contents($contentFile) : $content = file_get_contents($noFileMsg);       

   } else {       
       $msg = '<div class="lpb-msg">The course code must be present as a valid parameter in the url</div>';
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/img/favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    

    <link rel=stylesheet href="../../vendors/codemirror/lib/codemirror.css">
    <link rel=stylesheet href="../../vendors/codemirror/addon/display/fullscreen.css">
    <link rel=stylesheet href="../../vendors/codemirror/theme/material.css">
    <link href="../../assets/css/styles.css" rel="stylesheet">

    <title><?php echo $title; ?></title>
</head>
<body>
<div class="container-fluid">  
    <div class="text-center"><img src="../../assets/img/logo.svg" alt="logo" class="lpb-brand"></div>  
    <nav class="mt-2 text-center mb-3">        
        <a href="index.php" class="menu">Back</a>
    </nav>    

    <h1 class="lpb-h1-script"><?php echo $title; ?></h1>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <!-- Affiche un message si initialisé -->
            <div class="text-center"><?php if(isset($msg)) echo $msg; ?></div>

            <h2>Sommaire</h2> 
            <p>Présents dans le code source :</p>  

            <!-- Affiche le contenu du cours (sommaire) --> 
            <?php echo $content; ?>
        </div>
        <div class="col-3"></div>
    </div>
    
    <h1 class="lpb-h1-script">Les affichages générés par l'interprétation du code source</h1>

    <!-- Inclusion du code source pour interprétation-->
    <div class="row">        
        <div class="col-12 ps-5 pe-5">
            <?php (file_exists($codeSrcFile)) ? include($codeSrcFile) : include($noFileMsg); ?>
        </div>        
    </div>

    <!-- Affichage du code source -->
    <h1 class="lpb-h1-script mt-3">Le code source</h1>  
    <div class="lpb-pathfile">Chemin du fichier : <span class="text-warning"><?php echo $codeSrcFile; ?></span></div> 
    <div class="row">
        <div class="col-12">
            <textarea class="codemirror-textarea mb-2" name="code-src" id="code-src" cols="100%"> <?php echo $codeSrc; ?> </textarea>
        </div>
    </div>
    <nav class="text-center mt-3">
        <a href="#top" class="menu">Top</a>
    </nav>  
    <!-- Affichage du footer -->
    <footer>        
      <div class="row mt-5 mb-3">
            <div class="col-12 text-center">
                <p class="text-footer"><?php echo displayFooter(APP_YEAR, APP_UPDATE, APP_VERSION, '../../'); ?></p>
            </div>
        </div>        
    </footer> 
</div>   
<script src="../../vendors/jquery/jquery.min.js"></script>
<script src="../../vendors/codemirror/lib/codemirror.js"></script>
<script src="../../vendors/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script src="../../vendors/codemirror/mode/javascript/javascript.js"></script>
<script src="../../vendors/codemirror/mode/css/css.js"></script>
<script src="../../vendors/codemirror/mode/php/php.js"></script>
<script src="../../vendors/codemirror/mode/sql/sql.js"></script>   
<script src="../../vendors/codemirror/addon/edit/matchbrackets.js"></script>
<script src="../../vendors/codemirror/addon/display/fullscreen.js"></script>
<script src="../../assets/js/lpb.js"></script>
</body>
</html>