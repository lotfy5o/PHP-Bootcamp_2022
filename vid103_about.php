<?php


session_start();


isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 1;

echo "Hello " . $_SESSION['name'] . "Views Count is " . $_SESSION['views'];


