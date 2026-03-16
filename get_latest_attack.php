<?php
include "db.php";

$query = "SELECT * FROM attack_logs ORDER BY time DESC LIMIT 20";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result)){

echo "<tr>";
echo "<td>".$row['time']."</td>";
echo "<td>".$row['ip_address']."</td>";
echo "<td>".$row['attack_type']."</td>";
echo "<td>".$row['page_name']."</td>";
echo "<td>".$row['status']."</td>";
echo "</tr>";

}
?>