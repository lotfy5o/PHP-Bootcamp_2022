<?php
// alternate syntax

/* if (10 > 5 ){
    echo "Good";
}
else {
    echo "bad";
} */

echo '<br>';
if (10 > 15) echo "good"; //echo "Second line"; (this will give me an error)
else echo "bad";

echo '<br>';
if (10 > 15) echo "good"; else echo "bad";
echo '<br>';

?>
<!-- ########################################## -->
<?php if (10 > 15){ ?>
    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p>Hello page</p>
    </body>
    </html>
    
    <?php }?>
<!-- ########################################## -->
<br>
<?php if (10 > 5) : ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hello page of endif</p>
</body>
</html>

<?php endif;?>
<br>

<?php
if (10 > 10) : 
    echo "first";
elseif (10 > 5) : 
    echo "second";
else : 
    echo "last";
endif;