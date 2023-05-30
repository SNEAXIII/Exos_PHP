<?php
session_start();
if (!isset($_SESSION["panier"])) {
    resetSession()
    ;
}
function resetSession(): void
{
    $_SESSION["panier"] = [];
    $_SESSION["panier"][0] = 0;
    $_SESSION["client"] =
        [
            "nom" => "",
            "prenom" => "",
            "adresse" => "",
            "codePostal" => ""
        ];
}
