<?php

// to access the superglobal session: 
session_start();

// if I login into a page my id and name wil be shown through
// every page so it will be needed most of the time
// so it will make sensse to store it on the server

// the name inside the $_SESSION is entierly 
// your choice

$_SESSION['name'] = "Lotfy";
$_SESSION['id'] = 1005;
/* 
Array
(
    [name] => Lotfy
    [id] => 1005
)
 */
echo "<pre>";
print_r($_SESSION);
echo "</pre>";


echo '<a href="vid102_test.php">Test_102</a>';