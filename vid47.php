<?php
//variable arguments


/* function calculate ($num1, $num2){
    return $num1 + $num2;
}

echo calculate(10, 20); */

function calculate (...$nums){
    // echo "Numbers of Arguments ". func_num_args(). '<br>';
    // echo "Argument Index Number 3 Is ". func_get_arg(3). '<br>';
    // print_r(func_get_args());

    // $result = 0;

    // foreach (func_get_args() as $arg) :

    // $result += $arg;
    // endforeach;
    
    // echo $result;

    echo "Argument index number 3 is " . $nums[3] . '<br>';
    print_r($nums);
    $result = 0;
    foreach ($nums as $n):

    $result += $n;
    endforeach;
    
    echo $result;
    
}

calculate(10, 20, 50, 30, 40, 100);