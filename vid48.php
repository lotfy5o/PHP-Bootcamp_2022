<?php
//function unpacking
//splat operator, variadic func ... search for these

$group_of_skills = ["HTML", "CSS", "JS"];

function get_data ($name, $country = "Private", ...$Skills){

    echo "Hello $name Your Country Is $country <br>";

    foreach ($Skills as $Skill) :


        echo "-- $Skill <br>";

    endforeach;

}


get_data("lotfy", "EGYPT", ...$group_of_skills);
get_data("lotfy", "EGYPT", ...["HTML", "CSS", "JS"]);