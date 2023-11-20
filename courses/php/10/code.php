<?php
/**
 * (réf : p113)
 * 
 * Dans cette leçon, nous allons aller plus loin et apprendre notamment à définir une valeur par défaut pour nos arguments, 
 * à passer nos arguments par référence et à faire des déclarations de type. 
 * 
 */


 /*
    Jusqu’à présent, nous avons passé nos arguments par valeur à nos fonctions ce qui correspond au passage par défaut en PHP. 
    Lorsqu’on passe une variable comme argument par valeur à une fonction, le fait de modifier la valeur de la variable à l’intérieur 
    de la fonction ne va pas modifier sa valeur à l’extérieur de la fonction. 

    Imaginons par exemple qu’on crée une fonction donc le rôle est d’ajouter 3 à une valeur passée en argument. Notre fonction va ressembler à cela : 
 */

$nbre = 1;
$latitude = 30.6054;

function plus3($nb) {
    $nb += 3;
    echo 'La valeur dans la fonction est : ' . $nb . '<br>';
}

plus3($nbre);
echo 'La valeur en dehors de la fonction est : ' . $nbre . '<br>';

sep();

// Idem avec la variable $latitude
plus3($latitude);
echo 'La valeur en dehors de la fonction est : ' . $latitude . '<br>';

/*
    Ici, on a défini une variable $nbre = 1 en dehors de notre fonction puis on a passé $nbre en argument de notre fonction. 
    Notre fonction va ajouter 3 à la valeur de $nbre et fait un echo du résultat. 
    Cependant, à l’extérieur de la fonction, notre variable $nbre va toujours stocker 1.
    On peut s’en assurer en affichant la valeur de la variable en-dehors de la fonction avec echo. 
*/

/*

    Pour modifier la valeur d’une variable à l’extérieur d’une fonction, il faut passer l’argument par référence. 
    Pour cela, il suffit de précéder le nom de l’argument par le symbole &. 
    On va donc modifier notre fonction pour qu’elle ressemble à cela : 
*/

function plus3Ref(&$nb) {
    $nb += 3;
    echo 'La valeur dans la fonction est : ' . $nb . '<br>';
}

sep();

plus3Ref($nbre);
echo 'La valeur en dehors de la fonction est : ' . $nbre . '<br>';

sep();

/*
    Comme vous pouvez le voir, en passant notre argument par référence (&), 
    la fonction peut modifier la valeur de celui-ci et cette valeur sera conservée dans le reste du script.     
*/

//--------------------------------------------------------------------------------------------

/*
    (réf : p116)
    Le PHP va également nous permettre de définir une valeur par défaut pour un paramètre d’une fonction. 
    Cette valeur sera utilisée si aucun argument n’est fourni lors de l’appel de la fonction. 
    Notez ici que la valeur par défaut doit obligatoirement être une valeur constante et ne peut pas être une variable. 
    Notez également que si on définit une fonction avec plusieurs paramètres et qu’on choisit de donner des valeurs 
    par défaut à seulement certains d’entre eux, alors il faudra placer les paramètres qui ont une valeur par défaut 
    après ceux qui n’en possèdent pas dans la définition de la fonction. 
    Dans le cas contraire, le PHP renverra une erreur et la fonction ne pourra pas être exécutée.
*/

function helloYou($nom, $prenom, $role = 'visiteur'){
    echo 'Bonjour '. $prenom . ' ' . $nom . ', vous êtes un ' . $role . ' !<br>';
    //echo "Bonjour {$prenom} {$nom}, vous êtes un {$role} !<br>";
}

helloYou('Le boss','Noah');
helloYou('Le boss', 'Noah', 'administrateur');

sep();

/*
    Comment définir des fonctions qui vont pouvoir accepter un nombre variable d’arguments 
    en valeurs. Pour cela, il suffit d’ajouter … avant la liste des paramètres dans 
    la définition de la fonction pour indiquer que la fonction pourra recevoir 
    un nombre d’arguments variable.      
*/

function listeUtilisateurs(...$users)
{
    foreach($users as $user)
    {
        echo '- ' . $user . '<br>';
    }
}


listeUtilisateurs('Flavio','Emilien','Yannick');

sep();