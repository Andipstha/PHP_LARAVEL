<?php

session_start();

if(isset($_POST['submit'])){
    $emailid = $_POST["username"];
    $password = $_POST["password"];

    if($emailid == "andipstha"  && $password=="123"){
        echo "Login Successful";
        $_SESSION["username"]=$emailid; 
        header("Location: index.php");
        die;
    }else{
        echo "Login Unsuccessful";
        //$_SESSION["error"]="Invalid User
    }
}

?>

<form method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" name="submit">Login</button>
</form>