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
<title>New Arrivals | Fashion Cloud</title>

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

/* HERO */

.hero{
background:linear-gradient(135deg,#8e5df7,#c4a8ff);
color:white;
padding:60px 80px;
}

.hero h1{
font-size:40px;
margin-bottom:10px;
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

<h2>New Arrivals</h2>

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
<h1>✨ Latest Fashion Arrivals</h1>
<p>Explore the newest styles added to Fashion Cloud</p>
</div>

<div class="products">

<!-- PRODUCT 1 -->
<div class="product">
<img src="images/new1.jpg">
<h3>Floral Summer Dress</h3>
<p>₹1299</p>

<div class="buttons">
<a href="add_to_cart.php?product=Floral Summer Dress&price=1299&image=images/new1.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Floral Summer Dress&price=1299&image=images/new1.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- PRODUCT 2 -->
<div class="product">
<img src="images/new2.jpg">
<h3>Casual Denim Jacket</h3>
<p>₹1899</p>

<div class="buttons">
<a href="add_to_cart.php?product=Casual Denim Jacket&price=1899&image=images/new2.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Casual Denim Jacket&price=1899&image=images/new2.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- PRODUCT 3 -->
<div class="product">
<img src="images/new3.jpg">
<h3>Designer Kurta Set</h3>
<p>₹1599</p>

<div class="buttons">
<a href="add_to_cart.php?product=Designer Kurta Set&price=1599&image=images/new3.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Designer Kurta Set&price=1599&image=images/new3.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- PRODUCT 4 -->
<div class="product">
<img src="images/new4.jpg">
<h3>Men Casual Shirt</h3>
<p>₹1199</p>

<div class="buttons">
<a href="add_to_cart.php?product=Men Casual Shirt&price=1199&image=images/new4.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Men Casual Shirt&price=1199&image=images/new4.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- PRODUCT 5 -->
<div class="product">
<img src="images/new5.jpg">
<h3>Premium Blue Jeans</h3>
<p>₹1699</p>

<div class="buttons">
<a href="add_to_cart.php?product=Premium Blue Jeans&price=1699&image=images/new5.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Premium Blue Jeans&price=1699&image=images/new5.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- PRODUCT 6 -->
<div class="product">
<img src="images/new6.jpg">
<h3>Luxury Handbag</h3>
<p>₹2499</p>

<div class="buttons">
<a href="add_to_cart.php?product=Luxury Handbag&price=2499&image=images/new6.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Luxury Handbag&price=2499&image=images/new6.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- PRODUCT 7 -->
<div class="product">
<img src="images/new7.jpg">
<h3>Designer Sunglasses</h3>
<p>₹1399</p>

<div class="buttons">
<a href="add_to_cart.php?product=Designer Sunglasses&price=1399&image=images/new7.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Designer Sunglasses&price=1399&image=images/new7.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- PRODUCT 8 -->
<div class="product">
<img src="images/new8.jpg">
<h3>Luxury Wrist Watch</h3>
<p>₹3499</p>

<div class="buttons">
<a href="add_to_cart.php?product=Luxury Wrist Watch&price=3499&image=images/new8.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Luxury Wrist Watch&price=3499&image=images/new8.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

</div>

</body>
</html>