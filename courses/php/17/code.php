<?php

/**
 * LES TABLEAUX MULTIDIEMNSIONNELS
 * -------------------------------
 * 
 * Un tableau multidimensionnel est un tableau qui va lui-même contenir d’autres tableaux en valeurs
 * Les « sous » tableaux vont pouvoir être des tableaux numérotés ou des tableaux associatifs ou un mélange des deux. 
 * 
 * Nous ne sommes pas limités dans le nombre de dimensions d’un tableau : le PHP sait tout à fait travailler avec des tableaux à 2, 3, 4, 5… 
 * dimensions. Cependant, il est généralement déconseillé de créer trop de dimensions de tableaux tout simplement car cela rend le code 
 * très vite très peu lisible et très peu compréhensible pour nous autres développeurs. 
 * 
 * Exemple, pour accéder aux valeurs finales d’un tableau à 2 dimensions, nous allons devoir préciser 
 * deux indices : le premier indice permet d’accéder à une valeur (qui est un tableau) du tableau multidimensionnel et le deuxième indice sert 
 * à accéder à une valeur en particulier dans ce sous tableau. 
 * 
 * Pour parcourir toutes les valeurs d’un tableau multidimensionnel (et éventuellement les afficher ou effectuer d’autres opérations dessus), 
 * la meilleure manière de faire va être d’utiliser plusieurs boucles foreach imbriquées. 
 * 
 */

// Déclarer un tableau multidimensionnel
$profil_joueur = array(
    'nom' => 'Doe',
    'prenom' => 'John',
    'email' => 'johndoe@yopmail.com',
    'age' => 35,
    'sexe' => 'M',
    'taille' => 1.75,
    'poids' => 75,
    'couleur_yeux' => 'marron',
    'couleur_cheveux' => 'brun',
    'nationalite' => 'française',
    'profession' => 'informaticien',
    'hobbies' => ['informatique', 'musique', 'sport'],
    'adresse' => [
        'rue' => 'rue de la paix',
        'numero' => 1,
        'code_postal' => '75000',
        'ville' => 'Paris',
        'pays' => 'France'
    ],
    'suite' =>[ 
        [1,2,3,4], 
        [5,6,7,8] 
    ],
    'date_naissance' => '1985-01-01'
);

// Afficher l'entièreté du tableau $profil_joueur
echo "AFFICHAGE DU TABLEAU \$profil_joueur";
br();
echo ln(__LINE__); disp_ar($profil_joueur);

/**
 * *******************************************************************************************
 * Accéder aux données d'un tableau mumltidimensionnel
 * *******************************************************************************************
 */

echo "ACCEDER AUX ELEMENTS D'UN TABLEAU MULTIDIMENSIONNEL";
br();
 // Accéder au second hobby du joueur
    echo ln(__LINE__) . 'Le second hobby du joueur est : ' . $profil_joueur['hobbies'][1] . br();

// Accéder au 3ème élément de la seconde ligne de la suite
    echo ln(__LINE__) . 'Le 3ème élément de la seconde ligne de la suite est : ' . $profil_joueur['suite'][1][2] . br();

// Accéder à la ville du joueur
    echo ln(__LINE__) . 'La ville du joueur est : ' . $profil_joueur['adresse']['ville'] . br();

// Accéder au dernier élément du tableau hobbies
    echo ln(__LINE__) . 'Le dernier élément du tableau hobbies est : ' . $profil_joueur['hobbies'][count($profil_joueur['hobbies']) - 1] . br();

// Accéder au dernier élément du tableau hobbies avec end()
    echo ln(__LINE__) . 'Le dernier élément du tableau hobbies est : ' . end($profil_joueur['hobbies']) . br();

// Accéder au dernier élément du tableau avec end()
    echo ln(__LINE__) . 'Le dernier élément du tableau est : ' . end($profil_joueur) . br();

sep();

