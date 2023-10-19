<?php
/*
    LES BOUCLES (réf : p 91)

    Les boucles vont nous permettre d’exécuter plusieurs fois un bloc de code, 
    c’est-à-dire d’exécuter un code « en boucle » tant qu’une condition donnée est vérifiée. 
    Lorsqu’on code, on va en effet souvent devoir exécuter plusieurs fois un même code. 
    Utiliser une boucle nous permet de n’écrire le code qu’on doit exécuter plusieurs fois qu’une seule fois.

    Nous disposons de quatre boucles différentes en PHP : 
        • La boucle while (« tant que »)  
        • La boucle do… while (« faire… tant que »)  
        • La boucle for (« pour »)  
        • La boucle foreach (« pour chaque »)

    Pour éviter de rester bloqué à l’infini dans une boucle, 
    vous pouvez donc déjà noter qu’il faudra que la condition donnée soit fausse à un moment donné (pour pouvoir sortir de la boucle). 
    Pour que notre condition devienne fausse à un moment, on incrémentera ou on décrémentera la valeur de notre variable à chaque 
    nouveau passage dans la boucle. Voyons immédiatement ce que tout cela signifie.

    Exemple :
    ++$x Pré-incrémentation : incrémente la valeur contenue dans la variable $x, puis retourne la valeur incrémentée 
    $x++ Post-incrémentation : retourne la valeur contenue dans $x avant incrémentation, puis incrémente la valeur de 
    $x --$x Pré-décrémentation : décrémente la valeur contenue dans la variable $x, puis retourne la valeur décrémentée 
    $x-- Post-décrémentation : retourne la valeur contenue dans $x avant décrémentation, puis décrémente la valeur de $x
*/


    $x = 4;
    //Pré-incrémentation

    echo 'Exécution (pré) : ' . ++$x . '<br>'; // 5
    echo 'Valeur de x (pré) : ' . $x . '<br>'; // 5

    echo '<br>';

    $x = 4;
    echo 'Exécution (post) : ' . $x++ . '<br>'; // 4
    echo 'Valeur de x (post) : ' . $x . '<br>'; // 5

    echo '<br>';


// --------------------------------
// LA BOUCLE WHILE (réf : p 94)
// --------------------------------


    // Déclare et initialise le compteur à 0
    $cpt = 0;

    while ($cpt <= 5) {

        // Code à exécuter tant que la condition est vraie
        echo 'Compteur : ' . $cpt . '<br>';

        // Arrivé à la fin de la boucle / traitement on incrémente le compteur
        $cpt++;
    }

    echo '<br>';

// --------------------------------
// LA BOUCLE DO WHILE (réf : p 97)
// --------------------------------

 
    // Déclare et initialise le compteur à 0
    $cpt = 25;

    do {
        
        // Code à exécuter tant que la condition est vraie
        echo 'Compteur : ' . $cpt . '<br>';

        // Arrivé à la fin de la boucle / traitement on incrémente le compteur
        $cpt++;

    } while ($cpt <= 5);

    echo '<br>';

// --------------------------------
// LA BOUCLE FOR (réf : p 98)
// --------------------------------

   
    //     (1)        (2)      (3)
    for ($cpt = 0; $cpt <= 5; $cpt++) {
        echo 'Compteur : ' . $cpt . '<br>';
    }

    // (1) $cpt = 0; // Initialisation du compteur
    // (2) $cpt <= 5; // Condition d'arrêt
    // (3) $cpt++; // Incrémentation du compteur   

    echo '<br>'; 


// --------------------------------
//  LA BOUCLE FOREACH (réf : p 99 - mais plus tard :) )
// --------------------------------

/*
    La boucle PHP foreach est un peu particulière puisqu’elle a été créée pour fonctionner avec des variables tableaux,
    qui sont des variables spéciales que nous n’avons pas encore étudiées.
*/

// --------------------------------
// QUEL TYPE DE BOUCLE UTILISER ?
// --------------------------------

// Si vous avez besoin de parcourir un tableau => une boucle foreach (voir une boucle for)
// Si on connait le nombre de passages nous allons effectuer dans la boucle => boucle for
// Si vous on ne connait pas le nombre de passages a effectuer dans la boucle, mais que votre code a besoin d’effectuer toujours au moins un passage dans la boucle => do…while.
// Si vous on ne connait pas le nombre de passages a effectuer dans la boucle, et qu'il n'est pas nécessaire d'entrer dans la boucle => while.


                                /* ***************************************************************************************** */
                                /*                                                                                           */
                                /*          SI VOUS ETES ARRIVES JUSQU'ICI, TOUTES MES FELICITATIONS ! BRAVO !               */
                                /*                                                                                           */
                                /*       MAIS SURTOUT ET C'EST LE PLUS IMPORTANT, SI CES BASES VOUS SONT ACQUISES            */
                                /*        ALORS LA SUITE DU COURS PEUT COMMENCER ET VOUS SERA D'AUTANT PLUS AISEE            */
                                /*                                                                                           */
                                /*                             PROCHAINEMENT : LES FONCTIONS                                 */
                                /* ***************************************************************************************** */
