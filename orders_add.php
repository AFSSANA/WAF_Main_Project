<?php
session_start();

if (!isset($_SESSION['username'])) {
header("Location: login.php");
exit();
}

$username = $_SESSION['username'];

include "db.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

$product = mysqli_real_escape_string($conn,$_POST['product_name']);
$date = mysqli_real_escape_string($conn,$_POST['order_date']);
$status = mysqli_real_escape_string($conn,$_POST['order_status']);
$total = mysqli_real_escape_string($conn,$_POST['order_total']);

mysqli_query($conn,
"INSERT INTO orders (username,product_name,order_date,order_status,order_total)
VALUES ('$username','$product','$date','$status','$total')");

header("Location: orders.php");
exit();
}
?>

<!DOCTYPE html>

<html>
<head>
<title>Add Order</title>

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

input, select{
width:100%;
padding:12px;
margin:10px 0;
border-radius:6px;
border:1px solid #ddd;
font-size:14px;
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
Welcome, <b><?php echo htmlspecialchars($username); ?></b>
&nbsp;&nbsp;
<a href="orders.php" class="home-btn">← Back</a>
</div>

</div>

<div class="container">

<div class="box">

<h3>Add New Order</h3>

<form method="POST">

<input type="text" name="product_name" placeholder="Product Name" required>

<input type="date" name="order_date" required>

<select name="order_status" required>
<option value="">Select Status</option>
<option value="Processing">Processing</option>
<option value="Delivered">Delivered</option>
<option value="Cancelled">Cancelled</option>
</select>

<input type="number" name="order_total" placeholder="Order Total (₹)" required>

<button type="submit">Save Order</button>

</form>

</div>

</div>

</body>
</html>
