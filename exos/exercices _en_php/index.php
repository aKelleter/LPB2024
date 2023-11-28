<?php include_once('../../conf.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/img/favicon.ico">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="apple-touch-icon" href="../../assets/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="../../assets/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="../../assets/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="../../assets/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="../../assets/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="../../assets/img/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/apple-touch-icon-180x180.png" />

    <link rel=stylesheet href="../../vendors/codemirror/lib/codemirror.css">
    <link rel=stylesheet href="../../vendors/codemirror/addon/display/fullscreen.css">
    <link rel=stylesheet href="../../vendors/codemirror/theme/material.css">

    <link href="../../assets/css/styles.css" rel="stylesheet">

    <title>Les exercices en PHP</title>
</head>
<body id="top">
    <div class="container-fluid">        
        <div class="row mt-2 text-center">    
            <div class="col-md-12 mt-2 header-site">
                <h1 class="title-h1">
                    <img src="../../assets/img/logo.svg" alt="logo" class="lpb-logo">
                    Les exercices en PHP
                </h1>
                <p>Des exercices PHP pour vous entrainer et améliorer votre niveau</p>
                <?php 
                    // Afficher le menu principal
                    echo getHtmlMainMenu('../../', 'exos_php'); 
                ?>  
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-3"></div>           
            <div class="col-md-6">
                <h2>Liste des exercices</h2>
                <?php
                    // Afficher la liste des cours JAVASCRIPT
                    echo getHtmlPgmList(listProgrammes());                     
                ?>
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