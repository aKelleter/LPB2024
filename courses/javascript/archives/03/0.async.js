/* 
    ASYNCHRONE
    ----------
    La programmation asynchrone est une technique qui permet à un programme de démarrer une tâche à l'exécution potentiellement longue et,
    au lieu d'avoir à attendre la fin de la tâche, de pouvoir continuer à réagir aux autres évènements pendant l'exécution de cette tâche. 
    Une fois la tâche terminée, le programme en reçoit le résultat.
*/

/*
    Pour commencer voyons les deux méthodes simples pour faire de l'asynchrone
    - setTimeout = Exécute une/des instruction(s) au bout d'un certain nombre de millisecondes
    - setInterval = Exécute une/des instruction(s) toutes les x millisecondes
*/

// Le premier argument c'est la fonction a exécuté et le second argument le temps à attendre avant d'exécuter cette fonction millisecondes)
setTimeout(presentation, 2000);

console.log("1");
console.log("2");
console.log("3");

// Déclaration de la fonction présentation()
function presentation(){
    console.log("Hello World");
}

console.log("4");
console.log("5");

/* 
    Dans le code ci-dessus l'instruction en ligne 16 n'exécutera la fonction presentation qu'après 2 sec
    Pendant ce temps les autres instruction sont exécutées, nous avons ici un exemple d'exécution asynchrone
*/

