<?php

$date = new DateTime();
var_dump($date);
$date = DateTime::createFromFormat("d/m/Y", "26/04/2023");
var_dump($date);
