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
        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_name"] = $result["first_name"];
        $_SESSION["user_lname"] = $result["last_name"];
        $_SESSION["email"] = $result["email"];
        $_SESSION["password"] = $result["password"];

        if (isset($_REQUEST["page"])) {
            $page = $_REQUEST["page"];

            if (str_contains($page, "product")) {
                header("location:../frontend/product.php?pr=" . substr($page, -1));
            }
            if ($page == "main") {
                header("location:../frontend/main.php");
            }
        } else {
            header("location:../frontend/main.php");
        }
    }
}
