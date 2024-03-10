<?php

$servername = "localhost";
$username = "root"; # your username
$password = "123lion123"; # your password
$dbname = "notes";

# create connection
$conn = new mysqli($servername, $username, $password, $dbname);

# check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    // echo "Connected successfully";
}


?>