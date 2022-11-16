<?php
function increment(int &$nb): void
{
    $nb+=1;
}
$nombre = 0;
increment($nombre);
echo $nombre;