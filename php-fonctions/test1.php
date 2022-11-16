<?php
const EOL = "\n";

function direBonjour() : void {
    echo "Bonjour !!!".EOL;
}

function direBonjourPrenom(string $prenom) : void {
    echo "Bonjour $prenom!!!".EOL;
};

direBonjourPrenom("oreo");