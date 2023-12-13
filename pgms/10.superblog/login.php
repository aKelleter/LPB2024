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
                <!-- Ici nous affichons les messages éventuels (CODE PHP)-->
            </div>
            <div id="content">
                <!-- 
                    Créez ici un formulaire HTML s'identifier sur l'application
                    * Astuces :
                        - L'attribut "action" de votre balise form devra contenir "login.php"
                          C'est ici même dans login.php que nous traiterons l'identification
                        - L'attribut "method" devra contenir "post"                    
                -->
                                
            </div>  
            <footer>
                 <!-- 
                    Ouvrez une balise php pour lancer la fonction d'affichage 
                    du footer. Fonction que vous allez écrire dans fct-ui.php
                    Affichez le nom de l'app sa version sa date de mise à jour
                    et d'autres choses si vous le souhaitez 
                -->
            </footer>     
        </div>
    </div>    
</body>
</html>