<?php

session_start();
include("config.php");

if (isset($_POST["submit"])) {
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = mysqli_query($mysqli, "SELECT * FROM `user` WHERE email='$email' and password='$password'");
    $result = mysqli_fetch_array($query);

    if ($result) {
        $_SESSION["login"] = true;
        $_SESSION["user_id"] = $result["user_id"];
        header("location:../frontend/main.php");
    }
}

?>