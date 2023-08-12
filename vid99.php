<?php

// the / here is to find the cookie in any directory
setcookie("style", "dark", time() + 60 * 60 * 24 * 30, "/");
setcookie("popup", "done", strtotime("+1 month"));
/* 
Array
(
    [style] => dark
)
 */
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

// to access one of the cookies:
echo $_COOKIE["style"]; // dark

