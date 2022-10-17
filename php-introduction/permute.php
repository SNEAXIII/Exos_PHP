<?php
$nombre1 = readline("Choisissez un nombre (nombre1)");
$nombre2 = readline("Choisissez un nombre (nombre2)");
$nombreTemporaire = $nombre1;
$nombre1 = $nombre2;
$nombre2 = $nombreTemporaire;
echo "nombre 1 est égal a $nombre1, nombre2 est égal a $nombre2" ;