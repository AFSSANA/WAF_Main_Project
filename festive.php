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
<title>Festive Wear | Fashion Cloud</title>

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

.header-left{
display:flex;
align-items:center;
gap:15px;
}

.toggle-btn{
font-size:22px;
background:#5c2fe0;
padding:8px 12px;
border-radius:8px;
}

.header h1{
margin:0;
font-size:24px;
}

.home-btn{
background:#5c2fe0;
padding:10px;
border-radius:10px;
text-decoration:none;
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

/* BUTTONS */

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

.cart-btn:hover{
background:#5c2fe0;
}

.wishlist-btn{
background:#ff4081;
color:white;
border:none;
padding:8px 14px;
border-radius:8px;
cursor:pointer;
}

.wishlist-btn:hover{
background:#e73370;
}

</style>
</head>

<body>

<div class="header">

<div class="header-left">
<div class="toggle-btn">☰</div>
<h1>Fashion Cloud</h1>
</div>

<a href="women.php" class="home-btn">

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

<div class="product">
<img src="images/festive1.jpg">
<h3>Women viscose</h3>
<p>₹3999</p>

<div class="buttons">
<a href="add_to_cart.php?product=Women viscose&price=3999&image=images/festive1.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Women viscose&price=3999&image=images/festive1.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>

</div>


<div class="product">
<img src="images/festive2.jpg">
<h3>Women pure cotton kurta</h3>
<p>₹2499</p>

<div class="buttons">
<a href="add_to_cart.php?product=Women pure cotton kurta&price=2499&image=images/festive2.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Women pure cotton kurta&price=2499&image=images/festive2.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>

</div>


<div class="product">
<img src="images/festive3.jpg">
<h3>Embroidered kurta with pant</h3>
<p>₹3299</p>

<div class="buttons">
<a href="add_to_cart.php?product=Embroidered kurta with pant&price=3299&image=images/festive3.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Embroidered kurta with pant&price=3299&image=images/festive3.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>

</div>


<div class="product">
<img src="images/festive4.jpg">
<h3>Women viscose rayon</h3>
<p>₹1899</p>

<div class="buttons">
<a href="add_to_cart.php?product=Women viscose rayon&price=1899&image=images/festive4.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Women viscose rayon&price=1899&image=images/festive4.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>

</div>


<div class="product">
<img src="images/festive5.jpg">
<h3>Women tussar silk kurta</h3>
<p>₹2799</p>

<div class="buttons">
<a href="add_to_cart.php?product=Women tussar silk kurta&price=2799&image=images/festive5.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Women tussar silk kurta&price=2799&image=images/festive5.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>

</div>


<div class="product">
<img src="images/festive6.jpg">
<h3>Printed anarkali kurti</h3>
<p>₹4499</p>

<div class="buttons">
<a href="add_to_cart.php?product=Printed anarkali kurti&price=4499&image=images/festive6.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Printed anarkali kurti&price=4499&image=images/festive6.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>

</div>


<div class="product">
<img src="images/festive7.jpg">
<h3>Women cotton blend kurti with pant</h3>
<p>₹2999</p>

<div class="buttons">
<a href="add_to_cart.php?product=Women cotton blend kurti with pant&price=2999&image=images/festive7.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Women cotton blend kurti with pant&price=2999&image=images/festive7.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>

</div>


<div class="product">
<img src="images/festive8.jpg">
<h3>Embroidered kurta</h3>
<p>₹3599</p>

<div class="buttons">
<a href="add_to_cart.php?product=Embroidered kurta&price=3599&image=images/festive8.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Embroidered kurta&price=3599&image=images/festive8.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>

</div>

</div>

</body>
</html>