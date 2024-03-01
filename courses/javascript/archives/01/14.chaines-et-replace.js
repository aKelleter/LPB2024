// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) N'OUBLIEZ PAS DE DECOMMENTER LA LIGNE CORRESPONDANTE AU FICHIER DANS
// LE FICHIER INDEX.HTML

console.log('START OF CHAINES ET REPLACE ___________________________');

const str = 'La meilleure voie , est celle du milieu _12/04/2023';   

const regex = /\s/g; // Exemple : tous les espaces

console.log(str.replace(/a/g, 'zzz')); // Remplace le(s) caractère(s) 'a' par la chaîne 'zzz'

console.log(str.replace(regex, ' heu... ')); // Remplaces tous les espaces par des ' heu... '


console.log('END OF CHAINES ET REPLACE _____________________________');
