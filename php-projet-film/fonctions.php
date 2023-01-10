<?php

function affiche_sous_liste(array $sous_liste) {
    foreach ($sous_liste as $key => $elem){
        echo "$key --> $elem"."\n";
    }
}

/**
 * Cette fonction permet de convertir une durée (exprimée en minutes) en une chaine de caractères avec le format hmn
 * Exemple : 121mn -> 2h01mn
 * @param int $dureeMinutes
 * @return string
 */
//function convertirDuree(int $dureeMinutes) : string {
//
//}

/**
 * Cette fonction permet de retourner la liste des films
 * @param array $films : le tableau contenant la liste des films
 * @return array : la liste des films
 */
//function rechercherFilms(array $films) : array {
//    return $films;
//}

/**
 * Cette fonction permet de rechercher et retourner un film dont on connait l'id
 * @param array $films : le tableau contenant la liste des films
 * @param int $id : id du film à rechercher
 * @return array|null : Si le film est trouvé, on retourne le film (tableau associatif) sinon on retourne la valeur null
 */
//function rechercherFilmParID(array $films, int $id) : array|null {
//
//}
