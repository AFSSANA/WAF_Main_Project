<?php
session_start();

/* Simple protection: allow access only if user is logged in */
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

/* Dummy cloud monitoring data (simulated) */
$total_requests = 120;
$blocked_attacks = 18;
$sql_injection = 10;
$xss_attacks = 8;

/* Dummy logs */
$logs = [
    "Normal request allowed",
    "SQL Injection attempt blocked",
    "XSS attack detected and blocked",
    "Normal search request allowed",
    "Multiple suspicious requests detected"
];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cloud Security Dashboard</title>

<style>
body{
    margin:0;
    font-family:Segoe UI;
    background:#f2f4ff;
}

.header{
    background:#6a3df0;
    color:#fff;
    padding:20px;
    font-size:22px;
}

.container{
    padding:30px;
}

.cards{
    display:flex;
    gap:20px;
    margin-bottom:30px;
}

.card{
    flex:1;
    background:#fff;
    padding:20px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
    text-align:center;
}

.card h2{
    margin:0;
    font-size:32px;
    color:#6a3df0;
}

.card p{
    margin-top:10px;
    color:#555;
}

.logs{
    background:#fff;
    padding:20px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

.logs h3{
    margin-top:0;
}

.log-item{
    padding:10px;
    border-bottom:1px solid #eee;
    font-size:14px;
}
</style>
</head>

<body>

<div class="header">
    Cloud-Based WAF Dashboard
</div>

<div class="container">

    <p>Welcome, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b></p>
    <p>Firewall Status: <b style="color:green">Active</b></p>

    <!-- Monitoring Cards -->
    <div class="cards">
        <div class="card">
            <h2><?php echo $total_requests; ?></h2>
            <p>Total Requests</p>
        </div>
        <div class="card">
            <h2><?php echo $blocked_attacks; ?></h2>
            <p>Blocked Attacks</p>
        </div>
        <div class="card">
            <h2><?php echo $sql_injection; ?></h2>
            <p>SQL Injection</p>
        </div>
        <div class="card">
            <h2><?php echo $xss_attacks; ?></h2>
            <p>XSS Attacks</p>
        </div>
    </div>

    <!-- Logs Section -->
    <div class="logs">
        <h3>Recent Security Logs</h3>

        <?php foreach ($logs as $log): ?>
            <div class="log-item">
                <?php echo htmlspecialchars($log); ?>
            </div>
        <?php endforeach; ?>

    </div>

</div>

</body>
</html>
