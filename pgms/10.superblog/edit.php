<?php
    require_once('settings.php');

    /**
     * ICI VOUS ECRIVEZ LE CODE PHP QUI GERE LA LOGIQUE ET LES DONNEES DE l'APPLICATION
     */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php displayHeadSection('Editer un article'); ?>
</head>
<body>
    <div class="container">
            <div id="header-logo">
                <h1><?php echo APP_NAME; ?></h1>
            </div>
            <div id="main-menu">
                <?php displayNavigation(); ?>
            </div>
            <h1>Modifier un article<h1>
            <div id="content-edit">
                <!-- 
                    Créez ici un formulaire HTML pour modifier le contenu d'un article
                    * Astuces :
                        - L'attribut "action" de votre balise form devra contenir "manager.php"
                          C'est dans le fichier manager.php que l'on va traiter les donées du formulaire
                        - L'attribut "method" devra contenir "post"                    
                -->
                                
            </div>  
            <footer>
                <?php displayFooter(); ?>
            </footer>     
        </div>
    </div>  
    <?php displayJSSection(); ?>    
</body>
</html>