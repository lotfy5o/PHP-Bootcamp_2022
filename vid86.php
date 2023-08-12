<?php
// w = write => if the name of the file
// doesn't exist it will create it

// r = read
// r+ => read and write

$handle = fopen("vid86.txt", "r");

// echo fgets($handle) . '<br>'; // first line of vid86.txt
// echo fgets($handle, 4) . '<br>'; // first 4 bytes of the text

echo fread($handle, 1024); // the length here is a must (1024)
// and is the max num to read.. 1024 bytes 

fclose($handle);


