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
function convertirDuree(int $dureeMinutes) : string {
    $heures = intval($dureeMinutes / 60);
    $minutes = intval($dureeMinutes % 60);
    $dureeCalculee = $heures.'h'.sprintf("%02d",$minutes)."mn";
    return $dureeCalculee;
}

/**
 * Cette fonction permet de retourner la liste des films
 * @param array $films : le tableau contenant la liste des films
 * @return array : la liste des films
 */
function rechercherFilms(array $films) : array {
    return $films;
}

function chercheFilmParId(array $listeFilms, int $id) : array | null
{
    foreach ($listeFilms as $item) {
        if ($item["id"]==$id) {
            return $item;
        }
    }
    return null;
}

function parcourFilms(array $listeFilms) : void {
    foreach ($listeFilms as $film) {
        afficheFilm($film);
    }
}

function afficheFilm(array $film) : void {
    $image = "./images/".$film["affiche"];
    $titre = $film["titre"];
    $annee = $film["annee"];
    $duree = convertirDuree($film["duree"]);
    $acteur = $film["acteurs"][0];
    $id = $film["id"];
    echo "
    <article>
        <div class='card-header'>
            <img class='card-img' src='$image' alt=''>
        </div class='card-header'>
        <div class='card-body'>
            <span class='card-title'>$titre</span>
            <ul class='card-info-time'>
                <li class='card-date'>
                    <i class='fa-solid fa-calendar-days'></i>
                    <span>$annee</span>
                </li>
                <li class='card-duration'>
                    <i class='fa-regular fa-clock'></i>
                    <span>$duree</span>
                </li>
            </ul>
            <span class='card-text'><bold>Par</bold> $acteur</span>
            <a class='card-btn-detail' href='presentationFilm.php?id=$id'>Voir informations</a>
        </div>
    </article> 
    ";
}