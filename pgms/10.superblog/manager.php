<?php
    require_once('settings.php');

    /**
     * ICI VOUS ECRIVEZ LE CODE PHP QUI GERE LA LOGIQUE ET LES DONNEES DE l'APPLICATION
     */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php displayHeadSection('Gestion des articles'); ?>
</head>
<body>
    <div class="container">
            <div id="header-logo">
                <h1><?php echo APP_NAME; ?></h1>
            </div>
            <div id="main-menu">
                <?php displayNavigation(); ?>
            </div>
            <h1>Gérer les articles</h1>
            <div id="message">
                <!-- Ici nous affichons les messages éventuels (CODE PHP)-->
            </div>
            <div id="content">
                <!-- 
                   Tout comme sur la page d'accueil on va ici lister les titres des articles et ce compris les non publiés.
                   avec en plus des liens pour modifier afficher, afficher et supprimer chaque article.
                   Vous devez créer une foncion d'affichage
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