<?php
session_start();
setcookie("token", "", time() - (86400 * 30), "/"); // 86400 = 1 day    
setcookie("fullname", "", time() - (86400 * 30), "/"); // 86400 = 1 day    
setcookie("firstname", "", time() - (86400 * 30), "/"); // 86400 = 1 day    
setcookie("email", "", time() - (86400 * 30), "/"); // 86400 = 1 day    
setcookie("photo", "", time() - (86400 * 30), "/"); // 86400 = 1 day    
setcookie("location", "", time() - (86400 * 30), "/"); // 86400 = 1 day    
header("Location:login/");
?>