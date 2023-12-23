<?php
    require_once '../settings.php';
    require_once '../fct.php';

    // Affichage brute du tableau superglobal $_GET
    disp_ar($_GET, '$_GET');

    // On test si on a reçu un nom par l'url en testant la clé "nom" dans $_GET
    if(isset($_GET['nom']) && !empty($_GET['nom']))
    {
        echo 'Nom : ' . $_GET['nom'].'<br>';
        $nom = $_GET['nom'];
    }

    // On test si on a reçu un nom par l'url en testant la clé "age" dans $_GET
    if(isset($_GET['age']) && !empty($_GET['age']))
    {
        echo 'Age : ' . $_GET['age'].'<br>';
        $age = $_GET['age'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php displayHeadSection('../'); ?>
</head>
<body>
    <div class="container">
        <div id="content">
            <h1 class="title"><?= APP_NAME ?></h1>
            <h2 class="title">Le passage de données par l'url</h2>    
            <nav class="menu"><a href="../">Back</a> <a href="./">Reload</a></nav>      
            <?php
             
             echo'Un lien : <a href="index.php?nom=john">Un lien avec un paramètre dans l\'url</a><br>';
             echo'Un lien : <a href="index.php?nom=john&age=25">Un lien avec 2 paramètres dans l\'url</a>';
               
            ?>
        </div>
    </div>
    <div class="footer">
        <a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php" target="_blank">Lien vers le cours</a>
    </div>
    <footer>
        <?php displayFooterHTML(); ?>
    </footer>
</body>
</html>

