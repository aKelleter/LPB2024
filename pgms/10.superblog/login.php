<?php
    require_once('settings.php');

    // Redirection vers la page de gestion si l'utilisateur est connecté
    if ($_SESSION['IDENTIFY']) {
        header('Location: manager.php');
    }

    $user = null;
    $connexionSuccessfull = null;
    $msg = null;

    // On vérifie l'objet de connexion $conn
    if(!is_object($conn)){
        $msg = getMessage($conn, 'error');
    }else{

        // Vérifie si on reçoit le formumaire d'identification
        if(isset($_POST['form']) && $_POST['form'] == 'login') {
            
            // Vérifie si les champs sont vides
            if($_POST['login'] == '' || $_POST['pwd'] == '') {
                $msg = getMessage('Veuillez remplir tous les champs', 'error');               
            }else{

                // On récupère les données du formulaire
                $datas = $_POST;

                // Appel de la fonction d'identification
                    // Utiliser cette fonction si les mots de passe sont en clair dans la DB
                    $user = userIdentificationDB($conn, $datas);

                    // Utiliser cette fonction si les mots de passe sont hashés dans la DB
                    // $user = userIdentificationWithHashPwdDB($conn, $datas);            

                // On vérifie si on a une adresse email dans le tableau $user, si c'est le cas on est connecté
                (!empty($user['email']))? $connexionSuccessfull = true : $connexionSuccessfull = false;
                
            }
        }

        // Si on est connecté, on initialise les variables de session et on redirige vers la page de gestion
        if($connexionSuccessfull === true) {
            $_SESSION['IDENTIFY'] = true;
            $_SESSION['user_email'] = $user['email'];
            header('Location: manager.php');     
        // Dans le cas contraire on affiche un message d'erreur, il y a eu une erreur d'identification
        }elseif($connexionSuccessfull === false){
            $msg = getMessage('Votre email et/ou votre mot de passe sont erronés', 'error');
            
        }
    } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php displayHeadSection('S\'identifier'); ?>
</head>
<body>
    <div class="container">
        <div id="header-logo">
            <h1><?php echo APP_NAME; ?></h1>
        </div>
        <div id="main-menu">
            <?php displayNavigation(); ?>
        </div>
        <h2 class="title">S'identifier</h2>            
        <div id="message">              
            <?php if(isset($msg)) echo $msg; ?>
        </div>
        <div id="content-login">
            
            <form class="mt-15" action="login.php" method="post">
                <div class="form-ctrl">
                    <label for="login" class="form-ctrl">E-mail</label>
                    <input type="email" class="form-ctrl" id="login" name="login" value="<?php echo (!empty($_POST['login']))? $_POST['login'] : null; ?>" required>
                </div>
                <div class="form-ctrl">
                    <label for="pwd" class="form-ctrl">Mot de passe</label>
                    <input type="password" class="form-ctrl" id="pwd" name="pwd" value="" required>
                </div>
                <input type="hidden" id="form" name="form" value="login">
                <button type="submit" class="btn-classic">Se connecter</button>
            </form>
                            
        </div>  
        <footer>
            <?php displayFooter(); ?>
        </footer>             
    </div>    
</body>
</html>