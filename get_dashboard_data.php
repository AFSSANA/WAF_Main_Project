<?php
include "db.php";

$data = [];

/* Total Requests */
$data['total'] = mysqli_fetch_assoc(
    mysqli_query($conn,"SELECT COUNT(*) AS total FROM attack_logs")
)['total'];

/* Blocked */
$data['blocked'] = mysqli_fetch_assoc(
    mysqli_query($conn,"SELECT COUNT(*) AS total FROM attack_logs WHERE status='Blocked'")
)['total'];

/* SQL Injection */
$data['sql'] = mysqli_fetch_assoc(
    mysqli_query($conn,"SELECT COUNT(*) AS total FROM attack_logs WHERE attack_type='SQL Injection'")
)['total'];

/* XSS */
$data['xss'] = mysqli_fetch_assoc(
    mysqli_query($conn,"SELECT COUNT(*) AS total FROM attack_logs WHERE attack_type='XSS Attack'")
)['total'];

/* Brute Force */
$data['brute'] = mysqli_fetch_assoc(
    mysqli_query($conn,"SELECT COUNT(*) AS total FROM attack_logs WHERE attack_type='Brute Force'")
)['total'];

echo json_encode($data);