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
<title>Sunglasses | Fashion Cloud</title>

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
display:flex;
align-items:center;
justify-content:center;
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

.buttons{
display:flex;
justify-content:center;
gap:10px;
margin-top:10px;
}

.cart-btn{
background:#7a4cff;
color:white;
border:none;
padding:8px 14px;
border-radius:8px;
cursor:pointer;
}

.wishlist-btn{
background:#ff4081;
color:white;
border:none;
padding:8px 14px;
border-radius:8px;
cursor:pointer;
}

</style>
</head>

<body>

<div class="header">
<h2>Sunglasses</h2>

<a href="accessories.php" class="home-btn">

<svg xmlns="http://www.w3.org/2000/svg"
viewBox="0 0 24 24"
width="22"
height="22"
fill="white">

<path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>

</svg>

</a>

</div>

<div class="products">

<!-- SUNGLASS 1 -->
<div class="product">
<img src="images/sunglass1.jpg">
<h3>Classic Black Sunglasses</h3>
<p>₹899</p>

<div class="buttons">
<a href="add_to_cart.php?product=Classic Black Sunglasses&price=899&image=images/sunglass1.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Classic Black Sunglasses&price=899&image=images/sunglass1.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- SUNGLASS 2 -->
<div class="product">
<img src="images/sunglass2.jpg">
<h3>Retro Round Sunglasses</h3>
<p>₹1099</p>

<div class="buttons">
<a href="add_to_cart.php?product=Retro Round Sunglasses&price=1099&image=images/sunglass2.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Retro Round Sunglasses&price=1099&image=images/sunglass2.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- SUNGLASS 3 -->
<div class="product">
<img src="images/sunglass3.jpg">
<h3>Polarized Aviator</h3>
<p>₹1299</p>

<div class="buttons">
<a href="add_to_cart.php?product=Polarized Aviator&price=1299&image=images/sunglass3.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Polarized Aviator&price=1299&image=images/sunglass3.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- SUNGLASS 4 -->
<div class="product">
<img src="images/sunglass4.jpg">
<h3>Stylish Gradient Sunglasses</h3>
<p>₹999</p>

<div class="buttons">
<a href="add_to_cart.php?product=Stylish Gradient Sunglasses&price=999&image=images/sunglass4.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Stylish Gradient Sunglasses&price=999&image=images/sunglass4.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- SUNGLASS 5 -->
<div class="product">
<img src="images/sunglass5.jpg">
<h3>Luxury Designer Sunglasses</h3>
<p>₹1499</p>

<div class="buttons">
<a href="add_to_cart.php?product=Luxury Designer Sunglasses&price=1499&image=images/sunglass5.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Luxury Designer Sunglasses&price=1499&image=images/sunglass5.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- SUNGLASS 6 -->
<div class="product">
<img src="images/sunglass6.jpg">
<h3>Sport UV Protection Sunglasses</h3>
<p>₹1199</p>

<div class="buttons">
<a href="add_to_cart.php?product=Sport UV Sunglasses&price=1199&image=images/sunglass6.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Sport UV Sunglasses&price=1199&image=images/sunglass6.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- SUNGLASS 7 -->
<div class="product">
<img src="images/sunglass7.jpg">
<h3>Square Frame Sunglasses</h3>
<p>₹999</p>

<div class="buttons">
<a href="add_to_cart.php?product=Square Frame Sunglasses&price=999&image=images/sunglass7.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Square Frame Sunglasses&price=999&image=images/sunglass7.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- SUNGLASS 8 -->
<div class="product">
<img src="images/sunglass8.jpg">
<h3>Premium Fashion Sunglasses</h3>
<p>₹1599</p>

<div class="buttons">
<a href="add_to_cart.php?product=Premium Fashion Sunglasses&price=1599&image=images/sunglass8.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Premium Fashion Sunglasses&price=1599&image=images/sunglass8.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

</div>

</body>
</html>