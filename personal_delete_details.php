<?php
session_start();
include "db.php";

if(isset($_GET['id'])){

$id = $_GET['id'];

mysqli_query($conn,
"DELETE FROM user_personal_details WHERE id='$id'");

header("Location: personal_details.php");
exit();

}
?>