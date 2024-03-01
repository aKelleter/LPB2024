// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) N'OUBLIEZ PAS DE DECOMMENTER LA LIGNE CORRESPONDANTE AU FICHIER DANS
// LE FICHIER INDEX.HTML

console.log('START OF VALEURS PRIMITIVES ET REFERENCES ___________________________');


/* 
En javascript, ce que l'on appel les valeurs primitives ce sont :
    - number
    - string
    - boolean
    - undefined
    - null
Et les valeurs de références :
    - object (objet)
    - array (tableau)
*/

// 1. Représentation du fonction des valeurs primitives
console.log('Primitives : ');

// Valeur Primitive
let a = 'abc'; 
// On place UNE COPIE de la valeur de a dans b
let b = a; 
console.log(a, b);

// !!! Modifier la valeur de a, ne change pas la valeur de b
// Il n'y a pas de lien entre a et b
a = 'zzz';
console.log(a, b);

// 2. Représentation du fonction des valeurs par références (pointe vers)
console.log('Références : ');

// Un objet est une variable qui va fonctionner par référence
let obj1 = {str : 'abc'};

// On place UNE REFERENCE de l'objet1 dans l'objet2 (on dit que l'objet2 va pointer vers l'objet1)
let obj2 = obj1;
console.log(obj1, obj2);

// Si l'on modifie la propriété de 'str' d'obj1, on modifie également la valeur de la propriété 'str' d'obj2, car obj contient une référence, un lien, un pointeur vers obj1
obj1.str = 'zzz';
console.log(obj1, obj2);

// Idem pour les tableaux
let arr1 = [1,2,3,4,];
let arr2 = arr1;
console.log(arr1, arr2);

// Ajoute un élément
arr1.push(10);
console.log(arr1, arr2);








console.log('END OF VALEURS PRIMITIVES ET REFERENCES _____________________________');
