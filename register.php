<?php
session_start();
include "db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $username = trim($_POST['username']);
  $email    = trim($_POST['email']);
  $password = $_POST['password'];

  // EMAIL VALIDATION
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Please enter a valid email address";
  }
  // STRONG PASSWORD VALIDATION
  else if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W]).{8,}$/", $password)) {
    $error = "Password must contain uppercase, lowercase, number and special character";
  }
  else {

    // CHECK IF EMAIL ALREADY EXISTS
    $check = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
      $error = "Email already registered. Please login.";
    }
    else {
      // INSERT USER INTO DATABASE
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
*{box-sizing:border-box;font-family:Segoe UI,sans-serif}
body{margin:0;height:100vh;display:flex;justify-content:center;align-items:center;background:#efeaff}
.container{width:1100px}
.card{display:flex;background:#fff;border-radius:30px;overflow:hidden;box-shadow:0 25px 60px rgba(0,0,0,.15)}
.left{width:50%;padding:60px}
.left h2{font-size:32px;margin-bottom:10px}
.left p{color:#555;margin-bottom:20px}
.error{color:red;margin-bottom:15px;font-size:14px}
.left input{width:100%;padding:18px;margin-bottom:18px;border-radius:14px;border:1px solid #cfd8e3;background:#eef4ff}
.left button{width:100%;padding:18px;border:none;border-radius:14px;background:#7a4cff;color:#fff;font-size:18px}
.password-box{position:relative}
.password-box span{position:absolute;right:18px;top:50%;transform:translateY(-50%);cursor:pointer}
.right{width:50%;background:linear-gradient(135deg,#8e5df7,#b79cff);color:#fff;padding:70px;display:flex;flex-direction:column;justify-content:center}
.right h1{font-size:42px;margin-bottom:20px}
</style>
</head>

<body>
<div class="container">
  <div class="card">
    <div class="left">
      <h2>Create Account</h2>
      <p>Join our fashion world </p>

      <?php if ($error): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
      <?php endif; ?>

      <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email address" required>

        <div class="password-box">
          <input type="password" id="password" name="password" placeholder="Password" required>
          <span onclick="togglePassword()">👁️</span>
        </div>

        <button type="submit">Register</button>
      </form>
    </div>

    <div class="right">
      <h1>Welcome!</h1>
      <p>Discover the latest trends in women’s fashion.</p>
    </div>
  </div>
</div>

<script>
function togglePassword(){
  const p=document.getElementById("password");
  p.type = p.type==="password" ? "text" : "password";
}
</script>
</body>
</html>
