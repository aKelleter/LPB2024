    
/**
 * CONFIGURATION DU COURS
 */

const VERSION = "0.12.1";
const UPDATED = "23/04/2024 16:25";

// AFFICHER : false ou CACHER : true - les liens des solutions
const HOLLOW = false;

/**
 * Gestion du menu de navigation
 */
let menu = document.querySelector('nav');

if(path === "root") {
    menu.innerHTML = '<a class="btn-mini" href="../../../index.php">LPB2024</a> <a class="btn-mini" href="index.html">Index du Cours</a>';
}else if(path === "chapter")  {
    menu.innerHTML = '<a class="btn-mini" href="../../../../index.php">LPB2024</a> <a class="btn-mini" href="../">Index du Cours</a> <a href="index.html" class="btn-mini">Chapitre en cours</a>';
}else {
    menu.innerHTML = '<a class="btn-mini" href="../../../index.php">LPB2024 </a> <a class="btn-mini" href="../">Index du Cours</a> <a href="index.html" class="btn-mini">Chapitre en cours</a>';
}

/**
 * Gestion du footer
 */
let footer = document.querySelector('footer');
footer.innerHTML = `Le cours de Javascript v${VERSION} - Updated: ${UPDATED} - LPB 2024 - <a href="#top">Top</a>`;

/**
 * Cacher ou afficher les liens des solutions
 */
if(HOLLOW) {
    let links = document.querySelectorAll('a.hollow');
    links.forEach(link => {
        // Ajouter un attribut href vide
        link.setAttribute('href', 'javascript:void(0)');
        // Effacer le lien
        link.setAttribute('style', 'display: none;');   
    });
}
