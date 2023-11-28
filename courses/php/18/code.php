<?php

/**
 * LES VARIABLE SUPERGLOBALES
 * 
 * Les variables superglobales sont des variables internes au PHP, ce qui signifie que ce sont des variables créées 
 * automatiquement par le PHP. 
 * Ces variables vont être accessibles n’importe où dans le script et quel que soit le contexte, qu’il soit local 
 * ou global. C’est d’ailleurs la raison pour laquelle on appelle ces variables « superglobales ». 
 * Il existe 9 superglobales en PHP. Ces variables vont toutes être des variables tableaux qui vont contenir 
 * des groupes de variables très différentes. La plupart des scripts PHP vont utiliser les variables superglobales 
 * car ces dernières vont s’avérer très souvent très utiles. Il est donc indispensable de bien les connaitre 
 * et de savoir les manipuler. 
 * Les variables superglobales PHP sont les suivantes : 
 * $GLOBALS  
 * $_SERVER  
 * $_REQUEST 
 * $_GET
 * $_POST
 * $_FILES
 * $_ENV
 * $_COOKIE
 * $_SESSION
 * 
 * On écrira toujours les superglobales en majuscules. Cela est une convention qui permet de les différencier 
 * des variables « classiques » que nous créons nous-mêmes. Par ailleurs, vous pouvez remarquer que toutes 
 * les superglobales à l’exception de $GLOBALS commencent par un underscore _. 
 * 
 */

// La superglobale $GLOBALS
/**
 * Cette superglobale va nous permettre d’accéder à des variables définies dans l’espace global depuis n’importe 
 * où dans le script et notamment depuis un espace local (dans une fonction). 
 */
$prenom = "John";
$nom = "Doe";
$fctSymbole = '()';

//disp_ar($GLOBALS);
//die();

// WTF is  : What is The Function :)
function WTF($functionName = __FUNCTION__) {    
    $variableLocale = "Je suis une variable locale inutilisable depuis l'espace global";
    return 'Current function : <span style="color: red;">' . $functionName . $GLOBALS['fctSymbole'] . '</span><br>';
}
// Fonction inutile
function maFonction() {
    return WTF('maFonction');
}

echo ln(__LINE__) . '<h4>La superglobale $GLOBALS : </h4>';

echo ln(__LINE__) . 'Accès à la superglobale $GLOBALS : ' . $GLOBALS['prenom'] . ' ' . $GLOBALS['nom'] . '<br>'; 
echo ln(__LINE__) . 'Attention, La superglobale $GLOBALS n\'accède pas aux variable locales: ' . $GLOBALS['variableLocale'] . '<br>'; 
echo ln(__LINE__) . 'Que contient actuellement $GLOBALS ?' . '<br>';

echo WTF();
echo maFonction();

// disp_ar($GLOBALS);

/**
 * La superglobale $_SERVER
 * 
 * La superglobale $_SERVER contient des variables définies par le serveur utilisé ainsi 
 * que des informations relatives au script. 
 */
sep();
echo ln(__LINE__) . '<h4>La superglobale $_SERVER : </h4>';

echo ln(__LINE__) . '$_SERVER[SERVER_SOFTWARE] : ' . $_SERVER['SERVER_SOFTWARE'] . '<br>';
echo ln(__LINE__) . '$_SERVER[SERVER_NAME] : ' . $_SERVER['SERVER_NAME'] . '<br>';
echo ln(__LINE__) . '$_SERVER[SERVER_ADDR] : ' . $_SERVER['SERVER_ADDR'] . '<br>';
echo ln(__LINE__) . '$_SERVER[SERVER_PORT] : ' . $_SERVER['SERVER_PORT'] . '<br>';
echo ln(__LINE__) . '$_SERVER[REMOTE_ADDR] : ' . $_SERVER['REMOTE_ADDR'] . '<br>';

// disp_ar($_SERVER);

/**
 * La superglobale $_REQUEST
 * 
 * La superglobale $_REQUEST va contenir les données envoyées par le client (navigateur) au serveur.
 */
sep();
echo ln(__LINE__) . '<h4>La superglobale $_REQUEST : </h4>';

disp_ar($_REQUEST);

/**
 * La superglobale $_ENV
 * 
 * La superglobale $_ENV va contenir les variables d’environnement du serveur.
 */
sep();
echo ln(__LINE__) . '<h4>La superglobale $_ENV : </h4>';

disp_ar($_ENV);

/**
 * La superglobale $_FILES
 * 
 *  La superglobale $_FILES va contenir les informations sur les fichiers uploadés par le client.
 */
sep();
echo ln(__LINE__) . '<h4>La superglobale $_FILES : </h4>';

disp_ar($_FILES);

/**
 * La superglobale $_GET et $_POST
 * 
 * La superglobale $_GET va contenir les données envoyées par le client au serveur via la méthode GET.
 * La superglobale $_POST va contenir les données envoyées par le client au serveur via la méthode POST.
 */
sep();
echo ln(__LINE__) . '<h4>La superglobale $_GET : </h4>';

disp_ar($_GET);

echo ln(__LINE__) . '<h4>La superglobale $_POST : </h4>';

disp_ar($_POST);

/**
 * La superglobale $_COOKIE
 * 
 * La superglobale $_COOKIE va contenir les cookies envoyés par le client au serveur.
 */
sep();
echo ln(__LINE__) . '<h4>La superglobale $_COOKIE : </h4>';

disp_ar($_COOKIE);

/**
 * La superglobale $_SESSION
 * 
 * La superglobale $_SESSION va contenir les variables de session.
 */
sep();
echo ln(__LINE__) . '<h4>La superglobale $_SESSION : </h4>';


disp_ar($_SESSION);