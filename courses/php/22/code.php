<?php
require_once('fct.php');

// Définition des constantes de connexion sur un serveur externe
// VOIR conf.php

// Connexion à la base de données
$conn = connectDB(SERVER_NAME, USER_NAME, USER_PWD, DB_NAME);

// Récupérer des données de notre table articles
$article = getArticles($conn);

// Affichage propre des données de la table articles
displayArticles($article);








