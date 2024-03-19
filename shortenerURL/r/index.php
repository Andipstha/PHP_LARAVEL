<?php
require "../db.php";

$id = $_GET['c'];

var_dump($id);

$sql = "SELECT * FROM `urls` WHERE `uid` = '$id'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $url = mysqli_fetch_assoc($result)['longurl'];
    header("Location: " . $url);
    exit;
} else {
    echo "URL not found!";
}