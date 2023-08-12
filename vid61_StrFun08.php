<?php
// String Fun part 8
// (1)wordwrap
// (2)ord
// (3)chr
// (4)similar_text


$str = "welcome to lotfy resturant for sea food very_very_long ";

echo strlen($str);
echo '<br>';

echo wordwrap($str, 8, "<br>");
// welcome
// to lotfy
// resturant
// for sea
// food

//notes that welcome = 7 chars + 1 for space = 8, so the t in to
//went down to the next line


echo '<br>';
echo wordwrap($str, 8, "<br>", true); 
// now the true cut down the very_very_long word 

echo '<br>';
echo ord("a"); //97
echo '<br>';

echo chr(97); //a
echo '<br>';

echo similar_text("lotfy", "lotfyo");//5
echo '<br>';
echo similar_text("lo_tfy", "lo_tfyo");//6

echo '<br>';
echo similar_text("lotfy", "lotfyo", $perc);//5
echo '<br>';
echo '<br>';
echo $perc; // 90.90 %
echo '<br>';
echo similar_text("lotfy", "lotfy", $perc);//5
echo '<br>';
echo $perc; // 100.00 %


