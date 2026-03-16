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
<title>Jewellery Sets | Fashion Cloud</title>

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
<h2>Jewellery Sets</h2>

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

<!-- JEWELLERY 1 -->
<div class="product">
<img src="images/jewel1.jpg">
<h3>Traditional Gold Necklace Set</h3>
<p>₹2999</p>

<div class="buttons">
<a href="add_to_cart.php?product=Traditional Gold Necklace Set&price=2999&image=images/jewel1.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Traditional Gold Necklace Set&price=2999&image=images/jewel1.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- JEWELLERY 2 -->
<div class="product">
<img src="images/jewel2.jpg">
<h3>Diamond Style Jewellery Set</h3>
<p>₹3499</p>

<div class="buttons">
<a href="add_to_cart.php?product=Diamond Style Jewellery Set&price=3499&image=images/jewel2.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Diamond Style Jewellery Set&price=3499&image=images/jewel2.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- JEWELLERY 3 -->
<div class="product">
<img src="images/jewel3.jpg">
<h3>Silver Plated Necklace</h3>
<p>₹1999</p>

<div class="buttons">
<a href="add_to_cart.php?product=Silver Plated Necklace&price=1999&image=images/jewel3.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Silver Plated Necklace&price=1999&image=images/jewel3.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- JEWELLERY 4 -->
<div class="product">
<img src="images/jewel4.jpg">
<h3>Bridal Jewellery Set</h3>
<p>₹4999</p>

<div class="buttons">
<a href="add_to_cart.php?product=Bridal Jewellery Set&price=4999&image=images/jewel4.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Bridal Jewellery Set&price=4999&image=images/jewel4.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- JEWELLERY 5 -->
<div class="product">
<img src="images/jewel5.jpg">
<h3>Temple Jewellery Set</h3>
<p>₹2799</p>

<div class="buttons">
<a href="add_to_cart.php?product=Temple Jewellery Set&price=2799&image=images/jewel5.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Temple Jewellery Set&price=2799&image=images/jewel5.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- JEWELLERY 6 -->
<div class="product">
<img src="images/jewel6.jpg">
<h3>Pearl Necklace Set</h3>
<p>₹1899</p>

<div class="buttons">
<a href="add_to_cart.php?product=Pearl Necklace Set&price=1899&image=images/jewel6.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Pearl Necklace Set&price=1899&image=images/jewel6.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- JEWELLERY 7 -->
<div class="product">
<img src="images/jewel7.jpg">
<h3>Antique Jewellery Set</h3>
<p>₹2599</p>

<div class="buttons">
<a href="add_to_cart.php?product=Antique Jewellery Set&price=2599&image=images/jewel7.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Antique Jewellery Set&price=2599&image=images/jewel7.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

<!-- JEWELLERY 8 -->
<div class="product">
<img src="images/jewel8.jpg">
<h3>Designer Party Necklace</h3>
<p>₹2299</p>

<div class="buttons">
<a href="add_to_cart.php?product=Designer Party Necklace&price=2299&image=images/jewel8.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Designer Party Necklace&price=2299&image=images/jewel8.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>
</div>

</div>

</body>
</html>