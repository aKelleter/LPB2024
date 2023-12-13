<?php
/* ********************************************************************** */
/* *                          TOOLS FUNCTIONS                           * */
/* *                          ---------------                           * */
/* *              FONCTIONS GENERIQUES : DE TYPE OUTILS                 * */
/* ********************************************************************** */

/**
 * Préparation des données avant insertion dans la base de données
 * 
 * 
 * @param mixed $datas 
 * @return string 
 */
function filterInputs($datas) {

    // Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
    $datas = trim($datas);
    // Supprime les antislashs d'une chaîne
    $datas = stripslashes($datas);
    // Convertit les caractères spéciaux en entités HTML
    $datas = htmlentities($datas);  
    // Supprime les balises HTML et PHP d'une chaîne
    $datas = strip_tags($datas);

    return $datas;
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
