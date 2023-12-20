<?php
/* ********************************************************************** */
/* *                          TOOLS FUNCTIONS                           * */
/* *                          ---------------                           * */
/* *        FONCTIONS D'AFFICHAGE DE L'INTERFACE UTILISATEUR            * */
/* ********************************************************************** */

/**
* Retourne le code html des boutons radios indiquant 
* le status de publication de l'article
* 
* @param boolean     $published
* @param string      $typeForm  (ADD ou EDIT)
* @return string
*/
function displayFormRadioBtnArticlePublished($published, $typeForm = 'ADD')
{
   
    $html = '';

    // Si c'est le formulaire d'ajout d'article
    if($typeForm == 'ADD'){
        $html .= '
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" value="1" id="published_article" name="published_article">          
        </div>
    ';
    // Si c'est le formulaire de modification d'article
    }elseif($typeForm == 'EDIT'){

        if($published){        
            $html .= '
            <div class="form-check form-switch">
                <input class="form-check-input" value="1" type="checkbox" id="published_article" name="published_article" checked>          
            </div>
            ';
        }else{
            $html .= '
            <div class="form-check form-switch">
                <input class="form-check-input" value="1" type="checkbox" id="published_article" name="published_article">        
            </div>
            ';
        }
    }

    echo $html; 
}

/**
 * Affichage de la section JS
 * 
 * @param bool $tinyMCE 
 * @return void 
 */
function displayJSSection($tinyMCE = false)
{
    $js = '';

    // Chargement de TinyMCE si nécessaire (paramètre $tinyMCE = true)
    $js .= ($tinyMCE)? '
    <script src="vendors/tinymce/tinymce.min.js" referrerpolicy="origin"></script>  
    <script src="assets/js/conf-tinymce.js"> </script>
    ' : null;  
    
    // Affichage de la chaîne des scripts JS
    echo $js;
}

/**
 * Affichage de la section head d'une page
 * 
 * @param string $title 
 * @return void 
 */
function displayHeadSection($title = APP_NAME){

    $head = '
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <link rel="preconnect" href="https://fonts.gstatic.com">   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/2.0.0/modern-normalize.min.css" integrity="sha512-4xo8blKMVCiXpTaLzQSLSw3KFOVPWhm/TRtuPVc4WG6kUgjH6J03IBuG7JZPkcWMxJ5huwaBpOpnwYElP/m6wg==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
        <link rel="stylesheet" href="assets/css/styles.css">
        
        <title>' . $title . '</title>
    ';

    echo $head;
}

/**
 * Affichage de la navigation
 * 
 * @return void 
 */
function displayNavigation(){

    $navigation = '';

    if($_SESSION['IDENTIFY']){
        $navigation .= '
        <nav>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="manager.php">Gérer</a></li>
                <li><a href="add.php">Ajouter</a></li>
                <li><a href="logoff.php" class="btn-danger">Déconnexion</a></li>                        
            </ul>           
        </nav>
        <div class="welcome"> Bienvenue <span>'.$_SESSION['user_email'].'</span></div>
        ';
    }else{
        $navigation .= '
        <nav>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>                  
                <li><a href="login.php">Se connecter</a></li>                        
            </ul>
        <nav>';
    }

    echo $navigation;
}

/**
 * Retour d'un message au format HTML
 * 
 * @param string $message 
 * @param string $type 
 * @return string 
 */
function getMessage($message, $type = 'success')
{
    $html = '<div class="msg-'.$type.'">'.$message.'</div>';
    return $html;
}


/**
 * Affichage des articles 
 * 
 * @param mixed $articles 
 * @return void 
 */
function displayArticles($articles) {
    foreach ($articles as $article) {
        echo '<article><a href="article.php?id='.$article['id'].'" title="Lire l\'article"><h2 class="article-item">' . $article['title'] . '</h2></a></article>';
        echo '<hr>';
    }
}


/**
 * Affichage du footer
 * 
 * @param string $app_name 
 * @param string $app_version 
 * @param string $app_update 
 * @param string $app_author 
 * @return void 
 */
function displayFooter($app_name = APP_NAME, $app_version = APP_VERSION, $app_update = APP_UPDATED, $app_author = APP_AUTHOR) {
    echo"<p>$app_name - $app_version -$app_update by $app_author<p>";
}

/**
 * Affiche l'article reçu en paramètre
 * 
 * @param mixed $article 
 * @return void 
 */
function displayArticleByID($article) {
    echo '<article>';
    echo '<h2 class="">' . $article['title'] . '</h2>';
    echo '<hr>';
    echo '<p>' . html_entity_decode($article['content']) . '</p>';
    echo '</article>';
}