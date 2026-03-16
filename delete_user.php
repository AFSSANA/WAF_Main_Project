<?php
session_start();
include "db.php";

if(!isset($_SESSION['admin'])){
header("Location: admin_login.php");
exit();
}

if(isset($_GET['id'])){

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM users WHERE id='$id'");

header("Location: users.php");
exit();

}
?>