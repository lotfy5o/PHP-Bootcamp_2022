<?php
// Array Func part 5
// (1) array_merge
// (2) array_replace
// (3) array_rand
// (4) shuffle


$merge_one = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
$merge_two = ["One" => "HTML", "Four" => "Python"];
/* Array
(
    [One] => HTML
    [Two] => CSS
    [Three] => JavaScript
    [Four] => Python
) */
echo '<pre>';
print_r (array_merge($merge_one, $merge_two));
echo '</pre>';
/* Array
(
    [0] => PHP
    [1] => CSS
    [2] => JavaScript
    [3] => Python
    [4] => Go
) */

// he renumbers the indexes
$merge_three = [10 => "PHP", 20 => "CSS", 30 => "JavaScript"];
$merge_four = [40 => "Python", 10 => "Go"];

echo '<pre>';
print_r (array_merge($merge_three, $merge_four));
echo '</pre>';

$main    = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
$replace = ["One" => "HTML", "Four" => "Python"];

echo '<pre>';
print_r (array_replace($main, $replace));
echo '</pre>';

// he doesn't do renumbering
echo '<pre>';
print_r (array_replace($merge_three, $merge_four));
echo '</pre>';


$nums = ["A", "B", "C", "D"];
echo array_rand($nums). '<br>'; // it print a random (key) not a value

echo $nums[array_rand($nums)]. '<br>'; // this print the value

/* Array
(
    [0] => 0
    [1] => 2
    [2] => 3
) */
echo '<pre>';
print_r (array_rand($nums, 3));
echo '</pre>';

shuffle($nums);

echo '<pre>';
print_r($nums);
echo '</pre>';


