<?php

date_default_timezone_set("Africa/Cairo");

// no. of seconds that passed since 01 jan 1970
echo time() . "<br>";

echo time() / 60 / 60 / 24 / 365 . "<br>"; // no of years...


/* Array
(
    [seconds] => 58
    [minutes] => 13
    [hours] => 23
    [mday] => 4
    [wday] => 5
    [mon] => 8
    [year] => 2023
    [yday] => 215
    [weekday] => Friday
    [month] => August
    [0] => 1691183638
) */
echo "<pre>";
echo print_r(getdate());
echo "</pre>";

// get the specific data you want for ex. the year:
$t = getdate();
echo $t["year"] . '<br>';
    
/* Array
(
    [year] => 1995
    [month] => 10
    [day] => 5
    [hour] => 14
    [minute] => 25
    [second] => 15
    [fraction] => 0
    [warning_count] => 0
    [warnings] => Array
        (
        )

    [error_count] => 0
    [errors] => Array
        (
        )

    [is_localtime] => 
) */
echo "<pre>";
echo print_r(date_parse("1995-10-5 14:25:15"));
echo "</pre>";
