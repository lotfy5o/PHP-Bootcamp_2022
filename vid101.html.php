<?php


  if (isset($_COOKIE["background"])) {
    echo "<style>body { background-color: " . $_COOKIE["background"] . " }</style>";
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("background", $_POST["bg-color"], strtotime("+1 year"));
    // to refresh the page so that the color is set once you 
    // choose without the need to reload the page
    header("Location: " . $_SERVER["REQUEST_URI"]);
    exit();
  }

?>

<form action="" method="POST">
  <input type="color" name="bg-color">
  <input type="submit" value="Choose Color">
</form>