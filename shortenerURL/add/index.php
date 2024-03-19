<?php
require "../db.php";

if (isset ($_POST['long_url'])) {
    $long_url = $_POST['long_url'];
    echo "Long URL: $long_url <br> ";
    $sql = "INSERT INTO `urls` (longurl) value ('$long_url')";
    $result = mysqli_query($conn, $sql);
    header("location: /?i=" . mysqli_insert_id($conn));
}
