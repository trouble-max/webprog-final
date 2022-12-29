<?php

include("config.php");

if (isset($_POST["name"])) {
    $name = $_POST["name"];
    $query = mysqli_query($mysqli, "SELECT * FROM `product` WHERE `name` LIKE '%$name%'");

    while ($row = mysqli_fetch_assoc($query)) {
        $result[] = $row;
    }

    if (!$result) {
        header("location:../frontend/market.php");
    } else {
        header("location:../frontend/product.php?pr=" . $result[0]["id"]);
    }
} else {
    header("location:../frontend/error.php?err=no%20result");
}
?>