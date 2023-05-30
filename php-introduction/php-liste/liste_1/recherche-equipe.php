<?php

function verifieSiChoixDansEquipeBoucle($equipes, $choixUtilisateur) {
    $choixUtilisateur = strtolower($choixUtilisateur);
    $longueurEquipes = count($equipes);
    if ($longueurEquipes > 0) {
        foreach ($equipes as $equipe) {
            if (strtolower($equipe) == $choixUtilisateur){
                return true;
            }
        }
        return false;
    }
    return false;
}

function afficheResultat($siChoixDansEquipe,$choixUtilisateur)
{
    if ($siChoixDansEquipe) {
        echo "L'équipe de $choixUtilisateur participe à la prochaine coupe du monde !";
    } else {
        echo "L'équipe de $choixUtilisateur ne participe pas à la prochaine coupe du monde !";

    }
}

$equipes = ['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];

$choixUtilisateur = ucfirst(strtolower(readline("Saisir une équipe : ")));

echo "Version boucle : "."\n";
$siChoixDansEquipe = verifieSiChoixDansEquipeBoucle($equipes,$choixUtilisateur);
afficheResultat($siChoixDansEquipe,$choixUtilisateur);

echo PHP_EOL;

echo "Version fonctions implementées : "."\n";
$siChoixDansEquipe = in_array($choixUtilisateur,$equipes);
afficheResultat($siChoixDansEquipe,$choixUtilisateur);