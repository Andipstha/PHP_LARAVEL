<?php
    require './connect.php';

        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $pno = $_POST['pno'];

        $sql = "UPDATE `contacts` SET `first_name` = '$fname' , ` middle_name` = '$mname',` last_name` = '$lname' , `phone_number` = '$pno' WHERE `id` = $id;";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Contact Updated Successfully";
            header("Location: /index.php");
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

?>