<?php

date_default_timezone_set("Africa/Cairo");

$d = date_create();


echo date_format($d, "Y"). '<br>'; // 2023
echo date_format($d, "y"). '<br>';  // 23

echo date_format($d, "F"). '<br>'; // August
echo date_format($d, "M"). '<br>'; // Aug
echo date_format($d, "m"). '<br>'; // 08

echo date_format($d, "l"). '<br>'; // Tuesday
echo date_format($d, "D"). '<br>'; // Tue
echo date_format($d, "d"). '<br>'; // 01
echo date_format($d, "j"). '<br>'; // 1
echo date_format($d, "z"). '<br>'; // 212 of 364 days of the year
echo date_format($d, "S"). '<br>'; // st as in first
// t => the no. of days inside that month
echo date_format($d, "t"). '<br>'; // 31


