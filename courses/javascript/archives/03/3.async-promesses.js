/* 
    LES PROMESSES
*/

/*
    On déclare et intialise une promesse en créeant un objet avec le mot clé "new" 
    suivi du nom de la classe "Promise", ce qui va lancer le constructeur de la classe et créer un objet de type "Promise" dans la variable promise1.
    
    REM: on reviendra plus tard dans le cours sur les classes, les constructeurs et l'orienté objet

    On passe au constructeur de "Promise" une fonction qui va s'exécuter de façon asynchrone, dans cette fonction on aura deux paramètres (des fonctions).
    Une fonction en cas de succès(resolve) et une fonction en cas d'échec(reject).

    On utilise souvent les promesses pour aller chercher des données sur une API

    1. Une promesse doit retourner quelque chose

*/
const promise1 = new Promise((resolve, reject)=>{
    
    console.log("Hello en asynchrone");

    // Tester le resolve et le reject
    const datasOK = false;    

    if(datasOK)
    {
        const datas = {"lat":51.17397,"lng":-1.82238} // Coord. Stonehenge
        resolve({'status' : 1, 'msg' : 'Les données sont arrivées', datas });
    }else{
        const datas = {"lat":0,"lng":0}
        reject({'status' : 0, 'msg' : 'Les données ne sont pas arrivées', datas });
    }    
        
});

// Une fois que promise1 a été exécuté, càd les instructions, le resolve ou le reject avec la réception des données on peut faire un promise.then (qui signifie alors je fais quelque chose)

// Dans ce cas on fait un console.log des valeurs que l'on a reçues
promise1.then((value) => {
    console.log(value);
})

// Il faut traiter les erreurs (reject) avec un catch pour avoir un code complet et éviter les erreurs dans la console
 .catch(() => {
    console.log("la promesse promise1 a rencontré une erreur.")
});


/*
A ECRIRE COMME CI-DESSOUS :

promise1.then((value) => {
    console.log(value);
}).catch(() => {
    console.log("la promesse promise1 a rencontré une erreur.")
});
*/


// Afficher l'objet promise1
console.log(promise1);