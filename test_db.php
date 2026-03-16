<?php
include "db.php";

$result = mysqli_query($conn,"SELECT * FROM admins");

while($row = mysqli_fetch_assoc($result)){
echo $row['email']." - ".$row['password']."<br>";
}
?>