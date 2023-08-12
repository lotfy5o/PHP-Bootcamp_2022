<?php

// echo session_id("lkhadghaglha");
session_start();

$_SESSION['name'] = "Lotfy";
// the key of the cookie=> get from:
// inspect -> application => it will be under value table

// echo session_id();

// you could generate the key but before session_start() by:
    // echo session_id("lkhadghaglha");

// views count:
isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 1;

echo "Hello " . $_SESSION['name'] . "Views Count is " . $_SESSION['views'];

echo '<a href="vid103_about.php">About</a>';
