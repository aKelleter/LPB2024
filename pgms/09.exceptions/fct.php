<?php

/**
 * ******************************
 * CONFIGURATION DE L'APPLICATION
 * ******************************
 */
const DEBUG = false;

/**
 * **************************
 * FONCTIONS DE L'APPLICATION
 * **************************
 */
// Fonction de division
function division($a, $b) {
    
    // Test si le second nombre est égal à 0
    if($b == 0) {
        throw new Exception('Division par zéro impossible !');
    }

    // Test si les valeurs sont numériques
    if(!is_numeric($a) || !is_numeric($b))
    {
        throw new Exception('Les valeurs saisies doivent être des nombres !');
    }


    return $a / $b;
}

// Retourne une erreur formatée
function createError($e) {

    $string = '<div style="color:red;">Erreur lors de la division<br>';
    $string .= $e->getMessage() . '<br>';
    (DEBUG)? $string .= 'Code d\'erreur : ' . $e->getCode() . '<br>' : $string .= '';
    (DEBUG)? $string .= 'Fichier : ' . $e->getFile() . '<br>' : $string .= '';
    $string .= '</div>';

    return $string;
}