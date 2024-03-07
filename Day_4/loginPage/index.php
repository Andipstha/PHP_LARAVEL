<?php

session_start();

if($_SESSION['username']){
    echo "Welcome user " . $_SESSION["username"]; 
}else{
    header("location: login.php");
}

?>

<a href="logout.php">LogOut</a>
