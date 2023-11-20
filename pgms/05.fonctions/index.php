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

// Déclaration de fonction
function separat()
{
    echo '<br>------------------------<br>';
}

// Appel de fonction
separat();
separat();
separat();
separat();
separat();
separat();
separat();

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

function addition2($a, $b) {
    // Code à exécuter
    // echo $a . ' + ' . $b . ' = ' . ($a + $b) . '<br>';    
    return ($a + $b);
}   

// Appel de la fonction (avec 2 arguments, 2 nombres)
// "echo" va afficher le résultat de la fonction addition (ici 8, donc le retour de la fonction addition)

$nb1 = 5;
$nb2 = 3;
$resultat = addition2($nb1, $nb2);

echo "Le résultat de {$nb1} + {$nb2} = {$resultat}";
separat();