<?php
    session_start();
    require_once('fct.php');

    $msgPOST = null;
    $msgGET = null;
    $msgAdd = null;
    $msgIdent = null;

    $user = [
        'email' => 'john@mail.com', 
        'passwd' => '1234'
    ];
    
 

    // Test de la méthode POST    
    if(isset($_POST['prenom']) && !empty($_POST['prenom'])) {
        $msgPOST =  '<span style="color:red;">Bonjour ' . $_POST['prenom'] . ' ' . $_POST['nom'] . ' - Nous avons bien reçu votre message</span><br>';
        disp_ar($_POST, '$_POST');
    }
    else {
        $msgPOST =  'Le formulaire POST n\'a pas été envoyé<br>';
    }

    // Test de la méthode GET
    if(isset($_GET['age']) && !empty($_GET['age'])) {
        $msgGET =  '<span style="color:red;">Vous avez  : ' . $_GET['age'] . ' ans et mesurez ' . $_GET['taille'] . ' cm </span><br>';
        disp_ar($_GET, '$_GET');
    }
    else {
        $msgGET =  'Le formulaire GET n\'a pas été envoyé<br>';
    }
     
    // Test du formulaire Addition avec la méthode POST
    if(isset($_POST['nombre1']) && !empty($_POST['nombre1'])) {
        
        // Vérifier que les valeurs saisies sont numériques
        if(!is_numeric($_POST['nombre1']) || !is_numeric($_POST['nombre2'])) {
            $msgAdd =  '<span style="color:red;">Les valeurs saisies ne sont pas numériques</span><br>';
        }
        else
            $msgAdd =  '<span style="color:red;">L\'addition  de : ' . $_POST['nombre1'] . ' + ' . $_POST['nombre2'] . ' = ' . ($_POST['nombre1'] + $_POST['nombre2']) . '</span><br>';

        // Affichage brute des données
        disp_ar($_POST, '$_POST');
    }
    else {
        $msgAdd =  "Le formulaire Addition n'a pas été envoyé<br>";
    }

    // Test du formulaire d'Identification avec la méthode POST  
    if(
        (isset($_POST['email']) && !empty($_POST['email'])) && 
        (isset($_POST['passwd']) && !empty($_POST['passwd']))
      ) {
        
        if($_POST['email'] === $user['email'] && $_POST['passwd'] === $user['passwd']) {
            $msgIdent =  '<span style="color:red;">Bienvenue ' . $_POST['email'] . '</span><br>';
        }
        else {
            $msgIdent =  '<span style="color:red;">Erreur d\'identification</span><br>';
        }


        disp_ar($_POST, '$_POST');
    }
    else {
        //$msgIdent =  "Le formulaire d'identification n'a pas été envoyé<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Les formulaires</title>
    
</head>
<body>

<div class="container">
[ <a href="..">BACK</a> ]  [ <a href="index.php">RELOAD</a> ]
    <h3>Formulaire de contact utilisant la méthode POST</h3> 
    <div> <?php echo $msgPOST ?></div>   
    <form action="" method="post" name="test_post">
        <input type="text" name="prenom" placeholder="Prénom">
        <input type="text" name="nom" placeholder="Nom">
        <input type="submit" value="Envoyer">
    </form>
    <hr>
    <h3>Formulaire de contact utilisant la méthode GET</h3> 
    <div> <?php echo $msgGET ?></div>   
    <form action="" method="get" name="test_get">
        <input type="text" name="age" placeholder="Age">
        <input type="text" name="taille" placeholder="Taille en cm">
        <input type="submit" value="Envoyer">
    </form>
    <hr>
    <h3>Formulaire : Addition</h3> 
    <div> <?php echo $msgAdd ?></div>   
    <form action="" method="post" name="test_add">
        <input type="text" name="nombre1" placeholder="Premier nombre"> + 
        <input type="text" name="nombre2" placeholder="Second nombre">
        <input type="submit" value="Envoyer">
    </form>
    <hr>
    <h3>Formulaire : Identification</h3> 
    <div> <?php echo $msgIdent ?></div>   
    <form action="https://localhost/lpb/LPB2024/pgms/08.formulaires/index.php" method="post" name="test_ident">
        <input type="text" name="email" placeholder="Votre"> 
        <input type="password" name="passwd" placeholder="Votre mot de passe">
        <input type="submit" value="Identification">
    </form>
    
</div>

</body>
</html>