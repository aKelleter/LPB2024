/*
   Appel basique avec l'objet XHR
   
   Pour faire nos tests on va utiliser une API de tests existante :
   https://jsonplaceholder.typicode.com/

   On va utilise cette adresse : https://jsonplaceholder.typicode.com/posts

*/

/*
   Historiquement, avant les "Promesses", on utilisait les objets XMLHttpRequest (XHR) permettent d'interagir avec des serveurs. On peut ainsi récupérer des données à partir d'une URL sans avoir à rafraîchir complètement la page. Cela permet à une page web d'être mise à jour sans perturber les actions de l'utilisateur. 
*/

// On déclare et initialise l'objet XHR
const xhr = new XMLHttpRequest();

// On utilise la méthode open (avec en paramètre le nom de la méthode HTTP (GET) et l'URL) pour configurer notre requête
xhr.open('GET', 'https://jsonplaceholder.typicode.com/posts');

// Que fait-on quand on reçoit les données

// 3 FACONS DE FAIRE

// 1 Réception du format brut Text
xhr.onload = function(){
   // ATTENTION: xhr.response est une chaîne de caractères par un Json
   console.log(xhr.response);
};

// 2 Transformer en objet JS avec JSON.parse
xhr.onload = function(){
   // On peut parser avec la méthode JSON.parse et recevoir des objets Javascript
   console.log(JSON.parse(xhr.response));
};

// 3 Signaler avant le type de réponse reçue et indiquer 'json'
xhr.responseType = 'json';
xhr.onload = function(){
   // ATTENTION: xhr.response contient cette fois une liste d'objets Javascript
   console.log(xhr.response);
};

// 4. On envoie la requête
xhr.send();