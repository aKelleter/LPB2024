<?php
 //DEBUG// disp_ar($_SESSION, 'SESSION', 'VD');
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
        (DEBUG)? $st = 'Error : ' . $e->getMessage() : $st = false;            
        return $st; 
    }
}

/**
 * Récupérer tous les articles de la table articles
 * 
 * @param object $conn 
 * @return array $resultat
 */
function getAllArticlesDB($conn) {
    try {
        // Récupérer des données de notre table articles
        $req = $conn->prepare("SELECT * FROM articles WHERE active = 1");
        $req->execute();
    
        // Retourne un tableau associatif pour chaque entrée de la table articles avec le nom des colonnes comme clé
        $resultat = $req->fetchall(PDO::FETCH_ASSOC);

        // Fermeture connexion
        $req = null;
        $conn = null;

        return $resultat;

    } catch (PDOException $e) {
        (DEBUG)? $st = 'Error : ' . $e->getMessage() : $st = false;            
        return $st; 
    }
}

/**
 * Récupérer un article en fonction de son ID
 * 
 * @param object $conn 
 * @return array $resultat
 */
function getArticleByIDDB($conn) {
    try {
        // Récupérer des données de notre table articles
        $req = $conn->prepare("SELECT * FROM articles WHERE id = :id");
        $req->bindParam(':id', $_GET['id']);
        $req->execute();
    
        // Retourne un tableau associatif pour chaque entrée de la table articles avec le nom des colonnes comme clé
        $resultat = $req->fetch(PDO::FETCH_ASSOC);

        // Fermeture connexion
        $req = null;
        $conn = null;

        return $resultat;

    } catch (PDOException $e) {
        (DEBUG)? $st = 'Error : ' . $e->getMessage() : $st = false;            
        return $st; 
    }
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
        echo '<p><a class="btn btn-outline-secondary btn-sm" href="article.php?id=' . $article['id'] . '">Lire</a></p>';
        echo '<hr>';
    }
}

/**
 * Afficher un résumé des articles
 * 
 * @param mixed $resultat 
 * @return void 
 */
function displaySummaryArticles($resultat) {
    // Affichage propre des données de la table articles
    foreach ($resultat as $article) {
        echo '<h2>' . $article['title'] . '</h2>';       
        echo '<p><a class="btn btn-outline-secondary btn-sm" href="article.php?id=' . $article['id'] . '">Lire</a></p>';
        echo '<hr>';
    }
}

/**
 * Affichage propre des données de la table articles avec un lien vers la page d'édition
 * 
 * @param mixed $resultat 
 * @return void 
 */
function displayArticles_ADMIN($resultats) {
    // Affichage des données de la table articles
    foreach ($resultats as $article) {
        echo '<h2>' . $article['title'] . '</h2>';
        //echo '<p>' . $article['content'] . '</p>';
        echo '<p class="small"><a class="btn btn-outline-secondary btn-sm" href="edit.php?id='.$article['id'].'"> Modifier </a>  <a class="btn btn-outline-danger btn-sm" href="admin.php?id='.$article['id'].'"> Supprimer </a></p>';
        echo '<hr>';
    }
}

/**
 * Affiche l'article reçu en paramètre
 * 
 * @param mixed $article 
 * @return void 
 */
function displayArticle($article) {
    echo '<h2>' . $article['title'] . '</h2>';
    echo '<p>' . $article['content'] . '</p>';
}

/**
 * Préparation des données avant insertion dans la base de données
 * 
 * @param mixed $datas 
 * @return string 
 */
function dataPrepare($datas) {
    $datas = trim($datas);
    $datas = stripslashes($datas);
    $datas = htmlspecialchars($datas);
    return $datas;
}

/**
 * Ajout d'un article dans la base de données
 * 
 * @param mixed $conn 
 * @return true 
 */
function addArticleDB($conn, $datas) {
    try{
        // Préparation des données avant insertion dans la base de données
        $title = dataPrepare($datas['title']);
        $content = dataPrepare($datas['content']);

        // Insertion des données dans la table articles
        $req = $conn->prepare("INSERT INTO articles (title, content) VALUES (:title, :content)");
        $req->bindParam(':title', $title);
        $req->bindParam(':content', $content);
        $req->execute();

        // Fermeture connexion
        $req = null;
        $conn = null;

        return true;

    }catch(PDOException $e) {
        (DEBUG)? $st = 'Error : ' . $e->getMessage() : $st = false;            
        return $st;          
    }       
}

/**
 * Modification d'un article dans la base de données
 * 
 * @param mixed $conn 
 * @param array $datas 
 * @return true 
 */
