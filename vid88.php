<?php

// fopen part 1:

// --- Mode
// --- [r] For Read => Pointer At The Beginning
// --- [r+] For Read & Write => Pointer At The Beginning
// --- [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists
// --- [w+] For Read & Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists

// fopen part 2: 

// --- Mode
// --- [a] For Write => Pointer At The End + Create If Not Exists
// --- [a+] For Read & Write => Pointer At The End + Create If Not Exists
// --- [x] Create + Open For Write => Pointer At The Beginning
// --- [x+] Create + Open For Read & Write => Pointer At The Beginning

// fopen part 3:

// --- Mode
// --- [c]
// ------ For Write
// ------ Create If Not Exists
// ------ No Problem If Its Exists
// ------ No Truncation
// ------ Pointer At The Beginning
// --- [c+] For Read &#038; Write

// echo '<pre>';
// print_r(file("vid86.txt"));
// echo '</pre>';

// count lines of array
// echo count(file("vid86.txt")). '<br>';

$handle = fopen("vid86.txt", "r");

$line = 1;

//feof => file end of file
//!feof when you are not at the end of the file

/* while(! feof($handle)){

    echo "Line $line => " . fgets($handle) . "<br>";
    $line++;
} */

for ($i = 0; $i < count(file("vid86.txt")); $i++){

    echo fgets($handle) . "<br>";
    
}
// the for loop above 
// won't be read because the pointers from 
// the last while is at the end.

fclose($handle);