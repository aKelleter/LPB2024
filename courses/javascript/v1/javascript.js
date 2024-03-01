    
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
let version = "0.6.0";
let updated = "01/03/2024 16:10";
let footer = document.querySelector('footer');
footer.innerHTML = `Le cours de Javascript v${version} - Updated: ${updated} - LPB 2024 - <a href="#top">Top</a>`;
