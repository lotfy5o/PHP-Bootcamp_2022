<?php
// (1) implode
// (2) explode
// (3)str_shuffle
// (4)strrev
// (5)strlen
// (6)trim
// (7)rtrim
// (8)ltrim

$friend = ["lotfy", "Ahmed", "mostafa", "menna"];


// lotfy Ahmed mostafa menna
echo implode(" ", $friend). "<br>";
// lotfy, Ahmed, mostafa, menna
echo implode(", ", $friend). "<br>";
// lotfy@Ahmed@mostafa@menna
echo implode("@", $friend). "<br>";
// lotfyAhmedmostafamenna
echo implode($friend). "<br>";
// Lotfy Ahmed Mostafa Menna
echo ucwords(implode(" ", $friend)). "<br>";//added ucwords by me

$str = "Lotfy is cool and lotfy is nice";
/* Array
(
    [0] => Lotfy
    [1] => is
    [2] => cool
    [3] => and
    [4] => lotfy
    [5] => is
    [6] => nice
) */
echo "<pre>";
print_r(explode(" ", $str));
echo "</pre>";

echo "<pre>";
print_r(explode("and", $str));
echo "</pre>";

/* Array
(
    [0] => Lotfy is cool 
    [1] =>  lotfy is nice
) */
echo "<pre>";
print_r(explode("and", $str, 3));
echo "</pre>";

echo "<pre>";
print_r(explode("and", $str, -1)); //assume he printed
//[0] => lotfy is cool
//[1] => lotfy is nice
// and then he removed the last element: lotfy is nice.
echo "</pre>";

echo str_shuffle ("lotfy"). "<br>"; //tlfyo
echo strrev ("lotfy"). "<br>"; //yftol

//with the spaces the strlen fun will count 11 chars
echo strlen ("   lotfy   "). "<br>";
//trim will elminiate the spaces 
//and the strlen fun will count 5 chars
echo strlen (trim ("   lotfy   ")). "<br>"; 


// will remove the # from the string: ###lotfy
//even if you give it #@ it will remove the # chars
//and if he found a @ he will remove it too
echo trim ("###lotfy", "#"). "<br>"; 

//careful the trim only remove the front and the back of the string
//so in the previous example it won't remove the @@ from the string
echo trim ("#@@lotfy@@@#", "@"). "<br>";


echo rtrim ("@@lotfy@@", "@"). "<br>"; //right trim
echo ltrim ("@@lotfy@@", "@"); //left trim








