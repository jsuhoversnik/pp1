<?php
/**
 * Created by PhpStorm.
 * User: Jake
 * Date: 1/4/2019
 * Time: 10:22 AM
 */
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
    <h1>Pair Programming 1</h1>

    <?php
        $numbers = array(7,9,8,9,8,8,6);

        function printer($array){
            for($i = 0; $i < sizeof($array);$i++){
                echo $array[$i];
                if($i != sizeof($array)-1){
                    echo ", ";
                }
            }

        }

        printer($numbers);

    ?>
</body>
</html>
