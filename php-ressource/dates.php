<?php
$date1 = "12-11-2022";
$date2 = "22-05-2021";

if ($date1 > $date2) {
    echo "saucisse";
} else {
    echo "ho hisse";
}

//ne marche pas car:
//
//for ($i = 0;$i>max(count($l1),count($l2));$i++) {
//    if (!$l1[$i] == $l2[$i]) {
//        pass
//    } else {
//        break
//    }
//}

if (strtotime($date1) > strtotime($date2)) {
    echo "saucisse";
} else {
    echo "ho hisse";
}

$date1 = "12/11/2022";
$date2 = "22/05/2021";
