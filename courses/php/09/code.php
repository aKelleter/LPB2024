<?php
/**
 * (réf : p109 )
 * 
 * Souvent, les fonctions vont avoir besoin d’informations qui leurs sont externes, 
 * c’est-à-dire d’informations qui ne se situent pas dans la définition de la fonction pour fonctionner correctement. 
 * Par exemple, notre fonction gettype() va avoir besoin qu’on lui fournisse ou qu’on lui « passe » une variable pour pouvoir déterminer son type. 
 * 
 */

/*
 * Addition de 2 nombres 
 */

// Déclaration de la fonction (avec 2 paramètres, 2 nombres en principe)
// Utilisation du mot clé "function" suivi du "nom de la fonction", des "parenthèses" et des "accolades"
function addition($a, $b) {
    // Code à exécuter
    echo $a . ' + ' . $b . ' = ' . ($a + $b) . '<br>';    
}   

// Appel de la fonction (avec 2 arguments, 2 nombres)
// "echo" va afficher le résultat de la fonction addition (ici 8, donc le retour de la fonction addition)
echo addition(5, 3) . '<br>';
sep();

// Les arguments peuvent être des variables
$a = 10;
$b = 5;
echo addition($a, $b) . '<br>';
sep();

function bonjourNom ($nom) {
    echo 'Bonjour ' . $nom . ' !<br>';
}

bonjourNom('Jhon');
sep();




 