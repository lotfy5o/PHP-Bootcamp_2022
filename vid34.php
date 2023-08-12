<?php
//nested if , and training

$name = "lotfy";
$is_student = true;
$is_orphan = true;
$country = "Egypt";
$country_dis = 50;
$price = 100;
$student_dis = 10;
$orphan_dis = 15;

if ($country == "Egypt") {
    if ($is_student == true) {
        if ($is_orphan == true) {
           echo "hello $name";
           echo '<br>';
           echo "Country Discount $country_dis";
           echo '<br>';
           echo "Student Discount $student_dis";
           echo '<br>';
           echo "Orphan Discount $orphan_dis";
           echo '<br>';
           echo 'the final price is ' .$price - $country_dis - $student_dis - $orphan_dis;

        }
        else {

           echo "hello $name";
           echo '<br>';
           echo "Country Discount $country_dis   ";
           echo '<br>';
           echo "Student Discount $student_dis";
           echo '<br>';
           echo 'the final price is ' .$price - $country_dis - $student_dis;
        }
        
    }
    else {
        echo "hello $name";
        echo '<br>';
        echo "Country Discount $country_dis";
        echo '<br>';
        echo 'the final price is ' .$price - $country_dis;
    }
}

else {
    echo "hello $name";
    echo '<br>';
    echo "No Discount";
    echo '<br>';
    echo 'the final price is ' .$price;
}