<?php

// ----------------------------------
// Mon premier vrai programme en PHP
// ----------------------------------

// --------------------------------------------------------
// PASSER LES DONNEES A MON SCRIPT PHP PAR L'URL AVEC $_GET
// --------------------------------------------------------

// if(!empty($_GET['nombre']) && is_numeric($_GET['nombre'])){

if(!empty($_GET['nombre'])){
    
    // On stocke la valeur de $_GET['nombre'] dans une variable $nbre pour plus de lisibilité/sécurité 
    $nbre = $_GET['nombre'];

    // On affiche sa valeur
    echo 'Le nombre reçu est : ' . $nbre;

    // On vérifie si le nombre est pair ou impair
    if($nbre % 2 == 0){
        echo '<br>Le nombre est pair';
    } else {
        echo '<br>Le nombre est impair';        
    }

}else{
    echo 'Le script ne reçoit pas de nombre';
}