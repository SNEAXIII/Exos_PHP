<?php
function estPair(int $nombre) : bool {
    return ($nombre % 2 == 0);
}

for ($i=0;$i<10;$i=round($i+.1,1)) {
    echo "$i ==> ".estPair($i)."\n";
//    $i -= 0.5;
}
echo 2.5%2.;