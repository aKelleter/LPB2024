/* 
    Utiliser la fonction setInterval()
    Pour exécuter une/des intruction(s) à un interval régulier (toutes les x secondes)
*/


// Pour accéder à l'instruction clearTimeout(), il faut mettre setTimeout dans une variable
let compteur = 0;
const interval = setInterval(incr, 1000);

// On empêche l'exécution de la fonction clearInterval()
//-- clearInterval(interval);


// Déclaration d'une fonction qui incrémente le compteur (ligne 8)
function incr(){
    compteur++;
    console.log(compteur);
}
