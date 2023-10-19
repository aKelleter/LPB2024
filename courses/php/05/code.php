<?php
// Les structures conditionnelles imbriquées
$inscrit = true;
$age = 18;

if($inscrit){
    echo 'Bienvenue sur notre site !<br>';
    if($age >= 18){
        echo 'Vous êtes majeur et avez accès à l\'ensemble du site<br>';
    }else{
        echo 'Vous êtes mineur et avez un accès restreint au site<br>';
    }
}else{
    echo 'Vous devez vous inscrire pour accéder au site<br>';
}
/*
    (réf : p 74)
    Les opérateurs logiques vont être principalement utilisés avec les conditions puisqu’ils 
    vont nous permettre d’écrire plusieurs comparaisons au sein d’une même condition ou 
    encore d’inverser la valeur logique d’un test. 

    En PHP, nous pouvons utiliser les opérateurs logiques suivants : 

    AND Renvoie true si toutes les comparaisons valent true 
    &&  Renvoie true si toutes les comparaisons valent true 
    OR  Renvoie true si une des comparaisons vaut true 
    ||  Renvoie true si une des comparaisons vaut true 
    XOR Renvoie true si une des comparaisons exactement vaut true 
    !   Renvoie true si la comparaison vaut false (et inversement) 

    Comme vous pouvez le constater, les opérateurs logiques « ET » et « OU » peuvent 
    s’écrire de deux façons différentes : soit avec les mots clefs AND et OR, soit avec les 
    signes && et ||. 
*/

// Utilisation des opérateurs logiques avec les conditions 
echo '---------------------------<br>';

// Déclaration et initialisation de constantes
const PMIN = 100;
const PMAX = 300;

// Déclaration et initialisation de variables
$puissanceVehicule = 150;
$puissanceVehicule2 = 320;
$puissanceVehicule3 = 80;

// Avec &&

//                     (TRUE)
//    (true)                &&              (true) 
if(($puissanceVehicule > PMIN) && ($puissanceVehicule < PMAX)){
    echo 'La voiture est puissante<br>';
}

// Avec AND
if($puissanceVehicule2 >= PMIN AND $puissanceVehicule2 > PMAX){
    echo 'La voiture est très puissante<br>';
}


// Avec ||
//                             (TRUE) 
//             (true)           ||                       (false)
//              (true)        ||             ( false        &&           true)
if($puissanceVehicule3 < PMIN || ($puissanceVehicule3 > PMIN && $puissanceVehicule3 < 120)){
    echo 'La voiture est raisonnable en terme de puissance <br>';
}

// Avec OR
if($puissanceVehicule3 < PMIN OR ($puissanceVehicule3 > PMIN AND $puissanceVehicule3 < 120)){
    echo 'La voiture est raisonnable en terme de puissance <br>';
}

// Avec XOR
if($puissanceVehicule3 < PMIN XOR $puissanceVehicule3 == 80){
    echo 'La voiture est raisonnable en terme de puissance <br>';
}else{
    echo 'Effet XOR : 1 seule condition sur true pas les 2<br>';
}

// Inverser la valeur logique d’une variable, d’une condition ou d’un test 
echo '---------------------------<br>';

$inscrit = true;

// Si on est pas inscrit
if(!$inscrit){
    echo 'Vous devez vous inscrire pour accéder au site<br>';   
}else{
    echo 'Bienvenue sur notre site !<br>';
}

// Les conditions ternaires
// Les structures ternaires vont se présenter sous la forme suivante : 
// test ? code à exécuter si true : code à exécuter si false. 
echo '---------------------------<br>';

$x = 4;

if($x >= 0){
    echo 'La valeur de $x est positive<br>';
}else{
    echo 'La valeur de $x est négative<br>';
}

// Avec une condition ternaire
echo ($x >= 0) ? 'La valeur de $x est positive<br>' : 'La valeur de $x est négative<br>';

// On peut omettre la partie centrale de l'opérateut ternaire, si besoin est
echo $x >=0 ?: '$x est négatif<br>';
echo '<br>';
/*
    // Equivalent à :
    if($x >= 0){
        echo ($x >= 0).'<br>';
    }else{
        echo 'La valeur de $x est négative<br>';
    }
 */

// L'opérateur fusion null
// L'opérateur fusion null est un opérateur de comparaison qui va nous permettre de tester si une variable est null ou non.
// Cet opérateur (??) utilise la syntaxe suivante : test ?? code à renvoyer si le résultat du test est NULL. 
echo '---------------------------<br>';
$a = null;
$b = 5;

echo $a ?? $b; // $a est-elle == à null alors affiche la valeur de $b (5)
echo '<br>';

// Autre exemple
/*
  On va généralement utiliser cet opérateur pour tester si une variable contient quelque chose ou pas et, 
  dans le cas où la variable est vide, lui faire stocker une valeur. 
 */

 $x = 4;
 $y = null;
 $z;    

 echo '-----------------<br>';
 $resultx = $x ?? 'null';
 $resulty = $y ?? 'null';
 $resultz = $z ?? 'null';

 print $resultx.'<br>'.$resulty.'<br>'.$resultz.'<br>';