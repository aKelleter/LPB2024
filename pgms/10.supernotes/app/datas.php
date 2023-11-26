<?php

// Tableau qui contient les données de l'utilisateur
$user = [
    "id_user" => 1,
    "login" => "john",
    "passwd" => "mdp123",
    "email" => "johndoe@mail.com",
    "status" => 1
];

// Tableau à 2 dimensions qui contient les notes privées
$notes_privees = [
    ["id_note_priv" => 1 , "titre" => "Mariage de John", "img" => "mariage.jpg" , "date" => "19-07-2023 10:00", "contenu" => "Ne pas oublier de préparer mon discours et de faire un double de ses clés :)"],
    ["id_note_priv" => 2 , "titre" => "Vacances d'été Août 2023", "img" => "vacances.jpg" , "date" => "07-08-2023 06:00", "contenu" => "Quinze jour de vacances au bord de la mer au Bélize !"],
    ["id_note_priv" => 3 , "titre" => "Livraison nouvelle voiture", "img" => "voiture.jpg" ,"date" => "10-10-2023 14:00", "contenu" => "Livraison de la nouvelle voiture, si les délais sont respectés ! "]
];

// Tableau à 2 dimensions qui contient les notes publiques
$notes_publiques = [
    ["id_note_pub" => 1 , "titre" => "Nouveau job", "img" => "apple.jpg" , "date" => "16-05-2023 08:00", "contenu" => "Entrée en fonction dans mon nouveau Job chez Apple USA !"],
    ["id_note_pub" => 2 , "titre" => "Livraison au client (Nike) de son nouveau site web", "img" => "nike.jpg" , "date" => "01-06-2023 14:00", "contenu" => "Rendez-vous chez Nike Belgique pour la livraison et la mise en production de leur nouveau site"],
    ["id_note_pub" => 3 , "titre" => "Prévoir achat d'un nouvel ampli guitare", "img" => "ampli.jpg" ,"date" => "30-06-2023 13:00", "contenu" => "Avant le début de notre tournée en France prévoir l'achat du nouvel ampli ! Yes !"]
];