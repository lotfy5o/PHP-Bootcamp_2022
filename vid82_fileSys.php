<?php

// disk_total_space
// disk_free_space
// file_exists
// filesize


echo disk_total_space("C:"). "<br>"; //104212721664 [byte]

//97.055660247803 [Giga byte]
echo disk_total_space("C:") / 1024 / 1024 / 1024 . "<br>"; 
//97[Giga byte]
echo round(disk_total_space("C:") / 1024 / 1024 / 1024) . "<br>"; 


echo round(disk_free_space("C:") / 1024 / 1024 / 1024) . "<br>"; 

var_dump(file_exists("lotfy.txt"));

echo '<br>';

echo filesize("vid82_attach.txt"); // 5 = hello

