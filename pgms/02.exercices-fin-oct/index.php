<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="../../assets/css/styles.css" rel="stylesheet">

<?php
echo '<a href="../">BACK</a>';  
echo '
        <pre>
        <strong>Exercice n°1 (Les conditions)</strong>
        Enoncé :

        1.  Initialisez et déclarez une variable qui va stocker un âge, 
            de type nombre entier (integer) et assignez à cette variable 
            la valeur entière : 21

        2.  Utiliser une structure conditionnelle (if elsif else / switch case)
            pour afficher un message en fonction de certaines conditions :

            - Si l\'âge est compris entre 12 et 18, vous afficherez : 
              "Vous avez entre 12 et 18 ans et vous êtes un adolescent"
            - Si l\'âge est compris 18 et 21 ans, vous afficherez :
              "Vous avez entre 18 et 21 ans et vous êtes un jeune adulte avide d\'expériences"  
            - Si votre âge est compris entre 21 et 25 ans, vous afficherez :
              "Vous avez entre 21 et 25 ans et vous êtes sur le point de partir à l\'aventure"
            - Si votre âge est supérieur à 25 ans, vous afficherez :
              "Il est encore temps de réaliser vos rêves"  

        3.  Essayer de changer la valeur de la variable afin de vérifier que les messages changent et ainsi que tout fonctionne correctement (hein Yannick :) )
        </pre>
        
        <hr>
';
echo '<h2>Résultats de l\'exercice n°1</h2>';
// Ecrire votre code ici pour réaliser l'exercice n°1
// .. votre code ici ..

$age = 10;
echo $age .'<br>';

if($age >=12 && $age <=18)
{
  echo "Vous avez entre 12 et 18 ans et vous êtes un adolescent";
}elseif($age > 18 && $age <= 21){
  echo "Vous avez entre 18 et 21 ans et vous êtes un jeune adulte avide d'expériences" ;
}elseif($age > 21 && $age <= 25){
  echo "Vous avez entre 21 et 25 ans et vous êtes sur le point de partir à l'aventure";
}else{
  echo "Il est encore temps de réaliser vos rêves";
}


// .. fin de votre code ..
echo '<hr>';

echo '
        <pre>
        <strong>Exercice n°2 (Les boucles)</strong>
        Enoncé :

        1.  Ecrivez une boucle <strong>for</strong> qui va afficher les nombres de 0 à 10
        2.  Ecrivez une boucle <strong>while</strong> qui va afficher les nombres suivant : 0 2 4 6 8 10 (nombres pairs)
        3.  Ecrivez une boucle <strong>do while</strong> qui va afficher la table de multiplication du chiffre 9 (de 1 à 10 : 1 x 9, 2 x 9, 3 x 9, etc.)
            
        </pre>
        
        <hr>
';
echo '<h2>Résultats de l\'exercice n°2</h2>';
// Ecrire votre code ici pour réaliser l'exercice n°2
// .. votre code ici ..

//-----------------------------------
//  1 initialisation de(s) variables ; 2 condition de sortie de la boucle ; 3 traitement de fin de boucle (incr / desincr)
// $i = $i + 1 == $i++
for($cpt = 0 ; $cpt <= 10 ; $cpt++)
{
  echo 'Nombre : ' . $cpt . '<br>';
}

//-------------------------------------
$cpt2 = 0; 
while($cpt2 <= 10){
  /*
    echo $cpt2 . '<br>';
    $cpt2+=2;
  */
  if($cpt2 %2 == 0)
    echo $cpt2 . '<br>';  
  
  $cpt2++;
     
}

$cpt3 = 1;
const TABLE = 9;
do{

  echo $cpt3 .' x '. TABLE . ' = ' . $cpt3 * TABLE . '<br>';
  $cpt3++;

}while($cpt3 <=10);

// .. fin de votre code ..
echo '<hr>';

echo '
        <pre>
        <strong>Exercice n°3 (La concaténation)</strong>
        Enoncé :
        
        Ecrivez et affichez une (belle) phrase qui contient les variables déclarées et initalisées ci-dessous
        (les variables sont déjà dans le code):
        - $date = date("d/m/Y");
        - $meteo = "Malgré des températures un peu fraîches pour la saison, le journée sera belle et ensoleillée.";
        - $nom = "Zelda";
            
        Pour ce faire, je vous demande d\'utiliser la <strong>concaténation</strong>.

        </pre>
        
        <hr>
';
echo '<h2>Résultats de l\'exercice n°3</h2>';

// Je crée et initialise les variables que vous allez utiliser dans l'exercice :)
$date = date("d/m/Y");
$meteo = "Malgré des températures un peu fraîches pour la saison, le journée sera belle et ensoleillée.";
$nom = "Zelda";

// Ecrire votre code ici pour réaliser l'exercice n°3
// .. votre code ici ..

echo 'Bonjour ' . $nom . ', aujourd\'hui nous sommes le ' . $date .'. La météo sera : '. $meteo. '<br>';

// .. fin de votre code ..
echo '<hr>';
