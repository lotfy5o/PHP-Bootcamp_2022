<?php

setcookie("style", "dark");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
/* 
if (isset($_COOKIE["style"])){
    echo $_COOKIE["style"];
}
 */
// modify cookie
setcookie("style", "light");

setcookie("style", "dark", strtotime("+1 year"));


// delete cookie => set expiration to seconds
// setcookie("style", "dark", time() + 5); // or time() -1

setcookie("style[color]", "red");
setcookie("style[font]", "tahoma");
setcookie("style[layout]", "boxed");

if (isset($_COOKIE["style"])){
    echo $_COOKIE["style"]["color"];
} // red

