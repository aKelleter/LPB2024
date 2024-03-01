/*
    Les fonctions flèchées    
*/

// Fonction classique
function foo(){
    return true
}

// A Fonction flèchée : cas d'utilisation
//---------------------------------------
// 1 Assignée à une variable
const foo2 = () => {
    console.log("Exec fct arrowed");
}
foo2();

// 2. Une fonction fléchèe anonyme passée en paramètre
document.body.addEventListener('click', () => {
    console.log("Body Click !");
});

// B Autres fonctions
//-------------------
// 1. Fonction classique anonyme
document.body.addEventListener('click', function() {
    console.log("Body Click 2");
});

// 2. Une fonction nommée (avec référence)
document.body.addEventListener('click', clickBody);
function clickBody(){
    console.log("Click Body");
}


// Détails sur les fonctions flèchées
//---------------------------------

// Fonction flèchée sans accolades, sur une seule ligne
const foo3 = () => console.log("Fct flèchée sur une seule ligne");
foo3();

// Fonction flèchée sans accolades, sur une seule ligne, avec un seul argument
const foo4 = txt => console.log(txt);
foo4("Mon texte");

// Fonction flèchée sans accolades, sur une seule ligne, avec plusieurs arguments
const foo5 = (txt, nb) => console.log(txt, nb);
foo5("Mon âge", 5);

// Le concept de HOISTING
//-------------------------------------------------------------------------------
/*
    En JavaScript, l'anglicisme HOISTING, que l'on peut traduire par « remontée » (voire plus littéralement par « hissage »), ce qui correspond au déplacement de la déclaration des fonctions, variables ou classes en haut de leur portée avant l'exécution du code.
*/

// Appel de foo6()
foo6();

/*
    Déclaration de foo6() en tant que fonction classique 
    Le HOISTING ne fonction pas si la fonction classique est assignée à une variable OU si c'est une FONCTION FLECHEE
*/
function foo6(){
    console.log("FOO 6")
};

// Différence des fonction flèchées avec les OBJETS
//------------------------------------------------------------------------------

const myObj = {
    txt : 'Un text sans rien de particulier',       
    // Attention pas de "this dans une fonction flèchée  
    foo : () => {
        console.log("Mon objet");
    },
    dispTxt : function() {
        console.log(this.txt);

    }
}

myObj.foo();
// OK, mais attention pour rappel, si vous voulez faire référence à l'objet avec le mot clé "this" vous ne pouvez pas utiliser une fonction flèchée. Ces dernières font référence à l'objet global "Window".
myObj.dispTxt();







