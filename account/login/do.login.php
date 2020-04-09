<?php
include("../../inc.db.php");
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "select * from `users` where `userEmail`='$email' and `userPassword`='$password'";
$result = $con->query($sql);
$test = mysqli_num_rows($result);

if($test==1){
    $user = mysqli_fetch_array($result);
    $fullname = $user['userFirstName'].' '.$user['userLastName'];
    $dob = $user['userDOBmonth'].'/'.$user['userDOBday'].'/'.$user['userDOByear'];
    $cookie_name = "gender";
    $cookie_value = $user['userGender'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    $cookie_name = "dob";
    $cookie_value = $dob;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    $cookie_name = "email";
    $cookie_value = $user['userEmail'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    $cookie_name = "firstname";
    $cookie_value = $user['userFirstName'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    $cookie_name = "location";
    $cookie_value = $user['userLocation'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    $cookie_name = "photo";
    $cookie_value = $user['userPhoto'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    $cookie_name = "token";
    $cookie_value = $user['userToken'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    $cookie_name = "fullname";
    $cookie_value = "$fullname";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header("Location:../");
}else{
?>
<script>alert("invalid login, please try again.");window.history.back();</script>
<?php
}
?>