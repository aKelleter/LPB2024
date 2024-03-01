
// Déclaration et initialisation
function auCarre(n){
    return n * n;
}

// Appel de la fonction
console.log(auCarre(3));


// Fonction qui modifie une variable déclarée en-dehors de son bloc d'instructions
let cpt = 1
function incrCpt(value){
    return cpt = cpt + value;
}

console.log(incrCpt(1));
console.log(cpt);

console.log('--------------------------');

// Fonction qui ne modifie pas la varaible déclarée en-dehors de son bloc d'instructions
let cpt2 = 1
function incrCptPure(value){
    return cpt2 + value;
}

console.log(incrCptPure(1));
console.log(cpt2);

console.log('--------------------------');