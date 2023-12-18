<?php
    // Constantes de l'application
    const APP_NAME = "SuperBlog";
    const APP_VERSION = 'v0.1.4';
    const APP_UPDATED = '18-12-2023 16:47';
    const APP_AUTHOR = 'Joyeuses Fêtes';

    // Ouverture de la session et initialisation de la variable $_SESSION['IDENTIFY']
    session_name(APP_NAME);
    session_start();
    if (!isset($_SESSION['IDENTIFY'])) {
        $_SESSION['IDENTIFY'] = false;
    }
    
    // Constante d'activation/désactivation du mode DEBUG
    const DEBUG = false;

    // Charge les credentials de connexion à la DB
    require_once('conf/conf-db.php');

    // Chargement des fichiers de fonctions
    require_once('app/functions/fct-db.php');
    require_once('app/functions/fct-ui.php');
    require_once('app/functions/fct-tools.php');

    // Instancier un objet de connexion
    $conn = connectDB(SERVER_NAME, USER_NAME, USER_PWD, DB_NAME);



    
    