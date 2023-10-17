<?php

// ---------------------------------------------------
// COMMENT TESTER UNE CONDITION ET CONNAITRE SA VALEUR
// ---------------------------------------------------

// Utiliser la fonction var_dump() (pour afficher le type et la valeur d'une variable)

/* 
    $x = 4;
    var_dump($x == 4); // true
    echo($x == "4"); // 1
    
    var_dump($x === 4); // true
    
    var_dump($x === "4"); // false   
    echo($x === "4"); // rien de visible à l'écran
 */


// ---------------------------------------------------
// LES CONDITIONS IF ELSE ET ELSEIF
// ---------------------------------------------------


// IF (only)
/* 
    $x = "4";

    // SI $x > 1
    if($x > 1){
        echo 'La valeur de $x est strictement supérieure à 1 <br>';
    }
    // Autre test : $x > 1 && is_integer($x)

    // Utilité d'un seul test (if) exemple : Tester si la valeur de $x est une chaîne
    if(is_string($x)){
        echo 'La valeur de $x est une string <br>';
    } 
*/

// IF / ELSE
/* 
    $x = 4;

    // SI $x > 1
    if($x > 1){
        echo 'La valeur de $x est strictement supérieure à 1 <br>';
    // !!! SINON DANS TOUS LES AUTRES CAS !!!
    } else {
        echo 'La valeur de $x est inférieure ou égale à 1 <br>';
    }
*/

// IF / ELSEIF / ELSE
/* 
    $x = 2;

    // SI $x > 1
    if($x > 4){
        echo 'La valeur de $x est strictement supérieure à 1 <br>';
    // SINON SI $x == 4 (second test)    
    }elseif($x == 4){
        echo 'La valeur de $x est égale à 4 <br>';
    // SINON SI $x == 3 (troisième test)
    }elseif($x == 3){
        echo 'La valeur de $x est égale à 3 <br>';
    // !!! SINON DANS TOUS LES AUTRES CAS !!!
    } else {
        echo 'La valeur de $x n\'est pas : >4 / ==4 / ==3 <br>';
    }
*/

// ------------------------------------------------
// LES CONDITIONS ET LES OPERATEURS DE COMPARAISONS
// ------------------------------------------------

/*
    // CONDITION SIMPLE avec la valeur d'une variable
    $x = 4;

    // 4 ==  true ? et 
    // avec 0 et 
    // avec une string
    // avec float
    // avec un booléen

    if($x)
        echo 'true';
    else
        echo 'false';
*/

/* 
    // CONDITION AVEC UNE VARIABLE == true
    $isConnected = true; 

    if($isConnected)
        echo 'Vous êtes connecté';
    else
        echo 'Vous n\'êtes pas connecté'; 
*/

/*
    // CONDITION AVEC LES OPEARATEURS DE COMPARAISONS  == > < >= <=
    $x = 4;
    if($x == 4 )
        echo 'true';
    else
        echo 'false';
*/

/* 
    // INVERSION CONDITION  avec !
    $x = 3;

    // N'est pas >= 4 donc  == à .. -1 0 1 2 3 
    if(!($x >= 4))
        echo 'true';
    else
        echo 'false';
*/

/* 
    // INVERSION CONDITION  avec == false
    $x = 3;

    // N'est pas >= 4 donc  == à .. -1 0 1 2 3 
    if(($x >= 4) == false)
        echo 'true';
    else
        echo 'false';
*/

// -------------------------
// LES CONDITIONS IMBRIQUEES
// -------------------------

// Imaginons un jeu de rôle avec les variables suivantes
/* 
    $force = 5;
    $defense = 10;

    // SI $force > 10       
    if($force > 10){
        echo 'Vous êtes très fort <br>';
        if($defense > 10)
            echo 'Vous êtes très fort et très défensif <br>';
    // SINON SI $force > 5 
    }elseif($force > 5){
        echo 'Vous êtes fort <br>';
        if($defense > 5)
            echo 'Vous êtes fort et défensif <br>';
    // SINON SI $force > 2
    }elseif($force > 2){
        echo 'Vous êtes faible <br>';
        if($defense > 2)
            echo 'Vous êtes faible et défensif <br>';
    // SINON    
    }else{
        echo 'Vous êtes très faible <br>';
        echo 'Vous êtes très faible et peu défensif <br>';
    }          
*/