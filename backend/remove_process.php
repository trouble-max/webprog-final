<?php
session_start();
if (!isset($_SESSION['cart'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

if ($_SESSION['cart'][$_REQUEST["pr"]]["count"]) {
    $_SESSION['cart'][$_REQUEST["pr"]]["count"]--;
}
if ($_SESSION['cart'][$_REQUEST["pr"]]["count"] == 0){
    $_SESSION['cart'] = array_filter($array, function($a) { return ($a !== 0); });
    unset($_SESSION['cart'][$_REQUEST["pr"]]);
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>