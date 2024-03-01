// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) N'OUBLIEZ PAS DE DECOMMENTER LA LIGNE CORRESPONDANTE AU FICHIER DANS
// LE FICHIER INDEX.HTML

console.log('START OF TABLEAUX ET BOUCLES ___________________________');

// Déclarer un tableau simple
let tableau = [1,2,3,4,5,6,7];

// Utiliser la boucle for pour passer dans les différents éléments d'un tableau
for(let i = 0 ; i < tableau.length ; i++)
{
    console.log(tableau[i]);        
}

console.log("------------------------------"); 

// La même chose en utilisant la méthode .FOREACH (déjà vue dans les fonctions callback) accessible aux variables de type tableau
tableau.forEach(function(item){
    console.log(item);        
});


console.log('END OF TABLEAUX ET BOUCLES _____________________________');
