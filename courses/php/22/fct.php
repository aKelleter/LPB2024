<?php

/**
 * Connexion à la base de données
 * 
 * @param string $serverName
 * @param string $userName
 * @param string $userPwd
 * @param string $dbName
 * 
 * @return object $conn
 */

 function connectDB($serverName, $userName, $userPwd, $dbName) {
    try {
        // Création d'une connexion à la base de données
        $conn = new PDO("mysql:host=$serverName;dbname=$dbName;charset=utf8", $userName, $userPwd);

        // Définition du mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $conn;

    } catch (PDOException $e) {
        echo 'Echec de la connexion : ' . $e->getMessage();
    }
}

/**
 * Récupérer des données de notre table articles
 * 
 * @param object $conn 
 * @return array $resultat
 */
function getArticles($conn) {
    // Récupérer des données de notre table articles
    $req = $conn->prepare("SELECT * FROM articles");
    $req->execute();
    
    // Retourne un tableau associatif pour chaque entrée de la table articles avec le nom des colonnes comme clé
    $resultat = $req->fetchall(PDO::FETCH_ASSOC);

    return $resultat;
}

/**
 * Affichage propre des données de la table articles
 * 
 * @param mixed $resultat 
 * @return void 
 */
function displayArticles($resultat) {
    // Affichage propre des données de la table articles
    foreach ($resultat as $article) {
        echo '<h2>' . $article['title'] . '</h2>';
        echo '<p>' . $article['content'] . '</p>';
        echo '<hr>';
    }
}