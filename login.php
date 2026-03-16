
<?php
session_start();
include "db.php";

$error = "";

/* Initialize login attempts */
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $email    = trim($_POST['email']);
  $password = $_POST['password'];

  $suspicious_patterns = "/('|\-\-|#|\/\*|\*\/|\bOR\b|\bAND\b|\bSELECT\b|\bUNION\b|\bDROP\b|\bINSERT\b|\bDELETE\b|\bUPDATE\b)/i";

  if (preg_match($suspicious_patterns, $email)) {

      include "log_attack.php";
      logAttack("SQL Injection", "login.php", $email, "Blocked");

      $error = "Malicious input detected";

  } else {

      $query = mysqli_query(
        $conn,
        "SELECT username, password FROM users WHERE email='$email'"
      );

      if (mysqli_num_rows($query) === 1) {

        $row = mysqli_fetch_assoc($query);

        if ($password === $row['password']) {

          $_SESSION['login_attempts'] = 0;
          $_SESSION['username'] = $row['username'];
          header("Location: user_dashboard.php");
          exit();

        } else {

          $_SESSION['login_attempts']++;

          if ($_SESSION['login_attempts'] >= 3) {

              include "log_attack.php";
              logAttack("Brute Force", "login.php", $email, "Blocked");

              $error = "Too many failed attempts. Try again later.";
          } else {
              $error = "Invalid login credentials";
          }
        }

      } else {

        $_SESSION['login_attempts']++;
        $error = "Invalid login credentials";
      }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>

*{box-sizing:border-box;font-family:Segoe UI}

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

/* purple overlay on page */
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

/* main container */
.container{
width:1100px;
position:relative;
z-index:2;
}

/* CARD FIX (IMPORTANT) */
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

.subtitle{
color:#555;
margin-bottom:20px;
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

.extra-links{
text-align:center;
margin-top:15px;
font-size:14px;
}

.extra-links a{
color:#7a4cff;
text-decoration:none;
font-weight:600;
}

.extra-links a:hover{
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

/* blurred background image ONLY inside right panel */

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

/* text above background */

.right h1,
.right p{
position:relative;
z-index:2;
}

.welcome{
font-size:42px;
margin-bottom:20px;
animation:fadeSlide 1.5s ease forwards;
}

.desc{
font-size:18px;
line-height:1.6;
opacity:0;
animation:fadeSlide 2.5s ease forwards;
}

@keyframes fadeSlide{
0%{
opacity:0;
transform:translateY(20px);
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

<h2>Login</h2>
<p class="subtitle">Enter your email and password</p>

<?php if ($error): ?>
<p class="error"><?php echo htmlspecialchars($error); ?></p>
<?php endif; ?>

<form method="POST" onsubmit="return validatePassword()">

<input type="text" name="email" placeholder="Email" required>

<div class="password-box">
<input type="password" id="password" name="password" placeholder="Password" required>
<span onclick="togglePassword()">👁</span>
</div>

<p class="validation" id="passwordError"></p>

<button type="submit">Login</button>

</form>

<div class="extra-links">
<a href="forgot_password.php">Forgot password?</a><br><br>
Don't have an account? <a href="register.php">Register</a>
</div>

</div>

<div class="right">

<h1 class="welcome">Welcome Back!</h1>

<p class="desc">
Explore trending styles, discover modern fashion collections,
and continue your seamless shopping experience.
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
else if(!/[!@#$%^&*(),.?":{}|<>]/.test(value)){
error.innerText = "Password must include at least one special character";
}
else{
error.innerText = "";
}

});

function validatePassword(){

let value = password.value;

if(value.length < 6){
alert("Password must be at least 6 characters");
return false;
}

if(!/[!@#$%^&*(),.?":{}|<>]/.test(value)){
alert("Password must include at least one special character");
return false;
}

return true;

}

</script>

</body>
</html>

