<?php
$host = "localhost";
$user = "wafuser";
$pass = "StrongPass123!";
$db   = "waf_project";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>