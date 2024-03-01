// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) N'OUBLIEZ PAS DE DECOMMENTER LA LIGNE CORRESPONDANTE AU FICHIER DANS
// LE FICHIER INDEX.HTML

// CREER ET INSERER DES ELEMENTS DU DOM
// --------------------------------------------------------

// On place en variable l'élément de classe '.pas-de-contenu'
const noContent = document.querySelector('.pas-de-contenu');
console.log(noContent);

// Ajouter du texte dans la balise
//-- noContent.innerText = "Hello depuis le JS";

console.log('----------------------------');

// On place en variable l'élément de classe '.pas-de-contenu'
const parent = document.querySelector('.parent');
console.log(parent);

// Ajouter un élément HTML dans un élément parent
//-- parent.innerHTML = "<p>Un paragraphe dans un élément parent";

console.log('----------------------------');

// 1. Créer un nouvel élément HTML
let newElement = document.createElement('li');

// 2. Ajouter un texte à cet élément
newElement.innerText = 'Nouvel Item';

// 3. Ajouter l'élément à la fin de la liste (par ex)

// Attention n'ajoute qu'une seule fois le nouvel élément
// Ci-dessous dans la liste, mais si on décommente la ligne 33 (appendChild dans le body)
// L'élément de la liste disparait, il faut alors créer plusieur nouveaux éléments
const liste = document.querySelector('ul');
// -- liste.appendChild(newElement);

// Ajouter le nouvel élément au body (à la fin du body)
// -- document.body.appendChild(newElement);


console.log('----------------------------');

// Supprimer le troisième élément de la liste
// -- liste.children[2].remove();

// Supprimer toute la liste
// -- liste.remove();

// Remplacer un élément
// -- liste.children[1].replaceWith(newElement);
