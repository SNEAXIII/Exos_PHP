<?php
$phrase = new Phrase("Je suis en train d'apprendre le langage PHP.");
echo $phrase->toString();
echo $phrase->calculerNombreMots(). PHP_EOL ;
echo $phrase->getMotPosition(7) . PHP_EOL ;
echo $phrase->getType(). PHP_EOL ;
echo $phrase->calculerNombreLettres() . PHP_EOL ;
echo $phrase->getMotOccurrences("le");