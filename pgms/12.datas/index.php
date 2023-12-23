<?php
    require_once 'settings.php';
    require_once 'fct.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php displayHeadSection(); ?>
</head>
<body>
    <div class="container">
        <div id="content">
            <h1 class="title"><?= APP_NAME ?></h1>
            <h2 class="title">Chapitres</h2>
            <nav class="menu"><a href="./index.php" title="Home">Home</a> <a href="./liens.php" title="Liens">Liens</a></nav>
            <?php
                $dirs = listOfDir();    
                displayListHTML($dirs);
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