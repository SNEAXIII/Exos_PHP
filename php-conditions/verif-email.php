<?php

$email = readline("Saisir une adresse email : ");

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "C'est oui";
} else {
    echo "C'est non";
};