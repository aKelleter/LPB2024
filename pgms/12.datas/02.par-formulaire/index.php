<?php
    require_once '../settings.php';
    require_once '../fct.php';

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
            <h2 class="title">Le passage de données par formulaire</h2>    
            <nav class="menu"><a href="../">Back</a> <a href="./">Reload</a></nav>      
            
            <form action="" method="post">
                <label for="login" class="form-ctrl">login</label>
                <input type="text" name="titre" id="titre" class="form-ctrl">
                <label for="contenu" class="form-ctrl">Contenu</label>
                <textarea name="contenu" id="contenu" cols="30" rows="5" class="form-ctrl"></textarea>
                <input type="hidden" name="form" id="form" value="article">
                <button type="submit">Envoyer</button>
            </form>
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

