<?php
$nom = strtolower(readline("Votre nom ? "));
$prenom = strtolower(readline("Votre prenom ? "));
$nombreLettre = strlen($nom);
echo "$prenom.$nom$nombreLettre@societe.com";