<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (!$_SESSION['cart'][$_REQUEST["pr"]]["count"]) {
    $_SESSION['cart'][$_REQUEST["pr"]]["count"] = 1;
} else {
    $_SESSION['cart'][$_REQUEST["pr"]]["count"]++;
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>