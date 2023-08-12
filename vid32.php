<?php 
// if, elseif, else, > advanced
/* if ($_SERVER["REQUEST_METHOD"]=== "POST") {
    echo $_POST ['username'];
    echo '<br>';
    echo $_POST ['lang'];
} */
if ($_SERVER["REQUEST_METHOD"]=== "POST") {
    if ($_POST ["lang"] == 'ar') {
        header ("Location: vid32_ar.php");
        exit ();
    }
    elseif ($_POST ["lang"] == 'en') {
        header ("Location: vid32_en.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
</head>
<body>
    <form action="" method = "POST">
        <input type="text" name = "username">
        <select name="lang" >
            <option value="ar">Arabic</option>
            <option value="en">English</option>
            <option value="sp">Spanish</option>
        </select>
        <input type="submit" value = "Go">
    </form>
</body>
</html>