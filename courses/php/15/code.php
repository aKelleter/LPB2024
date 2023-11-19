<?php

/**
 * 
 * LES TABLEAUX
 * ------------
 * 
 * LES TABLEAUX INDEXES
 * --------------------
 * 
 * Les tableaux vont nous servir à stocker plusieurs valeurs en même temps et vont donc se révéler très utiles pour stocker 
 * les résultats successifs d’une boucle par exemple ou n’importe quelle liste de valeurs pour laquelle il serait long de créer 
 * une variable pour chaque valeur. 
 * 
 * Dans un tableau, chaque valeur va être associée à une clef unique. Cette clef va nous permettre notamment de récupérer la valeur associée.
 * Nous allons pouvoir définir les différentes clefs ou laisser le PHP générer automatiquement les clefs pour les différentes valeurs d’un tableau. 
 * 
 * On va pouvoir créer trois types de tableaux différents en PHP : 
 *  • Des tableaux numérotés ou indexés (les clefs vont être des nombres) ; 
 *  • Des tableaux associatifs (nous allons définir la valeur que l’on souhaite pour chaque clef) ; 
 *  • Des tableaux multidimensionnels (tableaux qui stockent d’autres tableaux en valeur). 
 * 
 * Pour créer un tableau, on peut soit utiliser la structure de langage array(), soit le nouvelle syntaxe plus courte []. 
 * 
 * On va pouvoir passer autant de données que nécessaire dans notre tableau avec array() ou []. 
 * Les données vont pouvoir être soit des données/valeurs simples (auquel cas les clefs seront des entiers générés automatiquement), 
 * soit des paires  : clef => valeur. 
 * 
 */

 // Déclarer des tableaux de données numéroté  

  // INDEXES :            0        1        2         3
  $personnages = array("Mario", "Luigi", "Peach", "Bowser");

  // Avec la syntaxe courte
  //INDEXES :   0        1        2         3
  $persos = ["Link", "Zelda", "Ganondorf", "Sheik"];

  // IND : 0   1   2   3
  $ages = [12, 18, 25, 30];

  // Déclarer des tableaux indexé en ajoutant les données une par une
  $heros[0] = 'Batman';
  $heros[1] = 'Venom';
  $heros[2] = 'Ironman';
  $heros[3] = 'Spiderman';

  $datas[0] = 156.4;
  $datas[1] = 1000;
  $datas[2] = 233;
  $datas[3] = 10.77;

  // Comment accéder (pour éventuellement comme ci-dessous les afficher) aux données des tableaux
  echo ln(__LINE__) . $personnages[0]; // Mario
  br();
  echo ln(__LINE__) .  $ages[2]; // 25
  br();
  echo ln(__LINE__) .  $heros[3]; // Spiderman
  br();
  echo ln(__LINE__) .  $datas[1]; // 1000
  br();

  // Comment modifier une valeur d'un tableau
  $personnages[0] = 'Link';

  // Comment connaître le nombre d'éléments d'un tableau avec la fonction count()
  echo ln(__LINE__) .  'Nombre de personnages avec count() : ' . count($personnages); // 4
  br();  
  sep();

  // Afficher les données d'un tableau avec une boucle for  
  for ($i = 0; $i < count($personnages); $i++) {
    echo $personnages[$i] . ' ';
    br();
  }

  br();
  sep();

  // Afficher les données d'un tableau avec une boucle foreach
  foreach ($heros as $hero) {
    echo $hero . ' ';
    br();
  }

  sep();  

  foreach ($persos as $key => $perso) {
    echo $perso . ' ';
    br();
  }

  br();
  sep();

  