function updateArticleDB($conn, $datas) {
    try{
        // Préparation des données avant insertion dans la base de données
        $title = dataPrepare($datas['title']);
        $content = dataPrepare($datas['content']);
        $id = dataPrepare($datas['id']);

        // Insertion des données dans la table articles
        $req = $conn->prepare("UPDATE articles SET title = :title, content = :content WHERE id = :id");
        $req->bindParam(':title', $title);
        $req->bindParam(':content', $content);
        $req->bindParam(':id', $id);
        $req->execute();

        // Fermeture connexion
        $req = null;
        $conn = null;

        return true;

    }catch(PDOException $e) {
        (DEBUG)? $st = 'Error : ' . $e->getMessage() : $st = false;            
        return $st;
    } 
}   

/**
 * Suppression d'un article dans la base de données
 * 
 * @param mixed $conn 
 * @return true 
 */
function deleteArticleDB($conn, $id) {
    try{
        // Préparation des données avant insertion dans la base de données
        $id = dataPrepare($id);

        // Insertion des données dans la table articles
        $req = $conn->prepare("DELETE FROM articles WHERE id = :id");
        $req->bindParam(':id', $id);
        $req->execute();

        // Fermeture connexion
        $req = null;
        $conn = null;

        return true;

    }catch(PDOException $e) {
        (DEBUG)? $st = 'Error : ' . $e->getMessage() : $st = false;            
        return $st;          
    }       

}   

/**
 * Identification d'un utilisateur
 * 
 * @param mixed $conn 
 * @param mixed $datas 
 * @return mixed 
 */
function identificationDB($conn, $datas) {
    try{
        $resultat = null;

        // Préparation des données avant insertion dans la base de données
        $login = dataPrepare($datas['login']);
        $pwd = dataPrepare($datas['pwd']);

        // Sélection des données dans la table users
        $req = $conn->prepare("SELECT * FROM users WHERE email = :login AND passwd = :pwd");
        $req->bindParam(':login', $login);
        $req->bindParam(':pwd', $pwd);
        $req->execute();

        // Génère un résultat si il y a correspondance
        $resultat = $req->fetch(PDO::FETCH_ASSOC);

        // Fermeture connexion
        $req = null;
        $conn = null;

        if((isset($resultat['email']) && $resultat['email'] === $login) && (isset($resultat['passwd']) && $resultat['passwd'] === $pwd))
            return true;
        else
            return false;
        

    }catch(PDOException $e) {
        (DEBUG)? $st = 'Error : ' . $e->getMessage() : $st = false;            
        return $st;          
    }       
}

/**
 * Affichage de la navigation
 * 
 * @return void 
 */
function displayNavigation() {
    $nav = '
    <div class="mb-3 text-end">
        <a type="button" class="btn btn-primary btn-sm" href="index.php">Home</a>
        
        ';  

    ($_SESSION['IDENTIFY'])? $nav .= '
        <a type="button" class="btn btn-primary btn-sm" href="admin.php">Gérer</a>
        <a type="button" class="btn btn-primary btn-sm" href="add.php" >Ajouter</a>
        <a type="button" class="btn btn-danger btn-sm" href="logoff.php" >Déconnexion</a>
        ' : $nav .= '<a type="button" class="btn btn-info btn-sm" href="login.php">Connexion</a>';
    $nav .= '</div>';
    echo $nav;
}

/**
 * Affichage du footer (pied de page)
 * 
 * @return void 
 */
function displayFooter() {
    $footer = '
        <footer class="appFooter text-center small mt-5"><span class="align-text-top"> <a href="https://www.gnu.org/licenses/copyleft.fr.html">CopyLeft</a> - '.APP_NAME. ' - ' . APP_VERSION . ' from ' . APP_UPDATED . ' </span> - <i class="fi-xtluxl-code-thin"></i> by ' . APP_AUTHOR . '</footer>
    ';
    echo $footer;
}

/*********************************************************************** */
/**
 * Display an array variable in a more readable way
 * 
 * @param mixed $array 
 * @param string $info
 * @param string $type 'PR' for print_r() or 'VD' for var_dump()
 * @return void 
 */
function disp_ar($array, $info = null, $type = 'PR'){

    if($type == 'PR')
    {
        echo '<pre>';
        echo (isset($info)?'<h4>' . $info . '</h4>':'');
        print_r($array);
        echo '</pre>';
    }elseif($type == 'VD')
    {
        echo '<pre>';
        echo (isset($info)?'<h4>' . $info . '</h4>':'');
        var_dump($array);
        echo '</pre>';
    }
    
}