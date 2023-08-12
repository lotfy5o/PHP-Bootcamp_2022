<?php

$bool = "LOTFY"; // True || 1 || "yes" || "on"


var_dump(filter_var($bool, FILTER_VALIDATE_BOOL)); // bool(true)

// if you put value in $bool that is neigher true or false it will print Null
echo '<br>';
var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)); // NULL

echo '<br>';

$url = "https://elzero.org";

var_dump(filter_var($url, FILTER_VALIDATE_URL)); // string(18) "https://elzero.org"
echo '<br>';

// if $url = garbage string
var_dump(filter_var($url, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE)); // NULL
echo '<br>';

// ir $url = "https://elzero.org/catagory"
var_dump(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)); // string(27) "https://elzero.org/catagory"
echo '<br>';

// if $url = "https://elzero.org/catagory?id=100"
var_dump(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)); // string(34) "https://elzero.org/catagory?id=100"
echo '<br>';
echo '<br>';
    
// if I want to use all of the flags at once:
var_dump(filter_var($url, FILTER_VALIDATE_URL, 
["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED])); 
echo '<br>';
echo '<br>';

$ip = "192.168.2.1";
var_dump(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)); // string(11) "192.168.2.1"
echo '<br>';
echo '<br>';
var_dump(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)); // string(11) "192.168.2.1"
echo '<br>';
echo '<br>';
var_dump(filter_var($ip, FILTER_VALIDATE_IP, 
["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6])); // NULL

echo '<br>';
echo '<br>';

$mac = "00-B0-D0-63-C2-26";
var_dump(filter_var($mac, FILTER_VALIDATE_MAC)); //string(17) "00-B0-D0-63-C2-26"