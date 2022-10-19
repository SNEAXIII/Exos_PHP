<?php

function recupereReponse(): string
{
    $reponse = readline("Saisir une note (q pour arrêter) : "."\n");
    return $reponse;
}

function siNoteEstCorrecte($note): bool
{
    if ($note >= 0 && $note <= 20) {
        return true;
    }
    return false;

}

function afficheListe($liste) {
    if (count($liste) > 0) {
        foreach ($liste as $elem) {
            echo "$elem ";
        }
    }
}

$listeNotes = [];
$reponseUtilisateur = null;

while (true) {

    $reponseUtilisateur = recupereReponse();
    $siNoteEstValide = siNoteEstCorrecte($reponseUtilisateur);

    if ($siNoteEstValide) {
        $listeNotes[] = $reponseUtilisateur;
    } elseif ($reponseUtilisateur == "q") {
        break;
    } else {
        echo "La note doit être comprise entre 0 et 20"."\n";
    }
}

$nombreNotes = count($listeNotes);

echo "Vous avez saisi $nombreNotes notes."."\n";
echo "Les notes saisies sont ";afficheListe($listeNotes);