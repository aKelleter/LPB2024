<?php
    session_start();
    $_SESSION['APP'] = 'LPB 2024';

    // Définition des constantes
    const APP_UPDATE = '03/12/2023 16:10';

    const APP_VERSION = 'v1.12.4';
    const APP_YEAR = '2024';
    
    const JS = 'javascript';
    const PHP = 'php';
    const TEST = 'tests';
    const PGMS = 'pgms';
    const EXOS = 'exos';
    
    // Inclusion des fonctions
    include_once('fct.php');
    