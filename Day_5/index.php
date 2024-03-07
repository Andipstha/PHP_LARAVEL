<?php

// echo 'hello';

# create the database called -> foods
# database field -> id(int) PK, AI,, name (varchar), created_at timestamp, updated_at timestamp

# connect to the database

$servername = "localhost";
$username = "root"; # your username
$password = "123lion123"; # your password
$dbname = "foods";

# create connection
$conn = new mysqli($servername, $username, $password, $dbname);

# check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
    // echo "Connected successfully";
}

#fetch the data
$sql = "SELECT * FROM foods";

$result = $conn->query($sql);
# print out the result of query
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["created_at"]. "<br>";
        #1, Jhole momo, 2021-07-07 00:00:00
    }
} else {
    echo "0 results";
}



CREATE TABLE IF NOT EXISTS foods (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

select * from foods;


?>


