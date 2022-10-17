<?php

date_default_timezone_set('Europe/Paris');

$date = date("l");
echo "On est le ".date("d/m/Y"."\n");
if ($date == "Saturday") {
    echo "Je vous souhaite un bon week-end";
} elseif ($date == "Sunday") {
    echo "Je vous souhaite un bon dimanche";
} else {
    echo "Je vous souhaite un bonne journée";
}