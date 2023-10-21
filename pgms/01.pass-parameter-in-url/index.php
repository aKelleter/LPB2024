<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="../../assets/css/styles.css" rel="stylesheet">

<?php
echo '<a href="../">BACK</a>';  
// ----------------------------------
// Mon premier vrai programme en PHP
// ----------------------------------
echo '
    <pre>    
    Mon premier vrai programme en PHP
    
    Passer un paramètre à mon script PHP avec l\'url
    Le paramètre doit s\'appeler "nombre" et la valeur doit être un nombre entier
    
    Placer un paramètre la fin de l\'url, exemple : <br>
    <a href="index.php?nombre=15">index.php?nombre=15</a>    
    </pre>
    <hr>
';
// --------------------------------------------------------
// PASSER LES DONNEES A MON SCRIPT PHP PAR L'URL AVEC $_GET
// --------------------------------------------------------

// if(!empty($_GET['nombre']) && is_numeric($_GET['nombre'])){

if(!empty($_GET['nombre'])){
    
    // On stocke la valeur de $_GET['nombre'] dans une variable $nbre pour plus de lisibilité/sécurité 
    $nbre = $_GET['nombre'];

    // On affiche sa valeur
    echo 'Le nombre reçu est : ' . $nbre;

    // On vérifie si le nombre est pair ou impair
    if($nbre % 2 == 0){
        echo '<br>Le nombre est pair';
    } else {
        echo '<br>Le nombre est impair';        
    }

}else{
    echo 'Le script ne reçoit pas de nombre';
}