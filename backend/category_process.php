<?php

include("config.php");

$query = mysqli_query($mysqli, "SELECT * FROM `product` WHERE `category_id` = $category");
$name = mysqli_fetch_row(mysqli_query($mysqli, "SELECT `name` FROM `category` WHERE `id` = $category"));

while($row = mysqli_fetch_assoc($query)){
    $result[] = $row;
}

if (!$result) {
    header("location:../frontend/error.php?err=no%20result");
}
?>
