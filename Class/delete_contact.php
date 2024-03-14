<?php
    require './connect.php';

    if(isset($_POST['cid'])){

        $id = $_POST['cid'];

        $sql = "DELETE FROM `contacts`  WHERE `id` = $id;";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Contact Deleted Successfully";
            header("Location: /index.php");
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }
       

?>