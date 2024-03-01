/*
   Création d'une interface avec l'objet XHR
   
   Pour faire nos tests on va utiliser une API de tests existante :
   https://jsonplaceholder.typicode.com/

   On va utilise cette adresse : https://jsonplaceholder.typicode.com/posts

*/


// On déclare et initialise l'objet XHR
const xhr = new XMLHttpRequest();

// On crée un objet sur notre liste
const liste = document.querySelector('.liste');

// On crée un objet sur le bouton
const btn = document.querySelector('.btn'); 

btn.addEventListener('click', () =>
{
   
   // Debugging
   console.log("Click on btn View Articles");

   // On utilise la méthode open (avec en paramètre le nom de la méthode HTTP (GET) et l'URL) pour configurer notre requête
   xhr.open('GET', 'https://jsonplaceholder.typicode.com/posts');

   xhr.responseType = 'json';

   // Au chargement des données
   xhr.onload = function(){   
      
      // Debugging
      console.log(xhr.response);

      for(i = 0; i < xhr.response.length; i++)
      {
         // Déclaration des nouveaux éléments
         let newLi = document.createElement('li');
         let newTitreCarte = document.createElement('h2');
         let newBodyCarte = document.createElement('p');

         // Assignation des données aux nouveaux éléments
         newTitreCarte.innerText = xhr.response[i].title;
         newBodyCarte.innerText = xhr.response[i].body;
         
         // Ajouter aux nouveau <li> le titre et le body
         newLi.appendChild(newTitreCarte);
         newLi.appendChild(newBodyCarte);

         // Et pour terminer ajouter le li à la liste <ul>
         liste.appendChild(newLi);

      }
   };

   // On envoie la requête
   xhr.send();

});


