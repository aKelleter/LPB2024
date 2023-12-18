<?php
    require_once('settings.php');

    $res = getAllArticlesDB($conn, 1);

    // DEBUG // Affichage brut des articles reçu de la DB // 
    // disp_ar($res, 'ARTICLES');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php displayHeadSection('Accueil'); ?>
</head>
<body>
    <div class="container">
            <div id="header-logo">
                <h1><?php echo APP_NAME; ?></h1>
            </div>
            <div id="main-menu">
                <?php displayNavigation(); ?>
            </div>
            <div id="message">               
                <?php if(isset($msg)) echo $msg; ?>
            </div>
            <div id="content">
                <?php displayArticles($res); ?>            
            </div>  
            <footer>                
               <?php displayFooter(); ?>
            </footer>     
        </div>
    </div>    
</body>
</html>