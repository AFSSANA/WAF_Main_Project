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
<title>Accessories | Fashion Cloud</title>

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

.home-btn{
background:#5c2fe0;
padding:10px;
border-radius:10px;
text-decoration:none;
}

/* HERO */

.hero{
padding:60px 80px;
background:linear-gradient(135deg,#8e5df7,#c4a8ff);
color:white;
}

.hero h1{
font-size:40px;
margin-bottom:10px;
}

.hero p{
font-size:18px;
}

/* CATEGORY GRID */

.categories{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
gap:30px;
padding:50px;
}

.category{
background:white;
padding:20px;
border-radius:16px;
text-align:center;
box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

.category img{
width:100%;
height:220px;
object-fit:cover;
border-radius:12px;
}

.category h3{
margin-top:15px;
}

.category a{
text-decoration:none;
color:#7a4cff;
font-weight:600;
}

</style>
</head>

<body>

<div class="header">

<h2>Accessories</h2>

<a href="user_dashboard.php" class="home-btn">

<svg xmlns="http://www.w3.org/2000/svg"
viewBox="0 0 24 24"
width="22"
height="22"
fill="white">

<path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>

</svg>

</a>

</div>

<div class="hero">
<h1>Accessories Collection</h1>
<p>Complete your look with stylish accessories</p>
</div>

<div class="categories">

<!-- HANDBAGS -->

<div class="category">
<img src="images/handbag.jpg">
<h3>Handbags</h3>
<a href="handbags.php">Explore Collection</a>
</div>

<!-- WATCHES -->

<div class="category">
<img src="images/watch.jpg">
<h3>Watches</h3>
<a href="watches.php">Explore Collection</a>
</div>

<!-- SUNGLASSES -->

<div class="category">
<img src="images/sunglasses.jpg">
<h3>Sunglasses</h3>
<a href="sunglasses.php">Explore Collection</a>
</div>

<!-- JEWELLERY -->

<div class="category">
<img src="images/jewellery.jpg">
<h3>Jewellery Sets</h3>
<a href="jewellery.php">Explore Collection</a>
</div>

</div>

</body>
</html>