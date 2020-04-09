<?php
session_start();
$email = $_POST['email'];
$password = md5($_POST['password']);
include("../inc.db.php");
$sql = "SELECT * FROM `users` WHERE `userEmail`='".$email."' AND `userPassword`='".$password."'";
$result = $con->query($sql);
$test = mysqli_num_rows($result);
$user = mysqli_fetch_array($result);
$token = $user['userToken'];
if($test==0){
?>
<script>
    alert("Inavlid Login. Email or Password are incorrect. Please try again.");
    window.history.back();
</script>
<?php
}else{
    $cookie_name = "token";
    $cookie_value = $user['userToken'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
    header("Location:../home/");
?>
<script>window.location="../home/";</script>
<?php
}
?>