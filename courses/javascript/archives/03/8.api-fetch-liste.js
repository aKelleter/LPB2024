/*
   Création d'une interface avec la méthode fetch()
   
   Pour faire nos tests on va utiliser une API de tests existante :
   https://jsonplaceholder.typicode.com/

   On va utilise cette adresse : https://jsonplaceholder.typicode.com/posts

*/

// Que retourne la méthode fetch()? => Une Promesse
//-- console.log(fetch('https://jsonplaceholder.typicode.com/posts'));

/*
   - On appel la méthode fetch qui questionne l'API qui retourne une "promesse" qui se résout toute seule si l'url de l'API est correcte et que l'API est fonctionelle
   - On appel la méthode .then liée à fetch() et on obtient une réponse avec
   différentes informations dont un body avec les données.
   - On accède au données avec un .json() qui retourne également une "promesse"
   qui va se résoudre si on a bien accès aux données
   - On refait un .then sur la "promesse" de "response" pour accéder aux données
   
*/

// Test dans la console notre réponse
fetch('https://jsonplaceholder.typicode.com/posts').then(response => console.log(response));

// On veut que la réponse soit une liste d'objets Javascript avec .json()
fetch('https://jsonplaceholder.typicode.com/posts')
.then(response => response.json()) 
// On reçoit à nouveau une "promesse", on peut donc lancer un autre .then
.then(datas => console.log(datas)); 

//-------------------------------------------------------------------------

// On déclare et initialise l'objet XHR
const xhr = new XMLHttpRequest();

// On crée un objet sur notre liste
const liste = document.querySelector('.liste');

// On crée un objet sur le bouton
const btn = document.querySelector('.btn'); 

btn.addEventListener('click', () => {

   // On veut que la réponse soit une liste d'objets Javascript avec .json()
   fetch('https://jsonplaceholder.typicode.com/posts')
   // On reçoit à nouveau une "promesse" avec response
   .then(response => response.json()) 
   //On peut donc lancer un autre .then pour accéder aux données et faire ce que l'on a fait précédemment sur la fiche 7.api-xhr-liste.js
   .then(datas => {

      for(i = 0; i < datas.length; i++)
         {
            // Déclaration des nouveaux éléments
            let newLi = document.createElement('li');
            let newTitreCarte = document.createElement('h2');
            let newBodyCarte = document.createElement('p');

            // Assignation des données aux nouveaux éléments
            newTitreCarte.innerText = datas[i].title;
            newBodyCarte.innerText = datas[i].body;
            
            // Ajouter aux nouveau <li> le titre et le body
            newLi.appendChild(newTitreCarte);
            newLi.appendChild(newBodyCarte);

            // Et pour terminer ajouter le li à la liste <ul>
            liste.appendChild(newLi);

         }
   }); 
   
});