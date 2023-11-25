<?php
declare(strict_types = 1);

 function addNT($a, $b)
 {
    echo 'addNT<br>';
    echo $a . ' + ' . $b . ' = ' . ($a+$b) . '<br>';
 }

 function addTF(float $a, float $b)
 {
    echo 'addTF<br>';
    echo $a . ' + ' . $b . ' = ' . ($a+$b) . '<br>';
 }

 addNT(5,10);
 addNT(5,'15');
 echo '-----------<br>';
 addTF(3, 9);
 // DECOMMENTEZ LA LIGNE CI-DESSOUS POUR AFFICHER L'ERREUR
 // addTF(3,'11');

 //-----------------------------------------------------------

 // Remarquez ici le ": float" qui force type de retour de la fonction à float
 function addition (float $nb1 , float $nb2) : float
 {
    return $nb1 + $nb2;
 }


 // Rien n'est affiché à l'écran
 addition(8, 6);
 

 // Affiche un message concaténé au retour de la fonction
 echo'Retour de la fonction addition : ' . addition(8, 6.5);
 echo '<br>';
 var_dump (gettype(6.5));
 echo '<br>';

 var_dump (gettype(addition(8, 6.5)));

 echo '<br>';

 // Affiche le retour de la fonction
 echo addition(3, 40);


