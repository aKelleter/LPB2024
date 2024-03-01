// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) N'OUBLIEZ PAS DE DECOMMENTER LA LIGNE CORRESPONDANTE AU FICHIER DANS
// LE FICHIER INDEX.HTML

console.log('START OF VARIABLES _______________________________________');

// Constantes (non réassignable)
const prenom = 'Jane';


// Variables
let nom = "Doe";

// Utilisation du var. Cela date d'avant 2015 (let et const n'existaient pas)
// Actuellement, on n'utilise plus le mot clé var
var number = 10; 

// Règles de nommage des variables
// Préconisation du camelCase comme vu précedemment dans d'autres langages (cours PHP)
const prenomUser = "Bill";

// Les différents types de variables
const typeString = "L'homme qui en savait trop";
const typeNumber = 95;
const typeUndefined = undefined;
const typeObj = {
    width: 100,
    height: 50,
    depth: 20
};
const typeArray = [1, 2, 3, 4, 5];
//                 0  1  2  3  4
const typeBool = true;


console.log(prenom + ' ' + nom);
console.log(prenomUser);
console.log(typeString);
console.log(typeNumber);
console.log(typeUndefined);
console.log(typeObj);
console.log(typeObj.width);
console.log(typeArray);
console.log(typeArray[3]);
console.log(typeArray.length);
console.log(typeBool);

console.log('END OF VARIABLES _______________________________________');
