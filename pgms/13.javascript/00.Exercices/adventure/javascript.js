
/* GAME PREPARATION */ 
const startBtn = document.querySelector('.btn-classic');
const message = document.querySelector('.message');
const questions = document.querySelector('.questions');
const img = document.querySelector('.img');
const action = document.querySelector('.action');
const reponses = document.querySelector('.reponses');
let destination = null;
let start = false

function displayResponse(rep) {
    for (let i = 0; i < rep.length; i++) {
        reponses.innerHTML += '<div class="reponse btn" data-action="'+rep[i]['action']+'">'
            + rep[i]['texte'] + 
        '</div>';
    }                        
}

function selectResponse() {
    // Gestion des réponses
    document.querySelectorAll('.reponse').forEach(function(rep) {
        rep.addEventListener('click', function() {
            destination = this.getAttribute('data-action');
            message.innerHTML = destination;
            return destination;            
        });
    });    
}

/* CLICK START BUTTON */
startBtn.addEventListener('click', function()
{                       
  
    questions.setAttribute('style', 'width: 400px; height: 150px; margin: 10px auto; padding: 10px; border: 1px solid rgb(39, 156, 18); border-radius: 5px;');                        
    reponses.setAttribute('style', 'width: 400px; height: 150px; margin: 10px auto; padding: 10px; border: 1px solid rgb(39, 156, 18); border-radius: 5px;');                        
    img.setAttribute('style', 'width: 420px; height: 220px; margin: 10px auto; border: 1px solid rgb(39, 156, 18); border-radius: 5px;');

    // Posez la question
    questions.innerHTML = datas[0]['question'];

    // Affichez l'image
    img.innerHTML = '<img src="img/'+datas[0]['img']+'" alt="image" style="width: 300px; margin: 10px auto; border: 1px solid #000; border-radius: 5px;">';

    // Titre de l'action
    action.innerHTML = "Que faites-vous?<br>";

    // Affichez les réponses
    displayResponse(datas[0]['reponses']);

    // désactiver le bouton btn
    startBtn.setAttribute('style', 'display: none;');

    // Lancer la boucle de jeu
    start = true;
    
    do {
        destination = selectResponse();
    } while (destination != 0);
    


});

/* GESTION DU FOOTER */
const appname = "Adventure Game";
const version = "0.1.0";
const updated = "06/02/2024 16:37";
const footer = document.querySelector('footer');
footer.innerHTML = `${appname} v${version} - Updated: ${updated}`;
