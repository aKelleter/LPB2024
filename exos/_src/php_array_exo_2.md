```php
<?php
    
/**
 * Calculer la moyenne d'un tableau de notes
 *  php\Array\exo_2\array_2
 */   
    
// 1. Créer un tableau rempli avec 3 notes
$tabNotes = array (12.5 , 9 , 11);

// 2. Ajouter 2 nouvelles notes à un tableau
$tabNotes[] = 7;
$tabNotes[] = 12.5;

// 3. Calculer la moyenne sans utiliser de boucle (calcul arithmétique)
$somme = $tabNotes[0] + $tabNotes[1] + $tabNotes[2] + $tabNotes[3] + $tabNotes[4];
$moyenne = $somme / 5;

// 4. Afficher la somme totale et la moyenne des notes
echo 'La somme vaut : '. $somme .'<br>';
echo 'La moyenne vaut : '. $moyenne . '<br>';

/*
Evidemment cette solution n’est pas pleinement satisfaisante. En effet, il est rare d’avoir un tableau avec un nombre fixe de valeurs. Les langages de programmation ont des structures qui nous facilite la tâche dans la manipulation d’un tableau, les boucles.
*/

?>
```

