// Les paramètres par défaut

function ajoute(nbr)
{
    let total = 0;

    // Calcul de la somme
    for(let acc of nbr){
        total += acc;
    }

    console.log(total);

}

function ajoute2(nbr = [])
{
    let total = 0;

    // Calcul de la somme
    for(let acc of nbr){
        total += acc;
    }

    console.log(total);

}

// Si on ne passe pas de paramètres à notre fonction cela génère une erreur
//ajoute();

// Dans cette fonctio on a spécifié une valeur par défaut dans la déclaration
ajoute2();

