// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) N'OUBLIEZ PAS DE DECOMMENTER LA LIGNE CORRESPONDANTE AU FICHIER DANS
// LE FICHIER INDEX.HTML

console.log('START OF CHAINES ET FONCTIONS ___________________________');

const str = 'La meilleure voie est celle du milieu';   

// La méthode .charAt() - Retourne le caractère présent à l'index passé en paramètre
console.log(str.charAt(4));

// La méthode .includes() - Recherche la présence d'une chaîne de caractères passée en paramètre et retourne "true" si c'est le cas et "false" dans le cas contraire 
console.log(str.includes('voie'));

// La méthode .indexOf() - Retoune l'index du début de la chaîne passée en paramètre
console.log(str.indexOf('est'));

// La méthode .charCodeAt() - Retourne le code UNICODE d'un caractère, en fonction de la position du caractère dans la chaîne L = 76, A = 65, ...
console.log(str.charCodeAt(0));

// La méthode .slice() - Coupe une partie de la chaîne avec en paramètre la position de départ de la coupe (les chiffres positifs retourne la nouvelle sous chaîne du chiffre jusqu'à la fin et chaîne et les chiffres négatifs de la fin de la chaîne jusqu'au chiffre)
console.log(str.slice(10));
console.log(str.slice(-10));

// La méthode .split() - Crée un tableau à partir d'une chaîne de caractères
const strToArray = str.split();
const strToArray2 = str.split('');
const strToArray3 = str.split(' ');
console.log(strToArray);
console.log(strToArray2);
console.log(strToArray3);

// La méthode .join() - Crée et renvoie une nouvelle chaîne de caractères en concaténant tous les éléments d'un tableau (ou d'un objet semblable à un tableau). La concaténation utilise la virgule ou une autre chaîne, fournie en argument, comme séparateur
console.log(strToArray3.join('-'));

// La méthode .concat() - Combine le texte de plusieurs chaînes avec la chaîne appelante et renvoie la nouvelle chaîne ainsi formée.

const str1 = 'Hello';
const str2 = 'World';

console.log(str1.concat(str2));
console.log(str1.concat(' ', str2));
console.log(str2.concat(', ', str1));



console.log('END OF CHAINES ET FONCTIONS _____________________________');
