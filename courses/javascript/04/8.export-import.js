// Les modules et export / import

// L'avènement des framework Javascript (React, Angular, VueJS, ...) a ammener les notions de modules et de composants. Les composants de ces framework sont des modules.

// Pour travailler avec des modules en Javascript natif, il faut le signaler lors du chargment du fichier JS dans votre par HTML en indiquant type="module"

// Dans la réalité on ne le fera pas en Javascript natif mais avec les framework
// On importe les données que l'on souhaite
import data4, {data1, data2} from './module.js';

// On affiche les données importées dans la console
console.log(data1, data2);

// L'export default ----------------------

// Affiche dans la console l'export default (objets, tableaux, variables)
console.log(data4);


// Dans le cas d'une méthode/fonction, on importe l'"export default". On donne le nom que l'on souhaite puisque l'on sait qu'il ne peut y avoir qu'un seul "export default"

import maFonctionExportee from './module.js';

// Exécute la méthode renvoyée par l'export default
// maFonctionExportee();