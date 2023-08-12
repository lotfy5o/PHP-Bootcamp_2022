<?php


function say_hello ($one, $two){
    echo "Hello $one Hello $two <br>";
}

/* say_hello("lotfy");
say_hello("Mariam");
 */
say_hello("lotfy", "Mariam");

function deep_freezer($item) {
    if ($item == "Water"){
        echo "make it ice <br>";
    } elseif ($item == "coca cola"){
        echo "make it cold <br>";
         
    }
    elseif ($item == "fruit"){
        echo "make it fresh <br>";
      }
}

deep_freezer("water");
deep_freezer("coca cola");