// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) LANCER LE FICHIER EVENEMENTS-LES-AUTRES.HTML
// CONSEIL : ESSAYER LES EVENEMENTS UN PAR UN, COMMENTER LES AUTRES

// LES AUTRES EVENEMENTS COURAMMENT UTILISES
// --------------------------------------------------------


// On va attacher des évènement à l'objet global window
// ----------------------------------------------------

// Evènement 'load' = Quand la page est chargée complètement
// Pour lancer des opérations à la fin du chargement d'un site/app par exemple

    window.addEventListener('load', () =>{
        console.log("Le site est chargé");
    });


// Evènement 'load' = Quand la page commence a chargé son contenu

    window.addEventListener('DOMContentLoaded', () =>{
        console.log("Le DOM est en cours de chargement...");
    });


// Evènement 'scroll' = Quand on scroll le contenu de la page

    window.addEventListener('scroll', () =>{
        console.log("Scroll détecté");
    });

// Evènement 'keydown' = Quand on appuie sur une touche du clavier

    window.addEventListener('keydown', (e) =>{
        console.log("Appui sur une touche du clavier détecté : " + e.key);
    });

// Evènement 'keyup' = Quand on relache une touche du clavier

    window.addEventListener('keyup', (e) =>{
        console.log("Touche relachée : " + e.key);
    });


// On va attacher des évènement aux éléments des formulaires
//----------------------------------------------------------------------

// Un évènement lié aux input
document.getElementById('name').addEventListener('input', () => {
    console.log("L'input name reçoit des données");
});

document.querySelector('form').addEventListener('submit', (e) => {
    // Evite l'actualisation de la page
    e.preventDefault();

    console.log("Formulaire envoyé !");
});