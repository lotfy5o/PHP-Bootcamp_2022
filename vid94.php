<?php

date_default_timezone_set("Africa/Cairo");

$d = date_create();
// $d = date_create("2022-10-01 15 : 10 : 10");

// *** the last videos **** //

// echo date_format($d, "Y"). '<br>'; // 2023
// echo date_format($d, "y"). '<br>';  // 23

// echo date_format($d, "F"). '<br>'; // August
// echo date_format($d, "M"). '<br>'; // Aug
// echo date_format($d, "m"). '<br>'; // 08

// echo date_format($d, "l"). '<br>'; // Tuesday
// echo date_format($d, "D"). '<br>'; // Tue
// echo date_format($d, "d"). '<br>'; // 01
// echo date_format($d, "j"). '<br>'; // 1
// echo date_format($d, "z"). '<br>'; // 212 of 364 days of the year
// echo date_format($d, "S"). '<br>'; // st as in first
// // t => the no. of days inside that month
// echo date_format($d, "t"). '<br>'; // 31

// **** end of the last video **** //

echo date_format($d, "Y-m-d g a"). '<br>'; //2023-08-02 2 pm
echo date_format($d, "Y-m-d g A"). '<br>'; //2023-08-02 2 PM
// h added zero to the left of hte num => 02, 03 ...
// and g without the zero
echo date_format($d, "Y-m-d h A"). '<br>'; //2023-08-02 02 PM
// G capital is for 24 hrs without the zero
// H capital is for 24 hrs with the zero
echo date_format($d, "Y-m-d G "). '<br>'; //2023-08-02 22 
echo date_format($d, "Y-m-d H "). '<br>'; //2023-08-02 22 
