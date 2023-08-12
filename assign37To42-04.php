<?php
$start = 10;
$end = 0;
$stop = 3;

// Needed Output
/* 10
09
08
07
06
05
04
03 */

for ($start = 10; $start > $end; $start--){
    if ($start == 2){
        break;
    }
    echo "$start <br>";
}