<?php
       require "app/loader.php";

       // Chaîne de caractère utilisée pour afficher soit les notes privées, soit un message
       $notes = "";

       // Initialise l'affichage par défaut voir "app/conf.php"
       $disp = APP_DEFAULT_DISP;  
      
       // Si la variable de session disp n'existe pas ou si elle est vide, on la crée avec $disp (par défaut)
       if(!isset($_SESSION['disp']) || empty($_SESSION['disp']))
        $_SESSION['disp'] = $disp; 
       
                
       // Vérifie si l'on a passe le paramètre disp dans l'url
       if(!empty($_GET))
       {
         if(isset($_GET['disp']) && $_GET['disp'] == APP_DISP_TAB)
         {
           $disp = 'tab';
           $_SESSION['disp'] = $disp;
         }elseif(isset($_GET['disp']) && $_GET['disp'] == APP_DISP_LIST){
           $disp = 'list';
           $_SESSION['disp'] = $disp;
         }
       }

        // Vérifier que l'utilisateur est identifié
        if(isset($_SESSION['IDENTIFY']) && $_SESSION['IDENTIFY'] === 1)
        {
          // Chargement des notes privées
          $notes_privees = (selectNotesDB(true));
          
          //DEBUG// print_r($notes_privees);

          if(!empty($notes_privees))
            {
              // Affichage liste ou tableau en fonction de $disp
              if($_SESSION['disp'] == APP_DISP_LIST)
                $notes = HTMLAfficheNotesListe($notes_privees);   
              elseif($_SESSION['disp'] == APP_DISP_TAB)
                $notes = HTMLAfficheNotesTableau($notes_privees);   
            }else  
                $notes = '<p>Il n\'y a pas de notes privées a afficher</p>';
        }else{
            $notes = '<h5 class="lpb-text-center"> Vous ne pouvez pas accéder aux notes privées, veuillez vous <a href="index.php">identifier</a>.</h5>'; 
        }

      



?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Bloc Notes : Notes Privées</title>
  <meta name="description" content="Bloc Notes">
  <meta name="author" content="Alain">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/lpb.css">
  <link rel="stylesheet" href="css/styles.css">


  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container lpb-overload-max-width-500">
    <?php echo HTMLMenu(); ?>
    <div class="row">
      <h3 class="lpb-text-center lpb-mt-5 lpb-mb-5">Les notes privées</h3>
      <?php echo HTMLMenuNotes('private.php'); ?>
      <hr class="hr-note">
      <?php echo $notes; ?>
      <?php echo HTMLFooter(); ?>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
