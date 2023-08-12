<?php
//arrow function

$say_hello = fn () => "hello";
; 

echo $say_hello(); 
echo '####<br>';


$func2 = fn($someone) => "hello $someone <br>";
echo $func2 ("lotfy"), '<br>';

$nums = [10, 20, 30, 40, 50];
$nums_after_adding_ten = array_map(fn($item) => $item + 10, $nums); 
// I don't know why he deleted the semi colon after 10 of the line above
echo '<pre>';
print_r ($nums_after_adding_ten);
echo '</pre>';