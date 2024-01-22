
/**
 * Gestion du menu de navigation
 */
let menu = document.querySelector('nav');

if(path === "root") {
    menu.innerHTML = '<a class="btn-mini" href="index.html">Index du Cours</a> <a href="index.html" class="btn-mini">Chapitre en cours</a>';
}else if(path === "chapter")  {
    menu.innerHTML = '<a class="btn-mini" href="../">Index du Cours</a> <a href="index.html" class="btn-mini">Chapitre en cours</a>';
}else {
    menu.innerHTML = '<a class="btn-mini" href="../">Index du Cours</a> <a href="index.html" class="btn-mini">Chapitre en cours</a>';
}

/**
 * Gestion du footer
 */
let footer = document.querySelector('footer');
footer.innerHTML = 'Le cours de Javascript - LPB 2024';