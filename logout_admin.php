<?php
session_start();

/* destroy admin session */
session_unset();
session_destroy();

/* redirect to admin login page */
header("Location: admin_login.php");
exit();
?>