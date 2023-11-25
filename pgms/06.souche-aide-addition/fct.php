<?php

function affichageAideALaDivision($montantTotal, $nbPersonnes)
{
    echo "A PAYER   {$montantTotal} <br>";
    echo "========================= <br>";
    echo "Aide à la division <br><br>";

    $montantParPersonne = $montantTotal/$nbPersonnes;

    echo "{$montantTotal} / {$nbPersonnes} = {$montantParPersonne} <br>";

    for($nbp = 2 ; $nbp < $nbPersonnes ; $nbp++ )
    {
        echo "{$montantParPersonne} * {$nbp} = " . $montantParPersonne * $nbp . '<br>';
    }

    echo "<br> MERCI - A BIENTOT<br>";

}
