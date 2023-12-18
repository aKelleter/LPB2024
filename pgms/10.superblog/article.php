<?php
    require_once('settings.php');

    $msg = null;
    $id = null;

    if(isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $res = getArticleByIDDB($conn, $id);
        //disp_ar($res);

    }else
        $msg = getMessage("Il n'y a pas d'article à afficher", 'success');
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php displayHeadSection('***Titre de l\'article***'); ?>
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
                <?php displayArticleByID($res); ?>
                                
            </div>  
            <footer>
                <?php displayFooter(); ?>
            </footer>     
        </div>
    </div>    
</body>
</html>