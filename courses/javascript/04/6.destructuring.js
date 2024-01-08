// Destructuring
// L'affectation par décomposition

const tab = [1,2,3];

// Si l'on souhaite "utiliser de façon isolée" un élément de ce tableau on pourrait faire :
let element = tab[1];
console.log(element);

// On pourrait utiliser l'AFFECTATION PAR DECOMPOSITION ou DESTRUCTURING

// 1. Pour les tableaux
// Le const ou de let dans la déclaration d'un destructuring pour un tableau n'EST  PAS OBLIGATOIRE
[a,b,c] = tab;
console.log(a,b,c);

// 2. Pour les objets (c'est génial :))
const user = {
    name : 'John',
    age : 25,
    email : 'john@mail.com'
};

// Il faut OBLIGATOIREMENT placer notre destructuring dans un const ou un let
const {name,age,email} = user;
console.log(name,age,email);



