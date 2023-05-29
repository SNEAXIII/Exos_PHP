<?php
function total($session,float $tauxPourcentage) {
    $prix = 0;
    foreach ($session["panier"] as $service) {
        $prix+=$service;
    }
    return [
        number_format($prix, 2, ',', ' '),
        number_format($prix*(1+$tauxPourcentage), 2, ',', ' ')
    ];
}

