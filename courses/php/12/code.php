<?php
declare(strict_types = 1);

/**
 * Le retour de fonction avec la structure return (réf : p122)
 * 
 * Jusqu’à présent, le seul moyen que nous avions d’avoir accès au résultat d’une fonction 
 * qu’on avait créée était d’afficher ce résultat en utilisant un "echo" dans la définition 
 * de la fonction lors de sa création. 
 * 
 * Le problème de cette méthode est que nous n’avons aucun contrôle sur le résultat de la 
 * fonction : dès que l’on appelle la fonction en question, le echo à l’intérieur est 
 * exécuté et le résultat est immédiatement affiché. 
 * La structure de contrôle return va nous permettre de demander à une fonction de retourner
 *  un résultat qu’on va ensuite pouvoir stocker dans une variable ou autre pour le manipuler.
 *  
 * Cela va être utile dans de nombreux cas puisqu’on voudra souvent récupérer le résultat 
 * d’une fonction pour effectuer d’autres calculs ou d’autres opérations avec celui-ci dans 
 * un script plutôt que simplement l’afficher. 
 * 
 * Attention cependant : l’instruction return va terminer l’exécution d’une fonction, 
 * ce qui signifie qu’on placera généralement cette instruction en fin de fonction puisque 
 * le code suivant une instruction return dans une fonction ne sera jamais lu ni exécuté. 
 * Pour illustrer cela, créons deux fonctions dont le rôle est de multiplier deux nombres 
 * entre eux et de renvoyer le résultat de la multiplication. La première fonction va 
 * utiliser un echo, la seconde utilisera plutôt return. 
 * 
 */
 
 // Avant... nous affichions le résultat de notre fonction
 function _addition ($nb1 , $nb2)
 {
    echo $nb1 + $nb2;
 }
 _addition(1, 1);
 br();

 // -------------------------------------------------------------------------

 // Remarquez ici le ": float" qui force type de retour de la fonction à float
 function addition (float $nb1 , float $nb2) : float
 {
    return $nb1 + $nb2;
 }

 sep();
 // Rien n'est affiché à l'écran
 addition(8, 6);
 sep();
 // Affiche un message concaténé au retour de la fonction
 echo'Retour de la fonction addition : ' . addition(8, 6.5); br();
 sep();
 // Affiche le retour de la fonction
 echo addition(3, 40);
 br();
 sep();