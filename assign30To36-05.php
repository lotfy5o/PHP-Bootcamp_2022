<?php
$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18) {
  echo "The Age Is Good To Go<br>";
  if (gettype($name) === "string") {
    echo "The Name Is Good To Go<br>";
    if ($country === "Egypt") {
      echo "The Country Is Good To Go<br>";
    }
  }
}

echo '<br>';

if ($age > 18 && gettype($name) === "string" && $country === "Egypt"){
    echo "The Age is Good to Go",'<br>';
    echo "The Name is Good to Go",'<br>';
    echo "The Country is Good to Go",'<br>';
}


/* Needed Output
"The Age Is Good To Go"
"The Name Is Good To Go"
"The Country Is Good To Go" */