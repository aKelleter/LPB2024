<?php

// ---------------------------------------------------
// COMMENT FAIRE PASSER DES DONNEES A MON SCRIPT PHP ?
// AVEC LA METHODE GET
// ---------------------------------------------------

// Si $_GET (variable superglobale (PHP)) n'est pas vide alors affiche moi le contenu de $_GET
// Info sur la fonction empty : https://www.php.net/manual/fr/function.empty
if(!empty($_GET)){
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
}

if(!empty($_GET['nombre'])){
    
    // On stocke la valeur de $_GET['nombre'] dans une variable $nbre pour plus de lisibilité/sécurité 
    $nbre = $_GET['nombre'];

    echo 'Le nombre est : ' . $_GET['nombre'];
    echo '<br>';
    echo 'Le nombre est : ' . $nbre;

    // On vérifie si le nombre est pair ou impair
    if($nbre % 2 == 0){
        echo '<br>Le nombre est pair';
    } else {
        echo '<br>Le nombre est impair';        
    }

}

//----------------------------
// Les tableaux en mode rapide
//----------------------------

// Les tableaux ce sont des variables qui permettent de conserver plusieurs valeurs.

/* 
    $tableau = [1,2,3,4,5,6,7,8,9,10];
    echo '<br>';
    echo '<pre>';
    print_r($tableau);    
    echo '</pre>';

    $tableau2 = [
        "prenom" => "John",
        "nom" => "Doe",
        "age" => 42
    ];
    echo '<br>';
    echo '<pre>';
    print_r($tableau2);    
    echo '</pre>';

    //           0    1    2   3   4    5
    $tableau3 = [1,"deux",true,3,"dix",6.5];echo '<br>';
    echo '<pre>';
    print_r($tableau3);    
    echo '</pre>';
*/

// LA SUITE ICI : ../monscript.php?nombre=1