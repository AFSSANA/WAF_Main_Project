<?php
session_start();

if (!isset($_SESSION['username'])) {
header("Location: login.php");
exit();
}

$username = $_SESSION['username'];

include "db.php";

$product = $_GET['product'];
$price = $_GET['price'];
$image = $_GET['image'];

mysqli_query($conn,
"INSERT INTO cart (username,product_name,price,image)
VALUES ('$username','$product','$price','$image')");

header("Location: cart.php");
exit();
?>