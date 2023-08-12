<?php
$nums = [1, 13, 12, 20, 51, 17, 30];

// Output
/* 6
10
15 */

/* for ($i = 0; $i <= count($nums); $i++){
    if ($nums[$i] % 2 == 0) {
        echo ($nums[$i] / 2), '<br>';
    }
} */

foreach ($nums as $value){
    if ($value % 2 == 0){
        echo ($value / 2). "<br>";
    }
}