<?php

include("config.php");
$result = array();
$sum = 0;

foreach ($_SESSION['cart'] as $product => $count) {
    $query = mysqli_query($mysqli, "SELECT * FROM `product` WHERE `id` = $product");
    $obj = mysqli_fetch_object($query);
    $result[] = $obj;
}
?>