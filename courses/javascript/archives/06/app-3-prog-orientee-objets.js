//---------------------------------------------
// Programmation Orientée Objet
//---------------------------------------------

//---------------------------------------------
// 1 . LES OBJETS DE BASE
//---------------------------------------------


// On déclare un objet de base en Javascript
const voiture = {
    marque : 'Ford',
    annee : '1976',
    couleur : 'Bleu',
    rouler : function () {
        console.log('Vroumm');
    }
};

// Appel de la méthode rouler de l'objet voiture
voiture.rouler();

// Accès à la propriété marque de l'objet
console.log(voiture.marque);

// Vérifier si un objet possède une propriété avec .hasOwnProperty
console.log(voiture.hasOwnProperty('couleur'));

// Retourner toutes les valeurs des propriétés d'un objet avec Object.values(NOM_DE_L_OBJET)
console.log(Object.values(voiture));

// Retourner toutes les clés des propriétés d'un objet avec Object.keys(NOM_DE_L_OBJET)
console.log(Object.keys(voiture));

console.log("-------------------------------");

// ---------------------------------------------
// 2 . LES CLASSES
// ---------------------------------------------

//---------------------------------------------
// Déclaration d'une classe
//---------------------------------------------

class Voiture 
{
   // Déclaration de la méthode constuctor (le constructeur de la classe exécuté lors de chaque instanciation de la classe)    
   constructor(marque, annee)
   {
        // Définition des propriétés de l'objet
        this.marque = marque;
        this.annee = annee;
   }

}
//---------------------------------------------
// Instanciations de la classe 
// (création d'un nouvel objet lors de chaque instanciation)
//---------------------------------------------

const voiture1 = new Voiture("Toyota", 2020);
const voiture2 = new Voiture("Honda", 2023);
const voiture3 = new Voiture("Audi", 2022);

console.log(voiture1);
console.log(voiture2);
console.log(voiture3);

console.log("-------------------------------");

//---------------------------------------------
// Quelques classes natives au langage Javascript
// Tels que : Promise, XMLHttpRequest,...
//---------------------------------------------

let newDate = new Date();
console.log(newDate);

let regex = new RegExp(/abc/, 'g');
console.log(regex);


console.log("-------------------------------");

//---------------------------------------------
// Les méthodes dans le classes
//---------------------------------------------


class Voiture2 
{
   // Déclaration de la méthode constuctor (le constructeur de la classe exécuté lors de chaque instanciation de la classe)    
   constructor(marque, annee)
   {
        // Définition des propriétés de l'objet
        this.marque = marque;
        this.annee = annee;
   }

   // Méthode dateSortie() de la classe Voiture2
   dateSortie(){
    console.log(`Date de sortie de la ${this.marque} : ${this.annee}`);
   }

}

const supercar = new Voiture2("Fisker Karma", 2015)
const supercar2 = new Voiture2("McLaren P1", 2013)
const supercar3 = new Voiture2("Ferrari Monza SP2", 2010)

console.log(supercar);
supercar.dateSortie();
supercar2.dateSortie();
supercar3.dateSortie();

console.log("-------------------------------");

//---------------------------------------------
// Le méthod chaining / les chaînes de méthodes
//---------------------------------------------

class Voiture3 
{
   // Déclaration de la méthode constuctor (le constructeur de la classe exécuté lors de chaque instanciation de la classe)    
   constructor(marque, annee, option)
   {
        // Définition des propriétés de l'objet
        this.marque = marque;
        this.annee = annee;
        this.option = option
   }

   ajoutOption(nomOption){
    this.option++;
    console.log(`Ajout de l'option ${nomOption}, nombre d'option : ${this.option}`);
    return this;
   }

   // Méthode dateSortie() de la classe Voiture2
   dateSortie(){
    console.log(`Date de sortie de la ${this.marque} : ${this.annee}`);
   }

}


const bolide = new Voiture3("Ferrari Monza SP2", 2010, 0);
console.log(bolide);

bolide.ajoutOption('Spoiler avant');
bolide.ajoutOption('Spoiler arrière');
bolide.ajoutOption('Jantes performance');

// On peut faire ces 3 instructions en une seule avec le méthode chaining
// Pour ce faire, il ne faut pas oublier de faire un "return this;" à la fin de la méthode
// Fonctionne avec plusieurs méthodes différentes
bolide
.ajoutOption("Freins carbonne haute densité")
.ajoutOption("Peinture forza azura")
.ajoutOption("Ecran 12 pouces");

console.log("-------------------------------");

//---------------------------------------------
// Les sous-classes
//---------------------------------------------

// Déclaration d'une classe Moto au départ de la classe Voiture3
class Moto extends Voiture3
{
    assurance()
    {
        console.log("Couverture assusrance tous risques");
    }
}

const moto1 = new Moto("Bmw", 2021, 0);
moto1.ajoutOption("Ligne échappement Akrapovik");
console.log(moto1);
moto1.assurance();

console.log("-------------------------------");

//---------------------------------------------
// Le prototype
//---------------------------------------------

// Log d'un objet
console.log({a: 'a'});

// Méthode disponible dans les prototypes de tous les objets javascripts
console.log({a: 'a'}.hasOwnProperty('a'));

// Log d'un tableau
const tab = [1,2,3];
console.log(tab);

// Méthode disponible dans les prototypes de tous les objets et tableaux(objets spéciaux) javascripts
tab.push(4);
console.log(tab.length);
console.log(tab);

// Réutilisons une de nos classes et instancions un nouvel objet
const herbie = new Voiture3("VW Coccinelle", 1965, 0);

// On observe deux sections Prototype, celle de notre objet dans laquelle on retrouve les méthodes de l'objet
// Et la seconde avec toutes les méthodes génériques à tous les objets
console.log(herbie);

console.log("-------------------------------");

//---------------------------------------------
// Les fonctions constructeur
// Utilisées avant l'existence des classes
//---------------------------------------------

// Fonction constructeur
function Personnage(nom, taille){
    this.nom = nom;
    this.taille = taille;
    
    // Cette fonction ne sera oas dans le prototype, elle est parmis les propriétés !
    this.avancer = function(){
        console.log(`${this.nom} avance...`);

    }
}

const perso1 = new Personnage('John', 190)
const perso2 = new Personnage('Jane', 174)

console.log(perso1, perso2);

// !!! La fonction avancer() ne se retrouve pas dans le prototype elle est vue comme une propriété.
// Pour chaque objet, on va avoir en mémoire une nouvelle fonction, ce qui, en fonction du nombre d'objets,
// pourrait envahir et charger inutilement la mémoire. Et donc, est suceptible de poser des problèmes.

perso1.avancer();

// Ce qu'il faut faire pour éviter cela
// On ajoute une méthode dans le prototype
Personnage.prototype.reculer = function(){
    console.log(`${this.nom} recule...`);
}

perso2.reculer();


console.log("-------------------------------");
