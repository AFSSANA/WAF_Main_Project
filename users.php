<?php
session_start();
include "db.php";

if(!isset($_SESSION['admin'])){
header("Location: admin_login.php");
exit();
}

$admin = $_SESSION['admin'];

$result = mysqli_query($conn,"SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>

<title>Users Management</title>

<style>

*{
box-sizing:border-box;
font-family:Segoe UI;
}

body{
margin:0;
background:#f3f4f6;
}

/* SIDEBAR */

.sidebar{
width:240px;
height:100vh;
background:#111827;
color:white;
position:fixed;
padding:30px 20px;
}

.sidebar h2{
margin-bottom:40px;
}

.sidebar a{
display:block;
padding:12px;
margin-bottom:10px;
color:#ddd;
text-decoration:none;
border-radius:8px;
}

.sidebar a:hover{
background:#7a4cff;
color:white;
}

/* TOPBAR */

.topbar{
margin-left:240px;
height:70px;
background:white;
display:flex;
justify-content:space-between;
align-items:center;
padding:0 30px;
box-shadow:0 3px 10px rgba(0,0,0,0.1);
}

/* CONTENT */

.container{
margin-left:240px;
padding:40px;
}

/* TABLE */

table{
width:100%;
border-collapse:collapse;
background:white;
border-radius:12px;
overflow:hidden;
box-shadow:0 10px 20px rgba(0,0,0,0.08);
}

th{
background:linear-gradient(135deg,#6a3df0,#7a4cff);
color:white;
padding:15px;
text-align:left;
}

td{
padding:15px;
border-bottom:1px solid #eee;
}

tr:hover{
background:#f9fafb;
}

.delete-btn{
background:#ef4444;
color:white;
border:none;
padding:6px 10px;
border-radius:6px;
cursor:pointer;
}

</style>

</head>

<body>

<!-- SIDEBAR -->

<div class="sidebar">

<h2>WAF Panel</h2>

<a href="admin_dashboard.php">Dashboard</a>
<a href="attack_logs.php">Attack Logs</a>
<a href="users.php">Users</a>
<a href="security_rules.php">Security Rules</a>
<a href="system_status.php">System Status</a>
<a href="logout_admin.php">Logout</a>

</div>

<!-- TOPBAR -->

<div class="topbar">

<h3>Users Management</h3>



</div>

<!-- MAIN CONTENT -->

<div class="container">

<h2>Registered Users</h2>

<table>

<tr>
<th>ID</th>
<th>Username</th>
<th>Email</th>
<th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['email']; ?></td>

<td>
<a href="delete_user.php?id=<?php echo $row['id']; ?>" 
onclick="return confirm('Are you sure you want to delete this user?');">

<button class="delete-btn">Delete</button>

</a>
</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>