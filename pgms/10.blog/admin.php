
<?php
    require_once('conf.php');

    // Redirection vers la page de login si l'utilisateur n'est pas connecté
    if (!$_SESSION['IDENTIFY']) {
        header('Location: login.php');
    }

    $msg = null;
    $status = null;

    // Connexion à la base de données
    $conn = connectDB(SERVER_NAME, USER_NAME, USER_PWD, DB_NAME);
    
    // Vérifie met à jour un article
    if(isset($_POST['form']) && $_POST['form'] == 'update') {
         $datas = $_POST;
         $status = updateArticleDB($conn, $datas);
         //DEBUG// disp_ar($status, 'STATUS', 'VD');

    // Vérifie si on ajoute un article
    }elseif(isset($_POST['form']) && $_POST['form'] == 'add'){    
        $datas = $_POST;
        $status = addArticleDB($conn, $datas);
        //DEBUG// disp_ar($status, 'STATUS', 'VD');
    
    // Vérifie si on supprime un article    
    }elseif(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $status = deleteArticleDB($conn, $id);
        //DEBUG// disp_ar($status, 'STATUS', 'VD');
    }    
   
    // Traitements des status de retour des fonctions et affichage des messages correspondants
    if($status) {
         $msg = '<div class="alert alert-success text-center" role="alert">Action effectuée avec succès</div>';
         header('refresh:3;url=admin.php');
    }elseif($status === false) {
         $msg = '<div class="alert alert-danger text-center" role="alert">Erreur lors de la l\'action</div>';
         header('refresh:3;url=admin.php');
    }

    // Récupérer des données de notre table articles
    $article = getAllArticlesDB($conn);

?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>My Blog : Administration</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-5">My Blog</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">   
                <h1 class="mb-5 text-primary">Administration</h1>
                <?php displayNavigation(); ?>                
                <?php
                    // Affichage du message de confirmation
                    echo (isset($msg))? $msg : null; 
                    // Affichage propre des données de la table articles
                    displayArticles_ADMIN($article);
                ?>
            </div>
        </div>
    </div>
</body>
</html>