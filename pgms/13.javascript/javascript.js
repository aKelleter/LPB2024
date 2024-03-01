    
/**
 * Gestion du menu de navigation
 */
let menu = document.querySelector('nav');

if(path === "root") {
    menu.innerHTML = '<a class="btn-mini" href="index.html">Index du Cours</a>';   
    menu.innerHTML += ' <a class="btn-mini" href="00.Exercices/adventure/">Jeu Adventure</a>';

}else if(path === "chapter")  {
    menu.innerHTML = '<a class="btn-mini" href="../">Index du Cours</a> <a href="index.html" class="btn-mini">Chapitre en cours</a>';    
}else {
    menu.innerHTML = '<a class="btn-mini" href="../">Index du Cours</a> <a href="index.html" class="btn-mini">Chapitre en cours</a>';
    
}

/**
 * Gestion du footer
 */
let version = "0.5.8";
let updated = "25/01/2024 18:05";
let footer = document.querySelector('footer');
footer.innerHTML = `Le cours de Javascript v${version} - Updated: ${updated} - LPB 2024 - <a href="#top">Top</a>`;
