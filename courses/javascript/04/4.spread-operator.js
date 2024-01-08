// Spread Operator
// Etendre un tableau ou un objet


// Etendre un TABLEAU  avec l'opérateur '...'
const arr = [1,2,3,4,5];
console.log (...arr,6,7,8);

// Etendre un OBJET avec un autre OBJET avec l'opérateur '...'

// Déclaration et initialisation de l'objet user
const user = {
    name : 'john',
    age : 25
};

// Déclaration et initialisation de l'objet presentation en ajoutant les propriétés et méthodes de l'objet user 
const presentation = {
    ...user,
    email : 'john@mail.com'
};

console.log(presentation);

