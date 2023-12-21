<?php
    require_once('settings.php');
    
    // Script de déconnexion
    unset($_SESSION);
    setcookie(session_name(), '', time()-3600);
    session_destroy();

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
    $_SESSION['IDENTIFY'] = false;

    // Redirection vers la page d'accueil
    header('Location: index.php');