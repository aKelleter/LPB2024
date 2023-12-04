<?php
     // Ouverture de la session
     session_start();
     if (!isset($_SESSION['IDENTIFY'])) {
         $_SESSION['IDENTIFY'] = false;
     }
       

    // Définition des constantes de connexion sur un serveur externe
    const SERVER_NAME = '94.176.233.50';
    const USER_NAME = 'ifapme';
    const USER_PWD = 'ifapme+*;';
    const DB_NAME = 'blog';
    const DEBUG = false;

    require_once('fct.php');