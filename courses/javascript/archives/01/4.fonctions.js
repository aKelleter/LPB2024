// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) N'OUBLIEZ PAS DE DECOMMENTER LA LIGNE CORRESPONDANTE AU FICHIER DANS
// LE FICHIER INDEX.HTML

console.log('START OF FONCTIONS / BASES ___________________________');

// Les fonctions, les bases
// C'est un bloc de code qui va exécuter une suite d'instructions qui doit être déclaré et initialisé pour ensuite être éventuellement appelé


// Les déclaration des fonctions clasiques
function presentation(){
    console.log("Je suis une fonction");
}

function presentationWithReturn(chaine){
    let txt = "I am " + chaine;
    return txt;
}

function addition(a, b){
    return a + b;
}

// Les appel des fonctions

presentation();

console.log(presentationWithReturn("Batman"));
console.log(presentationWithReturn("beautyfull girl"));
console.log(addition(3,8));

console.log('START OF FONCTIONS / ++ ___________________________');

// (After 2015)

// Les fonctions flèchées
const additionFL = (a, b) =>{
    return a + b;
}

// Si coeur de la fonction ne possède qu'une seule instruction on peut raccourcir l'appel et la déclaration
const soustractionFL = (a, b) => console.log(a-b);

// Interaction avec un élément du DOM de votre page
const btn = document.querySelector('#btn');

btn.addEventListener('click', () =>{
    console.log("Tu as cliqué sur le bouton");
});

console.log(additionFL(3,10));
soustractionFL(3,10);


console.log('END OF FONCTIONS _____________________________');
