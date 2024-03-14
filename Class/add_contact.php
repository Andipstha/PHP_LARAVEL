<?php
    require './connect.php';

    
    
    // insert into contacts (first_name, middle_name,  last_name, phone_number) value ('sandip','','shrestha','9847676752');
    // $sql = "INSERT INTO contacts (first_name, middle_name, last_name, phone_number) VALUES ('andip','','shrestha','9847676752')";
 

    // if($_SERVER["REQUEST_METHOD" == "POST"]){
    if(isset($_POST['save'])){

        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $pno = $_POST['pno'];

        $sql = "INSERT INTO contacts (first_name, middle_name, last_name, phone_number) VALUES ('$fname','$mname','$lname','$pno')";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Contact Added Successfully";
            header("Location: /index.php");
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }elseif(isset($_POST['update'])){
        header("Location: /edit_contact.php");
    }
        


    // }




?>