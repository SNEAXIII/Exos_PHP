<?php
$date1 = "10-12-2020";
$date2 = "09-12-2020";


//var_dump($date1);
$timeTest = strtotime($date1);
var_dump (strtotime($date1));
var_dump (strtotime($date2));
var_dump (strtotime("10 december 2020"));


//echo "$date1 > $date2 --> ".$date1 > $date2;