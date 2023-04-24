<?php
include_once 'src\modele\etudiantDB.php';

const LISTEMOIS = array(
    "01" => "Janvier",
    "02" => "Février",
    "03" => "Mars",
    "04" => "Avril",
    "05" => "Mai",
    "06" => "Juin",
    "07" => "Juillet",
    "08" => "Aout",
    "09" => "Septembre",
    "10" => "Octobre",
    "11" => "Novembre",
    "12" => "Décembre"
);

function calculeAgeEtudiant(string $dateNaissance) : array
{
    $age = date_diff(date_create($dateNaissance),date_create(date("Y-m-d")))->format('%y');
    $couleur = $age<18?"#ff0000":"#379A28FF";
    return ["age"=>$age,"couleur"=>$couleur];
}
function formateDate($date) : string
{return date_create($date)->format("d/m/Y");}

function convertisEntierEnMois($date_mois) : string | null
{
    if (array_key_exists($date_mois,LISTEMOIS)) {
        return LISTEMOIS[$date_mois];
    }
    return null;
};

function siOuvert():bool
{
    $timeStamp = time();
    $jour = date('N', $timeStamp);
    $heure = date("H", $timeStamp);
    $minute = date("i", $timeStamp);
    $minutesCourante = $heure * 60 + $minute;
    $horraires = recupereHorraire();
    foreach ($horraires as $jour) {
        if(isset($jour['heure_matin_debut'])){
            $minutesDebut = intval(substr($jour['heure_matin_debut'], 0, 2)) * 60 + intval(substr($jour['heure_matin_debut'], 3, 2));
            $minutesFin = intval(substr($jour['heure_matin_debut'], 0, 2)) * 60 + intval(substr($jour['heure_matin_debut'], 3, 2));
            if ($minutesDebut <= $minutesCourante && $minutesCourante <= $minutesFin)
            {
              return true;
            };
        }
        if (isset($jour['heure_aprem_debut'])) {
            $minutesDebut = intval(substr($jour['heure_matin_debut'], 0, 2)) * 60 + intval(substr($jour['heure_matin_debut'], 3, 2));
            $minutesFin = intval(substr($jour['heure_matin_debut'], 0, 2)) * 60 + intval(substr($jour['heure_matin_debut'], 3, 2));
            if ($minutesDebut <= $minutesCourante && $minutesCourante <= $minutesFin)
            {
                return true;
            };
        }
    }
    return false;
};