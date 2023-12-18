<?php
    require_once('settings.php');

    /**
     * ICI VOUS ECRIVEZ LE CODE PHP QUI GERE LA LOGIQUE ET LES DONNEES DE l'APPLICATION
     */

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
            <h1>S'identifier</h1>
            <div id="message">
                <?php if(isset($msg)) echo $msg; ?>
            </div>
            <div id="content">

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
    </div>    
</body>
</html>