/* 
   ASYNC / AWAIT

   async = c'est comme une promesse qui s'auto résout seule (resolve) et on peut passer à l'instruction .then directement

   await = permet d'attendre le résultat d'une promesse

   Utiliser async/await, nous permet d'attendre tous les résultats de nos promesses (on peut en écrire plusieurs). On peut ainsi lancer plusieurs actions asynchrones et attendre leurs résultats avec "await", pour ensuite manipuler les données comme nous le souhaitons.
*/

async function maFonction(){

   // Déclare une promesse qui après une seconde fait un resolve avec 'Action effectuée'
   const p1 = new Promise((resolve, reject) => {
      setTimeout(() => resolve('Action effectuée'), 1000);
   });

   // Attend le résultat d'une promesse p1
   let resultat = await p1;
   console.log(resultat);
};

maFonction();