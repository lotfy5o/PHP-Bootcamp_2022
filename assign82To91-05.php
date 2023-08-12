<?php

// Output

// "index.php"
// "index.php"
// "index.php"
// "index.php"


echo basename("assign82To91-05.php") . '<br>';
echo basename(__FILE__) . '<br>';
echo pathinfo(__FILE__)["filename"] . "." . pathinfo(__FILE__)["extension"] . '<br>';

echo pathinfo(__FILE__, PATHINFO_FILENAME) . "." . pathinfo(__FILE__, PATHINFO_EXTENSION);
