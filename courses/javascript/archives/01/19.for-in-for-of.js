// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) N'OUBLIEZ PAS DE DECOMMENTER LA LIGNE CORRESPONDANTE AU FICHIER DANS
// LE FICHIER INDEX.HTML

console.log('START OF FOR IN / FOR OF ___________________________');

// Déclaration d'un objet
const voiture = {
    couleur : 'rouge',
    marque : 'Porsche',
    annee : 2007
};

// Parcours de l'objet avec une boucle for..in
for(let property in voiture)
{
    console.log(property, voiture[property]);   
}



// Accès direct aux propriétés
console.log(voiture.couleur);
console.log(voiture['couleur']);

const mois = ['Janvier', 'Février', 'Mars'];

// Parcours du tableau une boucle for..of
// Utilisable également sur les chaînes de caractères
for(let _month of mois)
{
    console.log(mois.indexOf(_month), _month);   
}


console.log('END OF FOR IN / FOR OF _____________________________');
