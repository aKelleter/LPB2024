// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) N'OUBLIEZ PAS DE DECOMMENTER LA LIGNE CORRESPONDANTE AU FICHIER DANS
// LE FICHIER INDEX.HTML

console.log('START OF LES OBJETS ___________________________');

// Création et initialisation d'un objet
// Avec une / des propriétés (variables) et une / des méthodes
let personne = {
        prenom : 'Alain',
        age : 25,
        taille : 185,
        genre : 'M',
        presentation : function(){
            console.log("Je m'appelle Alain");
            //return true;
        }
} 

// Accéder aux propriétés et méthodes de l'objet
console.log(personne.age);
console.log(personne.presentation());

// Ajouter une propriété après la création de l'objet
personne.passion = ['Lecture', 'Sport'];

// Affiche l'objet en entier
console.log(personne); 

// Affiche la première passion index 0
console.log(personne.passion[0]); 


console.log('END OF LES OBJETS _____________________________');
