<?php

    require "app/loader.php";

    $message = null;
    $rt = null;

    //DEBUG// DEBUGDisplayArray($_POST);

    //Traiter l'envoi du formulaire  
    if(!empty($_POST))
    {
        
        //DEBUG//DEBUGDisplayArray($_POST);

        $userForm = $_POST;

        // Tests des entrées du formulaire d'identification
        if( (isset($userForm['f_login']) && !empty($userForm['f_login']) 
            && (isset($userForm['f_pwd']) && !empty($userForm['f_pwd']) ) 
          ) )
        {
            // Appel de la fonction d'identification
            //$rt = identificationUser($userForm['f_login'], $userForm['f_pwd'], $user);

            // Appel de la fonction d'identification avec la DB
            $rt = identificationUserDB($userForm['f_login'], $userForm['f_pwd'], $user);

        }else{
            $message = "Veuillez remplir tous les champs";
        }
        
        // Si l'identification est réussie
        if($rt)
        {
            // Lance le système de session 
            $_SESSION['IDENTIFY'] = 1;

            $_SESSION['login'] = $user['login'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['status'] = $user['status'];
            
            header("Location:private.php");
            
        }else{
            $message = '<div class="lpb-div-error lpb-text-center lpb-mb-5"> L\'identification a échouée. Vérifiez votre login et votre mot de passe</div>';
        }

    // Renvoyer l'utilisateur sur la page des notes privées si il est connecté
    }else{
        // Si l'utilisateur est déjà connecté
        if($_SESSION['IDENTIFY'] == 1)
            header("Location:private.php");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Super Notes : identification</title>
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
    <div class="row lpb-block-center-500">
        <h3 class="lpb-text-center lpb-mt-10 lpb-mb-5">Identification</h3>
        <hr>

        <?php echo $message; ?>

        <form action="" method="post">
          
          <label for="f_login">E-mail</label>
          <input class="u-full-width" type="email"  name="f_login" id="f_login" required>

          <label for="f_pwd">Password</label>
          <input class="u-full-width" type="password" name="f_pwd" id="f_pwd" required>
          
          <label for="f_submit"></label>
          <input class="button-primary" type="submit" value="Sign in">

      </form>      
      <?php echo HTMLFooter(); ?>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