/**
 * *******************************************************************************************
 * Utiliser les boucle sur  tableau mumltidimensionnel
 * *******************************************************************************************
 */

 echo "UTILISER LES BOUCLES SUR UN TABLEAU MULTIDIMENSIONNEL";
 br();

 
    echo ln(__LINE__) . 'Avec une seule boucle foreach()';
    br();

    foreach ($profil_joueur as $key => $property) {
        echo $key . ' = ' . $property . br();
    }
    sep();

    echo ln(__LINE__) . 'Afficher la suite avec 2 boucles foreach()';
    br();

    foreach ($profil_joueur['suite'] as $ligne) {
        foreach ($ligne as $element) {
            echo $element . ' ';
        }
        br();
    }
    sep();
    echo ln(__LINE__) . 'Afficher la suite avec 2 boucles for()';
    br();

    for ($lig = 0; $lig < count($profil_joueur['suite']); $lig++) {
        for ($col = 0; $col < count($profil_joueur['suite'][$lig]); $col++) {
            echo $profil_joueur['suite'][$lig][$col] . ' ';
        }
        br();
    }
    sep();

    // Pour simplifier la lecture du code, on peut créer une variable $tableau avec la valeur de $profil_joueur['suite']
    echo ln(__LINE__) . 'Simplifier la lecture du code en créant une variable';
    br();
    $suite = $profil_joueur['suite'];

    foreach ($suite as $ligne) {
        foreach ($ligne as $element) {
            echo $element . ' ';
        }
        br();
    }
    sep();  
    for ($lig = 0; $lig < count($suite); $lig++) {
        for ($col = 0; $col < count($suite[$lig]); $col++) {
            echo $suite[$lig][$col] . ' ';
        }
        br();
    }
    sep();
    sep();
    echo"SI VOUS N'AVEZ PAS ENCORE BIEN ASSIMILE...";
    sep();
/**
 * *******************************************************************************************
 * SI ARRIVEZ ICI VOUS N'AVEZ PAS COMPRIS... PAS DE PANIQUE, ON REPREND
 * *******************************************************************************************
 */

// Déclarons un petit tableau à 2 dimensions
$minusculeMutiTab = [ 
//   0    
    [1], // 0 
//   0
    [5]  // 1
];
disp_ar($minusculeMutiTab);

// Affichons le tableau, c'est une variable complexe, on ne peut afficher son contenu en appelant simplement son nom
echo ln(__LINE__) . 'Essayons d\'afficher le tableau $minusculeMutiTab en l\'appelant par son nom : -> ' . $minusculeMutiTab .br();
// Php nous informe que c'est un tableau, mais il ne nous affiche pas son contenu

// On sait que pour accéder aux élément d'un tableau, on utilise les crochets []
// On sait aussi que les éléments d'un tableau sont indexés, c'est à dire qu'ils ont un numéro d'ordre
// On sait aussi que le premier élément d'un tableau à pour index 0
// On sait aussi que pour accéder à un élément d'un tableau, on utilise son index entre crochets
// On sait que pour les tableaux associatifs, on utilise pas une valeur numérique entière mais une clé textuelle
// On sait aussi que pour accéder à un élément d'un tableau à 2 dimensions, on utilise 2 index entre crochets 

// Affichons le premier élément du tableau $minusculeMutiTab
echo ln(__LINE__) . 'Essayons d\'afficher le premier élément du tableau $minusculeMutiTab : -> ' . $minusculeMutiTab[0] .br();
// Php nous informe que c'est également un tableau, puisque nous somme dans un tableau à deux dimensions, mais il ne nous affiche pas son contenu

// Affichons le premier élément du tableau $minusculeMutiTab
echo ln(__LINE__) . 'Essayons d\'afficher le premier élément du tableau $minusculeMutiTab : -> ' . $minusculeMutiTab[0][0] .br();

// Affichons le second élément du tableau $minusculeMutiTab
echo ln(__LINE__) . 'Essayons d\'afficher le second élément du tableau $minusculeMutiTab : -> ' . $minusculeMutiTab[1][0] .br();

sep();
// Utilisons une boucle foreach pour afficher les éléments du tableau $minusculeMutiTab
foreach ($minusculeMutiTab as $ligne) {
    foreach ($ligne as $element) {
        echo $element . ' ';
    }
    br();
}

/**
 * *******************************************************************************************
 * J'ESPERE VOUS AVOIR AIDE A COMPRENDRE LES TABLEAUX MULTIDIMENSIONNELS
 * *******************************************************************************************
 */

sep();
/**
 * *************************************************************************************
 */