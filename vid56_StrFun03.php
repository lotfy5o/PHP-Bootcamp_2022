<?php
// string func part 3
// (1) chunk_split
// (2)str_split
// (3) strip_tags
// (4)nl2br





//it will break the string into chunks
//I decide the limit of the chunk in the coming
//example is 3

//lot@fy @is @nic@e@
echo chunk_split ("lotfy is nice", 3, "@");
echo "<br>";

//if I didn't give him a char like @
//he will break it based on spaces

// lot fy is nic e
echo chunk_split ("lotfy is nice", 3);
echo "<br>";

/* Array
(
    [0] => l
    [1] => o
    [2] => t
    [3] => f
    [4] => y
) */
echo '<pre>';
print_r(str_split("lotfy")); 
echo '</pre>';

echo '<pre>';
print_r(str_split("lotfy", 2)); //lo tf y
echo '</pre>';

echo "<br>";

echo  "<h3>Hello <b>lotfy</b></h3>";
echo strip_tags ("<h3>Hello <b>lotfy</b></h3>");
echo "<br>";

//will avoid striping the <b> tag
echo strip_tags ("<h3>Hello <b>lotfy</b></h3>", "<b>"); 

echo '<br>';

echo ("Lotfy\nMohamed\nLotfy"). '<br>'. "##### <br>";

//when you open page source the </br> self closing tag
//will appear because you didn't put false like the next example
echo nl2br("lotfy\nmohamed\nlotfy"). '<br>';

echo "###### <br>";
// when you open page source the normal <br> will apeare here
//because you prevented xtml
echo nl2br("lotfy\nmohamed\nlotfy", false). '<br>'; 






