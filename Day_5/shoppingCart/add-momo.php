<?php

// to get the connection string
require './connect.php';

// echo 'test add-momo.php';

// var_dump($_POST);
// get the value from the FORM

$data = $_POST['momo'];

// Insert the value to the database
$sql = "INSERT INTO foods (name) values ('$data')";

mysqli_query($conn,  $sql);

// Now redirect back to the index.php file
header("Location:/");

