<?php
session_start();

if (!isset($_SESSION['username'])) {
header("Location: login.php");
exit();
}

$username = $_SESSION['username'];

include "db.php";

$result = mysqli_query($conn,
"SELECT * FROM user_personal_details WHERE username='$username'");
?>

<!DOCTYPE html>

<html>
<head>
<title>Personal Details</title>

<style>

body{
margin:0;
font-family:Segoe UI;
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
color:white;
padding:8px 14px;
border-radius:8px;
text-decoration:none;
}

/* PAGE */

.container{
width:75%;
margin:40px auto;
}

.box{
background:white;
padding:25px;
border-radius:12px;
box-shadow:0 4px 15px rgba(0,0,0,0.05);
}

h3{
margin-top:0;
}

/* ADDRESS CARD */

.details-card{
border:1px solid #eee;
padding:15px;
border-radius:8px;
margin-top:15px;
background:#faf9ff;
}

/* DEFAULT ADDRESS */

.default-card{
border:2px solid #2e8b57;
}

.default-badge{
background:#2e8b57;
color:white;
padding:4px 8px;
border-radius:4px;
font-size:12px;
font-weight:bold;
display:inline-block;
margin-bottom:6px;
}

/* BUTTONS */

.edit-btn{
background:#ff9800;
color:white;
padding:6px 12px;
border-radius:6px;
text-decoration:none;
margin-right:10px;
}

.delete-btn{
background:#e53935;
color:white;
padding:6px 12px;
border-radius:6px;
text-decoration:none;
margin-right:10px;
}

.default-btn{
background:#2e8b57;
color:white;
padding:6px 12px;
border-radius:6px;
text-decoration:none;
margin-right:10px;
}

/* ADD BUTTON */

.add-btn{
background:#7a4cff;
color:white;
padding:10px 18px;
border-radius:6px;
text-decoration:none;
display:inline-block;
margin-top:15px;
}

.add-btn:hover{
background:#6937e0;
}

/* EMPTY MESSAGE */

.empty{
color:#777;
margin-top:10px;
}

</style>

</head>

<body>

<div class="header">

<h2>Fashion Cloud</h2>

<div>
<a href="profile.php" class="home-btn">← Back</a>
</div>

</div>

<div class="container">

<div class="box">

<h3>Personal Details</h3>

<?php
if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)){
?>

<div class="details-card <?php if($row['is_default']==1){ echo 'default-card'; } ?>">

<?php if($row['is_default']==1){ ?>

<span class="default-badge">Default Address</span><br>

<?php } ?>

<b><?php echo $row['name']; ?></b><br>

Phone: <?php echo $row['phone']; ?><br>
City: <?php echo $row['city']; ?><br>
Country: <?php echo $row['country']; ?><br>
Postal Code: <?php echo $row['postal_code']; ?><br>
Address: <?php echo $row['address']; ?>

<br><br>

<a href="set_default_address.php?id=<?php echo $row['id']; ?>" class="default-btn">

<?php
if($row['is_default']==1){
echo "Remove Default";
}else{
echo "Set Default";
}
?>

</a>

<a href="personal_edit_details.php?id=<?php echo $row['id']; ?>" class="edit-btn">Edit</a>

<a href="personal_delete_details.php?id=<?php echo $row['id']; ?>" 
class="delete-btn"
onclick="return confirm('Delete this address?')">Delete</a>

</div>

<?php
}

}else{
echo "<p class='empty'>No personal details added yet.</p>";
}
?>

<a href="personal_add_details.php" class="add-btn">+ Add Details</a>

</div>

</div>

</body>
</html>
