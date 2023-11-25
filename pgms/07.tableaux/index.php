<?php
    require_once('fct.php');

    /**
     * ********************
     * LES TABLEAUX INDEXES
     * ********************
     */

    // Déclaration et initialisation de tableaux indexés
    //                      0          1       2 
    // Tableaux 3 élements
    $tableauNoms1 = array('Açelya', 'Adrien', 'Jhon');

    //                0        1        2        3        4
    // Tableaux 5 éléments
    $tableauNoms2 = ['Minh', 'Ayse', 'Emilien', 'Noah', 'Rowan'];

    // Accéder aux éléements d'un tableau
    $adrien = $tableauNoms1[1];
    $rowan = $tableauNoms2[4];

    echo 'Adrien est : ' . $adrien . '<br>';
    echo 'Rowan est : ' . $rowan . '<br>';

    // Ajouter des données à un tableau
    $ages = [];
    $ages[] = 12;
    $ages[] = 13;
    $ages[] = 14;
    $ages[] = 15;

    echo '$age : <br>';
    print_r($ages);
    disp_ar($ages);
    echo'<br>';

    // Supprimer un élément du tableau avec unset()
    unset($ages[2]);
    disp_ar($ages);


    // On ne peut pas afficher le contenu d'un tableau rien que par l'appel de son nom
    // echo $age;
    
    // Afficher rapidement le contenu d'un tableau (debugging ou dev)
    // Avec var_dump() ou print_r() ou une fonction personnelle
    print_r($tableauNoms2);
    echo '<br>';
    var_dump($tableauNoms2);
    echo '<br>';
    disp_ar($tableauNoms2);

    // Connaître le nombre d'éléments d'un tableau
    $nbElement = count($tableauNoms2);

    echo 'Nb éléments : ' . $nbElement . '<br>';

    // Afficher les données avec un boucle for
    disp_ar($tableauNoms1);
    for($cpt = 0 ; $cpt < count($tableauNoms1) ; $cpt++)
    {
        echo 'Elément ' . $cpt+1 . ' indice [' . $cpt . ']  : ' . $tableauNoms1[$cpt] . '<br>';
    }

    echo '<br>';

    // Afficher les données avec une boucle foreach
    foreach($tableauNoms2 as $nom)
    {
        echo 'Nom : ' . $nom . '<br>';
    }

    foreach($tableauNoms2 as $key => $nom)
    {
        echo 'Nom : ' . $nom . ' à l\'indice ' . $key . '<br>';
    }



    /**
     * ************************
     * LES TABLEAUX ASSOCIATIFS
     * ************************
     */

     $diametre_planetes_sys_solaire = [
        'Mercure' => 4879,
        'Venus' => 12104,
        'Terre' => 12756,
        'Mars' => 6792,
        'Jupiter' => 142984,
        'Saturne' => 120536,
        'Uranus' => 51118,    
        'Neptune' => 49532];
    
    $tab_assoc = [
        'prenom' => 'John',
        'nom' => 'Doe'
    ];

    disp_ar($diametre_planetes_sys_solaire);
    disp_ar($tab_assoc);

    echo 'Diametre terre : ' . $diametre_planetes_sys_solaire['Terre'] . '<br>';


    // Modifier une valeur 
    $tab_assoc['prenom'] = 'Jhonny';
    disp_ar($tab_assoc);

    // Ajouter une valeur à un tableau associatif
    $diametre_planetes_sys_solaire['Pluton'] = 2372;   
    $diametre_planetes_sys_solaire[] = 1000000;
    $diametre_planetes_sys_solaire['Eris'] = 754;
    disp_ar($diametre_planetes_sys_solaire);

    // Suppression
    unset($diametre_planetes_sys_solaire[0]);
    disp_ar($diametre_planetes_sys_solaire);

    $multitab = [
    //I  0  1
        [1, 2], // 1 Ligne indice 0
    //I  0  1   
        [3, 4]  // 2 ligne indice 1
    ];

    disp_ar($multitab);
    echo '1 ligne 2 élément -> ' . $multitab[0][1] . '<br>';

    foreach($multitab as $ligne)
    {
        foreach($ligne as $element)
        {
            echo 'Valeur : ' . $element . ', ';
        }
        echo '<br>';
    }
    
    

