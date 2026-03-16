<?php

include "db.php";

$id = $_GET['id'];

/* get current value */
$result = mysqli_query($conn,"SELECT is_default FROM user_personal_details WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

if($row['is_default'] == 1){

    /* remove default */
    mysqli_query($conn,"UPDATE user_personal_details SET is_default=0 WHERE id='$id'");

}else{

    /* set default */
    mysqli_query($conn,"UPDATE user_personal_details SET is_default=1 WHERE id='$id'");

}

header("Location: personal_details.php");

?>