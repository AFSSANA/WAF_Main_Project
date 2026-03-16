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
<title>Men T-Shirts | Fashion Cloud</title>

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
<h2>Men T-Shirts</h2>

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

<!-- TSHIRT 1 -->
<div class="product">
<img src="images/tshirt1.jpg">
<h3>Classic White T-Shirt</h3>
<p>₹699</p>

<div class="buttons">
<a href="add_to_cart.php?product=Classic White T-Shirt&price=699&image=images/tshirt1.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Classic White T-Shirt&price=699&image=images/tshirt1.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- TSHIRT 2 -->
<div class="product">
<img src="images/tshirt2.jpg">
<h3>Black Printed T-Shirt</h3>
<p>₹799</p>

<div class="buttons">
<a href="add_to_cart.php?product=Black Printed T-Shirt&price=799&image=images/tshirt2.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Black Printed T-Shirt&price=799&image=images/tshirt2.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- TSHIRT 3 -->
<div class="product">
<img src="images/tshirt3.jpg">
<h3>Graphic Cotton T-Shirt</h3>
<p>₹749</p>

<div class="buttons">
<a href="add_to_cart.php?product=Graphic Cotton T-Shirt&price=749&image=images/tshirt3.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Graphic Cotton T-Shirt&price=749&image=images/tshirt3.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- TSHIRT 4 -->
<div class="product">
<img src="images/tshirt4.jpg">
<h3>Striped Casual T-Shirt</h3>
<p>₹899</p>

<div class="buttons">
<a href="add_to_cart.php?product=Striped Casual T-Shirt&price=899&image=images/tshirt4.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Striped Casual T-Shirt&price=899&image=images/tshirt4.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- TSHIRT 5 -->
<div class="product">
<img src="images/tshirt5.jpg">
<h3>Oversized Street T-Shirt</h3>
<p>₹999</p>

<div class="buttons">
<a href="add_to_cart.php?product=Oversized Street T-Shirt&price=999&image=images/tshirt5.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Oversized Street T-Shirt&price=999&image=images/tshirt5.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- TSHIRT 6 -->
<div class="product">
<img src="images/tshirt6.jpg">
<h3>Sports Dry Fit T-Shirt</h3>
<p>₹849</p>

<div class="buttons">
<a href="add_to_cart.php?product=Sports Dry Fit T-Shirt&price=849&image=images/tshirt6.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Sports Dry Fit T-Shirt&price=849&image=images/tshirt6.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- TSHIRT 7 -->
<div class="product">
<img src="images/tshirt7.jpg">
<h3>Minimal Logo T-Shirt</h3>
<p>₹799</p>

<div class="buttons">
<a href="add_to_cart.php?product=Minimal Logo T-Shirt&price=799&image=images/tshirt7.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Minimal Logo T-Shirt&price=799&image=images/tshirt7.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- TSHIRT 8 -->
<div class="product">
<img src="images/tshirt8.jpg">
<h3>Premium Cotton T-Shirt</h3>
<p>₹1099</p>

<div class="buttons">
<a href="add_to_cart.php?product=Premium Cotton T-Shirt&price=1099&image=images/tshirt8.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Premium Cotton T-Shirt&price=1099&image=images/tshirt8.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

</div>

</body>
</html>