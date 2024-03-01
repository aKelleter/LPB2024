<?php include_once('../../conf.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="apple-touch-icon" href="../../assets/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="../../assets/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="../../assets/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="../../assets/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="../../assets/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="../../assets/img/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/apple-touch-icon-180x180.png" />

    <link href="../../assets/css/styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/img/favicon.ico">

    <title>Apprendre les bases du PHP</title>
</head>
<body>
    <div class="container-fluid">        
        <div class="row mt-2 text-center">    
            <div class="col-md-12 mt-2 header-site">
                <h1 class="title-h1">
                    <img src="../../assets/img/logo.svg" alt="logo" class="lpb-logo">
                    Le langage JAVASCRIPT
                </h1>
                <p>Apprentissage du langage PHP à l'aide de scripts</p>               
                <?php 
                    // Afficher le menu principal
                    echo getHtmlMainMenu('../../', 'javascript'); 
                ?>   
            </div>      
        </div>
        <div class="row mt-5">
            <div class="col-md-3"></div>           
            <div class="col-md-6">
                <h2>Sommaire</h2>                

                <ul>
                    <li>
                        <a href="v1/" class="a-sommaire">Le cours</a>
                    </li>                
                    <li>
                        <a href="archives/" class="a-sommaire">L'archive 2023</a>
                    </li>
                </ul>
               
            </div>
            <div class="col-md-3"></div>
        </div>    
        <footer>        
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p class="text-footer"><?php echo getHtmlFooter(APP_YEAR, APP_UPDATE, APP_VERSION, '../../'); ?></p>
                </div>
            </div>        
        </footer> 
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>