<?php 
   include('../conf.php'); 
   
   // Déclaration et initialisations des variables 

   // Message si fichier absent
   $noFileMsg = 'no-file.php';
   // Message généré par l'application
   $msg = null;

   // Code du cours
   $code = null;
   // Type de cours
   $type = null;

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
   
   // Aller chercher les différents contenus si les paramètres code et type sont présents(et non vides) et dans l'URL
   if(!empty($_GET['code']) && !empty($_GET['type'])) {
       $code = $_GET['code'];  
       $type = $_GET['type'];  
       
       $codeSrcFile = $type.'/'.$code.'/code.php';
       (file_exists($codeSrcFile))? $codeSrc = file_get_contents($codeSrcFile) : $codeSrc = file_get_contents($noFileMsg);
       
       $titleFile = $type.'/'.$code.'/title.html';  
       (file_exists($titleFile))? $title = file_get_contents($titleFile) : $title = file_get_contents($noFileMsg);  

       $contentFile = $type.'/'.$code.'/content.html';     
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
    <link rel="shortcut icon" href="../assets/img/favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    

    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/img/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/apple-touch-icon-180x180.png" />

    <link rel=stylesheet href="../vendors/codemirror/lib/codemirror.css">
    <link rel=stylesheet href="../vendors/codemirror/addon/display/fullscreen.css">
    <link rel=stylesheet href="../vendors/codemirror/theme/material.css">
    
    <link href="../assets/css/styles.css" rel="stylesheet">

    <title><?php echo $title; ?></title>
</head>
<body>
<div class="container-fluid">  
    <div class="text-center"><img src="../assets/img/logo.svg" alt="logo" class="lpb-brand"></div>  
    <div class="col-md-12 mt-2 header-site">
        <?php 
            // Afficher le menu principal
            echo getHtmlMainMenu('../', 'courses', $type); 
        ?>   
    </div>  

    <h1 class="lpb-h1-script"><?php echo $title; ?></h1>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <!-- Affiche un message si initialisé -->
            <div class="text-center"><?php if(isset($msg)) echo $msg; ?></div>

            <h2>Sommaire</h2> 
            <p>Présents dans le code source :</p>  

            <!-- Affiche le contenu du cours (sommaire) --> 
            <?php echo $content; ?>
        </div>
        <div class="col-md-3"></div>
    </div>
    
    <h1 class="lpb-h1-script">Les affichages générés par l'interprétation du code source</h1>

    <!-- Inclusion du code source pour interprétation-->
    <div class="row">        
        <div class="col-md-12 ps-5 pe-5">
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
            <div class="col-md-12 text-center">
                <p class="text-footer"><?php echo getHtmlFooter(APP_YEAR, APP_UPDATE, APP_VERSION, '../'); ?></p>
            </div>
        </div>        
    </footer> 
</div>   
<script src="../vendors/jquery/jquery.min.js"></script>
<script src="../vendors/codemirror/lib/codemirror.js"></script>
<script src="../vendors/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script src="../vendors/codemirror/mode/javascript/javascript.js"></script>
<script src="../vendors/codemirror/mode/css/css.js"></script>
<script src="../vendors/codemirror/mode/php/php.js"></script>
<script src="../vendors/codemirror/mode/sql/sql.js"></script>   
<script src="../vendors/codemirror/addon/edit/matchbrackets.js"></script>
<script src="../vendors/codemirror/addon/display/fullscreen.js"></script>
<script src="../assets/js/lpb.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>