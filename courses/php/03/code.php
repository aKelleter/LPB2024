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

    /*
        L’ordre de priorité des opérations, celui-ci va être le même qu’en mathématiques : 
        l’élévation à la puissance va être prioritaire sur les autres opérations, 
        la multiplication, la division et le modulo vont avoir le même ordre de priorité et 
        sont prioritaires sur l’addition et la soustraction qui ont également le même niveau de priorité. 

        Si deux opérateurs ont le même ordre de priorité, alors c’est leur sens d’association qui va décider du résultat.
        Pour les opérateurs arithmétiques, le sens d’association correspond à l’ordre de leur écriture à l’exception de 
        l’élévation à la puissance qui sera calculée en partant de la fin. 

        Nous pouvons forcer l’ordre de priorité en utilisant des couples de parenthèses () 
        pour indiquer qu’une opération doit se faire avant toutes les autres
    */
    echo '<div class="lpb-inter">Ordre de priorité des opérations</div>';

    echo 2 + 3 * 4 . '<br>';            // 14
    echo (2 + 3) * 4 . '<br>';          // 20
    echo 2 ** 3 - 4 * 4 / 8 . '<br>';   // 6 

    // !!! https://www.php.net/manual/fr/language.operators.precedence.php !!!

    // Les opérateurs d'affectation et les opérateurs combinés
    // = Affectation
    /*
        .=  Concatène puis affecte le résultat 
        +=  Additionne puis affecte le résultat 
        -=  Soustrait puis affecte le résultat 
        *=  Multiplie puis affecte le résultat 
        /=  Divise puis affecte le résultat 
        %=  Calcule le modulo puis affecte le résultat 
        **= Élève à la puissance puis affecte le résultat 
    */

?>
    