<?php

/**
 * Se connecter à une base de données avec PDO  
 */


    // Définition des variables de connexion pour XAMPP
    $serverName = 'localhost';
    $userName = 'root';
    $userPwd = '';
    $dbName = 'blog';


/************************* CONNEXION ************************************** */
/*
$serverName = '94.176.233.50';
$userName = 'ifapme';
$userPwd = 'ifapme+*;';
$dbName = 'blog';
*/

try {
    // Création d'une connexion à la base de données
    $conn = new PDO("mysql:host=$serverName;dbname=$dbName;charset=utf8", $userName, $userPwd);

    // Définition du mode d'erreur de PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Faculatif : Affichage d'un message en cas de connexion réussie
    echo 'Connexion réussie !';

} catch (PDOException $e) {
    echo 'Echec de la connexion : ' . $e->getMessage();
}
/***************************************************************************** */


/****************** ALLER CHERCHER DES DONNEES EN DB ************************** */
// Récupérer des données de notre table articles
$req = $conn->prepare("SELECT * FROM articles");
$req->execute();

// Retourne un tableau associatif pour chaque entrée de la table articles avec le nom des colonnes comme clé
$resultat = $req->fetchall(PDO::FETCH_ASSOC);

// Fermeture de la connexion
$conn = null; 
/***************************************************************************** */


/****************** AFFICHER LE TABLEAU DES DONNEES  ************************** */
// Affichage BRUT du résultat
echo '<pre>'; print_r($resultat); echo '</pre>';

// Affichage propre des données de la table articles
foreach ($resultat as $article) {
    echo '<h2>' . $article['title'] . '</h2>';
    echo '<p>' . $article['content'] . '</p>';
    echo '<hr>';
}
/***************************************************************************** */





