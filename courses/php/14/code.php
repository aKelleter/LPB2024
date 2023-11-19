<?php

/**
 * 
 * LES CONSTANTES
 * --------------
 * 
 * Une constante est un identifiant ou un nom qui représente une valeur simple. Les constantes, tout comme les variables, 
 * vont donc être des conteneurs qui vont nous servir à stocker une valeur. 
 * Cependant, à la différence des variables, la valeur stockée dans une constante ne va pas pouvoir être modifiée : 
 * elle va être « constante » (sauf dans le cas des constantes magiques dont nous allons reparler plus tard). 
 * 
 * Notez également que les constantes vont par défaut être toutes accessibles dans tout le script : 
 * on va pouvoir les définir n’importe où dans le script et pouvoir y accéder depuis n’importe quel autre endroit du script. 
 * Notez de plus que par convention, les constantes seront toujours écrites en majuscules pour bien les différencier des autres objets
 * du langage PHP. 
 */

/**
 * Pour définir une constante en PHP, nous allons pouvoir utiliser la fonction "define()" ou le mot clef "const". 
 * En utilisant le mot clef "const", alors vous devez noter que seules des données de type "string", "integer", "float", "boolean" et "array" 
 * (dans les dernières versions de PHP) vont pouvoir être stockées 
 * Vous devriez toujours déclarer vos constantes en majuscules.  
 * A la différence des variables, nous ne devrons pas préfixer le nom d’une constante avec le signe $. 
 */


 // Exemples
 
 // Définition des constantes
 const NOM_JEU = "Super Mario Odyssey";
 define("PI", 3.14159);
 
 // Affichage des constantes
 echo NOM_JEU; // Affiche "Super Mario Odyssey"
 br();
 echo PI; // Affiche 3.14159
 br();
 sep();

 /**
  * LES CONSTANTES PREDEFINIES / MAGIQUES
  * -------------------------------------
  * 
  * PHP propose un certain nombre de constantes prédéfinies qui vont nous permettre de récupérer des informations sur le script en cours d’exécution.

  * Tels que :
  * __FILE__ : Le chemin complet et le nom du fichier en cours d’exécution. Si utilisé à l’intérieur d’un include, 
  *            le nom du fichier inclus est retourné.
  * __DIR__ : Le nom du répertoire du fichier. Si utilisé à l’intérieur d’un include, le nom du répertoire de l’inclusion est retourné.
  * __LINE__ : Le numéro de la ligne courante dans le fichier.
  * __FUNCTION__ : Le nom de la fonction.
  *
  * __CLASS__ : Le nom de la classe. Le nom de la classe inclut le nom de l’espace de noms dans lequel la classe est définie (par exemple A\B\C).
  * __METHOD__ : Le nom de la méthode de la classe.
  * __NAMESPACE__ : Le nom de l’espace de noms courant.
  * __TRAIT__ : Le nom du trait. Le nom du trait inclut le nom de l’espace de noms dans lequel le trait est défini (par exemple A\B\C).
  *
  * Les constantes magiques vont notamment être utiles pour récupérer des adresses de fichiers et les utiliser dans 
  * des fichiers de configuration ou pour effectuer des actions de débogage.
  * 
  */

echo 'Chemin du fichier : ' . __FILE__; // Affiche le chemin complet et le nom du fichier en cours d’exécution
br();

echo 'Numéro de ligne de l\'instruction : ' . __LINE__; // Affiche le numéro de la ligne courante dans le fichier
br();

echo 'Nom du répertoire : ' . __DIR__; // Affiche le nom du répertoire du fichier
br();

function maFonction() {
    echo 'Nom de la fonction : ' . __FUNCTION__; // Affiche le nom de la fonction
}
maFonction();
br();
sep();
