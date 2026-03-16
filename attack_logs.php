<?php
session_start();
include "db.php";

if(!isset($_SESSION['admin'])){
header("Location: admin_login.php");
exit();
}

/* Fetch all attack logs */
$search = "";

if(isset($_GET['search'])){
$search = $_GET['search'];
}

$query = "SELECT * FROM attack_logs
WHERE ip_address LIKE '%$search%'
OR attack_type LIKE '%$search%'
OR page_name LIKE '%$search%'
ORDER BY time DESC";

$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>

<title>Attack Logs</title>

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
align-items:center;
padding:0 30px;
box-shadow:0 3px 10px rgba(0,0,0,0.1);
}

/* CONTENT */

.container{
margin-left:240px;
padding:30px;
}

/* TABLE */

table{
width:100%;
border-collapse:collapse;
background:white;
border-radius:15px;
overflow:hidden;
box-shadow:0 8px 20px rgba(0,0,0,0.08);
}

th,td{
padding:12px;
border-bottom:1px solid #eee;
text-align:left;
}

th{
background:#7a4cff;
color:white;
}

tr:hover{
background:#f9f9f9;
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

<h3>Attack Logs Monitoring</h3>

</div>

<!-- CONTENT -->

<div class="container">


<form method="GET" style="margin-bottom:30px; display:flex; justify-content:center; gap:10px;">

<input type="text" name="search"
value="<?php echo htmlspecialchars($search); ?>"
placeholder="Search by IP, Attack Type, or Page..."
style="padding:10px;width:380px;border-radius:6px;border:1px solid #ccc;">

<button type="submit"
style="padding:10px 15px;background:#7a4cff;color:white;border:none;border-radius:6px;">
Search
</button>

</form>

<table>

<tr>
<th>Time</th>
<th>IP Address</th>
<th>Attack Type</th>
<th>Page</th>
<th>Status</th>
</tr>

<tbody id="attackTable">

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?php echo $row['time']; ?></td>
<td><?php echo $row['ip_address']; ?></td>
<td><?php echo $row['attack_type']; ?></td>
<td><?php echo $row['page_name']; ?></td>
<td><?php echo $row['status']; ?></td>
</tr>

<?php } ?>

</tbody>

</table>

</div>
<script>

function loadAttacks(){

fetch("get_latest_attacks.php")
.then(response => response.text())
.then(data => {

document.getElementById("attackTable").innerHTML = data;

});

}

/* refresh every 3 seconds */
//setInterval(loadAttacks,3000);

</script>

</body>
</html>