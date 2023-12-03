<?php
    require_once('conf.php');

    // Connexion à la base de données
    $conn = connectDB(SERVER_NAME, USER_NAME, USER_PWD, DB_NAME);

    // Récupérer des données de notre table articles
    $article = getAllArticlesDB($conn);
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
    <title>My Blog</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-5">My Blog</h1>
                <?php displayNavigation(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php
                    // Affichage propre des données de la table articles
                    displayArticles($article);
                ?>
            </div>
        </div>
    </div>
</body>
</html>