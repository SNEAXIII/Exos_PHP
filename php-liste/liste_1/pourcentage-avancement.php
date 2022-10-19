<?php

$nombreAInserer = 100000;

$listeNombre = array_fill(0,$nombreAInserer, "biscuits");

for ($i=0; $i < $nombreAInserer; $i++) {
    echo "\ren cours ".round($i*100/$nombreAInserer)."%";
}