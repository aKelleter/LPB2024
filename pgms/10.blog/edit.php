<?php
    require_once('conf.php');

    // Redirection vers la page de login si l'utilisateur n'est pas connecté
    if (!$_SESSION['IDENTIFY']) {
        header('Location: login.php');
    }

    // Connexion à la base de données
    $conn = connectDB(SERVER_NAME, USER_NAME, USER_PWD, DB_NAME);

    // Récupérer des données de notre table articles
    $article = getArticleByIDDB($conn);
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>My Blog</title>
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
                <h1 class="mb-5 text-primary">Edition</h1>   
                <?php displayNavigation(); ?>               
                <form action="admin.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $article['title']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Contenu</label>
                        <textarea class="form-control" id="content" name="content" rows="3"><?php echo $article['content']; ?></textarea>
                    </div>
                    <input type="hidden" id="form" name="form" value="update">
                    <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </div>
    </div>
</body>
</html>