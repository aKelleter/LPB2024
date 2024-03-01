// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) N'OUBLIEZ PAS DE DECOMMENTER LA LIGNE CORRESPONDANTE AU FICHIER DANS
// LE FICHIER INDEX.HTML

console.log('START OF CONDITIONS ___________________________');

const nb = 99;

// < > <= >= == ===
if(nb > 50)
{
    console.log('Condition respectée : nb est supérieure');
}else{
    console.log('Condition non respectée : nb est inférieure');
}

if(nb === 50)
{
    console.log('Condition respectée : nb est égal à 50');
}else if(nb > 80){
    console.log('Condition respectée : nb est supérieure à 80');
}else{
    console.log('Condition respectée : nb est un autre chiffre');
}

// Les opérateurs de comparaison et / ou

// si nb est strictement inférieur ou égal à 50 ET si nb est strictement supérieur ou égal à 90
// De façon générale, on commence par la borne inférieure, l'inverse de cette condition

// ET (&&)
const nb2 = 45;
if(nb2 < 50 && nb2 > 40) 
    console.log('nb2 est compris entre 41 et 49');

// OU (||)
const nb3 = 15;
if(nb3 < 20 || nb3 > 50 ) 
    console.log('nb3 est inférieur à 20 OU supérieur à 50');

// NON LOGIQUE (!)
const nb4 = -1;
if(!(nb4 > 0))
    console.log(`nb4(${nb4}) est supérieur à 0`);
else
    console.log(`nb4(${nb4}) est inférieur à 0`);

// EGALITE STRICTE (===) ET NON STRICTE (==)    

// INEGALITE OU DIFFERENT DE STRICTE (!==) ET NON STRICTE (!=)
console.log (10 !== '10');


console.log('END OF CONDITIONS _____________________________');
