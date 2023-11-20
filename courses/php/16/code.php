<?php

/**
 * LES TABLEAUX
 * ------------
 * 
 * LES TABLEAUX ASSOCIATIFS
 * ------------------------
 * 
 * Un tableau associatif est un tableau qui va utiliser des clefs textuelles que l’on va associer à chaque valeur.  
 * Les tableaux associatifs vont nous permettre de définir nous-mêmes les clefs que nous allons utiliser pour accéder aux différentes 
 * valeurs du tableau et de donner du sens aux clefs que nous allons utiliser.
 * 
 * Tout comme pour les tableaux numérotés(indexés), on va pouvoir créer notre tableau en une fois en utilisant 
 * la structure de langage array() ou la syntaxe [] ou le construire clef par clef et valeur par valeur. 
 * 
 */

 // Déclarer des tableaux de données associatifs

 // Déclaration d'un tableau associatif avec les diamètres des planètes du système solaire exprimé en kilomètres
 $diametre_planetes_sys_solaire = [
    'Mercure' => 4879,
    //'Une belle erreur' => 12756,
    'Venus' => 12104,
    'Terre' => 12756,
    'Mars' => 6792,
    'Jupiter' => 142984,
    'Saturne' => 120536,
    'Uranus' => 51118,    
    'Neptune' => 49532];


/**
 * *******************************************************************************************
 * Accéder aux données d'un tableau associatif
 * *******************************************************************************************
 */


// Accéder à la valeur associée à la clef 'Terre' du tableau $diametre_planetes_sys_solaire
echo 'ACCEDER AUX VALEURS'; br();

// Au plus simple
echo ln(__LINE__) . $diametre_planetes_sys_solaire['Terre'] . br(); 

// Avec un peu de texte
echo ln(__LINE__) . 'Le diamètre (en km à l\'équateur) de la planète terre est de ' . $diametre_planetes_sys_solaire['Terre'] . ' km' . br();

// ///////////////////////////////////////////////////////////////////////////////////////////

// POUR CEUX QUI VEULENT ALLER PLUS LOIN EN FAISANT CHAUFFER LEUR CERVEAU... (voir la fonction array_keys() dans la doc PHP avant)
// https://www.php.net/manual/fr/function.array-keys.php

// Si l'on souhaite utiliser la valeur de la clé plutôt que d'écrire le nom "terre" en dur dans notre code et que l'on est pas dans
// un contexte de boucle, on peut utiliser la fonction array_keys() qui retourne la liste des clefs d'un tableau sous la forme d'un tableau numéroté
// C'est une écriture à la fois plus souple et plus facile à maintenir mais absconse pour un débutant en utilisant une fonction native de PHP qui  
// retourne la liste des clefs d'un tableau sous la forme d'un tableau numéroté
echo ln(__LINE__) . 'Le diamètre (en km à l\'équateur) de la planète ' . array_keys($diametre_planetes_sys_solaire,'12756')[0]  . ' est de ' . $diametre_planetes_sys_solaire['Terre'] . ' km' . br();

// ///////////////////////////////////////////////////////////////////////////////////////////
sep();

/**
 * *******************************************************************************************
 * Afficher facilement un tableau (associatif ou numérique)
 * *******************************************************************************************
 */
 echo 'AFFICHER UN TABLEAU'; br(); br();
 $nb = 15;
 $tab = array(1,2,3,4,5);

 echo 'AVEC VAR_DUMP()';
 br();
 // Avec la fonction native "var_dump()" qui affiche le contenu d'une variable
 // var_dump indique le type de la variable, sa taille et son contenu
 echo ln(__LINE__); var_dump($diametre_planetes_sys_solaire).br();
 echo ln(__LINE__); var_dump($nb).br();
 echo ln(__LINE__); var_dump($tab).br();
 
 br();
 echo 'AVEC PRINT_R()';
 br();
 // Avec la fonction native "print_r()" qui affiche le contenu d'une variable
 echo ln(__LINE__); print_r($diametre_planetes_sys_solaire).br();
 echo ln(__LINE__); print_r($nb).br();
 echo ln(__LINE__); print_r($tab).br();

 br();
 echo 'AVEC FONCTION PERSO()';
 br();
 // Avec une fonction personnalisée ou utilisateur
 echo ln(__LINE__); disp_ar($diametre_planetes_sys_solaire);
 echo ln(__LINE__); disp_ar($nb);   
 echo ln(__LINE__); disp_ar($tab);   
 
 br();
 echo 'AFFICHER UN TABLEAU AVEC UNQIUEMENT LES VALEURS OU LES CLES';
 br();
// Comment afficher "de façon lisible" toutes les valeurs de notre tableau "$diametre_planetes_sys_solaire"
echo ln(__LINE__); disp_ar(array_values($diametre_planetes_sys_solaire));

// Comment afficher "de façon lisible" toutes les clés de notre tableau "$diametre_planetes_sys_solaire"
echo ln(__LINE__); disp_ar(array_keys($diametre_planetes_sys_solaire));


sep();

/**
 * *******************************************************************************************
 * Modifier la valeur d'un tableau associatif
 * *******************************************************************************************
 */

echo 'MODIFIER LA VALEUR D\'UN TABLEAU ASSOCIATIF'; br();
// Avant
echo ln(__LINE__); disp_ar($diametre_planetes_sys_solaire);
$diametre_planetes_sys_solaire['Terre'] = 100000;
// Après
echo ln(__LINE__); disp_ar($diametre_planetes_sys_solaire);
$diametre_planetes_sys_solaire['Terre'] = 12756;

sep();

/**
 * *******************************************************************************************
 * Ajouter une valeur à un tableau associatif ou non
 * *******************************************************************************************
 */

echo 'AJOUTER UNE VALEUR D\'UN TABLEAU'; br();
echo ln(__LINE__); disp_ar($diametre_planetes_sys_solaire);
$diametre_planetes_sys_solaire['Pluton'] = 2372;

// Attention, la clef est un entier et c'est autorisé car un tableau associatif n'est pas réellement un tableau associatif, 
// ce sont ses éléments qui peuvent être associatifs !!! Les tableaux sont souvent hybrides, un mélange de clés numériques et de clés textuelles   
$diametre_planetes_sys_solaire[100] = 'Je peux le faire'; 
echo ln(__LINE__); disp_ar($diametre_planetes_sys_solaire);

sep();

/**
 * *******************************************************************************************
 * Supprimer une valeur à un tableau associatif ou non
 * *******************************************************************************************
 */

echo 'SUPPRIMER UNE VALEUR D\'UN TABLEAU'; br();

echo ln(__LINE__); disp_ar($diametre_planetes_sys_solaire);
unset($diametre_planetes_sys_solaire['Pluton']);
unset($diametre_planetes_sys_solaire[100]);
echo ln(__LINE__); disp_ar($diametre_planetes_sys_solaire);

sep();

/**
 * *************************************************************************************
 */

