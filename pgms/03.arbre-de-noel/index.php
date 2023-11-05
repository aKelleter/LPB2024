<?php

    /**
     *  NOEL APPROCHE A GRAND PAS !
     *  Il est temps de penser à fabriquer notre sapin de noël
     *  
     *  Pour se faire, nous allons utiliser ce que nous avons déjà appris, c.à.d.:
     *  Des boucles et des conditions :)
     * 
     *  Le résultat devra ressembler à l'image que vous trouverez dans ce dossier : sapin.png
     *  Le principe de base et d'imbriquer deux boucles for pour réaliser le sapin qui peut être
     *  représenté comme un tableau à deux dimension (des lignes et des colonnes). Notre sapin
     *  est conscrit dans un tableau composé de 10 lignes et 10 colonnes
     *   
     */
    
    CONST NBLIGNE = 15;
    CONST NBCOL = 15;
    CONST CAR = '0';

    for($ligne = 0 ; $ligne < NBLIGNE ; $ligne++)
    {
        for($col = 0 ; $col < NBCOL ; $col++)
        {
            if($col < NBCOL - $ligne)
                echo '&nbsp;';
            else
                echo CAR;            
        }

        echo '<br>';            
    }