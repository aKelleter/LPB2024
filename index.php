<?php include_once('conf.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <title>Home : LPB 2024</title>
</head>
<body>
    <div class="container-fluid">    
        <div class="row mt-2 text-center">    
            <div class="col-md-12 mt-2 header-site"> 
                <h1 class="title-h1">
                    <img src="assets/img/logo.svg" alt="logo" class="lpb-logo">
                    Mini-App<br> Langages de programmation : Les bases (LPB 2024)
                </h1>
                <p>Page d'acceuil du cours sur les bases de la programmation en PHP et JAVASCRIPT</p>
            </div>    
        </div>
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Sommaire</h2>
                <ol>
                    <li><a href="courses/php/" class="link">Les scripts PHP</a></li>
                    <li><a href="courses/javascript/" class="link">Les scripts JAVASCRIPT</a></li>
                </ol>
            </div>
            <div class="col-3"></div>
        </div>   
        <footer>        
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p class="text-footer"><?php echo displayFooter(APP_YEAR, APP_UPDATE, APP_VERSION); ?></p>
                </div>
            </div>        
        </footer> 
    </div>   
</body>
</html>