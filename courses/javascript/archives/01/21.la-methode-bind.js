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
    },
    getAnnee : function() {        
        console.log(this.annee);        
    }
}

console.log('--- SANS LIAISON ----------------------');

// Ce type d'appel ne fait pas de liaison, il place simplement le contenu de la fonction (le texte, le code de la fonction) dans une variable
let newFct = voiture.myFunction;

// Affiche le texte de la fonction - La fonction est détachée de l'objet, il n'y a pas de liaison
// -- 
console.log(newFct);

// Appel la fonction myFunction de l'objet voiture et donc exécute le console.log de la ligne 10, le 'this' ne fait référence à l'objet, vu qu'il n'y a pas de liaison
// Il affiche donc l'objet parent qui est l'objet global 'Window' ;)
// -- 
newFct();

console.log('--- AVEC LIAISON ----------------------');

// Pour lier la fonction(myFunction) de l'objet voiture à uhe variable (ici newFctBind) on va utiliser la méthode .bind
let newFctBind = voiture.myFunction.bind(voiture);
// -- 
newFctBind();

// Bien entendu vous pouvez accéder directement à la fonction de notre objet de façon classique.
// La fonction .bind est utile si vous souhaitez lier une fonction à une variable
// -- 
console.log(voiture.myFunction()); 

console.log('--- AVEC UN BOUTON ----------------------');

const btn = document.querySelector("button");
// -- 
console.log(btn);

// Il faut effectuer un bind pour accéder aux propriétés et méthodes de l'obkjet
// -- 
btn.addEventListener('click', voiture.getAnnee.bind(voiture));


console.log('END OF THIS _____________________________');
