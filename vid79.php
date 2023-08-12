<?php

$email = "lot@moh.sa";

// if email was valid
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE)); // string(10) "lot@moh.sa"
// if email wasn't using null_on_failure = Null

echo '<br>';

$int = "110";

// the 100 is inside quotes so its a string, but 
// but the php thought of it as a number
var_dump(filter_var($int, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE)); // int(100)
echo '<br>';

// if you put $int = 90.00 this is float
// so the output will be NULL
var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    ["flags" => FILTER_NULL_ON_FAILURE,
    "options" => ["min_range" => 50, "max_range" => 100]]
    
));
echo '<br>';

$float = "90";

// the 100 is inside quotes so its a string, but 
// but the php thought of it as a number
var_dump(filter_var($int, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE)); // int(100)
echo '<br>';

// if you put $int = 90.00 this is float
// so the output will be NULL
var_dump(filter_var(
    $float,
    FILTER_VALIDATE_FLOAT,
    ["flags" => FILTER_NULL_ON_FAILURE,
    "options" => ["min_range" => 50, "max_range" => 100]]
    
));



