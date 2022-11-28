<?php
$date1 = "12-11-2022";
$date2 = "22-05-2021";

//invalide
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

//valide
if (strtotime($date1) > strtotime($date2)) {
    echo "saucisse";
} else {
    echo "ho hisse";
}

// /!\ $date1 = "12/11/2022" != date1 = "12-11-2022"; /!\
//               mm/jj/yyyy              jj/mm/yyyy


$date1 = date("d-j-Y", strtotime($date1));

//https://www.timestamp.fr/? site pour les timestamp

