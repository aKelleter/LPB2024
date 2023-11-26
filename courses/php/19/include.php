<?php
    $date = new DateTimeImmutable();
    echo '<hr>';
    echo "Je suis le fichier : " . __FILE__ . "<br>";
    echo "J'ai été inclus à la date du : " . date('d/m/Y') . "<br>";
    echo 'A l\'heure précise de : ' . $date->format('H:i:s .u').' microsecondes' . '<br>';
    echo '<hr>';