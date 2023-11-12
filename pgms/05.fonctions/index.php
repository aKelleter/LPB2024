<?php
require_once('fct.php');

function fonctionInterneAuFichier(){
    echo'Je suis une fonction déclarée et appelée dans le fichier index.php<br>';
}



// Appel de la fonction bonjour() -> déclarée dans fct.php
separateur();
bonjour();
bonjour();
bonjour();

separateur();

echo 'La suite...<br>';

fonctionInterneAuFichier();
separateur();

$a = 5;
$b = 3;
addition(5, 5.3);
addition($a, $b);
separateur();

bonjourNoms('Emilien', 'Ayse');
separateur();

