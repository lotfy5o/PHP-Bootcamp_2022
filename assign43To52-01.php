<?php
// Write Function Content Here



function greeting ($name, $gender = "private"){
    if ($gender == "Male"){
        echo "Hello Mr $name <br>";
    } 
    elseif ($gender == "Female") {
        echo "Hello Miss $name <br>";
    }
    else {
        echo "Hello $name <br>";
    }

}
    // Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh