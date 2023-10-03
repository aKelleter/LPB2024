<?php 
    // Découverte des variables   
    /*
     Les variables sont des espaces mémoires (conteneurs) qui permettent de stocker des données 
     qui peuvent varier au fil du temps.
     En PHP :
        - les variables sont précédées du symbole $ suivi du nom de la variable.
        - les variables sont sensibles à la casse (majuscules et minuscules)
        - les variables ne peuvent pas commencer par un chiffre
        - les variables ne peuvent pas contenir d'espaces
        - les variables ne peuvent pas contenir de caractères spéciaux (sauf le _ caractère souligné ou underscore)
        - les variables ne peuvent pas contenir de caractères accentués
        - il existe des noms réservés (mots-clés) qui ne peuvent pas être utilisés comme noms de variables   

    */

    // Déclaration  et intialisé des variables
    // Le signe = est un opérateur d'affectation !!
    $nom = "Doe";
    $prenom = "John";
    $age = 25;
        
    // Affichage des variables prenom et nom (concaténées = collées les unes après les autres)
    echo '<div class="lpb-inter">Affiché avec concaténations avec des guillemets simples</div>';
    echo 'Prénom : '.$prenom.', Nom : '.$nom.', Age : '.$age;
    echo '<br><br>';

    // Sans concaténation en utilisant les guillemets doubles
    echo '<div class="lpb-inter">Affiché sans concanténations avec des guillemets doubles</div>';
    echo "Prénom : $prenom, Nom : $nom, Age : $age";
    echo '<br><br>';

    // La concaténation peut se faire avec le point . (concaténation)
    echo '<div class="lpb-inter">La concaténation</div>';
    echo 'Je' . ' suis' . ' une' . ' phrase' . ' concaténée' . ' avec' . ' des' . ' points';
    echo '<br><br>';

    // Mettre à jour une variable
    echo '<div class="lpb-inter">Mettre à jour la variable: $age</div>';
    echo "Age (\$age) avant : $age <br>";

    // Mise à jour de la variable $age
    $age = 30; 
    echo 'TYPE : '.gettype($age).'<br>';
    echo "Age (\$age) après : {$age} <br>";
    echo '<br>';

    /*  (ref:(p37))
        Les variables en PHP vont pouvoir stocker 8 grands types de données différents : 
            • Le type « chaine de caractères » ou String en anglais ; 
            • Le type « nombre entier » ou Integer en anglais ; 
            • Le type « nombre décimal » ou Float en anglais ; 
            • Le type « booléen » ou Boolean en anglais ; 
            • Le type « NULL » qui se dit également NULL en anglais ; 

            -- Ces types seront abordés plus tard dans le cours
            • Le type « tableau » ou Array en anglais ; 
            • Le type « objet » ou Object en anglais ;             
            • Le type « ressource » ou Resource en anglais ; 
            
            Nous allons pour le moment nous concentrer sur les types simples de valeurs. 
            Les autres types feront l’objet de leçons ou de parties dédiées dans ce cours.
    */

    // Quelques exemples de variables
    echo '<div class="lpb-inter">Quelques exemples de variables et leur type</div>';

    $chaine_de_caractères = "Je suis une chaîne de caractères";
    $nombre_entier = 25;
    $nombre_décimal = 100.53; // Attention il faut utiliser le . à la place d'une virgule ,
    $booleen = true; //false
    $vide = null;
    $vide2 = null;

    echo '$chaine_de_caractères = ' . gettype($chaine_de_caractères).'<br>';
    echo '$nombre_entier = ' . gettype($nombre_entier).'<br>';
    echo '$nombre_décimal = ' . gettype($nombre_décimal).'<br>';
    echo '$booleen = ' . gettype($booleen).'<br>';
    echo '$vide = ' . gettype($vide).'<br>';
    echo '$vide2 = ' . gettype($vide2).'<br>';


?>
    