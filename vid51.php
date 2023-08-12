<?php
//anonymous func

function say_hello_to ($someone) use{
    return "hello $someone <br>";
}

echo say_hello_to ("lotfy");
echo '<br>#####<br>';


$say_hello = function () {
    return "hello";
}; // be carfull of the this last (;)

echo $say_hello();

echo '<br>#####<br>';

$say_hola = function ($someone) {
    return "Hola $someone";
}; // be carfull of the this last (;)

echo $say_hola("lotfy");

echo '<br>#####<br>';

$msg = "Hi"; //out of the scope of the function

$say_hi = function ($someone) use ($msg) {
    return "$msg $someone";
}; // be carfull of the this last (;)

echo $say_hi("lotfy");

echo '<br>#####<br>';

$nums = [10, 20, 30, 40, 50];

function add_five($item){
    return $item + 5;
}

// $nums_after_adding_five = array_map("add_five", $nums);
// echo '<pre>';
// print_r ($nums_after_adding_five);
// echo '</pre>';

$nums_after_adding_ten = array_map(function ($item) {return $item + 10;}, $nums);
echo '<pre>';
print_r ($nums_after_adding_ten);
echo '</pre>';