<?php
    require_once('conf.php');
    
    $msg = null;
    $article = null;

    // Connexion à la base de données
    $conn = connectDB(SERVER_NAME, USER_NAME, USER_PWD, DB_NAME);

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        // Récupérer l'article spécifié par l'ID
        $article = getArticleByIDDB($conn, $id);
        //DEBUG// disp_ar($article, 'STATUS', 'VD');
    }else{
        $msg = '<div class="alert alert-danger text-center" role="alert">Il n\'y a pas d\'article à afficher</div>';
    }    

   
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
    <title><?php echo APP_NAME;?></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-5 appTitle"><?php echo APP_NAME;?></h1>
                <?php                    
                    displayNavigation();                  
                    // Affichage du message si existe
                    echo (isset($msg))? $msg : null; 
                ?>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 ">
                <?php
                    // Affichage de l'article
                    if(isset($article))
                        displayArticle($article);   
                ?>
            </div>
        </div>
    </div>
</body>
</html>