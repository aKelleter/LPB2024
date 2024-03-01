/* 
    Utiliser la fonction clearTimeout()
*/


// Pour 
const timeOut = setTimeout(presentation, 2000);

console.log("1");
console.log("2");
console.log("3");

// On interrompt
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

