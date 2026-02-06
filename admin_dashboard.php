<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cloud-Based WAF Dashboard</title>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
  color:#fff;
  padding:18px 40px;
  display:flex;
  justify-content:space-between;
  align-items:center;
}

.header h1{
  margin:0;
  font-size:24px;
}

/* MAIN */
.container{
  padding:40px;
}

/* STATUS CARDS */
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

<!-- HEADER -->
<div class="header">
  <h1>Cloud-Based WAF Dashboard</h1>
  <div>Welcome, <b><?php echo htmlspecialchars($username); ?></b></div>
</div>

<!-- CONTENT -->
<div class="container">

  <!-- STATUS CARDS -->
  <div class="cards">
    <div class="card">
      <h2>120</h2>
      <p>Total Requests</p>
    </div>
    <div class="card">
      <h2>18</h2>
      <p>Blocked Attacks</p>
    </div>
    <div class="card">
      <h2>10</h2>
      <p>SQL Injection</p>
    </div>
    <div class="card">
      <h2>8</h2>
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
/* Line Chart - Requests */
new Chart(document.getElementById('trafficChart'), {
  type: 'line',
  data: {
    labels: ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'],
    datasets: [{
      label: 'Requests',
      data: [10, 20, 15, 30, 25, 40, 50],
      borderColor: '#7a4cff',
      fill: false,
      tension: 0.4
    }]
  }
});

/* Bar Chart - Attacks */
new Chart(document.getElementById('attackChart'), {
  type: 'bar',
  data: {
    labels: ['SQL Injection','XSS','Brute Force'],
    datasets: [{
      label: 'Blocked Attacks',
      data: [10, 8, 5],
      backgroundColor: ['#7a4cff','#9c7cff','#c4a8ff']
    }]
  }
});
</script>

</body>
</html>
