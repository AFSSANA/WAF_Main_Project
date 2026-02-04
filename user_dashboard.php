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
<title>Fashion Cloud Dashboard</title>

<style>
*{
  box-sizing:border-box;
  font-family: "Segoe UI", sans-serif;
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

.header a{
  color:#fff;
  text-decoration:none;
  background:#5c2fe0;
  padding:8px 16px;
  border-radius:8px;
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
  transition:width 0.3s ease, padding 0.3s ease;
  overflow:hidden;
}

.sidebar.collapsed{
  width:0;
  padding:0;
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

.sidebar ul li a:hover{
  background:#efeaff;
  color:#7a4cff;
}

/* MAIN CONTENT */
.main{
  flex:1;
}

/* HERO (UPDATED) */
.hero{
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding:70px 80px;
  background:linear-gradient(135deg,#8e5df7,#c4a8ff);
  color:#fff;
}

.hero-text{
  max-width:50%;
}

.hero-text h2{
  font-size:42px;
  margin-bottom:15px;
}

.hero-text p{
  font-size:18px;
  margin-bottom:25px;
  opacity:0.95;
}

.hero-text button{
  padding:14px 30px;
  border:none;
  background:#fff;
  color:#7a4cff;
  border-radius:25px;
  font-size:16px;
  font-weight:600;
  cursor:pointer;
}

.hero-text button:hover{
  background:#f2efff;
}

.hero-image img{
  width:320px;
  border-radius:50%;
  background:rgba(255,255,255,0.2);
  padding:15px;
}

/* SEARCH */
.search-box{
  margin:40px auto;
  width:60%;
  display:flex;
}

.search-box input{
  flex:1;
  padding:16px;
  border-radius:12px 0 0 12px;
  border:none;
  font-size:16px;
}

.search-box button{
  padding:16px 30px;
  border:none;
  background:#7a4cff;
  color:#fff;
  font-size:16px;
  border-radius:0 12px 12px 0;
  cursor:pointer;
}
</style>
</head>

<body>

<!-- HEADER -->
<div class="header">
  <div class="header-left">
    <div class="toggle-btn" onclick="toggleSidebar()" id="toggleIcon">☰</div>
    <h1>Fashion Cloud</h1>
  </div>

  <div>
    Welcome, <b><?php echo htmlspecialchars($username); ?></b> 👋
    &nbsp;&nbsp;
    <a href="logout.php">Logout</a>
  </div>
</div>

<!-- DASHBOARD -->
<div class="dashboard">

  <!-- SIDEBAR -->
  <div class="sidebar" id="sidebar">
    <h3>Categories</h3>
    <ul>
      <li><a href="#">Women</a></li>
      <li><a href="#">Men</a></li>
      <li><a href="#">Accessories</a></li>
      <li><a href="#">New Arrivals</a></li>
      <li><a href="#">Offers</a></li>
    </ul>
  </div>

  <!-- MAIN -->
  <div class="main">


  <!-- SEARCH -->
    <div class="search-box">
      <input type="text" placeholder="Search dresses, tops, collections...">
      <button>Search</button>
    </div>


    <!-- HERO -->
    <div class="hero">
      <div class="hero-text">
        <h2>The latest trends<br>in fashion</h2>
        <p>Explore modern styles curated just for you</p>
        <button>Shop Now</button>
      </div>

      <div class="hero-image">
        <img src="https://i.pinimg.com/236x/43/f6/2d/43f62dd0ad6b1d8e6b38e770e0686276.jpg" alt="Fashion Model">
      </div>
    </div>

    

  </div>
</div>

<script>
function toggleSidebar(){
  const sidebar = document.getElementById("sidebar");
  sidebar.classList.toggle("collapsed");
}
</script>

</body>
</html>
