// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) LANCER LE FICHIER DECOUVERTE.HTML


let bonjour2 = document.getElementById("b3");
let ajouter2 = document.getElementById("b4");

bonjour2.addEventListener('click', alerte2);
ajouter2.addEventListener('click', ajout2); 

function alerte2(){
    console.log('Bonjour'+' Alain');
    alert('Bonjour');
    
}
function ajout2(){
    let para = document.createElement('p');
    para.textContent = 'Paragraphe ajouté';
    document.body.appendChild(para);
}
