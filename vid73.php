<?php
// Math Func part 1

echo abs(10) . '<br>';
echo abs(0) . '<br>';
echo abs(-20) . '<br>';


//mt_rand = mersenne twister random number generator algorithm

// echo rand(). '<br>';
// echo mt_getrandmax(). '<br>';
echo rand(0, mt_getrandmax()). '<br>';
echo rand(50, 60). '<br>';


echo 11 / 5 . '<br>'; // 2.2
echo gettype(11 / 5) . '<br>'; // double

echo intdiv(11, 5). '<br>'; // 2
echo gettype(intdiv(11, 5)). '<br>'; // integer

// it removed the .5 and then do the remainder
echo 11.5 % 5 . '<br>'; // 1
echo gettype(11 % 5) . '<br>'; // integer

// it do the remainder and then return what ever is left
echo fmod(11.5, 5) . '<br>'; // 1.5
echo gettype(fmod(11.5, 5)) . '<br>'; // double









