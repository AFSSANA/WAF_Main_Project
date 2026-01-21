<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $email    = $_POST['email'];
  $password = $_POST['password'];

  // Check if user has registered
  if (!isset($_SESSION['registered_email']) || !isset($_SESSION['registered_user'])) {
    $error = "Please register first";
  }
  // Validate email match and strong password
  else if (
    $email !== $_SESSION['registered_email'] ||
    !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W]).{8,}$/", $password)
  ) {
    $error = "Invalid login credentials";
  }
  else {
    // Successful login
    $_SESSION['username'] = $_SESSION['registered_user'];
    header("Location: user_dashboard.php");
    exit();
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
    body{
      margin:0;
      height:100vh;
      display:flex;
      justify-content:center;
      align-items:center;
      background:#eae6ff;
      font-family:Segoe UI
    }
    .box{
      width:400px;
      background:#fff;
      padding:40px;
      border-radius:15px;
      box-shadow:0 10px 25px rgba(0,0,0,.2)
    }
    input,button{
      width:100%;
      padding:12px;
      margin-bottom:15px;
      border-radius:8px;
      border:1px solid #ccc
    }
    button{
      background:#6a3df0;
      color:#fff;
      border:none
    }
    .subtitle{
      color:#555;
      font-size:14px;
      margin-bottom:20px;
    }
  </style>
</head>
<body>

<div class="box">
  <h2>Login</h2>
  <p class="subtitle">Enter your email and password</p>

  <?php if ($error) echo "<p style='color:red'>$error</p>"; ?>

  <form method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
  </form>
</div>

</body>
</html>
