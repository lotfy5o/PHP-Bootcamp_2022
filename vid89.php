<?php
// fseek => SEEK_END, SEEK_CUR, SEEK_SET

$handle = fopen("vid86.txt", "r");

// // ftell gets the position of the pointer
// echo ftell($handle) . '<br>'; // 0


// // read the first line
// // then the pointer will be at
// // the start of line 2

// echo fgets($handle) . "<br>";

// echo ftell($handle) . '<br>'; // 7

// // so if you wanna test the aobve line:

// echo mb_strlen("hello\r\n", "8bit") . '<br>'; // 7
    
// echo fgets($handle) . "<br>";

// echo ftell($handle) . '<br>'; // 14

// echo mb_strlen("hello\r\nlotfy\r\n", "8bit") . '<br>'; // 14



echo fgets($handle) . '<br>'; // hello , ftell => 7

// this 14 is from line mb_stlen

fseek($handle, 14); // Nice meeting you
// fseek($handle, 0); // == rewind

echo fgets($handle) . '<br>'; // lotfy

// removed 10 bit from the end of the file
fseek($handle, -10, SEEK_END);

echo fgets($handle) . '<br>'; // eeting you

fclose($handle);

// 14
echo mb_strlen("Hello\r\nLotfy\r\n", "8bit");


