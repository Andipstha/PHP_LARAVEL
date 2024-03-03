<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is php</title>
</head>
<body>
    <?php


    ?>

    <h1>Hell world</h1>

    <?php
        // echo('hello World');

        // for($i = 0; $i < 10; $i++){
        //     echo"ramesh don";
        //     echo"<br>";
        // }

        $food = ["samosa","tea","chowmin","momo"];

        for($i = 0; $i < count($food); $i++){
            echo $food[$i];
            echo"<br>";

        }
    ?>
</body>
</html>