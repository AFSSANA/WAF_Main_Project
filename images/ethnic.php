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
<title>Ethnic Wear | Fashion Cloud</title>

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
color:white;
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
background:#5c2fe0;
padding:8px 12px;
border-radius:8px;
}

.header h1{
margin:0;
font-size:24px;
}

.home-btn{
background:#5c2fe0;
padding:10px;
border-radius:10px;
text-decoration:none;
}

/* PRODUCTS */

.products{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
gap:25px;
padding:50px;
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
<div class="toggle-btn">☰</div>
<h1>Fashion Cloud</h1>
</div>

<a href="women.php" class="home-btn">

<svg xmlns="http://www.w3.org/2000/svg"
viewBox="0 0 24 24"
width="22"
height="22"
fill="white">

<path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>

</svg>

</a>

</div>

<!-- PRODUCTS -->

<div class="products">

<div class="product">
<img src="images/ethnic1.jpg">
<h3>Women embroidered viscose rayon straight kurta</h3>
<p>₹2,499</p>
</div>

<div class="product">
<img src="images/ethnic2.jpg">
<h3>Women floral print</h3>
<p>₹1,299</p>
</div>

<div class="product">
<img src="images/ethnic3.jpg">
<h3>Women printed cotton rayon kurta</h3>
<p>₹3,499</p>
</div>

<div class="product">
<img src="images/ethnic4.jpg">
<h3>Viscose A-Line kurta</h3>
<p>₹899</p>
</div>

<div class="product">
<img src="images/ethnic5.jpg">
<h3>Pure cotton kurta</h3>
<p>₹799</p>
</div>

<div class="product">
<img src="images/ethnic6.jpg">
<h3>Viscose Rayon A-line kurta</h3>
<p>₹1,599</p>
</div>

<div class="product">
<img src="images/ethnic7.jpg">
<h3>Cotton rayon kurti with attached dupatta</h3>
<p>₹1,999</p>
</div>

<div class="product">
<img src="images/ethnic8.jpg">
<h3>Embroided semi stitched lehenga</h3>
<p>₹2,199</p>
</div>

</div>

</body>
</html>