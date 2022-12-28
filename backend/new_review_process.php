<?php
session_start();
include("config.php");

if (isset($_POST["submit"])) {

    $product = $_REQUEST["pr"];
    $body = $_POST["body"];
    $rating = $_POST["rating"];
    $name = $_SESSION["user_name"];

    $query = mysqli_query($mysqli, "INSERT INTO `review` (`product_id`, `review_body`, `stars`, `author`) VALUES ('$product', '$body', '$rating', '$name')");
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
