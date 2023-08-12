<?php


/* $arr = ["A", "B", "C", "D", "E"];

function count_elment($array){
    $cnt = 0;
    foreach($array as $element){
        $cnt++;
    }
    return $cnt;
}

echo '<pre>';
print_r(array_map("count_elment", $arr));
echo '</pre>';
 */
// Output
// 5


// the next warning happens cuz 
// the foreach expects string and 
// what is passed through is an array

/* 
Warning:  foreach() argument must be of type array|object, 

*/


$arr = ["A", "B", "C", "D", "E"];
function count_elements($arr) {
    $count = 0;

    foreach ($arr as $element) {
        $count++;
    }

    return $count;
}

// this is the line to fix the above example
$arr = array("A", "B", "C", "D", "E");
$result = array_map("count_elements", array($arr));

print_r($result);

