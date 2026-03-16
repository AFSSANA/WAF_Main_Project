<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

/* Detect category page */
$isCategoryPage = basename($_SERVER['PHP_SELF']) !== 'user_dashboard.php';

/* SEARCH REDIRECTION LOGIC */
if (isset($_GET['search'])) {

$search = strtolower(trim($_GET['search']));

/* XSS Detection */
if (
stripos($search,"script") !== false ||
stripos($search,"javascript") !== false ||
stripos($search,"onerror") !== false ||
stripos($search,"onload") !== false ||
stripos($search,"alert") !== false
) {

include "log_attack.php";
logAttack("XSS Attack","user_dashboard.php",$search,"Blocked");

echo "<script>alert('Malicious input detected');</script>";

}

else{

/* WOMEN */

if(stripos($search,"top") !== false){
header("Location: tops.php");
exit();
}

elseif(stripos($search,"saree") !== false){
header("Location: saree.php");
exit();
}

elseif(stripos($search,"ethnic") !== false || stripos($search,"kurta") !== false){
header("Location: ethnic.php");
exit();
}

elseif(stripos($search,"festive") !== false || stripos($search,"lehenga") !== false){
header("Location: festive.php");
exit();
}

/* MEN */

elseif(stripos($search,"shirt") !== false){
header("Location: men_shirts.php");
exit();
}

elseif(stripos($search,"tshirt") !== false || stripos($search,"t-shirt") !== false){
header("Location: men_tshirts.php");
exit();
}

elseif(stripos($search,"jeans") !== false){
header("Location: men_jeans.php");
exit();
}

/* ACCESSORIES */

elseif(stripos($search,"handbag") !== false || stripos($search,"bag") !== false){
header("Location: handbag.php");
exit();
}

elseif(stripos($search,"watch") !== false){
header("Location: watches.php");
exit();
}

elseif(stripos($search,"sunglass") !== false){
header("Location: sunglasses.php");
exit();
}

elseif(stripos($search,"jewel") !== false){
header("Location: jewellery.php");
exit();
}

/* OTHER */

elseif(stripos($search,"new") !== false){
header("Location: new_arrivals.php");
exit();
}

elseif(stripos($search,"offer") !== false || stripos($search,"sale") !== false){
header("Location: offers.php");
exit();
}

else{
echo "<script>alert('Product not found');</script>";
}

}

}
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Fashion Cloud</title>

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

.home-btn{
font-size:22px;
color:#fff;
background:#5c2fe0;
padding:8px 14px;
border-radius:8px;
text-decoration:none;
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
}

.sidebar ul li{
margin-bottom:15px;
}

.sidebar ul li a{
text-decoration:none;
color:#444;
padding:10px 15px;
display:block;
border-radius:8px;
}

.sidebar ul li a:hover{
background:#efeaff;
color:#7a4cff;
}

.sidebar hr{
border:none;
height:1px;
background:#e5e5e5;
margin:20px 0;
}

/* MAIN */

.main{
flex:1;
}

/* SEARCH */

.search-box{
margin:40px auto;
width:60%;
}

.search-box form{
display:flex;
}

.search-box input{
flex:1;
padding:16px;
border-radius:12px 0 0 12px;
border:none;
}

.search-box button{
padding:16px 30px;
border:none;
background:#7a4cff;
color:#fff;
border-radius:0 12px 12px 0;
}

/* HERO */

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

.hero-image img{
width:320px;
border-radius:50%;
padding:15px;
}

/* PRODUCTS */

.products{
padding:60px 80px;
}

.products h2{
margin-bottom:25px;
color:#333;
}

.product-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:25px;
}

.product-card{
background:white;
padding:20px;
border-radius:12px;
text-align:center;
box-shadow:0 4px 15px rgba(0,0,0,0.05);
}

.product-card img{
width:100%;
border-radius:10px;
margin-bottom:10px;
}

.product-card h4{
margin:10px 0;
}

.product-card p{
font-weight:bold;
color:#7a4cff;
}

.product-card button{
margin-top:10px;
padding:10px 20px;
border:none;
background:#7a4cff;
color:white;
border-radius:8px;
cursor:pointer;
}

.product-card button:hover{
background:#6937e0;
}

</style>

</head>

<body>

<div class="header">

<div class="header-left">
<div class="toggle-btn" onclick="toggleSidebar()">☰</div>
<h1>Fashion Cloud</h1>
</div>

<div>
Welcome, <b><?php echo htmlspecialchars($username); ?></b> 👋
&nbsp;&nbsp;
<a href="logout.php" class="home-btn">Logout</a>
</div>

</div>

<div class="dashboard">

<div class="sidebar" id="sidebar">

<h3>Categories</h3>

<ul>
<li><a href="women.php">Women</a></li>
<li><a href="men.php">Men</a></li>
<li><a href="accessories.php">Accessories</a></li>
<li><a href="new_arrivals.php">New Arrivals</a></li>
<li><a href="offers.php">Offers</a></li>
</ul>

<hr>

<ul>
<li><a href="wishlist.php">❤️ Wishlist</a></li>
<li><a href="cart.php">🛒 Cart</a></li>
<li><a href="profile.php">👤 Profile</a></li>
</ul>

</div>

<div class="main">

<div class="search-box">
<form method="GET" action="user_dashboard.php">
<input type="text" name="search" placeholder="Search dresses, tops, collections...">
<button type="submit">Search</button>
</form>
</div>

<div class="hero">

<div class="hero-text">
<h2>The latest trends<br>in fashion</h2>
<p>Explore modern styles curated just for you</p>
<button>Shop Now</button>
</div>

<div class="hero-image">
<img src="https://i.pinimg.com/236x/43/f6/2d/43f62dd0ad6b1d8e6b38e770e0686276.jpg">
</div>

</div>

<section class="products">


</div>

</section>

</div>

</div>

<script>
function toggleSidebar(){
document.getElementById("sidebar").classList.toggle("collapsed");
}
</script>

</body>
</html>
