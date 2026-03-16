<?php
include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

$email = trim($_POST['email']);
$new_password = $_POST['password'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

$message = "Enter a valid email address";

}
else if (strlen($new_password) < 6) {

$message = "Password must be at least 6 characters";

}
else if (!preg_match('/[!@#$%^&*(),.?":{}|<>]/', $new_password)) {

$message = "Password must include at least one special character";

}
else {

$check = mysqli_query($conn,"SELECT id FROM users WHERE email='$email'");

if(mysqli_num_rows($check)==1){

mysqli_query($conn,"UPDATE users SET password='$new_password' WHERE email='$email'");

$message = "Password updated successfully. You can now login.";

}else{

$message = "Email not found";

}

}

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Reset Password</title>

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

/* card */

.box{
width:420px;
background:#fff;
padding:40px;
border-radius:20px;
box-shadow:0 25px 60px rgba(0,0,0,.25);
position:relative;
z-index:2;
animation:fadeIn .8s ease;
}


/* title */

h2{
margin-bottom:5px;
font-size:28px;
}

.subtitle{
color:#666;
font-size:14px;
margin-bottom:25px;
}

/* inputs */

input{
width:100%;
padding:16px;
margin-bottom:18px;
border-radius:14px;
border:1px solid #cfd8e3;
background:#eef4ff;
font-size:14px;
transition:.3s;
}

input:focus{
outline:none;
border:1px solid #7a4cff;
box-shadow:0 0 6px rgba(122,76,255,0.3);
}

/* button */

button{
width:100%;
padding:16px;
border:none;
border-radius:14px;
background:linear-gradient(135deg,#6a3df0,#7a4cff);
color:#fff;
font-size:16px;
cursor:pointer;
transition:.3s;
}

button:hover{
transform:translateY(-2px);
box-shadow:0 8px 20px rgba(0,0,0,0.2);
}

/* messages */

.message{
font-size:14px;
margin-bottom:15px;
color:#e60023;
}

/* validation */

.validation{
font-size:13px;
color:red;
margin-top:-10px;
margin-bottom:10px;
}

/* link */

.link{
text-align:center;
margin-top:20px;
font-size:14px;
}

.link a{
color:#7a4cff;
text-decoration:none;
font-weight:600;
}

.link a:hover{
text-decoration:underline;
}

/* animation */

@keyframes fadeIn{
from{
opacity:0;
transform:translateY(20px);
}
to{
opacity:1;
transform:translateY(0);
}
}

</style>

</head>

<body>

<div class="box">

<h2>Reset Password</h2>
<p class="subtitle">Enter your email and new password</p>

<?php if($message): ?>
<p class="message"><?php echo $message; ?></p>
<?php endif; ?>

<form method="POST">

<input type="text" name="email" placeholder="Registered Email" required>

<input type="password" id="password" name="password" placeholder="New Password" required>

<p id="passwordError" class="validation"></p>

<button type="submit">Reset Password</button>

</form>

<div class="link">
<a href="login.php">Back to Login</a>
</div>

</div>

<script>

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

</script>

</body>
</html>