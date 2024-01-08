// Rest Operator
// Comme le spread mais utilisé dans les paramètres d'une fonction


// Cette fonction affiche en console le nombre passé en paramètre
function arr(nbr)
{
    console.log(nbr);
}

arr(1,2,3,4,5); // Seul le premier chiffre sera affiché dans la console


// Cette fonction affiche en console tout ce qui sera passé dans le paramètre
// En principe des nombres mais en réalité, dans ce cas, vu qu'il n'y a pas de contrôle, tous les types de variables sont passé :)

function arr_ext(...nbr)
{
    console.log(nbr);
}

arr_ext(1,2,3,4,5,'John');