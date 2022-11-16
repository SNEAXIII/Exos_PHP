<?php

function recupereNomPrenom(): array
{
    $nom = readline("Saisissez votre nom : ");
    $prenom = readline("Saisissez votre prénom : ");
    return [
        "prenom" => $prenom,
        "nom" => $nom,
    ];
}

function afficheIdentite() {
    $identite = recupereNomPrenom();
    echo "Votre identitée est : ".ucfirst(strtolower($identite["prenom"]))." ".strtoupper($identite["nom"]);
}

afficheIdentite();