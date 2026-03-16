<?php
session_start();

if (!isset($_SESSION['username'])) {
header("Location: login.php");
exit();
}

$username = $_SESSION['username'];

include "db.php";

$result = mysqli_query($conn,
"SELECT * FROM cart WHERE username='$username'");
?>

<!DOCTYPE html>

<html>
<head>
<title>My Cart | Fashion Cloud</title>

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

.header h2{
margin:0;
}

.home-btn{
background:#5c2fe0;
padding:10px 16px;
border-radius:8px;
text-decoration:none;
color:white;
}

/* CONTAINER */

.container{
padding:50px;
}

/* GRID */

.cart-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:25px;
}

/* PRODUCT CARD */

.product{
background:white;
padding:20px;
border-radius:16px;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
text-align:center;
}

.product img{
width:100%;
height:220px;
object-fit:contain;
border-radius:12px;
background:#f8f8f8;
}

.product h3{
margin:12px 0 5px;
}

.product p{
color:#7a4cff;
font-weight:600;
}

/* REMOVE BUTTON */

.remove-btn{
margin-top:10px;
padding:8px 16px;
background:#e53935;
color:white;
border:none;
border-radius:8px;
cursor:pointer;
}

.remove-btn:hover{
background:#c62828;
}

/* EMPTY */

.empty{
color:#666;
font-size:16px;
}

</style>

</head>

<body>

<div class="header">

<h2>My Cart</h2>

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

<div class="container">

<div class="cart-grid">

<?php
if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result)){

$image = !empty($row['image']) ? $row['image'] : "images/no-image.png";
?>

<div class="product">

<img src="<?php echo $image; ?>">

<h3><?php echo $row['product_name']; ?></h3>

<p>₹<?php echo $row['price']; ?></p>

<a href="remove_cart.php?id=<?php echo $row['id']; ?>">
<button class="remove-btn">Remove</button>
</a>

</div>

<?php
}

}else{

echo "<p class='empty'>Your cart is empty.</p>";

}
?>

</div>

</div>

</body>
</html>
