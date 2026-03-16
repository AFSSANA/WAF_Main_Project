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
<title>Wrist Watches | Fashion Cloud</title>

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
<h2>Wrist Watches</h2>

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

<!-- WATCH 1 -->
<div class="product">
<img src="images/watch1.jpg">
<h3>Classic Leather Watch</h3>
<p>₹2499</p>

<div class="buttons">
<a href="add_to_cart.php?product=Classic Leather Watch&price=2499&image=images/watch1.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Classic Leather Watch&price=2499&image=images/watch1.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- WATCH 2 -->
<div class="product">
<img src="images/watch2.jpg">
<h3>Luxury Gold Watch</h3>
<p>₹3999</p>

<div class="buttons">
<a href="add_to_cart.php?product=Luxury Gold Watch&price=3999&image=images/watch2.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Luxury Gold Watch&price=3999&image=images/watch2.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- WATCH 3 -->
<div class="product">
<img src="images/watch3.jpg">
<h3>Sport Digital Watch</h3>
<p>₹1999</p>

<div class="buttons">
<a href="add_to_cart.php?product=Sport Digital Watch&price=1999&image=images/watch3.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Sport Digital Watch&price=1999&image=images/watch3.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- WATCH 4 -->
<div class="product">
<img src="images/watch4.jpg">
<h3>Minimalist Steel Watch</h3>
<p>₹2899</p>

<div class="buttons">
<a href="add_to_cart.php?product=Minimalist Steel Watch&price=2899&image=images/watch4.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Minimalist Steel Watch&price=2899&image=images/watch4.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- WATCH 5 -->
<div class="product">
<img src="images/watch5.jpg">
<h3>Elegant Rose Gold Watch</h3>
<p>₹3199</p>

<div class="buttons">
<a href="add_to_cart.php?product=Elegant Rose Gold Watch&price=3199&image=images/watch5.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Elegant Rose Gold Watch&price=3199&image=images/watch5.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- WATCH 6 -->
<div class="product">
<img src="images/watch6.jpg">
<h3>Black Dial Watch</h3>
<p>₹2299</p>

<div class="buttons">
<a href="add_to_cart.php?product=Black Dial Watch&price=2299&image=images/watch6.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Black Dial Watch&price=2299&image=images/watch6.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- WATCH 7 -->
<div class="product">
<img src="images/watch7.jpg">
<h3>Chronograph Watch</h3>
<p>₹3499</p>

<div class="buttons">
<a href="add_to_cart.php?product=Chronograph Watch&price=3499&image=images/watch7.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Chronograph Watch&price=3499&image=images/watch7.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- WATCH 8 -->
<div class="product">
<img src="images/watch8.jpg">
<h3>Premium Luxury Watch</h3>
<p>₹4999</p>

<div class="buttons">
<a href="add_to_cart.php?product=Premium Luxury Watch&price=4999&image=images/watch8.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Premium Luxury Watch&price=4999&image=images/watch8.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

</div>

</body>
</html>