<?php
    session_start();
    $_SESSION['APP'] = 'LPB 2024';

    // Définition des constantes
    const APP_UPDATE = '27/11/2023 16:45';

    const APP_VERSION = 'v1.12.0';
    const APP_YEAR = '2024';
    
    const JS = 'javascript';
    const PHP = 'php';
    const TEST = 'tests';
    const PGMS = 'pgms';
    const EXOS = 'exos';
    
    // Inclusion des fonctions
    include_once('fct.php');
    