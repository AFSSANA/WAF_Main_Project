<?php
session_start();
include "db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $email    = trim($_POST['email']);
  $password = $_POST['password'];

  // Fetch user from database
  $query = mysqli_query(
    $conn,
    "SELECT username, password FROM users WHERE email='$email'"
  );

  if (mysqli_num_rows($query) === 1) {

    $row = mysqli_fetch_assoc($query);

    // Check password match
    if ($password === $row['password']) {

      // Successful login
      $_SESSION['username'] = $row['username'];
      header("Location: user_dashboard.php");
      exit();

    } else {
      $error = "Invalid login credentials";
    }

  } else {
    $error = "Invalid login credentials";
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

  <?php if ($error): ?>
    <p style="color:red"><?php echo htmlspecialchars($error); ?></p>
  <?php endif; ?>

  <form method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
  </form>
</div>

</body>
</html>
