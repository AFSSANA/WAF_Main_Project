<?php
include "db.php";

function logAttack($attack_type, $page_name, $input_value, $status) {
    global $conn;

    $stmt = mysqli_prepare(
        $conn,
        "INSERT INTO attack_logs (attack_type, page_name, input_value, status, time)
         VALUES (?, ?, ?, ?, NOW())"
    );

    mysqli_stmt_bind_param(
        $stmt,
        "ssss",
        $attack_type,
        $page_name,
        $input_value,
        $status
    );

    mysqli_stmt_execute($stmt);
}
