<?php
include "db.php";

function logAttack($attack_type, $page_name, $input_value, $status){

    global $conn;

    // Get attacker IP
    $ip_address = $_SERVER['REMOTE_ADDR'];

    $query = "INSERT INTO attack_logs 
              (attack_type, page_name, input_value, time, status, ip_address) 
              VALUES 
              ('$attack_type','$page_name','$input_value',NOW(),'$status','$ip_address')";

    mysqli_query($conn, $query);
}
?>