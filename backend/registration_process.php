<?php

session_start();
include("config.php");

if (isset($_POST["submit"])) {

    $first = $_POST["first"];
    $last = $_POST["last"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = mysqli_query($mysqli, "INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `card_number`, `arrived`, `withdrawn`, `bonus`) VALUES (NULL, '$first', '$last', '$email', '$password', NULL, NULL, NULL, NULL)");

    if ($query) {
        header("location:../frontend/login.php");
    } else {
        header("location:../frontend/error.php?err=invalid%20inputs");
    }
}

?>