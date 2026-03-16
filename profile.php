<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Profile - Fashion Cloud</title>

<style>

*{
box-sizing:border-box;
font-family:"Segoe UI", sans-serif;
}

body{
margin:0;
background:#f2efff;
}

/* HEADER */

.header{
background:#7a4cff;
color:#fff;
padding:18px 40px;
display:flex;
justify-content:space-between;
align-items:center;
}

.home-btn{
font-size:20px;
color:#fff;
background:#5c2fe0;
padding:8px 14px;
border-radius:8px;
text-decoration:none;
}

/* CONTAINER */

.container{
width:80%;
margin:40px auto;
}

/* PROFILE HEADER */

.profile-header{
background:#fff;
padding:30px;
border-radius:12px;
display:flex;
align-items:center;
gap:20px;
box-shadow:0 4px 15px rgba(0,0,0,0.05);
margin-bottom:30px;
}

/* PROFILE LETTER ICON */

.profile-circle{
width:80px;
height:80px;
border-radius:50%;
background:#7a4cff;
color:#fff;
display:flex;
align-items:center;
justify-content:center;
font-size:32px;
font-weight:bold;
}

/* CARDS */

.card{
background:#fff;
padding:20px;
border-radius:12px;
box-shadow:0 4px 15px rgba(0,0,0,0.05);
margin-bottom:15px;
cursor:pointer;
font-size:18px;
font-weight:500;
text-decoration:none;
color:#000;
display:block;
}

.card:hover{
background:#efeaff;
}

</style>

</head>

<body>

<div class="header">

<h2>Fashion Cloud</h2>

<div>
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

</div>

<div class="container">

<!-- PROFILE HEADER -->

<div class="profile-header">

<div class="profile-circle">
<?php echo strtoupper(substr($username,0,1)); ?>
</div>

<div>
<h2><?php echo htmlspecialchars($username); ?></h2>
</div>

</div>

<!-- PERSONAL DETAILS CARD -->

<a href="personal_details.php" class="card">
📄 Personal Details
</a>

<!-- ORDERS CARD -->

<a href="orders.php" class="card">
📦 Orders Placed
</a>

</div>

</body>
</html>