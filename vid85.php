<?php

/* 
basename (
    path[req],
    suffix[optional]
)
*/

echo basename("vid85.php") . '<br>'; // vid85.php
echo basename(__FILE__) . '<br>'; // vid85.php
echo basename(__FILE__, ".php") . '<br>'; // vid85


// it gives me the direct parent folder
echo dirname(__FILE__, 1) . '<br>'; // C:\xampp\htdocs\PHP Bootcamp 2022
echo dirname(__FILE__, 2). '<br>'; //C:\xampp\htdocs

echo realpath(__FILE__) . '<br>'; // C:\xampp\htdocs\PHP Bootcamp 2022\vid85.php

/* Array
(
    [dirname] => C:\xampp\htdocs\PHP Bootcamp 2022
    [basename] => vid85.php
    [extension] => php
    [filename] => vid85
) */
echo '<pre>';
print_r(pathinfo(__FILE__));
echo '</pre>';

echo pathinfo(__FILE__)["extension"] . '<br>'; // php
echo pathinfo(__FILE__)["filename"] . '<br>';  // vid85
echo pathinfo(__FILE__)["dirname"] . '<br>';
echo '<br>';
// use flags
echo pathinfo(__FILE__, PATHINFO_DIRNAME) . '<br>';  // C:\xampp\htdocs\PHP Bootcamp 2022
