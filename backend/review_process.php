<?php

include("config.php");

$query = mysqli_query($mysqli, "SELECT * FROM `review` WHERE `product_id` = $product");

$avg_score = mysqli_fetch_row(mysqli_query($mysqli, "SELECT FORMAT(AVG(stars), 1) FROM `review` WHERE `product_id` =  $product"));
$reviews = array();

while($row = mysqli_fetch_assoc($query)){
    $reviews[] = $row;
}

// if (!$reviews) {
//     header("location:../frontend/error.php?err=no%20result");
// }
?>