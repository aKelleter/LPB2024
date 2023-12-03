<?php
    // Ouverture de la session
    session_start();
    $_SESSION['APP'] = 'LPB 2024';

    // Définition des constantes de l'application
    const APP_UPDATE = '03/12/2023 22:25';
    const APP_VERSION = 'v1.13.0';
    const APP_YEAR = '2024';
    
    // Définition des constantes section/répertoires
    const JS = 'javascript';
    const PHP = 'php';
    const TEST = 'tests';
    const PGMS = 'pgms';
    const EXOS = 'exos';

    // Définition des constantes de connexion sur un serveur externe
    const SERVER_NAME = '94.176.233.50';
    const USER_NAME = 'ifapme';
    const USER_PWD = 'ifapme+*;';
    const DB_NAME = 'blog';
    
    // Inclusion des fonctions
    include_once('fct.php');
    