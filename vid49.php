<?php
//func variable

function one (){
    return "one from function <br>";
}

$func1 = "one";

echo $func1(); 

function say_hello_to ($someone){
    return "hello $someone <br>";
}


$func2 = "say_hello_to";

echo $func2("lotfy"), '<br>';

function testing(){
    echo "hey I exist<br>";
}

if (function_exists("testing")){
    echo testing();

} else {
    echo "Function Not found <br>";
}

// echo strlen("lotfy");

$func3 = "strlen";
echo $func3 ("lotfym");