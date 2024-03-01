/* 
    Utiliser la fonction clearTimeout()
    pour empêcher l'exécution d'un setTimeout()
*/


// Pour accéder à l'instruction clearTimeout(), il faut mettre setTimeout dans une variable
const timeOut = setTimeout(presentation, 1000);

console.log("1");
console.log("2");
console.log("3");

// On empêche l'exécution de la fonction setTimeout(), en passant notre variable timeOut comme argument à la fonction clearTimeout()
clearTimeout(timeOut);

function presentation(){
    console.log("Hello World");
}

console.log("4");
console.log("5");

/* 
    Dans le code ci-dessus l'instruction ligne 16 n'exécutera la fonction presentation qu'après 2 sec
    Pendant ce temps les autres instruction sont exécutées, nous faisons donc de la programmation asynchrone
*/


// ---------------------------------------------------------------------------------
console.log("-------------------------------------------------------");

// D'autres façons de déclarer un setTimeout()

// On déclare directement la fonction dans le premier paramètre de setTimeout(), avec un nom (pas utile, puisque non réutilisable )
setTimeout(function citation(){
    console.log("Newton est mort, Einstein n'est plus. Et moi-même, je ne me sens pas très bien.[Hoegaarden 1993]");
}, 1000);


// Fonction anonyme
setTimeout(function (){
    console.log("Exige beaucoup de toi-même et attends peu des autres. Ainsi beaucoup d'ennuis te seront épargnés. [Confucius]");
}, 1000);


// Fonction flèchée
setTimeout(() => {
    console.log("La vie, c'est comme une bicyclette, il faut avancer pour ne pas perdre l'équilibre. [A. Einstein]");
}, 1000);

