<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

include "db.php";

/* Check if required values exist */
if(isset($_GET['product']) && isset($_GET['price']) && isset($_GET['image'])){

$product = $_GET['product'];
$price = $_GET['price'];
$image = $_GET['image'];

mysqli_query($conn,
"INSERT INTO wishlist (username, product_name, price, image)
VALUES ('$username', '$product', '$price', '$image')");

}

/* Redirect back to wishlist */
header("Location: wishlist.php");
exit();
?>
