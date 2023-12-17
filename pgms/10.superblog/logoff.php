<?php
    require_once('settings.php');
    
    // Script de déconnexion
    unset($_SESSION);
    setcookie(session_name(), '', 100);
    session_destroy();

    session_name(APP_NAME);
    session_start();
    $_SESSION['IDENTIFY'] = false;
    header('Location: index.php');