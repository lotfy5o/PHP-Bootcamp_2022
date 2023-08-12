<?php

for ($index = 0; $index <= 20; $index++){
    if ($index % 2 == 0 && $index != 0) {
        echo "$index <br>";
    }
}
echo "#### <br>";
$index = 0;

while ($index <= 20) {
    if ($index % 2 == 0 && $index != 0) {
        echo "$index <br>";
    }
    $index++;
}

echo "#### <br>";

$index = 0;
do {
    if ($index % 2 == 0 && $index != 0) {
        echo "$index <br>";
    }
    $index++;
} while ($index <= 20);