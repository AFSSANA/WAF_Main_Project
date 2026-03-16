<?php
session_start();
include "db.php";

if(!isset($_SESSION['admin'])){
header("Location: admin_login.php");
exit();
}

$admin = $_SESSION['admin'];

/* Latest Attack */
$latest_attack = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT * FROM attack_logs ORDER BY time DESC LIMIT 1")
);

/* Total Requests */
$totalReq = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT COUNT(*) AS total FROM attack_logs")
)['total'];

/* Blocked Attacks */
$blocked = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT COUNT(*) AS total FROM attack_logs WHERE status='Blocked'")
)['total'];

/* SQL Injection */
$sql_injection = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT COUNT(*) AS total FROM attack_logs WHERE attack_type='SQL Injection'")
)['total'];

/* XSS */
$xss = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT COUNT(*) AS total FROM attack_logs WHERE attack_type='XSS Attack'")
)['total'];

/* Brute Force */
$brute_force = mysqli_fetch_assoc(
mysqli_query($conn,"SELECT COUNT(*) AS total FROM attack_logs WHERE attack_type='Brute Force'")
)['total'];

/* REQUEST TRAFFIC (REAL DATA FROM DB) */

$traffic_query = mysqli_query($conn,"
SELECT DATE(time) as day, COUNT(*) as total
FROM attack_logs
GROUP BY DATE(time)
ORDER BY day DESC
LIMIT 7
");

$days = [];
$counts = [];

while($row = mysqli_fetch_assoc($traffic_query)){

$days[] = date("D", strtotime($row['day']));  // Mon Tue Wed
$counts[] = $row['total'];

}
?>

<!DOCTYPE html>
<html>
<head>

<title>WAF Admin Dashboard</title>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>

.toggle-btn{
font-size:22px;
cursor:pointer;
background:#7a4cff;
color:white;
padding:8px 12px;
border-radius:8px;
}

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

/* MAIN CONTENT */

.container{
margin-left:240px;
padding:30px;
}

/* CARDS */

.cards{
display:grid;
grid-template-columns:repeat(5,1fr);
gap:20px;
margin-bottom:40px;
}

.card{
background:white;
padding:25px;
border-radius:15px;
box-shadow:0 8px 20px rgba(0,0,0,0.08);
text-align:center;
}

.card h2{
margin:0;
font-size:36px;
color:#7a4cff;
}

.card p{
margin-top:10px;
font-weight:600;
color:#555;
}

/* GRAPHS */

.graphs{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(400px,1fr));
gap:25px;
}

.graph-box{
background:white;
padding:25px;
border-radius:15px;
box-shadow:0 8px 20px rgba(0,0,0,0.08);
}

/* CLOSE BUTTON */

.close-btn{
position:absolute;
right:12px;
top:8px;
font-size:20px;
cursor:pointer;
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

<!-- TOP BAR -->

<div class="topbar">

<div style="display:flex;align-items:center;gap:15px;">

<div class="toggle-btn" onclick="toggleSidebar()">☰</div>

<div>
Welcome, <?php echo $admin; ?>
</div>

</div>

</div>

<!-- MAIN CONTENT -->

<div class="container">

<?php if($latest_attack){ ?>

<div id="attackAlert" style="
background:#fff3cd;
border-left:6px solid #ff9800;
padding:15px 20px;
margin-bottom:25px;
border-radius:10px;
font-weight:500;
position:relative;
">

<span class="close-btn" onclick="closeAlert()">×</span>

⚠ <b>Latest Attack Detected</b><br>

<?php echo $latest_attack['attack_type']; ?>
from
<b><?php echo $latest_attack['ip_address']; ?></b>
on
<b><?php echo $latest_attack['page_name']; ?></b>

</div>

<?php } ?>

<!-- STATUS CARDS -->

<div class="cards">

<div class="card">
<h2 id="totalCount"><?php echo $totalReq; ?></h2>
<p>Total Attacks Logged</p>
</div>

<div class="card">
<h2 id="blockedCount"><?php echo $blocked; ?></h2>
<p>Blocked Attacks</p>
</div>

<div class="card">
<h2 id="sqlCount"><?php echo $sql_injection; ?></h2>
<p>SQL Injection</p>
</div>

<div class="card">
<h2 id="xssCount"><?php echo $xss; ?></h2>
<p>XSS Attacks</p>
</div>

<div class="card">
<h2 id="bruteCount"><?php echo $brute_force; ?></h2>
<p>Brute Force</p>
</div>

</div>

<!-- GRAPHS -->

<div class="graphs">

<div class="graph-box">
<h3>Request Traffic</h3>
<canvas id="trafficChart"></canvas>
</div>

<div class="graph-box">
<h3>Attack Distribution</h3>
<canvas id="attackChart"></canvas>
</div>

</div>

</div>

<script>

/* LIVE DASHBOARD UPDATE */

function refreshDashboard(){

fetch("get_dashboard_data.php")
.then(res => res.json())
.then(data => {

document.getElementById("totalCount").innerText = data.total;
document.getElementById("blockedCount").innerText = data.blocked;
document.getElementById("sqlCount").innerText = data.sql;
document.getElementById("xssCount").innerText = data.xss;
document.getElementById("bruteCount").innerText = data.brute;

});

}

setInterval(refreshDashboard,4000);


/* CLOSE ALERT */

function closeAlert(){
let alert = document.getElementById("attackAlert");
if(alert){
alert.style.display="none";
}
}


/* AUTO HIDE ALERT */

setTimeout(function(){
let alert = document.getElementById("attackAlert");
if(alert){
alert.style.display="none";
}
},6000);


/* TRAFFIC CHART (REAL DATA) */

new Chart(document.getElementById('trafficChart'),{

type:'line',

data:{
labels: <?php echo json_encode($days); ?>,

datasets:[{

label:'Requests',

data: <?php echo json_encode($counts); ?>,

borderColor:'#7a4cff',

fill:false,

tension:0.4

}]

}

});


/* ATTACK CHART */

new Chart(document.getElementById('attackChart'),{

type:'bar',

data:{

labels:['SQL Injection','XSS','Brute Force'],

datasets:[{

label:'Blocked Attacks',

data:[
<?php echo $sql_injection; ?>,
<?php echo $xss; ?>,
<?php echo $brute_force; ?>
],

backgroundColor:['#7a4cff','#9c7cff','#c4a8ff']

}]

}

});

</script>

</body>
</html>