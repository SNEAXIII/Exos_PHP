<?php
$nom = readline("Votre nom ? ");
$prenom = readline("Votre prenom ? ");
echo "Vos initiale sont".strtoupper($prenom[0]).strtoupper($nom[0]);