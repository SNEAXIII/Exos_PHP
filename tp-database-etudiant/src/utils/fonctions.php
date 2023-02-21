<?php

function calculeAgeEtudiant(string $dateNaissance) : array
{
    $age = date_diff(date_create($dateNaissance),date_create(date("Y-m-d")))->format('%y');
    $couleur = $age<18?"#ff0000":"#33ff00";
    return ["age"=>$age,"couleur"=>$couleur];
}
function formateDate($dateNaissance) : string
{
    return date_create($dateNaissance)->format("d/m/Y");
}