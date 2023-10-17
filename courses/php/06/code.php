<?php


    /*
        SWITCH CASE

        En cela, l’instruction switch représente une alternative à l’utilisation d’un if…elseif…else mais qui est plus limitante
        puisque le switch ne va gérer que l’égalité comme type de comparaison. En dehors de cela, on va pouvoir utiliser un switch
        ou une condition « classique » de manière équivalente en PHP. 
        Il n’y a donc pas de réel intérêt à utiliser le switch plutôt qu’un if…elseif…else. 
        Cependant, dans certains cas, utiliser un switch peut rendre le code plus clair et légèrement plus rapide dans son exécution.
    */

    // Exemple d'utilisation de la structure switch case
    $variable = 'php';
    
    switch ($variable) {
        case 'php':
            echo 'Vous avez choisi PHP<br>';
            break;
        case 'javascript':
            echo 'Vous avez choisi Javascript<br>';
            break;

        default:
            echo 'Vous n\'avez pas choisi de langage<br>';    
            break;
    }

    // Alternative avec if elseif else
    if($variable == 'php'){
        echo 'Vous avez choisi PHP<br>';
    }elseif($variable == 'javascript'){
        echo 'Vous avez choisi Javascript<br>';
    }else{
        echo 'Vous n\'avez pas choisi de langage<br>';
    }
