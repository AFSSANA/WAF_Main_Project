<?php
session_start();
include "db.php";

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM personal_details WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

$name = $_POST['name'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$place = $_POST['place'];
$country = $_POST['country'];
$postal = $_POST['postal'];
$address = $_POST['address'];

mysqli_query($conn,"UPDATE personal_details SET 
name='$name',
phone='$phone',
city='$city',
place='$place',
country='$country',
postal_code='$postal',
address='$address'
WHERE id='$id'");

header("Location: profile.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Address</title>

<style>

body{
font-family:Segoe UI;
background:#f2efff;
}

.container{
width:600px;
margin:60px auto;
background:white;
padding:30px;
border-radius:12px;
box-shadow:0 8px 20px rgba(0,0,0,0.1);
}

input,textarea{
width:100%;
padding:10px;
margin-bottom:15px;
border-radius:6px;
border:1px solid #ccc;
}

button{
background:#7a4cff;
color:white;
border:none;
padding:10px 18px;
border-radius:6px;
cursor:pointer;
}

button:hover{
background:#6937e0;
}

</style>

</head>

<body>

<div class="container">

<h2>Edit Address</h2>

<form method="POST">

<input type="text" name="name" value="<?php echo $row['name']; ?>" required>

<input type="text" name="phone" value="<?php echo $row['phone']; ?>" required>

<input type="text" name="city" value="<?php echo $row['city']; ?>" required>

<input type="text" name="place" value="<?php echo $row['place']; ?>" required>

<input type="text" name="country" value="<?php echo $row['country']; ?>" required>

<input type="text" name="postal" value="<?php echo $row['postal_code']; ?>" required>

<textarea name="address"><?php echo $row['address']; ?></textarea>

<button type="submit" name="update">Update Address</button>

</form>

</div>

</body>
</html>