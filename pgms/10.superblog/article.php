<?php
    require_once('settings.php');

    $msg = null;
    $result = null;
    $execute = false;

    // On vérifie si l'ID de l'article est passé en paramètre dans l'url ($_GET)
    if(isset($_GET['id']) && !empty($_GET['id'])){

        // On récupère l'ID de l'article passé en paramètre
        $id = $_GET['id'];

        // On vérifie l'objet de connexion $conn
        if(!is_object($conn)){            
            $msg = getMessage($conn, 'error');
        }else{
            
             // Récupérer l'article spécifié par l'ID
            $result = getArticleByIDDB($conn, $id);

            // On vérifie le retour de la fonction : si c'est un tableau, on continue, sinon on affiche un message d'erreur
            (isset($result) && is_array($result) && !empty($result))? $execute = true : $msg = getMessage('Il n\'y a pas d\'article à afficher', 'error');
        }       
        
    }else{
        $msg = getMessage('Il n\'y a pas d\'article à afficher', 'success');
    }    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php displayHeadSection((isset($result['title'])?$result['title']:APP_NAME)); ?>
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
            
            <?php 
                // Peut-on exécuter l'affichage de l'article
                if($execute)
                    displayArticleByID($result); 
            ?>
                            
        </div>  
        <footer>
            <?php displayFooter(); ?>
        </footer>            
    </div>    
</body>
</html>