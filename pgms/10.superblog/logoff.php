<?php

    // Script de déconnexion
    unset($_SESSION);
    session_destroy();
    session_start();
    $_SESSION['IDENTIFY'] = false;
    header('Location: index.php');
