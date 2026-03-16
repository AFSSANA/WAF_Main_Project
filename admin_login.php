
<?php
session_start();
include "db.php";

$error="";

if($_SERVER["REQUEST_METHOD"]=="POST"){

$email = trim($_POST["email"]);
$password = $_POST["password"];

/* ADMIN EMAIL VALIDATION */
if(!preg_match("/^[a-zA-Z0-9._%+-]+@fashioncloud\.com$/",$email)){
$error="Admin email must be a company email";
}

else{

/* CHECK ADMIN IN DATABASE */
$query = mysqli_query($conn,"SELECT * FROM admins WHERE email='$email'");

if(mysqli_num_rows($query)==1){

$row = mysqli_fetch_assoc($query);

/* PASSWORD CHECK */
if($password == $row['password']){

$_SESSION["admin"] = $row['name'];

/* redirect to dashboard */
header("Location: admin_dashboard.php");
exit();

}else{
$error="Invalid admin credentials";
}

}else{
$error="Admin not found";
}

}

}
?>
<!DOCTYPE html>
<html>
<head>

<title>Admin Login</title>

<style>

*{
box-sizing:border-box;
font-family:Segoe UI;
}

body{
margin:0;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:#f5f6fa;
}

.container{
width:1000px;
display:flex;
background:#fff;
border-radius:25px;
overflow:hidden;
box-shadow:0 20px 60px rgba(0,0,0,.2);
}

.left{
width:50%;
padding:60px;
display:flex;
flex-direction:column;
justify-content:center;
}

h2{
margin-bottom:15px;
}

.error{
color:red;
margin-bottom:15px;
}

input{
width:100%;
padding:16px;
margin-bottom:18px;
border-radius:12px;
border:1px solid #ddd;
font-size:14px;
}

input:focus{
outline:none;
border:1px solid #7a4cff;
box-shadow:0 0 5px rgba(122,76,255,.3);
}

button{
width:100%;
padding:16px;
border:none;
border-radius:12px;
background:linear-gradient(135deg,#6a3df0,#7a4cff);
color:#fff;
font-size:16px;
cursor:pointer;
transition:.3s;
}

button:hover{
transform:translateY(-2px);
box-shadow:0 8px 20px rgba(0,0,0,.2);
}

.link{
margin-top:20px;
font-size:14px;
}

.link a{
color:#6a3df0;
text-decoration:none;
font-weight:600;
}

.link a:hover{
text-decoration:underline;
}

.right{
width:50%;
background:#f8f8f8;
display:flex;
align-items:center;
justify-content:center;
}

.security-image{
width:100%;
height:100%;
object-fit:cover;
}

</style>

</head>

<body>

<div class="container">

<div class="left">

<h2>Admin Login</h2>

<?php if($error): ?>
<div class="error"><?php echo htmlspecialchars($error); ?></div>
<?php endif; ?>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit">Login</button>

</form>

</div>

<div class="right">
<img src="images/fashion1.jpg" class="security-image">
</div>

</div>

</body>
</html>

