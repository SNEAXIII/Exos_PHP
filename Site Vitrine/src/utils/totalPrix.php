<?php
function total($session) {
    $prix = 0;
    foreach ($session["panier"] as $service) {
        $prix+=$service;
    }
    return [$prix,round($prix*1.2,2)];
}