<?php
    require_once('conf.php');

    // Redirection vers la page de login si l'utilisateur n'est pas connecté
    if (!$_SESSION['IDENTIFY']) {
        header('Location: login.php');
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
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h1 class="mb-3 text-primary">Ajouter un article</h1>   
                <hr>
                <?php displayNavigation(); ?>             
                <form action="admin.php" method="post">                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="title" name="title" value="">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Contenu</label>
                        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                    </div>
                    <input type="hidden" id="form" name="form" value="add">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </div>
    </div>
</body>
</html>