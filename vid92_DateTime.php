<?php

// (1) date_default_timezone_get()
/* (2) date_create(
       date/time => if empty represents "now",
       timezone => ex: Indian/Antananarivo
) */
/* (3)timezone_open(
       the zone you want its time
) */
/* (4) date_format(
       date/time object => $d in our ex,
       date formate => Y - m - d for ex 
) */

/* (5) checkdate(
    day, 
    month, 
    year
)
 */

// get time zone
echo date_default_timezone_get(). '<br>';

// print date and time
echo date("Y-m-d-H:i:s"). '<br>';

// change timezone
// search for list of supported timezones php
date_default_timezone_set("Africa/Cairo");

echo date_default_timezone_get(). '<br>';
echo date("Y-m-d-H:i:s"). '<br>';


$d = date_create("",timezone_open("Indian/Antananarivo"));

echo date_format($d, "Y-m-d-H:m:s");

// check date
echo '<br>';
var_dump(checkdate(10, 5, 1995)); // bool(true)
echo '<br>';
// that day doesn't exists cuz no 31 days in febrauary
var_dump(checkdate(31, 02, 1982)); //bool(false)
echo '<br>';