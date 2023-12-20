<?php
    require_once('settings.php');

    // Redirection vers la page de login si l'utilisateur n'est pas connecté
    if (!$_SESSION['IDENTIFY']) {
        header('Location: login.php');
    }
    
    $msg = null;
    $tinyMCE = true;
    $execute = false;
    
    // Vérification de la connexion à la DB
    if(!is_object($conn)){
        $msg = getMessage($conn, 'error');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php displayHeadSection('Ajouter un article'); ?>
</head>
<body>
    <div class="container">
        <div id="header-logo">
            <h1><?php echo APP_NAME; ?></h1>
        </div>
        <div id="main-menu">
            <?php displayNavigation(); ?>
        </div>
        <h2 class="title">Ajouter un article<h2>
        <div id="message">               
            <?php if(isset($msg)) echo $msg; ?>
        </div>
        <div id="content-add">

            <form action="manager.php" method="post">                    
                <div class="form-ctrl">
                    <label for="title" class="form-ctrl">Titre</label>
                    <input type="text" class="form-ctrl" id="title" name="title" value="" required>
                </div>
                <div class="form-ctrl">                                          
                    <label for="published_article" class="form-ctrl">Status de l'article <small>(publication)</small></label> 
                    <?php displayFormRadioBtnArticlePublished(false, 'ADD'); ?>                  
                </div>   
                <div class="form-ctrl">
                    <label for="content" class="form-ctrl">Contenu</label>
                    <textarea class="" id="content" name="content" rows="8"></textarea>
                </div>
                <input type="hidden" id="form" name="form" value="add">
                <button type="submit" class="btn-classic">Ajouter</button>
            </form>
                            
        </div>  
        <footer>
            <?php displayFooter(); ?>
        </footer>             
    </div>  
    <?php displayJSSection($tinyMCE); ?>    
</body>
</html>