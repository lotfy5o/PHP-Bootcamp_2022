<?php
//optional return

$prizes = ["PC", "Playstation", "Xbox", "Apple Tv", "Laptop"];

/* function get_num ($num1, $num2){
    echo $num1 + $num2;
} */
function get_num ($num1, $num2){
    return $num1 + $num2; //anythin after the return it doesn't run
}

/* get_num(2,1);

echo $prizes[3]; */

/* $prize_num = get_num(2, 1);

var_dump($prize_num); */

echo $prizes[get_num(2, 1)];