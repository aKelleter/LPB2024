<?php
/**
 * **********
 * CONTROLLER
 * **********
 */
 require_once '../../../../fct.php';

 $msg = null;
    
    // Si le formulaire est soumis...
    if (!empty($_POST))
    {
    
        // On affecte les valeurs du formulaire aux variables
       disp_ar($_POST, 'Données du formulaire');

       // On affecte les valeurs du formulaire aux variables
       $email = $_POST['email'];
       $password = $_POST['password'];
       $password_confirm = $_POST['password_confirm'];
    
        // On vérifie que l'email existe
        if (!empty($email))
        {
        
            // On vérifie que l'email est valide
            if (filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                // On affiche un message 
                $msg = 'Le formulaire est soumis et correctement rempli (I)';
            } else {
                // On affiche un message d'erreur
                $msg = 'L\'email n\'est pas valide';
            }        
                
        } else {
            // On affiche un message d'erreur
            $msg = 'L\'email est vide';
        } 
        
        // Tests sur les mots de passe
        if (!empty($password))
        {
        
            // On vérifie que le mot de passe est correct
            if ($password === $password_confirm) {
                // On affiche un message de succès
                $msg = 'Le formulaire est soumis et correctement rempli (II)';
            } else {
                // On affiche un message d'erreur
                $msg = 'Les mots de passe ne sont pas identiques';
            }
        } else {    
            // On affiche un message d'erreur
            $msg = 'Le mot de passe est vide';
        }


    }else {
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
     - Créer un formulaire d'ajout d'un nouvel utilisateur 
     - Ce formulaire doit contenir les champs suivants : nom, prénom, email, mot de passe, confirmation du mot de passe 
     - Le formulaire doit être envoyé en POST 
     - Cette page doit afficher les données envoyées par le formulaire 
     - Si le formulaire est vide, afficher un message d'erreur 
     - Si le mot de passe et la confirmation du mot de passe sont différents, afficher un message d'erreur 
     - Si le formulaire est valide, afficher un message de succès     
     VOTRE CODE EN DESSOUS  DU COMMENTAIRE 
    -->
    <div class="container">
        <h1>Formulaire d'inscription</h1>
        <p>
            <a href="../">Back</a> -
            <a href="form_1_soluce.php">Retour au formulaire</a>
        </p>

        <div class="text-info border p-3"><?php echo $msg; ?></div>

        <form method="post" action="">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom" required>
            </div>
            <div class="mb-3">
                <label for="prenom"class="form-label">Prénom</label>
                <input type="text"  class="form-control" name="prenom" id="prenom" placeholder="Votre prénom" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email"  class="form-control" name="email" id="email" placeholder="Votre email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password"  class="form-control" name="password" id="password" placeholder="Votre mot de passe" required>
            </div>
            <div class="mb-3">
                <label for="password_confirm" class="form-label">Confirmation du mot de passe</label>
                <input type="password"  class="form-control" name="password_confirm" id="password_confirm" placeholder="Confirmez votre mot de passe" required>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary"  value="Envoyer">            
            </div>
        </form>
    </div>    

</body>
</html>