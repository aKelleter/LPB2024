<?php
    // Constantes de l'application
    const APP_NAME = "SuperBlog LPB";
    const APP_VERSION = 'v0.5.2';
    const APP_UPDATED = '21-12-2023 16:30';
    const APP_AUTHOR = 'Joyeuses Fêtes';
       
    // Constante d'activation/désactivation du mode DEBUG
    const DEBUG = false;

    // Charge les credentials de connexion à la DB
    require_once('conf/conf-db.php');

    // Configuration de la session / du cookie de session
    $name = session_name(str_replace(' ', '', APP_NAME).'_session');
    $domain = $_SERVER['HTTP_HOST'];
    $time = time() + 3600; // 3600 sec = 1 heure

    setcookie($name, APP_NAME, [
        'expires' => $time,
        'path' => '/',
        'domain' => $domain,
        'secure' => false,
        'httponly' => true,
        'samesite' => 'strict',
    ]);

    // Lancement de la session
    session_start();
    
    // Initialisation de la variable $_SESSION['IDENTIFY'] à false (pas d'utilisateur connecté)
    if (!isset($_SESSION['IDENTIFY'])) {
        $_SESSION['IDENTIFY'] = false;
    }
   
    // Chargement des fichiers de fonctions
    require_once('app/functions/fct-db.php');
    require_once('app/functions/fct-ui.php');
    require_once('app/functions/fct-tools.php');

    // Instancier un objet de connexion
    $conn = connectDB(SERVER_NAME, USER_NAME, USER_PWD, DB_NAME);



    
    