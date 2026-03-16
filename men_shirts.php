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
<title>Men Shirts | Fashion Cloud</title>

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
<h2>Men Shirts</h2>

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

<!-- SHIRT 1 -->
<div class="product">
<img src="images/shirt1.jpg">
<h3>Casual Cotton Shirt</h3>
<p>₹999</p>

<div class="buttons">
<a href="add_to_cart.php?product=Casual Cotton Shirt&price=999&image=images/shirt1.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Casual Cotton Shirt&price=999&image=images/shirt1.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- SHIRT 2 -->
<div class="product">
<img src="images/shirt2.jpg">
<h3>Formal Office Shirt</h3>
<p>₹1199</p>

<div class="buttons">
<a href="add_to_cart.php?product=Formal Office Shirt&price=1199&image=images/shirt2.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Formal Office Shirt&price=1199&image=images/shirt2.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- SHIRT 3 -->
<div class="product">
<img src="images/shirt3.jpg">
<h3>Denim Casual Shirt</h3>
<p>₹1399</p>

<div class="buttons">
<a href="add_to_cart.php?product=Denim Casual Shirt&price=1399&image=images/shirt3.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Denim Casual Shirt&price=1399&image=images/shirt3.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- SHIRT 4 -->
<div class="product">
<img src="images/shirt4.jpg">
<h3>Printed Casual Shirt</h3>
<p>₹1099</p>

<div class="buttons">
<a href="add_to_cart.php?product=Printed Casual Shirt&price=1099&image=images/shirt4.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Printed Casual Shirt&price=1099&image=images/shirt4.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- SHIRT 5 -->
<div class="product">
<img src="images/shirt5.jpg">
<h3>Party Wear Shirt</h3>
<p>₹1499</p>

<div class="buttons">
<a href="add_to_cart.php?product=Party Wear Shirt&price=1499&image=images/shirt5.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Party Wear Shirt&price=1499&image=images/shirt5.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- SHIRT 6 -->
<div class="product">
<img src="images/shirt6.jpg">
<h3>Checked Cotton Shirt</h3>
<p>₹999</p>

<div class="buttons">
<a href="add_to_cart.php?product=Checked Cotton Shirt&price=999&image=images/shirt6.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Checked Cotton Shirt&price=999&image=images/shirt6.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- SHIRT 7 -->
<div class="product">
<img src="images/shirt7.jpg">
<h3>Linen Summer Shirt</h3>
<p>₹1299</p>

<div class="buttons">
<a href="add_to_cart.php?product=Linen Summer Shirt&price=1299&image=images/shirt7.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Linen Summer Shirt&price=1299&image=images/shirt7.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- SHIRT 8 -->
<div class="product">
<img src="images/shirt8.jpg">
<h3>Slim Fit Casual Shirt</h3>
<p>₹1199</p>

<div class="buttons">
<a href="add_to_cart.php?product=Slim Fit Casual Shirt&price=1199&image=images/shirt8.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Slim Fit Casual Shirt&price=1199&image=images/shirt8.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

</div>

</body>
</html>