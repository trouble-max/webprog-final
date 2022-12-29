<?php

include("config.php");

if (isset($_REQUEST["sum"])) {
    $split = explode(",", $_REQUEST["sum"]);
    $new_sum = $split[0] * 1.05;
    if ($new_sum > $split[1]) {
        header("location:../frontend/error.php?err=not%20enough%20money");
        exit;
    }
}
if(isset($_REQUEST["ok"])) {
    $split = explode(",", $_REQUEST["ok"]);
    $user_id = $_SESSION["user_id"];
    $new_user_balance = $split[2] - $split[1];

    $query = mysqli_query($mysqli, "UPDATE `user` SET `balance` = '$new_user_balance' WHERE `user`.`id` = $user_id");
    header("location:../frontend/success.php");
}
?>