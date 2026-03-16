<?php
session_start();
include "db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $username = trim($_POST['username']);
  $email    = trim($_POST['email']);
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  if (!preg_match("/^[a-zA-Z ]+$/", $username)) {
    $error = "Username must contain letters only";
  }

  else if ($password !== $confirm_password) {
    $error = "Passwords do not match";
  }

  else if (!preg_match("/^[a-zA-Z0-9._%+-]+@gmail\.com$/", $email)) {
    $error = "Email must be a valid Gmail address (example: abc@gmail.com)";
  }

  else if (!preg_match("/^(?=.*[A-Za-z])(?=.*[0-9])(?=.*[!@#$%^&*(),.?\":{}|<>]).{6,}$/", $password)) {
    $error = "Password must be at least 6 characters and include a letter, number and special character";
  }

  else {

    $check = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
      $error = "Email already registered. Please login.";
    }
    else {
      $insert = mysqli_query(
        $conn,
        "INSERT INTO users (username, email, password)
         VALUES ('$username', '$email', '$password')"
      );

      if ($insert) {
        header("Location: login.php");
        exit();
      } else {
        $error = "Registration failed. Please try again.";
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Fashion Store | Register</title>

<style>

*{box-sizing:border-box;font-family:Segoe UI}

body{
margin:0;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:url("images/fashion.jpg") center/cover no-repeat;
position:relative;
}

/* purple overlay */

body::before{
content:"";
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
background:linear-gradient(135deg,#8e5df7,#b79cff);
opacity:.85;
z-index:0;
}

/* container */

.container{
width:1100px;
position:relative;
z-index:2;
}

/* card */

.card{
display:flex;
background:#fff;
border-radius:30px;
overflow:hidden;
box-shadow:0 25px 60px rgba(0,0,0,.25);
}

/* LEFT SIDE */

.left{
width:50%;
padding:60px;
}

.left h2{
font-size:32px;
margin-bottom:10px;
}

.error{
color:red;
margin-bottom:15px;
font-size:14px;
}

input{
width:100%;
padding:18px;
margin-bottom:18px;
border-radius:14px;
border:1px solid #cfd8e3;
background:#eef4ff;
}

input:focus{
outline:none;
border:1px solid #7a4cff;
box-shadow:0 0 6px rgba(122,76,255,0.3);
}

.password-box{
position:relative;
}

.password-box span{
position:absolute;
right:18px;
top:50%;
transform:translateY(-50%);
cursor:pointer;
}

/* button */

button{
width:100%;
padding:18px;
border:none;
border-radius:14px;
background:linear-gradient(135deg,#6a3df0,#7a4cff);
color:#fff;
font-size:18px;
cursor:pointer;
transition:.3s;
}

button:hover{
transform:translateY(-2px);
box-shadow:0 8px 20px rgba(0,0,0,0.2);
}

.validation{
font-size:13px;
color:red;
margin-top:-10px;
margin-bottom:10px;
}

/* moved lower */

.login-link{
text-align:center;
margin-top:35px;
font-size:14px;
color:#555;
}

.login-link a{
color:#7a4cff;
text-decoration:none;
font-weight:600;
}

.login-link a:hover{
text-decoration:underline;
}

/* RIGHT SIDE */

.right{
width:50%;
position:relative;
overflow:hidden;
color:#fff;
padding:70px;
display:flex;
flex-direction:column;
justify-content:center;
}

/* blurred background */

.right::before{
content:"";
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
background:url("images/fashion.jpg") center/cover no-repeat;
filter:blur(6px);
transform:scale(1.1);
z-index:0;
}

/* purple overlay */

.right::after{
content:"";
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
background:linear-gradient(135deg,#8e5df7,#b79cff);
opacity:.85;
z-index:1;
}

/* text */

.right h1,
.right p{
position:relative;
z-index:2;
}

/* animation */

.welcome-text{
font-size:42px;
margin-bottom:20px;
opacity:0;
animation:fadeSlide 1.2s ease forwards;
}

.tagline{
font-size:18px;
line-height:1.6;
opacity:0;
animation:fadeSlide 2s ease forwards;
}

@keyframes fadeSlide{
0%{
opacity:0;
transform:translateY(25px);
}
100%{
opacity:1;
transform:translateY(0);
}
}

</style>
</head>

<body>

<div class="container">
<div class="card">

<div class="left">

<h2>Create Account</h2>

<?php if ($error): ?>
<div class="error"><?php echo htmlspecialchars($error); ?></div>
<?php endif; ?>

<form method="POST" onsubmit="return validatePassword()">

<input type="text" name="username" placeholder="Username" required>

<input type="email" name="email" placeholder="Email address" required>

<div class="password-box">
<input type="password" id="password" name="password" placeholder="Password" required>
<span onclick="togglePassword()">👁</span>
</div>

<p id="passwordError" class="validation"></p>

<div class="password-box">
<input type="password" name="confirm_password" placeholder="Confirm Password" required>
</div>

<button type="submit">Register</button>

<div class="login-link">
Already have an account? <a href="login.php">Login</a>
</div>

</form>

</div>

<div class="right">

<h1 class="welcome-text">Welcome to Fashion Cloud</h1>

<p class="tagline">
Discover trending styles, explore modern fashion collections,
and enjoy a seamless shopping experience designed for everyone.
</p>

</div>

</div>
</div>

<script>

function togglePassword(){
const p=document.getElementById("password");
p.type = p.type==="password" ? "text" : "password";
}

const password = document.getElementById("password");
const error = document.getElementById("passwordError");

password.addEventListener("keyup", function(){

let value = password.value;

if(value.length < 6){
error.innerText = "Password must be at least 6 characters";
}
else if(!/(?=.*[A-Za-z])/.test(value)){
error.innerText = "Password must include a letter";
}
else if(!/(?=.*[0-9])/.test(value)){
error.innerText = "Password must include a number";
}
else if(!/[!@#$%^&*(),.?\":{}|<>]/.test(value)){
error.innerText = "Password must include a special character";
}
else{
error.innerText = "";
}

});

function validatePassword(){

let value = password.value;

if(!/^(?=.*[A-Za-z])(?=.*[0-9])(?=.*[!@#$%^&*(),.?\":{}|<>]).{6,}$/.test(value)){
alert("Password must be at least 6 characters and include a letter, number and special character");
return false;
}

return true;

}

</script>

</body>
</html>