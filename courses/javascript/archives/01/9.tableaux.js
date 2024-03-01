// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) N'OUBLIEZ PAS DE DECOMMENTER LA LIGNE CORRESPONDANTE AU FICHIER DANS
// LE FICHIER INDEX.HTML

console.log('START OF TABLEAUX ___________________________');

// Déclarer un tableau simple
let tableau = [5,10,15,20,25];
// INDEX       0  1  2  3  4

// Accès au 3ème élément
console.log(tableau[2]);

// On peut déclarer les tableaux en tant que constantes et modifier les éléments mais pas ajouter ou retirer des éléments ou réassigner une valeur à cette constante
const table = [100,200,300,400];
console.log(table);
table[3] = 500;
console.log(table);

// Connaître la longeur (le nbr d'éléments) d'un tableau avec .length
console.log(tableau.length);

// Exemple si l'on veut connaître le dernier élément d'un tableau
console.log(tableau[tableau.length-1]);

// Les méthodes liées aux tableaux

// Ajouter une valeur à la fin d'un tableau avec .push()
tableau.push(30);
console.log(tableau); 

// Supprimer la dernière valeur d'un tableau avec .pop()
tableau.pop();
console.log(tableau); 

// Supprimer la première valeur d'un tableau avec .shift()
tableau.shift();
console.log(tableau); 

// Ajouter un valeur au début du tableau
tableau.unshift(5);
console.log(tableau); 

// Connaître l'index d'un élément du tableau avec .indexOf()
// Attention si il y a plusieurs valeurs de même valeur, c'est l'index
// de la première valeur qui est retourné
console.log(tableau.indexOf(20));

// La méthode .splice() enlève ou ajoute une série d'éléments dans le tableau
console.log('Tableau de départ : ' + tableau); 

// Démarre à l'index : 0 et supprime les 2 premiers élements
tableau.splice(0,2);
console.log(tableau); 
// Démarre à l'index : 0 et supprime les 0 élement et ajoute 1
tableau.splice(0,0,1);
console.log(tableau); 

// la méthode slice qui découpe une partie d'un tableau et en crée un nouveau (qui retourne le résultat)
tableau = [5,10,15,20,25];
console.log('Tableau de départ : ' + tableau); 

// Découpe une partie du tableau (.slice()) en démarrant de l'index 2 jusqu'à l'index 4 non inclus
console.log(tableau.slice(2,4));
tableau2 = tableau.slice(2,4);
console.log(tableau2);

// Concaténer deux tableaux
console.log('Tableau 1 : ' + tableau);
console.log('Tableau 2 : ' + tableau2);
const tableau3 = tableau.concat(tableau2);
console.log('Tableau 1+2 : ' + tableau3);

// Tester si une valeur donnée existe dans un tableau
console.log(tableau.includes(5));

// Applatir des tableaux (.flat()), il faut indiquer éventuellement le nombre de niveaux
const multitab = [1,2,3,['a','b',['V', 'VI']]];
console.log(multitab);
console.log(multitab.flat());
console.log(multitab.flat(2));

// Transformer un tableau en chaîne de caractère avec .join()
const fruits = ['Fraise', 'Pommes', 'Raisins'];
console.log(fruits); 
// insère automatiquement des virgules entre les éléments
console.log(fruits.join()); 
// aucun espace entre les éléments
console.log(fruits.join(''));
// un espace entre les éléments
console.log(fruits.join(' '));
// un tiret entre les éléments
console.log(fruits.join('-'));

// Renverser les données d'un tableau avec .reverse()
console.log(fruits.reverse());

/*
    Plus d'infos ici :
    https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array
*/ 
console.log('END OF TABLEAUX _____________________________');
