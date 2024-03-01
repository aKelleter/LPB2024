// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) N'OUBLIEZ PAS DE DECOMMENTER LA LIGNE CORRESPONDANTE AU FICHIER DANS
// LE FICHIER INDEX.HTML

console.log('START OF THIS ___________________________');

// Déclaration d'un objet
const voiture = {
    couleur : 'rouge',
    marque : 'Porsche',
    annee : 2007,
    myFunction : function() {
        // Le mot clé 'this' représente l'objet. !! 'this' est une référence !!
        console.log(this);
        console.log(this.marque);
    }, 
    myArrowFunction : () => {
        console.log('Je suis une voiture');
    },
    myArrowFunctionWithThis : () => {
        console.log(this);
    } 
};

// Appel de la fonction myFunction de l'objet voiture
voiture.myFunction();
voiture.myArrowFunction();


// Que se passe t'il si nous utilisons 'this' en-dehors d'un objet du code
// Il retourne l'objet qui exécute la fonction, dans ce cas la méthode log qui appartient à l'objet global 'Window'
console.log(this);
window.console.log(this);

// Et dans une fonction ? 
function foo(){
    console.log(this);
}

foo();
window.foo();

// La fonction foo() appartient à l'objet global 'Window'  

// Appel de la fonction flèchée de l'objet voiture avec 'this'
voiture.myArrowFunctionWithThis();

// !!! IMPORTANT - A RETENIR !!!
/**
 * VOICI LA GRANDE DIFFERENCE ENTRE LES FONCTIONS CLASSIQUES ET LES FONCTIONS   FLECHEES
 * LE THIS DANS LES FONCTIONS CLASSIQUES VA FAIRE REFERENCE A L'OBJET
 * LE THIS DANS LES FONCTIONS FLECHEES VA FAIRE REFERENCE A L'OBJET GLOBAL
 */

console.log('END OF THIS _____________________________');
