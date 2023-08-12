<?php
// Array Func part 8
// (1) sort = alphabetical order
// (2) rsort 
// (3) asort = based on the values of array
// (4) arsort
// (5) ksort = based on the keys of array
// (6) krsort
// (7) natsort

$names = ["Lotfy", "Mariam", "Menna", "Ahmed","Lotfy", "Mustafa", 1, "1"];

sort($names);

echo '<pre>';
print_r($names);
echo '</pre>';

rsort($names);

echo '<pre>';
print_r($names);
echo '</pre>';


$countries = ["U" => "USA", "EG" => "Egypt", "Om" => "Oman", "S" => "Syria", "Tu" => "Turki"];

asort($countries);// print based on the value of the array
// Egypt, oman, ....

echo '<pre>';
print_r($countries); 
echo '</pre>';

arsort($countries);
// USA, Turki, ....

echo '<pre>';
print_r($countries); 
echo '</pre>';

$codes = ["1" => "USA", "4" => "Egypt", "3" => "Oman", "5" => "Syria", "2" => "Turki"];

ksort($codes); // sorting based on key
// 1, 2, 3,...
echo '<pre>';
print_r($codes); 
echo '</pre>';

krsort($codes);
// 5, 4, 3, ....
echo '<pre>';
print_r($codes); 
echo '</pre>';

$files = ["Photo1.png", "Photo20.png", "Photo3.png"];


/* Array
(
    [0] => Photo1.png
    [1] => Photo20.png
    [2] => Photo3.png
) */
sort($files);
echo '<pre>';
print_r($files);
echo '</pre>';

/* Array
(
    [0] => Photo1.png
    [2] => Photo3.png
    [1] => Photo20.png
) */
natsort($files);
echo '<pre>';
print_r($files);
echo '</pre>';