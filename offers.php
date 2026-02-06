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
<title>Offers | Fashion Cloud</title>

<style>
*{box-sizing:border-box;font-family:"Segoe UI",sans-serif}
body{margin:0;background:#f2efff}

/* HEADER */
.header{background:#7a4cff;color:#fff;padding:18px 40px;display:flex;justify-content:space-between;align-items:center}
.header-left{display:flex;align-items:center;gap:15px}
.toggle-btn{font-size:22px;cursor:pointer;background:#5c2fe0;padding:8px 12px;border-radius:8px}
.header h1{margin:0;font-size:24px}
.home-btn{background:#5c2fe0;padding:10px;border-radius:10px;display:flex}

/* LAYOUT */
.dashboard{display:flex;min-height:calc(100vh - 70px)}
.sidebar{width:240px;background:#fff;padding:25px 20px;box-shadow:4px 0 15px rgba(0,0,0,.05);transition:.3s}
.sidebar.collapsed{width:0;padding:0;overflow:hidden}
.sidebar ul{list-style:none;padding:0}
.sidebar li{margin-bottom:15px}
.sidebar a{text-decoration:none;color:#444;padding:10px 15px;display:block;border-radius:8px}
.sidebar a.active,.sidebar a:hover{background:#efeaff;color:#7a4cff}

/* MAIN */
.main{flex:1}
.hero{padding:60px 80px;background:linear-gradient(135deg,#8e5df7,#c4a8ff);color:#fff}
.products{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:25px;padding:40px}
.product{background:#fff;padding:20px;border-radius:16px;box-shadow:0 10px 25px rgba(0,0,0,.1);text-align:center}
.product img{width:100%;height:220px;object-fit:cover;border-radius:12px}
.product p{color:#7a4cff;font-weight:600}
del{color:#999}
</style>
</head>

<body>

<div class="header">
  <div class="header-left">
    <div class="toggle-btn" onclick="toggleSidebar()">☰</div>
    <h1>Fashion Cloud</h1>
  </div>
  <a href="user_dashboard.php" class="home-btn">🏠</a>
</div>

<div class="dashboard">
  <div class="sidebar collapsed" id="sidebar">
    <ul>
      <li><a href="women.php">Women</a></li>
      <li><a href="men.php">Men</a></li>
      <li><a href="accessories.php">Accessories</a></li>
      <li><a href="new_arrivals.php">New Arrivals</a></li>
      <li><a href="offers.php" class="active">Offers</a></li>
    </ul>
  </div>

  <div class="main">
    <div class="hero">
      <h2>Special Offers</h2>
      <p>Best deals curated for you</p>
    </div>

    <div class="products">
      <div class="product"><img src="images/off1.jpg"><h3>Festive Saree</h3><p><del>₹2,999</del> ₹1,999</p></div>
      <div class="product"><img src="images/off2.jpg"><h3>Casual Shirt</h3><p><del>₹1,299</del> ₹899</p></div>
      <div class="product"><img src="images/off3.jpg"><h3>Handbag</h3><p><del>₹1,899</del> ₹1,299</p></div>
    </div>
  </div>
</div>

<script>
function toggleSidebar(){
  document.getElementById("sidebar").classList.toggle("collapsed");
}
</script>

</body>
</html>
