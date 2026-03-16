<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include "db.php";

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];

/* get existing details */
$result = mysqli_query($conn,"SELECT * FROM user_personal_details WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

/* update details */
if(isset($_POST['update'])){

$name = $_POST['name'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$place = $_POST['place'];
$country = $_POST['country'];
$postal = $_POST['postal'];
$address = $_POST['address'];

mysqli_query($conn,"UPDATE user_personal_details SET
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
<title>Edit Address | Fashion Cloud</title>

<style>

*{
box-sizing:border-box;
font-family:"Segoe UI",sans-serif;
}

body{
margin:0;
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

.header h2{
margin:0;
}

.home-btn{
background:#5c2fe0;
padding:10px 16px;
border-radius:8px;
text-decoration:none;
color:white;
}

/* CONTAINER */

.container{
padding:50px;
display:flex;
justify-content:center;
}

/* CARD */

.card{
background:white;
padding:35px;
border-radius:16px;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
width:550px;
}

/* FORM */

input, textarea{
width:100%;
padding:12px;
margin-bottom:15px;
border-radius:8px;
border:1px solid #ddd;
font-size:14px;
}

/* BUTTON */

button{
background:#7a4cff;
color:white;
border:none;
padding:12px 22px;
border-radius:8px;
cursor:pointer;
font-size:14px;
}

button:hover{
background:#6937e0;
}

</style>

</head>

<body>

<!-- HEADER -->

<div class="header">

<h2>Edit Address</h2>

<a href="personal_details.php" class="home-btn">

<svg xmlns="http://www.w3.org/2000/svg"
viewBox="0 0 24 24"
width="22"
height="22"
fill="white">

<path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>

</svg>

</a>

</div>

<!-- FORM -->

<div class="container">

<div class="card">

<form method="POST">

<input type="text" name="name" value="<?php echo $row['name']; ?>" required>

<input type="text" name="phone" value="<?php echo $row['phone']; ?>" required>

<input type="text" name="city" value="<?php echo $row['city']; ?>" required>

<input type="text" name="place" value="<?php echo $row['place']; ?>" required>

<input type="text" name="country" value="<?php echo $row['country']; ?>" required>

<input type="text" name="postal" value="<?php echo $row['postal_code']; ?>" required>

<textarea name="address"><?php echo $row['address']; ?></textarea>

<button type="submit" name="update">Update Details</button>

</form>

</div>

</div>

</body>
</html>