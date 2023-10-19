<?php include_once('conf.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon-180x180.png" />

    <link href="assets/css/styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <title>Home : LPB 2024</title>
</head>
<body>
    <div class="container-fluid">    
        <div class="row mt-2 text-center">    
            <div class="col-md-12 mt-2 header-site"> 
                <h1 class="title-h1">
                    <img src="assets/img/logo.svg" alt="logo" class="lpb-logo"><br>
                    <span class="lpb-acronym">L</span>angages de <span class="lpb-acronym">P</span>rogrammation : Les <span class="lpb-acronym">B</span>ases (2024)
                </h1>
                <p>Page d'acceuil du cours sur les bases de la programmation en PHP et JAVASCRIPT</p>
            </div>    
        </div>
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">                
                <div class="text-center">
                    <h2 class="lpb-courses">.. Les tools ..</h2>             
                    <a href="courses/php/" class="btn btn-outline-success link" role="button">Le PHP</a></li>
                    <a href="courses/javascript/" class="btn btn-outline-success link" role="button">Le JAVASCRIPT</a>
                    <a href="courses/tests/" class="btn btn-outline-success link" role="button">Tests</a>
                    <a href="pgms/" class="btn btn-outline-success link" role="button">PGM's</a>
                </div>              
            </div>
            <div class="col-3"></div>
        </div>   
        <footer>        
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p class="text-footer"><?php echo getHtmlFooter(APP_YEAR, APP_UPDATE, APP_VERSION); ?></p>
                </div>
            </div>        
        </footer> 
    </div>   
</body>
</html>