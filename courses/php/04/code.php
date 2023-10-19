<?php
/*
    Les structures conditionnelles, les conditions

    Pour mettre en place des strucutures conditionnelles, nous allons souvent utiliser les conditions suivantes : 
    • La condition if (si) ; 
    • La condition if... else (si... sinon) ; 
    • La condition if... elseif... else (si... sinon si... sinon). 

    Nous allons comparer la valeur d’une variable à autre valeur 
    Pour comparer des valeurs, nous allons devoir utiliser des opérateurs de comparaison
    
    Les différents opérateurs de comparaison :

    ==      Permet de tester l’égalité sur les valeurs 
    ===     Permet de tester l’égalité en termes de valeurs et de types 
    !=      Permet de tester la différence en valeurs 
    <>      Permet également de tester la différence en valeurs 
    !==     Permet de tester la différence en valeurs ou en types 
    <       Permet de tester si une valeur est strictement inférieure à une autre 
    >       Permet de tester si une valeur est strictement supérieure à une autre 
    =<      Permet de tester si une valeur est inférieure ou égale à une autre 
    =>      Permet de tester si une valeur est supérieure ou égale à une autre 
*/

$x = 4;

var_dump($x == 4);      // true
echo '<br>';

var_dump($x > 7);       // false
echo '<br>';

var_dump($x == "4");    // true
echo '<br>';

var_dump($x === "4");   // false
echo '<br>';

var_dump($x != "4");    // false
echo '<br>';


var_dump($x !== "4");   // true
echo '<br>';

// Pour info : Les opérateurs de comparaison ternaire ? :, spaceship <=>  et fusion null ?? (nous aborderons ces opérateurs plus tard)

// Nos premières conditions

// La condition if (si...) seule
$x = 4;
$y = 2;

//  4 > 1  => true
if($x < 1)
    echo 'La valeur de $x est strictement supérieure à 1 <br>';


if($x == $y){
    echo '$x et $y contienne la même valeur<br>';
}

// Inversion de la condition
if($x <= 1 == false){
    echo 'La valeur de $x est strictement supérieure à 1 <br>';
}

// La condition if... else (si... sinon)
$age = 18;

if($age >= 18){
    echo 'Vous êtes majeur (1)<br>';
}else{ // Siginifie, dans tous le autres cas
    echo 'Vous êtes mineur (1)<br>';
}   

// La condition if... elseif... else (si... sinon si... sinon)
$age_personnage = 8;

if($age_personnage < 18){
    echo 'Vous êtes mineur<br>';
}elseif($age_personnage == 18){
    echo 'Vous êtes tout juste majeur<br>';
}else{
    echo 'Vous êtes majeur<br>';
}  

// On peut placer autant de elseif que souhaité, en fonction de vos besoins (de la logique de programmation)
$age_pilote = 30;

if($age_pilote < 18){
    echo 'Vous êtes un pilote mineur<br>';
}elseif($age_pilote == 18){
    echo 'Vous êtes un pilote tout juste majeur<br>';
}elseif($age_pilote >= 25){
    echo 'Vous êtes un pilote dans la force de l\'âge<br>';
}elseif($age_pilote >= 40){
    echo 'Vous êtesun pilote expérimlenté<br>';
}else{
    echo 'Vous êtes un vieux pilote<br>';
} 

/*
    Notez que dans le cas où plusieurs elseif possèdent un test qui va être évalué à true, seul le code du premier elseif rencontré sera exécuté. 
    En effet, dès qu’un test va être validé, le PHP va ignorer les tests suivants. 
    Notez également qu’on devra toujours obligatoirement terminer notre condition if...elseif...else avec un else qui servira à gérer toutes 
    les issues (ou les cas) non pris en charge par le if ou par les elseif. 
*/
             