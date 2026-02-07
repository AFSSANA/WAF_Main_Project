<?php
session_start();
include "db.php";

/* Total Requests */
$totalReq = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM attack_logs")
)['total'];

/* Blocked Attacks */
$blocked = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM attack_logs WHERE status='Blocked'")
)['total'];

/* SQL Injection */
$sql_injection = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM attack_logs WHERE attack_type='SQL Injection'")
)['total'];

/* XSS */
$xss = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM attack_logs WHERE attack_type='XSS'")
)['total'];

/* Brute Force */
$brute = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM attack_logs WHERE attack_type='Brute Force'")
)['total'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cloud-Based WAF Dashboard</title>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
*{box-sizing:border-box;font-family:"Segoe UI",sans-serif}
body{margin:0;background:#f2efff}
.header{background:#7a4cff;color:#fff;padding:18px 40px;display:flex;justify-content:space-between;align-items:center}
.container{padding:40px}

.cards{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:25px;
  margin-bottom:40px;
}
.card{
  background:#fff;
  padding:25px;
  border-radius:18px;
  box-shadow:0 10px 25px rgba(0,0,0,0.1);
  text-align:center;
}
.card h2{margin:0;font-size:36px;color:#7a4cff}
.card p{margin-top:10px;font-weight:600;color:#555}

.graphs{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(350px,1fr));
  gap:30px;
}
.graph-box{
  background:#fff;
  padding:25px;
  border-radius:18px;
  box-shadow:0 10px 25px rgba(0,0,0,0.1);
}
</style>
</head>

<body>

<div class="header">
  <h1>Cloud-Based WAF Dashboard</h1>
  <div>Admin Monitoring Panel</div>
</div>

<div class="container">

  <!-- STATUS CARDS -->
  <div class="cards">
    <div class="card">
      <h2><?php echo $totalReq; ?></h2>
      <p>Total Requests</p>
    </div>
    <div class="card">
      <h2><?php echo $blocked; ?></h2>
      <p>Blocked Attacks</p>
    </div>
    <div class="card">
      <h2><?php echo $sql_injection; ?></h2>
      <p>SQL Injection</p>
    </div>
    <div class="card">
      <h2><?php echo $xss; ?></h2>
      <p>XSS Attacks</p>
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
/* Line Chart (simulated traffic) */
new Chart(document.getElementById('trafficChart'), {
  type: 'line',
  data: {
    labels: ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'],
    datasets: [{
      label: 'Requests',
      data: [10,20,15,30,25,40,50],
      borderColor: '#7a4cff',
      fill: false,
      tension: 0.4
    }]
  }
});

/* Bar Chart - REAL attack data */
new Chart(document.getElementById('attackChart'), {
  type: 'bar',
  data: {
    labels: ['SQL Injection','XSS','Brute Force'],
    datasets: [{
      label: 'Blocked Attacks',
      data: [
        <?php echo $sql_injection; ?>,
        <?php echo $xss; ?>,
        <?php echo $brute; ?>
      ],
      backgroundColor: ['#7a4cff','#9c7cff','#c4a8ff']
    }]
  }
});
</script>

</body>
</html>
