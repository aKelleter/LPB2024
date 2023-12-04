<?php
    // Ouverture de la session
    session_start();
    if (!isset($_SESSION['IDENTIFY'])) {
        $_SESSION['IDENTIFY'] = false;
    }
     
    const APP_NAME = 'Techno 2:40 AM';
    const APP_VERSION = 'v0.6.0';
    const APP_UPDATED = '04-12-2023 16:41';
    const APP_AUTHOR = 'Kentaro';
    const DEBUG = false;

    // Définition des constantes de connexion sur un serveur externe
    const SERVER_NAME = '94.176.233.50';
    const USER_NAME = 'ifapme';
    const USER_PWD = 'ifapme+*;';
    const DB_NAME = 'blog';
  

    require_once('fct.php');