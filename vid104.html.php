<?php


session_start();

// $_SESSION['name'] = "Lotfy";

// session_unset();

// session_destroy();
// $_SERVER['username'] = "";
// $_SERVER['id'] = 1;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if ($_POST['user'] === "lotfy"){
        $_SESSION['username'] = "Snow5o";
        $_SESSION['id'] = 1005;
    }
}

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

if (isset($_SESSION['username'])){
    echo "Welcome " . $_SESSION['username'];
} else {



?>

<form action="" method="POST">
    <input type="text" name = "user">
    <input type="submit" value="Login">
</form>

<?php } ?>

<a href="vid104_logout.php">Logout</a>

<!-- I have an error that says that 
the $_SESSION['username'] is an undefined array key -->

