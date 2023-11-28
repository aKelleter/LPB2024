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
            <a href="form_1_enonce.php">Retour au formulaire</a>
        </p>

        <!-- VOTRE CODE EN DESSOUS  DU COMMENTAIRE -->
        
    </div>    

</body>
</html>