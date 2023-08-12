<?php

$email = "lot@    ¥ fy.sa";

// Test ¥
// filter sanitize => remove all but :
// letters + digits + !#$% and so on.
var_dump(filter_var($email)); // string(16) "lot@ ¥ fy.sa"
echo '<br>';
var_dump(filter_var($email, FILTER_SANITIZE_EMAIL)); // string(9) "lot@fy.sa"

echo '<br>';
echo '<br>';

$int = "100 + 100 asaghasdghhaosig";
var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT)); // string(7) "100+100"

echo '<br>';
echo '<br>';

$float = "195,231,123.504QWETQWTQ"; // the dote doesn't appear without the flags
// associated with filter_samitize_number_float
var_dump(filter_var($float, FILTER_SANITIZE_NUMBER_FLOAT)); // string(12) "195231123504"
echo '<br>';
var_dump(filter_var(
    $float, 
    FILTER_SANITIZE_NUMBER_FLOAT,
    ["flags" => FILTER_FLAG_ALLOW_THOUSAND]
)); // string(14) "195,231,123504"

echo '<br>';

var_dump(filter_var(
    $float, 
    FILTER_SANITIZE_NUMBER_FLOAT,
    ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
)); // string(15) "195,231,123.504"

echo '<br>';

$url = "https://elze ¥¥¥¥  ro.org";

// string(18) "https://elzero.org"
var_dump(filter_var($url, FILTER_SANITIZE_URL));  







