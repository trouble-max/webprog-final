<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php?page=main");
}
?>
<a class="header-logout" href="../backend/logout_process.php">Log Out</a>