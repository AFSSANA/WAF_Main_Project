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
<title>Tops | Fashion Cloud</title>

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

<!-- HEADER -->

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

<!-- PRODUCTS -->

<div class="products">

<div class="product">
<img src="images/top1.jpg">
<h3>Casual Puff sleeves self design top</h3>
<p>₹799</p>

<div class="buttons">
<a href="add_to_cart.php?product=Casual Puff sleeves self design top&price=799&image=images/top1.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Casual Puff sleeves self design top&price=799&image=images/top1.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>

</div>

<div class="product">
<img src="images/top2.jpg">
<h3>Casual regular sleeves</h3>
<p>₹699</p>

<div class="buttons">
<a href="add_to_cart.php?product=Casual regular sleeves&price=699&image=images/top2.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Casual regular sleeves&price=699&image=images/top2.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>

</div>

<div class="product">
<img src="images/top3.jpg">
<h3>Casual regular sleeves printed</h3>
<p>₹899</p>

<div class="buttons">
<a href="add_to_cart.php?product=Casual regular sleeves printed&price=899&image=images/top3.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Casual regular sleeves printed&price=899&image=images/top3.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>

</div>

<div class="product">
<img src="images/top4.jpg">
<h3>Party regular sleeves</h3>
<p>₹999</p>

<div class="buttons">
<a href="add_to_cart.php?product=Party regular sleeves&price=999&image=images/top4.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Party regular sleeves&price=999&image=images/top4.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>

</div>

<div class="product">
<img src="images/top5.jpg">
<h3>Solid women regular red</h3>
<p>₹749</p>

<div class="buttons">
<a href="add_to_cart.php?product=Solid women regular red&price=749&image=images/top5.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Solid women regular red&price=749&image=images/top5.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>

</div>

<div class="product">
<img src="images/top6.jpg">
<h3>Casual sleeveless yellow</h3>
<p>₹849</p>

<div class="buttons">
<a href="add_to_cart.php?product=Casual sleeveless yellow&price=849&image=images/top6.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Casual sleeveless yellow&price=849&image=images/top6.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>

</div>

<div class="product">
<img src="images/top7.jpg">
<h3>Designer Top black</h3>
<p>₹1099</p>

<div class="buttons">
<a href="add_to_cart.php?product=Designer Top black&price=1099&image=images/top7.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Designer Top black&price=1099&image=images/top7.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>

</div>

<div class="product">
<img src="images/top8.jpg">
<h3>Party Top</h3>
<p>₹1299</p>

<div class="buttons">
<a href="add_to_cart.php?product=Party Top&price=1299&image=images/top8.jpg">
<button class="cart-btn">Add to Cart</button>
</a>

<a href="add_to_wishlist.php?product=Party Top&price=1299&image=images/top8.jpg">
<button class="wishlist-btn">Wishlist</button>
</a>
</div>

</div>

</div>

</body>
</html>