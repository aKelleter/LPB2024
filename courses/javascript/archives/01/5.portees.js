// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) N'OUBLIEZ PAS DE DECOMMENTER LA LIGNE CORRESPONDANTE AU FICHIER DANS
// LE FICHIER INDEX.HTML

console.log('START OF PORTEE DES VARIABLES ___________________________');

// Déclarée en dehors d'un bloc cette variable est globale
let txt = "Hello World";

function conslog(){
    
    let varLocale = "Variable à portée locale";

    console.log("Bienvenue dans la console du navigateur");    
    console.log(txt);

}

console.log(varLocale);
conslog();

console.log('END OF PORTEE DES VARIABLES _____________________________');
