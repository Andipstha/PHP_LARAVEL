<?php
// include  'index.php'; // include file.php

// $shopping_list = ["hello"];

// echo "wow";

session_start();

// $item = $_POST['shopping'];


// How to set the data in session?
// $_SESSION["items"][]=$item;
// $_SESSION["items"][]= [$item];
// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";

// How to get the data from the session?



$item = $_POST['shopping'];

if (isset($_SESSION['cart'])) {
  array_push($_SESSION['cart'], $item);
} else {
  $_SESSION['cart'] = [$item];
}

header("Location: /");

?>
