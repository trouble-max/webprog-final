<?php

session_start();
include("config.php");

if (isset($_REQUEST["sum"])) {
    $user_id = $_SESSION["user_id"];
    $query = mysqli_query($mysqli, "SELECT * FROM `user` WHERE `id` = $user_id");
    $user = mysqli_fetch_object($query);
    $sum = $_REQUEST["sum"];

    $balance = $user->balance;
    if ($sum > $balance) {
        header("location:../frontend/error.php?err=not%20enough%20money");
        exit;
    }

    $new_user_balance = $balance - $sum;

    $query = mysqli_query($mysqli, "UPDATE `user` SET `balance` = '$new_user_balance' WHERE `user`.`id` = $user_id");
    if ($query) {
        unset($_SESSION['cart']);
        header("location:../frontend/success.php");
    }
}

?>