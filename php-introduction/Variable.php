<?php
$age = 5;
$prenom = "jean";
$phrase1 = "salut $prenom qui a $age ans\n";
$phrase2 = 'salut '.$prenom.' qui a '.$age.' ans';
echo $phrase1,$phrase2;
//var_dump($prenom);