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
            echo " $elem";
        }
    }
}

function moyenneNoteDe10A20($liste) {
    if (count($liste) == 0) {
        return null;
    }

    $nombreNotesValide = 0;
    $totalNote = 0;

    foreach ($liste as $note) {
        $siNoteEstSuperieureA10 = $note >= 10;
        if ($siNoteEstSuperieureA10) {
            $nombreNotesValide++;
            $totalNote += $note;
        }
    }
    if ($nombreNotesValide != 0) {
        $moyenne = round($totalNote / $nombreNotesValide,2);
        return $moyenne;
    }
    return null;

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

$siNoteDansNombreNote = $nombreNotes > 0;

if ($siNoteDansNombreNote) {
    $moyenneNote = moyenneNoteDe10A20($listeNotes);
    echo "Vous avez saisi $nombreNotes notes."."\n";
    echo "Les notes saisies sont";afficheListe($listeNotes); echo "\n";
    if ($moyenneNote != null) {
        echo "La moyenne des notes supérieures ou égales à 10 est $moyenneNote";
    } else {
        echo "Il n'y a aucune note supérieure ou égale à 10";
    }
} else {
    echo "Vous n'avez pas saisi de notes";
}




