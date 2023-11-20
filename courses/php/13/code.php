<?php

/**
 * Portée des variables globales et locales
 * ----------------------------------------
 */

$var = 100; // Variable à portée globale

function portee1(){
   echo 'La valeur de $var global  est : ' . $var . '<br>';
}

function portee2(){
   $var = 1000; // Variable à portée locale
   echo 'La valeur de $var local  est : ' . $var . '<br>';
}

function portee3(){
   $var2 = 0;
   $var2++;
   echo 'La valeur de $var local  est : ' . $var2 . '<br>';
}

function portee4(){
   $var3 = 500;
}

portee1();
// $var (ligne 3) n'est pas accessible à la fonction portee1()

portee2();
// $var (ligne 10) est une autre variable même si le nom est identique (ligne 3)
// elle n'est accessible qu'à l'intérieur de la fonction portee2(), c'est une variable locale

portee3();
// $var2 est une variable locale à la fonction portee3()

portee4();
echo 'La variable locale $var3 contient : ' . $var3 . '<br>';
// $var3 n'est pas accessible à l'extérieur de la fonction

/**
 * Accéder à une variable de portée globale depuis un espace local 
 * ---------------------------------------------------------------
 * 
 * Parfois, nous voudrons nous servir de variables possédant une portée globale (c’est-à-dire définies en 
 * dehors d’une fonction) à l’intérieur d’une fonction. 
 * Pour cela, on va pouvoir utiliser le mot clef global avant la déclaration des variables 
 * qu’on souhaite utiliser dans notre fonction. 
 * 
 * On va également pouvoir utiliser la variable super globale $GLOBALS pour accéder localement 
 * à de variables de portée globale. Nous verrons cela plus tard avec l'étude des super globales
 */

 $planet = 'terre';

 function displayPlanet(){
   global $planet;
   echo 'La planète est : ' . $planet . '<br>';
   $planet = 'Mars';
 }
 sep();
 displayPlanet();
 echo 'La planète est : ' . $planet . '<br>';

 /**
  * Accéder à une variable définie localement depuis l’espace global 
  * ----------------------------------------------------------------
  * 
  * Il n’y a aucun moyen d’accéder à une variable définie localement depuis l’espace global. Cependant, 
  * on va tout de même pouvoir récupérer la valeur finale d’une variable définie localement et la stocker 
  * dans une nouvelle variable globale en utilisant l’instruction return.
  */

  function whoami(){
   $nom = 'HAL 9000';
   return $nom;
  }
  sep();
  $iam = whoami();
  echo 'Je suis : ' . $iam . '<br>';

  // !!! Une variable locale n’aura toujours qu’une portée locale et que sa portée ne pourra pas être 
  // étendue dans l’espace global

  /**
   * Le mot clef static 
   * ------------------
   * 
   * Une variable définie localement va être supprimée ou détruite dès la fin de 
   * l’exécution de la fonction dans laquelle elle a été définie. 
   * Parfois, nous voudrons pouvoir conserver la valeur finale d’une variable 
   * locale pour pouvoir s’en resservir lors d’un prochain appel à la fonction. 
   * 
   * Cela va notamment être le cas pour des fonctions dont le but va être de 
   * compter quelque chose. 
   * Pour qu’une fonction se « souvienne » de la dernière valeur d’une variable 
   * définie dans la fonction, nous allons pouvoir utiliser le mot clef "static"
   * devant la déclaration initiale de la variable. 
   * 
   * La portée de la variable sera toujours locale, mais la variable ne sera 
   * pas détruite lors de la fin de l’exécution de la fonction mais 
   * plutôt conservée pour pouvoir être réutilisée lors d’une prochaine exécution. 
   * Notez par ailleurs que lorsque nous initialisons une variable en 
   * utilisant static, la variable ne sera initialisée que lors du 
   * premier appel de la fonction 
   */

   function incrementeur(){
      static $cpt = 0;
      echo 'Le compteur vaut : ' . $cpt . '<br>';
      $cpt++;
   }
   sep();
   incrementeur();
   incrementeur();
   incrementeur();



