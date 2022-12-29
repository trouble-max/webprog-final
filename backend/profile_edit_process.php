<?php
session_start();
include("config.php");
if(isset($_POST["edit"]))
{
    $id = $_SESSION["user_id"];
    $first = $_POST["first_name"];
    $last = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $select= "SELECT * FROM `user` WHERE id='$id'";
    $sql = mysqli_query($mysqli,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
        $sql2=mysqli_query($mysqli,"UPDATE `user` SET first_name='$first',last_name='$last',email='$email',password='$password' WHERE id='$id'");
        if($sql2)
        {
           /*Successful*/
           header('location:../frontend/user.php');
        }
        else
        {
            echo("sorry your profile is not update");
           /*sorry your profile is not update*/
           header('location:../frontend/user_edit.php');
        }
    }
    else
    {
        echo("sorry your id is not match");
        /*sorry your id is not match*/
        header('location:../frontend/user_edit.php');
    }
 }
?>