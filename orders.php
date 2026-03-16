<?php
session_start();

if (!isset($_SESSION['username'])) {
header("Location: login.php");
exit();
}

$username = $_SESSION['username'];

include "db.php";

$result = mysqli_query($conn,
"SELECT * FROM orders WHERE username='$username'");
?>

<!DOCTYPE html>

<html>
<head>
<title>My Orders</title>

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
width:80%;
margin:40px auto;
}

.box{
background:white;
padding:25px;
border-radius:12px;
box-shadow:0 4px 15px rgba(0,0,0,0.05);
}

h3{
margin-top:0;
}

/* TABLE */

table{
width:100%;
border-collapse:collapse;
margin-top:20px;
}

th{
background:#f7f5ff;
padding:12px;
text-align:left;
font-weight:600;
}

td{
padding:12px;
border-bottom:1px solid #eee;
}

tr:hover{
background:#faf9ff;
}

/* STATUS COLORS */

.status{
padding:5px 10px;
border-radius:6px;
font-size:13px;
font-weight:600;
}

.status-delivered{
background:#e8f6ec;
color:#2e8b57;
}

.status-processing{
background:#fff4e5;
color:#ff9800;
}

.status-cancelled{
background:#fdecea;
color:#e53935;
}

/* EMPTY MESSAGE */

.empty{
color:#777;
margin-top:15px;
}

</style>

</head>

<body>

<div class="header">

<h2>Fashion Cloud</h2>

<div>
<a href="profile.php" class="home-btn">← Back</a>
</div>

</div>

<div class="container">

<div class="box">

<h3>My Orders</h3>

<table>

<tr>
<th>Order ID</th>
<th>Product</th>
<th>Date</th>
<th>Total</th>
<th>Status</th>
</tr>

<?php
if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)){

$status = strtolower($row['order_status']);
?>

<tr>
<td>#<?php echo $row['id']; ?></td>

<td><?php echo htmlspecialchars($row['product_name']); ?></td>

<td><?php echo htmlspecialchars($row['order_date']); ?></td>

<td>₹<?php echo htmlspecialchars($row['order_total']); ?></td>

<td>
<span class="status status-<?php echo $status; ?>">
<?php echo htmlspecialchars($row['order_status']); ?>
</span>
</td>

</tr>

<?php
}

}else{
echo "<tr><td colspan='5' class='empty'>No orders placed yet.</td></tr>";
}
?>

</table>

</div>

</div>

</body>
</html>
