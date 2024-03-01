// !!! ATTENTION !!!
// SI VOUS SOUHAITEZ TESTER CE CODE (AVEC LIVE SERVER) N'OUBLIEZ PAS DE DECOMMENTER LA LIGNE CORRESPONDANTE AU FICHIER DANS
// LE FICHIER INDEX.HTML

console.log('START OF OBJETS DELETE / BRACKET / DOT NOTATION ___________________________');


let chat = {
    race : 'Siamois',
    poids : 3,
    couleur : 'gris'
};

// Utiliser les brackets pour accéder aux propriétés
// Appelé la "bracket notation"
console.log(chat['couleur']);
console.log(chat['poids']);

// OU comme nous l'avons vu précédemment avec le point '.'
// Appelé la "dot notation"
console.log(chat.couleur);

// Afficher le poids
console.log(chat.poids);
// Supprimer la propriété poids du chat
delete chat.poids;
// Essayer d'afficher le poids
console.log(chat.poids);


// On peut créer des objets "complexes"
let chien = {
    nom : 'Scotty',
    race : 'Cavalier King Charles',
    poids : 3,
    couleur : 'brun',
    vaccinations : 
    {
        vacc1 : {
            nom : 'carré',
            date : '10/10/2020'
        },
        vacc2 : {
            nom : 'typhus',
            date : '01/12/2020'
        }
    },
    medecins : [{
        nom1 : 'Bones Vincent',
        nom2 : 'Black James',
        0 : 'Propriété accessible avec un index'
    }]
};

console.log(chien);

// Retourne les noms des médecins du chien + champs index
console.log(chien.medecins[0]['nom1']);
console.log(chien.medecins[0].nom2);
console.log(chien.medecins[0][0]);

// Retourne le nom et la date du premier vaccin
console.log(chien.vaccinations.vacc1.nom, chien.vaccinations.vacc1.date);

console.log('END OF OBJETS DELETE / BRACKET / DOT NOTATION _____________________________');
