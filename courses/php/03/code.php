<?php 
    // Les opérateurs  

    // L'opérateur de concaténation
    // Utilisé pour séparer nos différentes variables des chaines de caractères
    echo '<div class="lpb-inter">L\'opérateur de concaténation: <strong>( . le point) </strong></div>';
    $date = "03/10/2019";
    $heure = "10h30";
    echo "li9:  Nous sommes le " . $date . " et il est " . $heure . "<br>";
    echo 'li10: Nous sommes le ' . $date . ' et il est ' . $heure . '<br>';
    echo "li11: Nous sommes le $date et il est $heure <br>";
    // On préférera cette version
    echo "li13: Nous sommes le {$date} et il est {$heure} <br>";
    
    echo "li15: Le nom de la variable date est \$date et le nom de la variable heure est \$heure <br>";
    echo 'li16: Le nom de la variable date est $date et le nom de la variable heure est $heure <br>';

    // Les opérateurs arithmétiques
    // + Addition
    // - Soustraction
    // * Multiplication
    // / Division
    // % Modulo (reste de la division)
    // ** Exposant (élévation à la puissance)
    echo '<div class="lpb-inter">Les opérateurs arithmétiques:</div>';

    $x = 2;
    $y = 3;
    $z = 4;
    echo 'li30: $x stocke la valeur '.$x.', $y stocke la valeur '.$y.' et $z stocke la valeur '.$z.' <br>';

    echo $x + 1 . '<br>';
    echo $x + $y . '<br>';
    echo $x - $y . '<br>';
    echo $x * $y . '<br>';
    echo $x / $y . '<br>';    
    echo 5 % 3 . '<br>';  
    echo 2 ** 3 . '<br>'; 

    echo '<div class="lpb-inter">Ordre de priorité des opérations</div>';

    echo 2 + 3 * 4 . '<br>';            // 14
    echo (2 + 3) * 4 . '<br>';          // 20
    echo 2 ** 3 - 4 * 4 / 8 . '<br>';   // 6 

?>
    