<?php
session_start();
setcookie("token", "", time() - (86400 * 30), "/"); // 86400 = 1 day    
header("Location:../login");
?>