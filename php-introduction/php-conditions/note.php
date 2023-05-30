<?php 
$note = intval(readline("Quelle est votre note? "));
if ($note<10) {
    echo "Vous n'avez pas la moyenne";
} elseif ($note == 10) {
    echo "Vous avez juste la moyenne";
} else {
    echo "BRAVO, vous êtes au dessus de la moyenne";}
