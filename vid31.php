<?php
// if, elseif, if, <= real life examples

$page = "Home";

if ($page == "Home") {
    echo "this is the page";
}


echo '<br>';


$title = "";

if ($title == "") {
    echo "Unknown page";
} 
else {
    echo $title;
}

echo '<br>';

$lang = "English";

if ($lang == "Arabic"){
    echo 'مرحبا';
}
elseif ($lang == "English"){
    echo 'hello';
}
else {
    echo 'Unknown language';
}
