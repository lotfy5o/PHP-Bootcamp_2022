<?php
// Output
// "Directory Programming/PHP Removed"
// "Directory Programming Removed"

mkdir("Programming/PHP", 0777, true);

if (file_exists("Programming/PHP")){
    rmdir("Programming/PHP");
    echo "Directory Programming Removed";
}