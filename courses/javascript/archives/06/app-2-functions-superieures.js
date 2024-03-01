// Programmation Impérative
// Nous implémentons de façon explicite chaque étape de la résolution du problème
//------------------------------------------------------------

// Notre mission, créer un tableau avec uniquement des chiffres pairs au départ d'un tableau source

// Le tableau source
const tabNum = [0,1,2,3,4,5,6,7,8,9,10];

// On déclare notre tableau récepteur
let tabPair = [];

// On Parcours le tableau source pour remplir notre tableau (pairs)
for(let i = 0 ; i < tabNum.length ; i++)
{
    if(tabNum[i] % 2 === 0)
        tabPair.push(tabNum[i]);
}

// On affiche le tab
console.log(tabPair);

console.log('----------------------------');

// La Programmation Déclarative
// On va résoudre notre problème en utilisant certaines expressions/instructions
//-----------------------------------------------------------------------------

const tabNum2 = [0,1,2,3,4,5,6,7,8,9,10];

// Cette fonction flèchée va retourner true ou false si pair ou impair
const checkPair = n => n % 2 === 0; 

// Test de checkpair()
console.log(checkPair(5)); // false

// On utilise la méthode filter et en callback notre fonction checkPair pour générer un nouveau de de nombres pairs (filter est ce que l'on appel une fonction d'ordre supérieur qui va prendre en argument une fonction callback).
// Il est induit ici, que cette ligne retourne un nouveau tableau, ce n'est pas impérativement écrit mais induit par la méthode filter.
const newTab = tabNum2.filter(checkPair);

// Affichage
console.log(newTab);

console.log('----------------------------');

// Utiliser des fonctions comme expression
//----------------------------------------

// Retourne le carré d'un nombre (fctCarre contient une fonction flèchée qui retourne le carré d'un nombre)
const fctCarre = n => n * n;

// Retourne le type d'une valeur (fctReturnType contient une fonction flèchée qui retourne le type d'une variable)
const fctReturnType = n => typeof n; 

// On déclare une méthode manipuleData() qui reçoit et utilise en paramètre d'autres fonctions
// C'est ce que l'on appel une fonction d'ordre supérieur
const manipuleData = (val, fctCarre, fctReturnType) => {
    let valFinale;
    valFinale = carre(val);
    return `Valeur finale ${valFinale} et c'est un type : ${type(val)}`;
}

console.log(manipuleData(4, carre, returnType));





