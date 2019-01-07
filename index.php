<?php
/**
 * Created by PhpStorm.
 * User: Jake
 * Date: 1/4/2019
 * Time: 10:22 AM
 */
include "functions.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pair Program 1</h1>

    <?php
        $numbers = array(7,9,8,9,8,8,6);

        printer($numbers);
        echo "<br>";
        echo "Largest: " . largest($numbers);
        echo "<br>";
        echo "Average: " . average($numbers);
        echo "<br>";
        echo "Remove Dupes: " . removeDups($numbers);
        echo "<br>";
        echo "Distribution: " . distribution($numbers);

    ?>
</body>
</html>
