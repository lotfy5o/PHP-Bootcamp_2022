<?php
// Array Func part 10
// (1) array_reduce

function add ($n1, $n2) {
    return $n1 + $n2;
}

$nums = [10, 20, 50, 100, 10];

echo array_reduce($nums, "add") . '<br>'; // 190
echo array_reduce($nums, "add", 100) . '<br>'; // 290, the 100 here is the initial value

// the process goes like this:
// 100 (the initial) + 10 = 110 + 20 = 130 + 50 = 180 + 100 = 280 + 10 = 290
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// explaining the process with code:
function add1 ($carry, $item){
    echo "$carry <br>";
    echo "$item <br>";
    echo $carry + $item . "<br>";
    echo "############# <br>";
    
    return $carry + $item;
}

echo array_reduce($nums, "add1", 100) . '<br>'; // 290, the 100 here is the initial value