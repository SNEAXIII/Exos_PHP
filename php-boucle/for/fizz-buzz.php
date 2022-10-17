<?php

for ($nb = 1;$nb <= 30;$nb++) {
    if ($nb % 15 == 0) {echo "FizzBuzz"." ";}
    elseif ($nb % 5 == 0) {echo "Buzz"." ";}
    elseif ($nb % 3 == 0) {echo "Fizz"." ";}
    else {echo $nb." ";}
}
echo "\n";