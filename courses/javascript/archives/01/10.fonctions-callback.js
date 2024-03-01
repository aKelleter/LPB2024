// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) N'OUBLIEZ PAS DE DECOMMENTER LA LIGNE CORRESPONDANTE AU FICHIER DANS
// LE FICHIER INDEX.HTML

console.log('START OF FCT CALLBACK ___________________________');

// Une fonction callback, c'est une fonction qui va être utilisée en tant qu'argument par une autre fonction

function usingCallBack(callback){
    // Exécute la fonction callback
    callback(); 
}

usingCallBack(function(){
    console.log('Hello depuis la callback');
});

// Il en existe des spécifiques pour les tableaux..

const numTab = [1,2,3,4];
console.log(numTab);

// Fonction que l'on applique à chaque élément d'un tableau avec .foreach(callback())
numTab.forEach(function(value){
    console.log(value);
});

// La fonction .MAP  effectue une action sur chaque élément d'un tableau et retourner un nouveau tableau (action comprise) l'action avec .map(callback())
const result = numTab.map(function(x){
    return x * 2;
});
console.log(result);

// IDEM (fonction callback) mais avec une fonction flèchée
const result2 = numTab.map(x => x *2);
console.log(result2);

// La fonction .FILTER, filtre les éléments du  tableau passé en paramètre et retourne un nouveau nouveau tableau comme avec la fonction .map
const fruits2 = ['Fraise', 'Pomme', 'Poire'];
const result3 = fruits2.filter(function(fruit){
    return fruit.length > 5;
});
console.log(result3);

// Avec la version fonction flèchée 
// ecriture si il n'y qu'un return comme instruction(on supprime le mot clé return mais il est sous entendu)
const result4 = fruits2.filter(fruit => fruit.length > 5);

// Avec deux instructions au minimum, on place le code entre accolades {}
const result5 = fruits2.filter(fruit => {
    console.log('Liste de fruit(s) : ');
    return fruit.length > 5;
});
console.log(result4);

// La fonction .REDUCE (réduit le nombre de valeurs d'un tableau par accumulation) (a = accumulateur et b la valeur courante) ON peut donner une valeur de départ à l'accumulateur en la passant comme paramètre à reduce (ex 10)
const newTab = [1,2,3,4];
const reduced = newTab.reduce(function(a,b){
    return a + b;
}, 10);

console.log(reduced);


console.log('END OF FCT CALLBACK _____________________________');
