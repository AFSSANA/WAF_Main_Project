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
<title>Handbags | Fashion Cloud</title>

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
<h2>Handbags</h2>

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

<!-- HANDBAG 1 -->
<div class="product">
<img src="images/bag1.jpg">
<h3>Classic Leather Handbag</h3>
<p>₹1799</p>

<div class="buttons">
<a href="add_to_cart.php?product=Classic Leather Handbag&price=1799&image=images/bag1.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Classic Leather Handbag&price=1799&image=images/bag1.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- HANDBAG 2 -->
<div class="product">
<img src="images/bag2.jpg">
<h3>Designer Shoulder Bag</h3>
<p>₹1999</p>

<div class="buttons">
<a href="add_to_cart.php?product=Designer Shoulder Bag&price=1999&image=images/bag2.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Designer Shoulder Bag&price=1999&image=images/bag2.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- HANDBAG 3 -->
<div class="product">
<img src="images/bag3.jpg">
<h3>Stylish Tote Bag</h3>
<p>₹1499</p>

<div class="buttons">
<a href="add_to_cart.php?product=Stylish Tote Bag&price=1499&image=images/bag3.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Stylish Tote Bag&price=1499&image=images/bag3.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- HANDBAG 4 -->
<div class="product">
<img src="images/bag4.jpg">
<h3>Mini Crossbody Bag</h3>
<p>₹1299</p>

<div class="buttons">
<a href="add_to_cart.php?product=Mini Crossbody Bag&price=1299&image=images/bag4.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Mini Crossbody Bag&price=1299&image=images/bag4.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- HANDBAG 5 -->
<div class="product">
<img src="images/bag5.jpg">
<h3>Luxury Party Handbag</h3>
<p>₹2299</p>

<div class="buttons">
<a href="add_to_cart.php?product=Luxury Party Handbag&price=2299&image=images/bag5.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Luxury Party Handbag&price=2299&image=images/bag5.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- HANDBAG 6 -->
<div class="product">
<img src="images/bag6.jpg">
<h3>Elegant Office Bag</h3>
<p>₹1899</p>

<div class="buttons">
<a href="add_to_cart.php?product=Elegant Office Bag&price=1899&image=images/bag6.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Elegant Office Bag&price=1899&image=images/bag6.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- HANDBAG 7 -->
<div class="product">
<img src="images/bag7.jpg">
<h3>Fashion Sling Bag</h3>
<p>₹1599</p>

<div class="buttons">
<a href="add_to_cart.php?product=Fashion Sling Bag&price=1599&image=images/bag7.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Fashion Sling Bag&price=1599&image=images/bag7.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- HANDBAG 8 -->
<div class="product">
<img src="images/bag8.jpg">
<h3>Premium Leather Tote</h3>
<p>₹2499</p>

<div class="buttons">
<a href="add_to_cart.php?product=Premium Leather Tote&price=2499&image=images/bag8.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Premium Leather Tote&price=2499&image=images/bag8.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

</div>

</body>
</html>