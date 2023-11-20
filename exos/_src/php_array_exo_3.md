```php
<?php
    
/**
 * Calculer la moyenne d'un tableau de notes avec l'aide d'une boucle
 *  php\Array\exo_3\array_3
 */   
    
// 1. Créer un tableau rempli avec 3 notes
$tabNotes = array (12.5 , 9 , 11 , 7 , 12.5);

// 2. Déclarer et intialiser une variable pour enregistrer la somme
$somme = 0;

// 3. Paracourir le tableau avec une boucle et incrémenter la variable qui stock la somme
for ($i = 0; $i < count($tabNotes); $i ++)
{
 	$somme= $somme + $tabNotes[$i];
}

// Calculer et afficher la moyenne
$moyenne = $somme / count($tabNotes);
echo '<p>La moyenne vaut :'. $moyenne .'</p>';

?>
```

