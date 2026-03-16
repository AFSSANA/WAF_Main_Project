<?php
session_start();
include "db.php";

if(!isset($_SESSION['admin'])){
header("Location: admin_login.php");
exit();
}

$admin = $_SESSION['admin'];
?>

<!DOCTYPE html>
<html>
<head>

<title>Security Rules</title>

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

/* RULE CARDS */

.rules{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:20px;
}

.rule-card{
background:white;
padding:25px;
border-radius:15px;
box-shadow:0 8px 20px rgba(0,0,0,0.08);
}

.rule-card h3{
margin:0 0 10px 0;
}

.status{
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

<h3>Security Rules</h3>



</div>

<!-- CONTENT -->

<div class="container">

<h2>Active Security Protections</h2>

<div class="rules">

<div class="rule-card">
<h3>SQL Injection Protection</h3>
<p>Status: <span class="status">ACTIVE</span></p>
</div>

<div class="rule-card">
<h3>XSS Protection</h3>
<p>Status: <span class="status">ACTIVE</span></p>
</div>

<div class="rule-card">
<h3>Brute Force Protection</h3>
<p>Status: <span class="status">ACTIVE</span></p>
</div>

<div class="rule-card">
<h3>Input Validation Filter</h3>
<p>Status: <span class="status">ACTIVE</span></p>
</div>

<div class="rule-card">
<h3>Malicious Request Detection</h3>
<p>Status: <span class="status">ACTIVE</span></p>
</div>

</div>

</div>

</body>
</html>