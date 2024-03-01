// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) LANCER LE FICHIER EVENEMENTS-SOURIS.HTML
// CONSEIL : ESSAYER LES EVENEMENTS UN PAR UN, COMMENTER LES AUTRES

// LES EVENEMENTS LIES A LA SOURIS
// --------------------------------------------------------

// Les évènements liés à la souris
const bloc = document.querySelector('.bloc');

// On lui passe une fonction flèchées, c'est une des façons de faire
// Avec les évèments on peut passer un argument à la fonction (event)

    bloc.addEventListener('click', (event) =>{
        
        // Affiche un texte dans le bloc
        bloc.innerText = "CLICKED !";

        // Affiche les propriétés de l'évenement dans la console
        console.log(event);
});


// On ajoute une écoute sur un évenement, sur l'évènement de type 'dblclick'

    bloc.addEventListener('dblclick', (event) =>{
        
        // Affiche un texte dans le bloc
        bloc.innerText = "DOUBLE CLICKED !";

        // Affiche les propriétés de l'évenement dans la console
        console.log(event);
    });

// On ajoute une écoute sur un évenement, sur l'évènement de type 'mousedown' - cliqué

    bloc.addEventListener('mousedown', (event) =>{
        
        // Affiche un texte dans le bloc
        bloc.innerText = "MOUSEDOWN !";

        // Affiche les propriétés de l'évenement dans la console
        console.log(event);
    });

// On ajoute une écoute sur un évenement, sur l'évènement de type 'mousedown' - relaché

    bloc.addEventListener('mouseup', (event) =>{
        
        // Affiche un texte dans le bloc
        bloc.innerText = "MOUSEUP !";

        // Affiche les propriétés de l'évenement dans la console
        console.log(event);
    });


// On ajoute une écoute sur un évenement, sur l'évènement de type 'mouseenter' - souris dedans

    bloc.addEventListener('mouseenter', (event) =>{
        
        // Affiche un texte dans le bloc
        bloc.innerText = "MOUSE IS ENTER !";

        // Affiche les propriétés de l'évenement dans la console
        console.log(event);
    });

// On ajoute une écoute sur un évenement, sur l'évènement de type 'mouseleave' - souris dehors

    bloc.addEventListener('mouseleave', (event) =>{

        // Affiche un texte dans le bloc
        bloc.innerText = "MOUSE IS OUT !";

        // Affiche les propriétés de l'évenement dans la console
        console.log(event);
    });


// On ajoute une écoute sur un évenement, sur l'évènement de type 'mouseover' - survol avec la souris

    bloc.addEventListener('mouseover', (event) =>{

        // Affiche un texte dans le bloc
        bloc.innerText = "MOUSE IS OVER !";

        // Affiche les propriétés de l'évenement dans la console
        console.log(event);
    });

// Un petit plus pour afficher les coordonnées de la souris 
let posx = null;
let posy = null;

// On fait un querySelector sur notre <h3>
const titreH3 = document.querySelector('h3');

// On ajoute une écoute sur un évenement, sur l'évènement de type 'mousemove' - Surveille si  la souris bouge

    bloc.addEventListener('mousemove', (event) =>{
        
        // Affiche un texte dans le bloc
        bloc.innerText = "MOUSE MOVE !";    

        // Affiche les propriétés de l'évenement dans la console
        console.log(event);

        // Initialisation des positions X et Y
        posx = event.clientX;
        posy = event.clientY;

        titreH3.innerText = `Pos X : ${posx} / Pos Y : ${posy}`;
    });

