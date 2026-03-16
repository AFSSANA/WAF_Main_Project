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
<title>Men Jeans | Fashion Cloud</title>

<style>

*{
box-sizing:border-box;
font-family:"Segoe UI",sans-serif;
}

body{
margin:0;
background:#f2efff;
}

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
<h2>Men Jeans</h2>

<a href="men.php" class="home-btn">

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

<!-- JEANS 1 -->
<div class="product">
<img src="images/jeans1.jpg">
<h3>Classic Blue Denim</h3>
<p>₹1499</p>

<div class="buttons">
<a href="add_to_cart.php?product=Classic Blue Denim&price=1499&image=images/jeans1.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Classic Blue Denim&price=1499&image=images/jeans1.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- JEANS 2 -->
<div class="product">
<img src="images/jeans2.jpg">
<h3>Slim Fit Denim Jeans</h3>
<p>₹1599</p>

<div class="buttons">
<a href="add_to_cart.php?product=Slim Fit Denim Jeans&price=1599&image=images/jeans2.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Slim Fit Denim Jeans&price=1599&image=images/jeans2.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- JEANS 3 -->
<div class="product">
<img src="images/jeans3.jpg">
<h3>Ripped Fashion Jeans</h3>
<p>₹1799</p>

<div class="buttons">
<a href="add_to_cart.php?product=Ripped Fashion Jeans&price=1799&image=images/jeans3.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Ripped Fashion Jeans&price=1799&image=images/jeans3.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- JEANS 4 -->
<div class="product">
<img src="images/jeans4.jpg">
<h3>Dark Wash Denim</h3>
<p>₹1699</p>

<div class="buttons">
<a href="add_to_cart.php?product=Dark Wash Denim&price=1699&image=images/jeans4.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Dark Wash Denim&price=1699&image=images/jeans4.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- JEANS 5 -->
<div class="product">
<img src="images/jeans5.jpg">
<h3>Light Blue Casual Jeans</h3>
<p>₹1399</p>

<div class="buttons">
<a href="add_to_cart.php?product=Light Blue Casual Jeans&price=1399&image=images/jeans5.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Light Blue Casual Jeans&price=1399&image=images/jeans5.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- JEANS 6 -->
<div class="product">
<img src="images/jeans6.jpg">
<h3>Stretch Fit Jeans</h3>
<p>₹1499</p>

<div class="buttons">
<a href="add_to_cart.php?product=Stretch Fit Jeans&price=1499&image=images/jeans6.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Stretch Fit Jeans&price=1499&image=images/jeans6.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- JEANS 7 -->
<div class="product">
<img src="images/jeans7.jpg">
<h3>Black Slim Jeans</h3>
<p>₹1599</p>

<div class="buttons">
<a href="add_to_cart.php?product=Black Slim Jeans&price=1599&image=images/jeans7.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Black Slim Jeans&price=1599&image=images/jeans7.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- JEANS 8 -->
<div class="product">
<img src="images/jeans8.jpg">
<h3>Vintage Style Denim</h3>
<p>₹1899</p>

<div class="buttons">
<a href="add_to_cart.php?product=Vintage Style Denim&price=1899&image=images/jeans8.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Vintage Style Denim&price=1899&image=images/jeans8.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

</div>

</body>
</html>