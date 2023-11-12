<?php

/**
 * Fonction qui affiche la chaîne Bonjour
 */
function bonjour()
{
    echo 'Bonjour !<br>';
}

/**
 * 
 */
function bonjourNoms($nom, $nom2) {
    echo 'Bonjour ' . $nom . ' ' . $nom2 . ' !<br>';
}

/**
 * Fonction qui affiche un séparateur
 */
function separateur(){
    echo '-----------------------------<br>';
}

/**
 * Fonction qui affiche l'addition des nombres passés en tant que 
 * paramètres
 */
function addition($nb1, $nb2)
{
    echo $nb1 . ' + ' . $nb2 . ' = ' . ($nb1 + $nb2) . '<br>';
}