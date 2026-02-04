<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cloud Security Dashboard</title>
</head>
<body>

<h2>Cloud-Based Security Dashboard</h2>
<p>Welcome, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b></p>
<p>Web Application Firewall Status: <b style="color:green">Active</b></p>
<h3>Security Metrics</h3> //security Metrics


</body>
</html>
