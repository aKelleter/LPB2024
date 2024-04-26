    
/**
 * CONFIGURATION DU COURS
 */

const VERSION = "0.15.1";
const UPDATED = "26/04/2024 16:05";

// AFFICHER : false ou CACHER : true - les liens des solutions
const HOLLOW = false;

let linkFavicon = document.querySelector('link[rel="icon"]');

/**
 * Gestion du menu de navigation
 */
let menu = document.querySelector('nav');

if(path === "root") {
    menu.innerHTML = '<a class="btn-mini" href="../../../index.php">LPB2024</a> <a class="btn-mini" href="index.html">Index du Cours JS</a>';
    linkFavicon.setAttribute("href", "assets/img/favicon.ico");
}else if(path === "chapter")  {
    menu.innerHTML = '<a class="btn-mini" href="../../../../index.php">LPB2024</a> <a class="btn-mini" href="../">Index du Cours JS</a> <a href="index.html" class="btn-mini">Leçons du chapitre en cours</a>';
    linkFavicon.setAttribute("href", "../assets/img/favicon.ico");
}else {
    menu.innerHTML = '<a class="btn-mini" href="../../../index.php">LPB2024 </a> <a class="btn-mini" href="../">Index du Cours</a> <a href="index.html" class="btn-mini">Leçons du chapitre en cours</a>';
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
