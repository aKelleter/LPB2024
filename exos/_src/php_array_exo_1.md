```php
<?php
    
/**
 * Manipulation d'un tableau indexé (numérique)      
 * php\Array\exo_1\array_1
 */
    
// 1. Creer un tableau indexé (numérique) vide
$tabNotes = array();

// 2. Ajouter 2 nouvelles valeurs au tableau
$tabNotes[] = 12.5;
$tabNotes[] = 9;

// 3. Afficher les valeurs
echo 'La valeur à l\'indice 0 est:'. $tabNotes[0];
echo 'La valeur à l\'indice 1 est:'. $tabNotes[1];

// 4. Ajouter 1 autre valeur
$tabNotes[] = 11;

// 5. Changer une valeur, ensuite afficher la nouvelle valeur
$tabNotes [1] = 8;
echo 'La valeur à l\'indice 1 est:'. $tabNotes[1];

?>

```

