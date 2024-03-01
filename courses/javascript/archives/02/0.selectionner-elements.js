// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) N'OUBLIEZ PAS DE DECOMMENTER LA LIGNE CORRESPONDANTE AU FICHIER DANS
// LE FICHIER INDEX.HTML

// LES SELECTEURS UTILES POUR MANIPULER LE DOM
// --------------------------------------------------------
console.log('---- getElementsByClassName() ----');

// Sélectionner un/plusieurs élément(s) à l'aide d'une classe
const premierTitre = document.getElementsByClassName('premier-titre');


// Affiche un TABLEAU HTMLCollection, car il est possible qu'il s'y trouve plusieur éléments de même classe
console.log(premierTitre);

// --------------------------------------------------------
console.log('---- getElementById() ----');

// Sélectionner UN élément à l'aide de son ID(pour rappel, il doit être unique, donc un seul élément !)
const secondTitre = document.getElementById('premier-id');

// Affiche l'élément sélectionner
console.log(secondTitre);


// --------------------------------------------------------
console.log('---- querySelector() ----');

/* Sélectionner UN SEUL  élément au départ de soit :
- de sa balise
- de sa classe 
- de son ID

!!  Si il y en a +ieurs éléments, il retourne le 1er !!

Si on utilise querySelector avec une classe ou un ID, ne pas oublier de faire précédent la classe du '.' ou l'ID du '#'
*/

const titreNaked = document.querySelector('h3');

// Affiche le titre nu (sans classe ou id)
console.log(titreNaked);

// --------------------------------------------------------
console.log('---- querySelectorAll() ----');

// Sélectionner un liste d'éléments qui partage la même classe ou de même type de balise (ex: des <li>)
const allItems = document.querySelectorAll('.item-liste');

// Affiche un TABLEAU (nodeList) avec la liste des éléments
console.log(allItems);


// --------------------------------------------------------
console.log('---- SELECTIONNER PARENTS / ENFANTS ----');

const liste = document.querySelector('ul');

const i2 = document.querySelector('.i2');


// children -> Sélectionne les éléments HTML enfants de cette liste (les <li>)
console.log('--> children'); 
console.log(liste.children);


// childNodes -> Sélectionne tous les noeuds enfants (sans disctinction)
console.log('--> childNodes'); 
console.log(liste.childNodes);


// parentNode -> Retourne le noeud parent 
console.log('--> parentNode'); 
console.log(liste.parentNode);

// parentElement -> Retourne l'élément parent
console.log('--> parentElement'); 
console.log(liste.parentElement);


// firstElementChild -> Retourne le premier enfant
console.log('--> firstElementChild'); 
console.log(liste.firstElementChild);


// lastElementChild -> Retourne le dernier enfant
console.log('--> lastElementChild'); 
console.log(liste.lastElementChild);


// nextSibling -> Retourne les noeuds de même fraterie(frères/soeurs)
console.log('--> nextSibling'); 
console.log(i2.nextSibling);


// nextElementSibling -> Retourne les l'élément suivant de même fraterie(frères/soeurs)
console.log('--> nextElementSibling'); 
console.log(i2.nextElementSibling);

// previousElementSibling -> Retourne l'élément précédent de même fraterie(frères/soeurs)
console.log('--> previousElementSibling'); 
console.log(i2.previousElementSibling);

