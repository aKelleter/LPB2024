/*
    Let et const
    Les portées (rappel)
*/

function foo(){

    if(true)
    {
        var txt1 = "txtVAR"; // Portée dans toute la fonction (function scope)
        let txt2 = "txtLET"; // Portée dans le bloc (bloc scope)
        
        // On peut afficher les deux variables
        console.log(txt1, txt2);
    }

    console.log(txt1);
    console.log(txt2);
}

foo();

// !!! On ne peut pas afficher txt1 qui n'existe pas dans ce contexte
//-- console.log(txt1);

// !!! On ne peut pas accéder à txt2 qui n'existe pas dans ce contexte
//-- console.log(txt2);