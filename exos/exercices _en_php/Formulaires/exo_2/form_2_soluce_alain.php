<?php
/**
 * **********
 * CONTROLLER
 * **********
 */
 require_once '../../../../fct.php';

 $msg = null;
 $email = null;
 $pwd = null;

 $infos_user = [
    "e-mail" => 'alain@kelleter.be',
    "mdp" => '123456'
 ];    

    // Si le formulaire est soumis...
    if (!empty($_POST))
    {
        // Afficher les données brut
        //DEBUG//
        disp_ar($_POST, 'Les données envoyées par le formulaire avec la méthode POST');

        // Récupération et assignation des données
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        if(!empty($email) && !empty($pwd))
        {
            if($email === $infos_user['e-mail']) 
            {
                if($pwd === $infos_user['mdp'])
                {
                    $msg = 'Soyez le bienvenu, <span style="color:green;">'.$email.'</span>';
                }else{
                    $msg = '<span style="color:red;">Votre mot de passe est erroné</span>';
                }    

            }else{
                $msg = '<span style="color:red;">Votre adresse e-mail est incorrecte</span>';
            }          
        }else{
            $msg = '<span style="color:red;">Veuillez remplir tous les champs du formulaire, merci. </span>';
        }
      
     
    } else {
        // On affiche un message 
        $msg = 'Le formulaire n\'a pas  encore été soumis';
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Formulaire d'inscription</title>
</head>
<body>
    <!--
     Créer un formulaire d'identification 
     Ce formulaire doit contenir les champs suivants : email et mot de passe 
     Le formulaire doit être envoyé en POST  
     Cette page doit afficher les données envoyées par le formulaire 
     Si le formulaire est vide, afficher un message d'erreur 
     Si le formulaire est valide, c.-à-d si le mot de passe et l'email correspondent aux données de la variable user[],
     afficher un message de succès     
    -->
    <div class="container">
        <h1>Formulaire d'identification</h1>
        <p>
            <a href="../">Back</a> -
            <a href="form_2_soluce_alain.php">Retour au formulaire</a>
        </p>
        <div><?php echo $msg; ?></div>
        <form action="" method="post">
            <div class="m-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" placeholder="Votre e-mail" class="form-control" value="<?php echo $email; ?>"required>
            </div>
            <div class="m-3">
                <label for="pwd" class="form-label">Mot de passe</label>
                <input type="password" name="pwd" placeholder="Votre mot de passe" class="form-control" required>
            </div>
            <div class="m-3">                
                <input type="submit" class="btn btn-primary" value="Envoyer">
            </div>    
        </form>

    </div>    


</body>
</html>