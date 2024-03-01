// Déclaration d'un objet de façon "classique"
var personne = {
    nom: ['Jean', 'Martin'],
    adresse : {
        rue : 'Mainstreet',
        num : 100,
        cp : '87544-87545',
        ville : 'Los Alamos',
        etat : 'Nouveau Mexique',
        pays : "USA" 
    },
    age: 32,
    sexe: 'masculin',
    interets: ['musique', 'skier'],
    bio: function() {
      alert(this.nom[0] + ' ' + this.nom[1] + ' a ' + this.age + ' ans. Il aime ' + this.interets[0] + ' et ' + this.interets[1] + '.');
    },
    salutation: function() {
      alert('Bonjour ! Je suis ' + this.nom[0] + '.');
    }
  };

// Déclaration d'un objet avec une fonction "contructeur"
function Personne(prenom, famille, age, genre, interets) {
    this.nom = {
      'prenom': prenom,
      'famille' : famille
    };
    this.age = age;
    this.genre = genre;
    this.interets = interets;
    this.bio = function() {
      // On définit une chaîne de caractères et on construit une partie qui sera
      // toujours construite de la même façon.
      let string = this.nom.prenom + ' ' + this.nom.famille + ' a ' + this.age + ' ans. ';
      // On définit une variable qui contiendra le pronom pour la deuxième
      // phrase
      let pronom;

      // Selon le genre, on prend le pronom approprié
      if(this.genre === 'homme' || this.gender === 'Homme' || this.gender === 'h' || this.gender === 'H') {
        pronom = 'Il aime ';
      } else if(this.genre === 'femme' || this.gender === 'Femme' || this.gender === 'f' || this.gender === 'F') {
        pronom = 'Elle aime ';
      } else {
        pronom = this.nom.prenom + ' aime ';
      }

      // On ajoute le pronom à la fin de la chaîne de caractères
      string += pronom;

      // On utilise une autre structure conditionnelle pour construire la
      // la dernière partie de la phrase selon le nombre d'intérêts         
      if(this.interets.length === 1) {
        string += this.interets[0] + '.';
      } else if(this.interets.length === 2) {
        string += this.interets[0] + ' et ' + this.interets[1] + '.';
      } else {
        // S'il y a plus de deux intérêts, on boucle pour les parcourir
        // et on les ajoute à la chaîne de caractères principale en les
        // séparant par une virgule à l'exception du dernier qui sera
        // précédé d'un et et suivi d'un point
        for(let i = 0; i < this.interets.length; i++) {
          if(i === this.interets.length - 1) {
            string += 'et ' + this.interets[i] + '.';
          } else {
            string += this.interets[i] + ', ';
          }
        }
      }

      // Une fois la chaîne construite, on l'affiche avec alert()
      alert(string);
    };

    this.salutation = function() {
      alert('Bonjour ! Je m\'appelle ' + this.nom.prenom + '.');
    };
  };
 
 // Instanciation d'un objet au départ de notre constructeur "Personne"
 let personne1 = new Personne('Jean', 'Biche', 32, 'neutre', ['musique', 'tricot', 'boxe']);

 // Ajout d'une méthode/fonction dans le prototype de notre objet
  Personne.prototype.aurevoir = function() {
    alert(this.nom.prenom + ' est sorti. Au revoir !');
  }