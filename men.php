<?php
session_start();

/* Protect page */
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
<title>Men’s Collection | Fashion Cloud</title>

<style>
*{
  box-sizing:border-box;
  font-family:"Segoe UI", sans-serif;
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

.header-left{
  display:flex;
  align-items:center;
  gap:15px;
}

.toggle-btn{
  font-size:22px;
  cursor:pointer;
  background:#5c2fe0;
  padding:8px 12px;
  border-radius:8px;
}

.header h1{
  margin:0;
  font-size:24px;
}

.header-right{
  display:flex;
  align-items:center;
  gap:15px;
}

.home-btn{
  display:flex;
  align-items:center;
  justify-content:center;
  background:#5c2fe0;
  padding:10px;
  border-radius:10px;
  text-decoration:none;
}

.home-btn:hover{
  background:#4a22d4;
}

/* LAYOUT */
.dashboard{
  display:flex;
  min-height:calc(100vh - 70px);
}

/* SIDEBAR */
.sidebar{
  width:240px;
  background:#ffffff;
  padding:25px 20px;
  box-shadow:4px 0 15px rgba(0,0,0,0.05);
  transition:0.3s;
}

.sidebar.collapsed{
  width:0;
  padding:0;
  overflow:hidden;
}

.sidebar h3{
  margin-bottom:20px;
  color:#7a4cff;
}

.sidebar ul{
  list-style:none;
  padding:0;
  margin:0;
}

.sidebar ul li{
  margin-bottom:15px;
}

.sidebar ul li a{
  text-decoration:none;
  color:#444;
  font-weight:500;
  display:block;
  padding:10px 15px;
  border-radius:8px;
}

.sidebar ul li a:hover,
.sidebar ul li a.active{
  background:#efeaff;
  color:#7a4cff;
}

/* MAIN */
.main{
  flex:1;
}

/* HERO */
.hero{
  padding:60px 80px;
  background:linear-gradient(135deg,#8e5df7,#c4a8ff);
  color:#fff;
}

.hero h2{
  font-size:40px;
  margin-bottom:10px;
}

.hero p{
  font-size:18px;
  opacity:0.95;
}

/* PRODUCTS */
.products{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:25px;
  padding:40px;
}

.product{
  background:#fff;
  padding:20px;
  border-radius:16px;
  box-shadow:0 10px 25px rgba(0,0,0,0.1);
  text-align:center;
}

.product img{
  width:100%;
  height:220px;
  object-fit:cover;
  border-radius:12px;
}

.product h3{
  margin:12px 0 5px;
}

.product p{
  color:#7a4cff;
  font-weight:600;
}
</style>
</head>

<body>

<!-- HEADER -->
<div class="header">
  <div class="header-left">
    <div class="toggle-btn" onclick="toggleSidebar()">☰</div>
    <h1>Fashion Cloud</h1>
  </div>

  <div class="header-right">
    <a href="user_dashboard.php" class="home-btn" title="Go Home">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" fill="white">
        <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
      </svg>
    </a>
  </div>
</div>

<!-- DASHBOARD -->
<div class="dashboard">

  <!-- SIDEBAR -->
  <div class="sidebar collapsed" id="sidebar">
    <h3>Categories</h3>
    <ul>
      <li><a href="women.php">Women</a></li>
      <li><a href="men.php" class="active">Men</a></li>
      <li><a href="accessories.php">Accessories</a></li>
      <li><a href="#">New Arrivals</a></li>
      <li><a href="#">Offers</a></li>
    </ul>
  </div>

  <!-- MAIN -->
  <div class="main">

    <div class="hero">
      <h2>Men’s Collection</h2>
      <p>Discover the latest trends in men’s fashion</p>
    </div>

    <div class="products">

      <div class="product">
        <img src="images/men1.jpg">
        <h3>Casual Shirt</h3>
        <p>₹1,199</p>
      </div>

      <div class="product">
        <img src="images/men2.jpg">
        <h3>Formal Trousers</h3>
        <p>₹1,499</p>
      </div>

      <div class="product">
        <img src="images/men3.jpg">
        <h3>Denim Jacket</h3>
        <p>₹2,299</p>
      </div>

      <div class="product">
        <img src="images/men4.jpg">
        <h3>Classic T-Shirt</h3>
        <p>₹799</p>
      </div>

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
