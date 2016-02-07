<?php
//Iterate from 25 to 250
for ($i = 25; $i <= 250; $i++) {
    if ($i % 7 == 0 && $i % 5 == 0) {
        echo "TipTop \n";
    } elseif ($i % 5 == 0) {
        echo "Top \n";
    } elseif ($i % 7 == 0) {
        echo "Tip \n";
    } else {
        echo $i . "\n";
    }
}
