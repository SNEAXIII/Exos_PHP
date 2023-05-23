<?php
include_once "datefr.php";
$date = new DateFr("22/04/2023");
echo $date->format() . PHP_EOL;
$date->ajouterMois(3);
echo $date->format() . PHP_EOL;
$date->ajouterJour(5);
echo $date->format() . PHP_EOL;
$date->soustraireJours(5);
echo $date->format() . PHP_EOL;
$date->soustraireMois(9);
echo $date->format() . PHP_EOL;
$date2 = new DateFr("12/05/2024");
echo $date->diffJours($date2) . PHP_EOL;
