<?php
    // Exemple d'utilisation de la structure switch case
    $variable = 'php';
    
    switch ($variable) {
        case 'php':
            echo 'Vous avez choisi PHP<br>';
            break;
        case 'javascript':
            echo 'Vous avez choisi Javascript<br>';
            break;

        default:
            echo 'Vous n\'avez pas choisi de langage<br>';    
            break;
    }