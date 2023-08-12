<?php
// Array Func part 9
// (1) array_map
// (2) array_filter
/* 
array_map(
    name of the fun OR anonymous fn,
    first_array,
    second_array
)

*/
function add_title ($fname, $lname) {
    return "Hello Mr $fname $lname";
}

// echo add_title("Lotfy");

$first_names = ["Lotfy", "Mariam", "Menna", "Mustafa", "Ahmed"];
$last_names = ["Moemn", "Amr", "Hager", "Rahma", "Taqwa"];

echo '<pre>';
print_r(array_map("add_title", $first_names, $last_names));
print_r(array_map(fn($f, $l) => "Hello Mr $f $l", $first_names, $last_names));
echo '</pre>';

$nums = [
    1 => 3, 
    6 => 1, 
    3 => 2, 
    4 => 8,
    5 => 4
];

function check_nums ($n1, $n2) {
    return $n1 > 4 || $n2 > 4;
}

/* Array
(
    [4] => 8
) */
echo '<pre>';
// print_r(array_filter($nums, "check_nums")); // filter based on value not the key
// print_r(array_filter($nums, "check_nums", ARRAY_FILTER_USE_KEY)); // filter based on key
print_r(array_filter($nums, "check_nums", ARRAY_FILTER_USE_BOTH)); // filter based on key
echo '</pre>';

// if you uncommented line 34 and 35 it will give an error for the set up here.