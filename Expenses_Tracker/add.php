<?php
    require "./connect.php";

    $name = $_POST['ename'];
    $amount = $_POST["eamount"];

    var_dump($name);
    var_dump($amount);

    // $sql = "INSERT INTO `expenses` (title, amount) values ('test', '25000')";
    $sql = "INSERT INTO `expenses` (title, amount) values ('$name', '$amount')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Successfully Added Record";
    }else{
        echo "Failed to Added Record";
    }

    header("location: index.php");


?>
