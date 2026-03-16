<?php
session_start();

if (!isset($_SESSION['username'])) {
header("Location: login.php");
exit();
}

$username = $_SESSION['username'];

include "db.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$gender = $_POST['gender'];
$city = trim($_POST['city']);
$place = trim($_POST['place']);
$country = trim($_POST['country']);
$postal = trim($_POST['postal_code']);
$address = trim($_POST['address']);

/* VALIDATION */

if(!preg_match("/^[a-zA-Z ]+$/",$name)){
die("Invalid Name. Only letters allowed.");
}

if(!preg_match("/^[0-9]{10}$/",$phone)){
die("Invalid Phone Number. Must be 10 digits.");
}

if(!empty($postal) && !preg_match("/^[0-9]{6}$/",$postal)){
die("Invalid Postal Code. Must be 6 digits.");
}

/* INSERT DATA */

$sql = "INSERT INTO user_personal_details 
(username,name,phone,gender,city,place,country,postal_code,address)
VALUES
('$username','$name','$phone','$gender','$city','$place','$country','$postal','$address')";

mysqli_query($conn,$sql);

header("Location: personal_details.php");
exit();
}
?>

<!DOCTYPE html>

<html>
<head>
<title>Add Personal Details</title>

<style>

body{
margin:0;
font-family:Segoe UI;
background:#f2efff;
}

/* HEADER */

.header{
background:#7a4cff;
color:white;
padding:18px 40px;
display:flex;
justify-content:space-between;
align-items:center;
}

.home-btn{
background:#5c2fe0;
color:white;
padding:8px 14px;
border-radius:8px;
text-decoration:none;
}

/* PAGE */

.container{
width:70%;
margin:40px auto;
}

.box{
background:white;
padding:30px;
border-radius:12px;
box-shadow:0 4px 15px rgba(0,0,0,0.05);
}

h3{
margin-top:0;
}

/* FORM */

input, select, textarea{
width:100%;
padding:12px;
margin:10px 0;
border-radius:6px;
border:1px solid #ddd;
font-size:14px;
}

textarea{
resize:none;
height:90px;
}

/* BUTTON */

button{
background:#7a4cff;
color:white;
border:none;
padding:12px 22px;
border-radius:6px;
cursor:pointer;
margin-top:10px;
}

button:hover{
background:#6937e0;
}

</style>

</head>

<body>

<div class="header">

<h2>Fashion Cloud</h2>

<div>
<a href="personal_details.php" class="home-btn">← Back</a>
</div>

</div>

<div class="container">

<div class="box">

<h3>Add Personal Details</h3>

<form method="POST">

<input type="text" name="name" placeholder="Full Name" pattern="[A-Za-z ]+" title="Only letters allowed" required>

<input type="text" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" title="Enter 10 digit phone number" required>

<select name="gender">
<option value="">Select Gender</option>
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>

<input type="text" name="city" placeholder="City">

<input type="text" name="place" placeholder="Place">

<input type="text" name="country" placeholder="Country">

<input type="text" name="postal_code" placeholder="Postal Code" pattern="[0-9]{6}" title="Enter 6 digit postal code">

<textarea name="address" placeholder="Full Address"></textarea>

<button type="submit">Save Details</button>

</form>

</div>

</div>

</body>
</html>