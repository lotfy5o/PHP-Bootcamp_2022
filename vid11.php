<?php
//Heredoc And Nowdoc

$name = "lotfy";

//Here doc
echo <<<"Here"
Hello php
special charc ### $$$ ````""""///\\\
Hello my name is $name
Here;


echo '<br>';
echo '<br>';
echo '<br>';

//now doc
echo <<<'now'
Hello php
special charc ### $$$ ````""""///\\\
Hello my name is $name
now; 

echo '<br>';
echo '<br>';
echo '<br>';

echo '<ul>';
  echo "<li> ".$name." </li>";
  echo "<li>" .$name. "</li>";
echo '</ul>';

  echo <<<"navlinks"
  <ul>
    <li>$name</li>
    <li>$name</li>
    
  </ul>
  navlinks;