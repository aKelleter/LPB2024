<?php
/* ********************************************************************** */
/* *                          TOOLS FUNCTIONS                           * */
/* *                          ---------------                           * */
/* *        FONCTIONS D'AFFICHAGE DE L'INTERFACE UTILISATEUR            * */
/* ********************************************************************** */

/**
* Retourne le code html des boutons radios indiquant 
* le status de publication de l'article
* 
* @param boolean     $published
* @return string
*/
function displayFormRadioBtnArticlePublished($published, $typeForm = 'ADD')
{
   
    $html = '';

    // Si c'est le formulaire d'ajout d'article
    if($typeForm == 'ADD'){
        $html .= '
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" value="1" id="published_article" name="published_article">          
        </div>
    ';
    // Si c'est le formulaire de modification d'article
    }elseif($typeForm == 'EDIT'){

        if($published){        
            $html .= '
            <div class="form-check form-switch">
                <input class="form-check-input" value="1" type="checkbox" id="published_article" name="published_article" checked>          
            </div>
            ';
        }else{
            $html .= '
            <div class="form-check form-switch">
                <input class="form-check-input" value="1" type="checkbox" id="published_article" name="published_article">        
            </div>
            ';
        }
    }

    echo $html; 
}

