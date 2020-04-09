<?php
$token = $_POST['token'];
$password = md5($_POST['password']);
include("../../inc.db.php");
$con->query("update `users` set `userPassword`='$password' where `userToken`='$token'");
header("location:../logout.php");
?>