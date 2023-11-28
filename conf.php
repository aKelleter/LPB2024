<?php
    session_start();
    $_SESSION['APP'] = 'LPB 2024';

    // Définition des constantes
    const APP_UPDATE = '28/11/2023 21:15';

    const APP_VERSION = 'v1.12.2';
    const APP_YEAR = '2024';
    
    const JS = 'javascript';
    const PHP = 'php';
    const TEST = 'tests';
    const PGMS = 'pgms';
    const EXOS = 'exos';
    
    // Inclusion des fonctions
    include_once('fct.php');
    