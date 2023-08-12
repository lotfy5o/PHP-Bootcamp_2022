<?php

date_default_timezone_set("Africa/Cairo");

$d = date_create(); // if the () is empty
// then it will give the current date

// echo date_format($d, "Y/m/d H-i-s a") . '<br>';

// date_interval_create_from_date_string func
// convert the string into interval

// date_add($d, date_interval_create_from_date_string(" 1 year 2 month 5 days"));

// substract time from your current date
// date_sub($d, date_interval_create_from_date_string(" 1 year 2 month 5 days"));

// modify by adding one year to your date
date_modify($d, "+1 year");

echo date_format($d, "Y/m/d H-i-s a");

// when you learn OOP you will do these things differently


