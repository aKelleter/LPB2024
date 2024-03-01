/**
 * Liste de questions pour un jeu d'aventure directionnel
 */
const datas =
[       // 0
        {
            question: "Vous êtes dans une forêt sombre, vous entendez un bruit étrange...",
            img: "0.jpg",
            reponses: [
                {
                    texte: "Vous continuez votre chemin",
                    action: 1
                },
                {
                    texte: "Vous rebroussez chemin",
                    action: 2
                },
                {
                    texte: "Vous cherchez une grosse branche pour vous défendre",
                    action: 3
                }, {
                    texte: "Vous avez trop peur, vous quittez le jeu - GAME OVER",
                    action: 0
                }
            ]
        },
        // 1
        {
            question: "Vous arrivez à un croisement, vous entendez un bruit de pas...",
            img: "1.jpg",
            reponses: [
                {
                    texte: "Vous prenez à gauche",
                    action: 4
                },
                {
                    texte: "Vous prenez à droite",
                    action: 5
                },
                {
                    texte: "Vous restez sur place",
                    action: 2
                }, {
                    texte: "Vous avez trop peur, vous quittez le jeu - GAME OVER",
                    action: 0
                }
            ]
        },
        // 2
        {
            question: "Vous tombez sur un loup affamé...",
            img: "2.jpg",
            reponses: [
                {
                    texte: "Vous mourrez dans d'atroces souffrances - GAME OVER",
                    action: 0
                }
            ]
        },
        // 3 
        {
            question: "Vous entendez un bruit de pas...",
            img: "3.jpg",
            reponses: [
                {
                    texte: "Vous vous cachez",
                    action: 7
                },
                {
                    texte: "Vous cherchez à vous défendre",
                    action: 8
                }, {
                    texte: "Vous avez trop peur, vous quittez le jeu - GAME OVER",
                    action: 0
                }
            ]
        },   

];