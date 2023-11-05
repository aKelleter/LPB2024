<?php
/*
    LES FONCTIONS (réf : p106 )

    Une fonction est un bloc de code identifié (avec un nom unique) qui peut être appelé n'importe où dans le script.
    Et qui exécute une série d'instructions. Il y a au préalable une phase de déclaration de la fonction, puis une phase d'exécution.
    Une fonction peut recevoir des arguments (facultatif) et retourner une valeur (facultatif).

    Il existe des fonctions internes au langage (PHP, ex.: gettype()) et des fonctions utilisateur (définies par le développeur).

    Les fonctions nous permettent de répéter des traitements sans avoir à réécrire le code à chaque fois.
    Les fonctions sont donc un gain de temps et de place, elles nous permettent de mieux organiser notre code.

    Le nom des fonctions va suivre les mêmes règles que celui des variables, à savoir qu’il devra commencer par une lettre ou un underscore 
    et ne devra pas être un nom déjà pris par le langage PHP (comme le nom d’une fonction déjà existante par exemple). 

    ATTENTION : A la différence des variables le nom des fonctions est insensible à la casse. 
    Cela signifie que l’utilisation de majuscules et des minuscules ne servent pas à différencier une fonction d’une autre. 
*/

/************************************************************************ *
 * Exemple de fonctions simples ***************************************** *
 * ********************************************************************** */

 /*
 * Affichage de la chaines de caractères "Bonjour !"
 */

// Déclaration de la fonction
// Utilisation du mot clé "function" suivi du "nom de la fonction", des "parenthèses" et des "accolades"
function bonjour() {
    echo 'Bonjour !<br>';
}

bonjour(); // 1er appel de la fonction
bonjour(); // 2eme appel de la fonction
bonjour(); // 3eme appel de la fonction

// -----------------------------

// Déclarer et appeler une fonction qui va afficher un séparateur à l'écran
function sepa(){
    echo '-----------------------------<br>';
}

sepa();

 