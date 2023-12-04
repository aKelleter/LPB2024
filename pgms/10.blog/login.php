<?php
    require_once('conf.php');
    
    // Redirection vers la page de admin si l'utilisateur est connecté
    if ($_SESSION['IDENTIFY']) {
        header('Location: admin.php');
    }

    $user = null;

    // Connexion à la base de données
    $conn = connectDB(SERVER_NAME, USER_NAME, USER_PWD, DB_NAME);

    // Vérifie si on effectue une identification
    if(isset($_POST['form']) && $_POST['form'] == 'login') {
        
        if($_POST['login'] == '' || $_POST['pwd'] == '') {
            $msg = '<div class="alert alert-danger text-center" role="alert">Veuillez remplir tous les champs</div>';
            //header('refresh:3;url=login.php');
        }else{
            $datas = $_POST;
            $user = identificationDB($conn, $datas);
            //DEBUG// disp_ar($user, 'USER', 'VD');   
        }
    }

    // Traitement en fonction du retour de la fonction identificationDB()  
    if($user === true) {
        $_SESSION['IDENTIFY'] = true;
        header('Location: admin.php');     
    }elseif($user === false){
        $msg = '<div class="alert alert-danger text-center" role="alert">Votre email et/ou votre mot de passe sont erronés</div>';
        //header('refresh:3;url=login.php');
    }
   

?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
    <title><?php echo APP_NAME;?></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-5 appTitle"><?php echo APP_NAME;?></h1>              
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
               <h2 class="mb-3 text-primary">Identification</h2> 
               <hr>
               <?php displayNavigation(); ?>
               <?php if(isset($msg)) echo $msg; ?>
               <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="login" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="login" name="login" value="<?php echo (!empty($_POST['login']))? $_POST['login'] : null; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="pwd" name="pwd" value="" required>
                    </div>
                    <input type="hidden" id="form" name="form" value="login">
                    <button type="submit" class="btn btn-primary">Se connecter</button>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>