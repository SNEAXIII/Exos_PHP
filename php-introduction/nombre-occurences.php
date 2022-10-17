<?php
$phrase = readline("Saisir une phrase : ");
$mot = readline("Saisir un mot : ");
echo "le mot $mot apparait ".substr_count(strtolower($phrase, $mot))." fois dans la phrase";