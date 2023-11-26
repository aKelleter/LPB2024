<?php


$var = ['day' => 'lundi'];

/**
 * PHP dispose de nombreuses fonctions et structures standards. Il y a aussi des fonctions qui requièrent 
 * des extensions spécifiques de PHP, sans lesquelles vous obtiendrez l'erreur fatale "undefined function". 
 * Par exemple, pour utiliser les fonctions d'images, telles que imagecreatetruecolor(), vous aurez besoin 
 * du support de GD dans PHP. Ou bien, pour utiliser mysqli_connect(), vous aurez besoin de l'extension 
 * MySQLi. Il y a des fonctions de base qui sont incluses dans toutes les versions de PHP, telles que les 
 * fonctions de chaînes de caractères et les fonctions de variables. Utilisez phpinfo() ou get_loaded_extensions() 
 * pour savoir quelles sont les extensions qui sont compilées avec votre PHP. Notez aussi que de nombreuses 
 * extensions sont activées par défaut.
 */

 // Retrouver le catalogue des extensions en fontion de leur affiliation(adhésion) sur la page ci-dessous
 // https://www.php.net/manual/fr/extensions.membership.php
 
 // Décommenter la ligne ci-dessous pour afficher les extensions chargées avec votre configuration actuelle
 // echo'<pre>'; print_r(get_loaded_extensions()); echo'</pre>';   

 // Les fonctions internes que nous avons rencontrées et utilisées dans le cours LPB

 echo ln(__LINE__); print_r($var);         // print_r() : Affiche des informations lisibles pour une variable - https://www.php.net/manual/fr/function.print-r.php
 br();
 echo ln(__LINE__); var_dump($var);        // var_dump() : Affiche les informations d'une variable - https://www.php.net/manual/fr/function.var-dump.php
 br();
 echo ln(__LINE__); echo gettype($var);    // gettype() : Retourne le type de la variable - https://www.php.net/manual/fr/function.gettype.php
 br();
 echo ln(__LINE__); echo rand();           // rand () : Génère une valeur aléatoire - https://www.php.net/manual/fr/function.rand
 br();
 echo ln(__LINE__); print isset($var);     // isset() : Détermine si une variable est déclarée et est différente de null - https://www.php.net/manual/fr/function.isset
 br();
 echo ln(__LINE__); print empty($var);     // empty() : Détermine si une variable est vide - https://www.php.net/manual/fr/function.empty.php
 br();
 echo ln(__LINE__); unset($var);     // unset() : Détruit une variable - https://www.php.net/manual/fr/function.unset.php
 br();
 echo ln(__LINE__); echo date("d-m-Y h:i:s");   // date() : Formate un horodatage Unix - https://www.php.net/manual/fr/function.date
 br();
 //header("Location:");   // header() : Envoie un en-tête HTTP brut - https://www.php.net/manual/fr/function.header.php
 //session_start();       // session_start() : Démarre une nouvelle session ou reprend une session existante - https://www.php.net/manual/fr/function.session-start.php
 //session_unset();       // session_unset() : Détruit toutes les variables d'une session - https://www.php.net/manual/fr/function.session-unset.php
 //session_destroy();     // session_destroy() : Détruit une session - https://www.php.net/manual/fr/function.session-destroy.php
 echo ln(__LINE__); echo strtoupper("majuscule");  // strtoupper() : Renvoie une chaîne en majuscules - https://www.php.net/manual/fr/function.strtoupper.php
 br();
 echo ln(__LINE__); echo strtolower("MINUSCULE");  // strtolower() : Renvoie une chaîne en minuscules - https://www.php.net/manual/fr/function.strtolower.php
 br();

 // Les structures de contrôle du langage PHP utilisées dans le cours LPB
 
 // if, else, elseif, while, do-while, for, foreach, break, continue, switch (voir les autres fiches PHP du cours)

 echo ln(__LINE__); echo 'Hello avec echo<br>';   // echo : Affiche une chaîne de caractères, ont peut afficher plusieurs chaînes séparées par des virgules - https://www.php.net/manual/fr/function.echo.php
 echo ln(__LINE__); print 'Hello avec print <br>';// print : Affiche une chaîne de caractères. La différence majeure avec echo est que print n'accepte qu'un seul argument et retourne toujours 1 - https://www.php.net/manual/fr/function.print.php 
 include'include.php';         // L'expression de langage include inclut et exécute le fichier spécifié en argument - https://www.php.net/manual/fr/function.include.php
 require'include.php';         // require est identique à include mis à part qu'en cas d'erreur, il stop le script ! - https://www.php.net/manual/fr/function.require.php
 include_once'include.php';    // Similaire à include, mais la différence est que si le code a déjà été inclus, il ne le sera pas une seconde fois - https://www.php.net/manual/fr/function.include-once.php
 require_once'include.php';    // Similaire à require, mais la différence est que si le code a déjà été inclus, il ne le sera pas une seconde fois -  https://www.php.net/manual/fr/function.require-once.php

 return;                       // return retourne le contrôle du programme au module appelant. L'exécution reprend alors à l'instruction suivante de l'invocation du module.
                               // Si appelée depuis une fonction, la commande return termine immédiatement la fonction et retourne l'argument qui lui est passé. - https://www.php.net/manual/fr/function.return.php

// NE PAS AJOUTER DE CODE EN-DESSOUS A CAUSE DE L'INSTRUCTION RETURN CI-DESSUS
                                 