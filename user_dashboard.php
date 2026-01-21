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
<title>Fashion Store Dashboard</title>

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
  padding:20px 40px;
  display:flex;
  justify-content:space-between;
  align-items:center;
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

/* HERO */
.hero{
  text-align:center;
  padding:60px 20px;
  background:linear-gradient(135deg,#8e5df7,#c4a8ff);
  color:#fff;
}

.hero h2{
  font-size:36px;
  margin-bottom:10px;
}

.hero p{
  font-size:18px;
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

.product h3{
  margin:10px 0;
}

.product p{
  color:#555;
}

.product button{
  margin-top:10px;
  padding:10px 20px;
  border:none;
  background:#7a4cff;
  color:#fff;
  border-radius:8px;
  cursor:pointer;
}
</style>
</head>

<body>

<!-- HEADER -->
<div class="header">
  <h1>Fashion Cloud</h1>
  <div>
    Welcome, <b><?php echo htmlspecialchars($username); ?></b> 👋
    &nbsp;&nbsp;
    <a href="logout.php">Logout</a>
  </div>
</div>

<!-- HERO -->
<div class="hero">
  <h2>Discover the Latest Trends</h2>
  <p>Explore women’s fashion curated just for you</p>
</div>

<!-- SEARCH -->
<div class="search-box">
  <input type="text" placeholder="Search dresses, tops, collections...">
  <button>Search</button>
</div>

<!-- PRODUCTS -->
<div class="products">

  <div class="product">
    <h3>Floral Dress</h3>
    <p>₹1,499</p>
    <button>View</button>
  </div>

  <div class="product">
    <h3>Casual Kurti</h3>
    <p>₹999</p>
    <button>View</button>
  </div>

  <div class="product">
    <h3>Elegant Saree</h3>
    <p>₹2,499</p>
    <button>View</button>
  </div>

  <div class="product">
    <h3>Stylish Top</h3>
    <p>₹799</p>
    <button>View</button>
  </div>

</div>

</body>
</html>