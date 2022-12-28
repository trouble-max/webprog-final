<?php

include("config.php");

$query = mysqli_query($mysqli, "SELECT * FROM `product` WHERE `id` = $product");
$result = mysqli_fetch_object($query);

if (!$result) {
    header("location:../frontend/error.php?err=no%20result");
}
?>
