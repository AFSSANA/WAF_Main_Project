<?php
session_start();
include "db.php";

if(!isset($_SESSION['admin'])){
header("Location: admin_login.php");
exit();
}

$admin = $_SESSION['admin'];

/* TOTAL BLOCKED ATTACKS */
$blocked = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT COUNT(*) AS total FROM attack_logs WHERE status='Blocked'")
)['total'];

/* LAST ATTACK TIME */
$last_attack = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT time FROM attack_logs ORDER BY time DESC LIMIT 1")
)['time'];

?>

<!DOCTYPE html>
<html>
<head>

<title>System Status</title>

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

/* STATUS CARDS */

.status-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:20px;
}

.status-card{
background:white;
padding:25px;
border-radius:15px;
box-shadow:0 8px 20px rgba(0,0,0,0.08);
}

.status-card h3{
margin-bottom:10px;
}

.green{
color:green;
font-weight:bold;
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

<h3>System Status</h3>



</div>

<!-- MAIN CONTENT -->

<div class="container">

<h2>WAF System Monitoring</h2>

<div class="status-grid">

<div class="status-card">
<h3>WAF Firewall</h3>
<p class="green">ACTIVE</p>
</div>

<div class="status-card">
<h3>Server Status</h3>
<p class="green">RUNNING</p>
</div>

<div class="status-card">
<h3>Database Connection</h3>
<p class="green">CONNECTED</p>
</div>

<div class="status-card">
<h3>Total Attacks Blocked</h3>
<p class="green"><?php echo $blocked; ?></p>
</div>

<div class="status-card">
<h3>Last Detected Attack</h3>
<p class="green"><?php echo $last_attack; ?></p>
</div>

</div>

</div>

</body>
</html>