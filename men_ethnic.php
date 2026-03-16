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
<title>Men Ethnic Wear | Fashion Cloud</title>

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
<h2>Men Ethnic Wear</h2>

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

<!-- ETHNIC 1 -->
<div class="product">
<img src="images/men_ethnic1.jpg">
<h3>Traditional Cotton Kurta</h3>
<p>₹1299</p>

<div class="buttons">
<a href="add_to_cart.php?product=Traditional Cotton Kurta&price=1299&image=images/ethnic1.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Traditional Cotton Kurta&price=1299&image=images/ethnic1.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- ETHNIC 2 -->
<div class="product">
<img src="images/men_ethnic2.jpg">
<h3>Silk Wedding Kurta</h3>
<p>₹2499</p>

<div class="buttons">
<a href="add_to_cart.php?product=Silk Wedding Kurta&price=2499&image=images/ethnic2.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Silk Wedding Kurta&price=2499&image=images/ethnic2.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- ETHNIC 3 -->
<div class="product">
<img src="images/men_ethnic3.jpg">
<h3>Festive Designer Kurta</h3>
<p>₹1999</p>

<div class="buttons">
<a href="add_to_cart.php?product=Festive Designer Kurta&price=1999&image=images/ethnic3.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Festive Designer Kurta&price=1999&image=images/ethnic3.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- ETHNIC 4 -->
<div class="product">
<img src="images/men_ethnic4.jpg">
<h3>Printed Ethnic Kurta</h3>
<p>₹1499</p>

<div class="buttons">
<a href="add_to_cart.php?product=Printed Ethnic Kurta&price=1499&image=images/ethnic4.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Printed Ethnic Kurta&price=1499&image=images/ethnic4.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- ETHNIC 5 -->
<div class="product">
<img src="images/men_ethnic5.jpg">
<h3>Classic White Kurta</h3>
<p>₹1199</p>

<div class="buttons">
<a href="add_to_cart.php?product=Classic White Kurta&price=1199&image=images/ethnic5.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Classic White Kurta&price=1199&image=images/ethnic5.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- ETHNIC 6 -->
<div class="product">
<img src="images/men_ethnic6.jpg">
<h3>Royal Blue Kurta</h3>
<p>₹1799</p>

<div class="buttons">
<a href="add_to_cart.php?product=Royal Blue Kurta&price=1799&image=images/ethnic6.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Royal Blue Kurta&price=1799&image=images/ethnic6.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- ETHNIC 7 -->
<div class="product">
<img src="images/men_ethnic7.jpg">
<h3>Wedding Sherwani</h3>
<p>₹4999</p>

<div class="buttons">
<a href="add_to_cart.php?product=Wedding Sherwani&price=4999&image=images/ethnic7.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Wedding Sherwani&price=4999&image=images/ethnic7.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- ETHNIC 8 -->
<div class="product">
<img src="images/men_ethnic8.jpg">
<h3>Festive Kurta Set</h3>
<p>₹2299</p>

<div class="buttons">
<a href="add_to_cart.php?product=Festive Kurta Set&price=2299&image=images/ethnic8.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Festive Kurta Set&price=2299&image=images/ethnic8.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

</div>

</body>
</html>