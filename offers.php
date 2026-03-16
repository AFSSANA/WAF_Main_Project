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
<title>Special Offers | Fashion Cloud</title>

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
background:linear-gradient(135deg,#ff4d6d,#ff9a9e);
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
position:relative;
}

.discount{
position:absolute;
top:10px;
left:10px;
background:#ff4d6d;
color:white;
padding:4px 8px;
border-radius:6px;
font-size:12px;
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

.price{
color:#7a4cff;
font-weight:600;
}

.old-price{
text-decoration:line-through;
color:gray;
font-size:14px;
margin-left:6px;
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

<h2>Special Offers</h2>

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
<h1>🔥 Mega Fashion Sale</h1>
<p>Grab your favorite styles at huge discounts</p>
</div>

<div class="products">

<!-- OFFER 1 -->

<div class="product">
<div class="discount">50% OFF</div>

<img src="images/offer1.jpg">

<h3>Designer Kurta</h3>

<p class="price">₹999 <span class="old-price">₹1999</span></p>

<div class="buttons">

<a href="add_to_cart.php?product=Designer Kurta Offer&price=999&image=images/offer1.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Designer Kurta Offer&price=999&image=images/offer1.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>

</div>
</div>

<!-- OFFER 2 -->

<div class="product">
<div class="discount">40% OFF</div>

<img src="images/offer2.jpg">

<h3>Luxury Handbag</h3>

<p class="price">₹1499 <span class="old-price">₹2499</span></p>

<div class="buttons">

<a href="add_to_cart.php?product=Luxury Handbag Offer&price=1499&image=images/offer2.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Luxury Handbag Offer&price=1499&image=images/offer2.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>

</div>
</div>

<!-- OFFER 3 -->

<div class="product">
<div class="discount">30% OFF</div>

<img src="images/offer3.jpg">

<h3>Men Casual Shirt</h3>

<p class="price">₹839 <span class="old-price">₹1199</span></p>

<div class="buttons">

<a href="add_to_cart.php?product=Men Shirt Offer&price=839&image=images/offer3.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Men Shirt Offer&price=839&image=images/offer3.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>

</div>
</div>

<!-- OFFER 4 -->

<div class="product">
<div class="discount">35% OFF</div>

<img src="images/offer4.jpg">

<h3>Stylish Saree</h3>

<p class="price">₹1299 <span class="old-price">₹1999</span></p>

<div class="buttons">

<a href="add_to_cart.php?product=Saree Offer&price=1299&image=images/offer4.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Saree Offer&price=1299&image=images/offer4.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>

</div>
</div>

<!-- OFFER 5 -->

<div class="product">
<div class="discount">45% OFF</div>

<img src="images/offer5.jpg">

<h3>Premium Jeans</h3>

<p class="price">₹999 <span class="old-price">₹1799</span></p>

<div class="buttons">

<a href="add_to_cart.php?product=Jeans Offer&price=999&image=images/offer5.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Jeans Offer&price=999&image=images/offer5.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>

</div>
</div>

<!-- OFFER 6 -->

<div class="product">
<div class="discount">30% OFF</div>

<img src="images/offer6.jpg">

<h3>Luxury Watch</h3>

<p class="price">₹2799 <span class="old-price">₹3999</span></p>

<div class="buttons">

<a href="add_to_cart.php?product=Watch Offer&price=2799&image=images/offer6.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Watch Offer&price=2799&image=images/offer6.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>

</div>
</div>

</div>

</body>
</html>