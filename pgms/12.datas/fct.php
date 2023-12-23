<?php

/**
 * Fonctions Liste les répertoires du dossier courant
 * 
 * @return array|null 
 */
function listOfDir() {
    
    $dirs = null; 
    $titre = null;
    $id = null;           
    $compteur = 0;
    $dossiers = glob('*');

    // Classement des dossiers afin qu'ils soient affichés par ordre alphabétique / croissant
    asort($dossiers); 
    
    // Lister les dossiers
    foreach($dossiers as $repertoire) 
    {
        // Vérifier si c'est un dossier que l'on traite et non un fichier
        if(is_dir($repertoire)) 
        {
            $id = $repertoire;            
            $dirs[$compteur] = $id;            
            $compteur++; 
        }
    }
    
    return $dirs;    
}

/**
 * Affiche la liste des dossiers au format HTML
 * 
 * @param mixed $list 
 * @return void 
 */
function displayListHTML($list) {
    
    $string = '';
    if(!empty($list) && is_array($list)) 
    {
        $string .= '<ul>';                
        // Afficher les dossiers
        foreach($list as $item) 
        {
            $string .= '<li><a href="'.$item.'">'.$item.'</a></li>';
        }
        $string .= '</ul>';           
       
    }else{
        $string .= 'Aucun chapitre n\'est disponible pour le moment.';
    }

   
    
    echo $string;
}

/**
 * Affiche le pied de page au format HTML
 * 
 * @param string $name 
 * @param string $version 
 * @param string $update 
 * @return void 
 */
function displayFooterHTML($name = APP_NAME, $version = APP_VERSION, $update = APP_UPDATE) {
    $string = '';
    $string .= '<p>© '.date('Y').' - '.$name.' - v'.$version.' - '.$update.'</p>';
    echo $string;
}

/**
 * Affiche l'entête au format HTML
 * 
 * @param string $title 
 * @param string $path 
 * @return void 
 */
function displayHeadSection( $path = './', $title = APP_NAME) {
    $string = '';
    $string .= '
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="'.$path.'favicon.png">
        <link rel="preconnect" href="https://fonts.gstatic.com">   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/2.0.0/modern-normalize.min.css" integrity="sha512-4xo8blKMVCiXpTaLzQSLSw3KFOVPWhm/TRtuPVc4WG6kUgjH6J03IBuG7JZPkcWMxJ5huwaBpOpnwYElP/m6wg==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
        <link rel="stylesheet" href="'.$path.'style.css">
        <title>'.$title.'</title>
        ';
    echo $string;
}

/**
 * Display an array variable in a more readable way
 * 
 * @param mixed $array 
 * @param string $info
 * @param string $type 'PR' for print_r() or 'VD' for var_dump()
 * @return void 
 */
function disp_ar($array, $info = null, $type = 'PR') {

    if($type == 'PR')
    {
        echo '<pre>';
        echo (isset($info)?'<h4>' . $info . '</h4>':'');
        print_r($array);
        echo '</pre>';
    }elseif($type == 'VD')
    {
        echo '<pre>';
        echo (isset($info)?'<h4>' . $info . '</h4>':'');
        var_dump($array);
        echo '</pre>';
    }
    
}