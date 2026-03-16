<?php
include "db.php";

$result = mysqli_query($conn,"SELECT COUNT(*) AS total FROM attack_logs WHERE status='Blocked'");
$row = mysqli_fetch_assoc($result);

echo $row['total'];
?>