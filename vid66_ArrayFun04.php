<?php
// Array Func part 4
// (1) current
// (2) next
// (3) prev 
// (4) reset
// (5) end

$friends = ["Lotfy", "Mariam", "Menna", "Ahmed","Lotfy", "Mustafa"];

echo current($friends). '<br>'; // Lotfy
echo next($friends). '<br>'; // Mariam
echo current($friends). '<br>'; // Mariam
echo next($friends). '<br>'; // Menna
echo current($friends). '<br>'; // Menna
echo prev($friends). '<br>'; // Mariam
echo reset($friends). '<br>'; // Lotfy
echo current($friends). '<br>'; // Lotfy
echo end($friends). '<br>'; // Mustafa
echo current($friends). '<br>'; // Mustafa







