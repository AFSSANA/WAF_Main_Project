<?php
$host = "localhost";
$user = "wafuser";      // NOT root
$pass = "StrongPass123!"; // password you set earlier
$db   = "waf_project";  // correct database name

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>