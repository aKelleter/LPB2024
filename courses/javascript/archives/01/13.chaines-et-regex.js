// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) N'OUBLIEZ PAS DE DECOMMENTER LA LIGNE CORRESPONDANTE AU FICHIER DANS
// LE FICHIER INDEX.HTML

console.log('START OF CHAINES ET REGEX ___________________________');

// Les REGEX sont les expressions rationnelles qui nous permettre de vérifier le format des chaînes de caractères

const str = 'La meilleure voie, est celle du milieu _12/04/2023';   

// Exemples de regex 

// Vérifie que 'a' existe au moins une fois dans la chaîne
const regex = /[a]/; 
console.log(str.match(regex));

// Vérifie que les lettres 'e', 'l', 'o' existent et ce pour toutes les occurences grâce à l'option g = global
const regex_global = /[elo]/g; 
console.log(str.match(regex_global));

const regex_az = /[a-z]/g;  // les lettres de a à z (minuscule !)
console.log(str.match(regex_az));

const regex_notaz = /[^a-z]/g;  // ^ = not =  tout ce qui n'est pas en minuscule
console.log(str.match(regex_notaz));

const regex_insaz = /[A-Z]/gi;  // g = global, i = insensible à la casse
console.log(str.match(regex_insaz));

const regex_nums = /[0-9]/g;  //  0-9 = tous le nombres de 0 à 9
console.log(str.match(regex_nums));

const regex_nums2 = /\d/g;  //  d = digit = tous le nombres de 0 à 9
console.log(str.match(regex_nums2));

const regex_notanums = /\D/g;  //  D = not a digit = tous ce qui n'est pas un nombre
console.log(str.match(regex_notanums));

const regex_space = /\s/g;  //  s = space = tous les espaces
console.log(str.match(regex_space));

const regex_notaspace = /\S/g;  //  s = not a space = tous ce qui n'est pas un espace
console.log(str.match(regex_notaspace));

const regex_w = /\w/g;  // Equivalent de : [a-zA-Z0-9_]
console.log(str.match(regex_w));

const regex_notaw = /\W/g;  // INVERSE de [a-zA-Z0-9_]
console.log(str.match(regex_notaw));

// Mélanger sélection [] et les \ antislashs 
const regex_numandspace = /[0-9\s]/g;  // Les nombres et les espaces
console.log(str.match(regex_numandspace));

// Autres source : https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Regular_expressions

console.log('END OF CHAINES ET REGEX _____________________________');
