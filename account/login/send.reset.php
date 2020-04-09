<?php
$email = $_POST['email'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require("../../PHPMailer/Exception.php");
require("../../PHPMailer/PHPMailer.php");
require("../../PHPMailer/SMTP.php");

include("../../inc.db.php");
$sql = "select * from `users` where `userEmail`='$email'";
$result = $con->query($sql);
$user = mysqli_fetch_array($result);

$token = $user['userToken'];
$fullName = $user['userFirstName'].' '.$user['userLastName'];
$firstName = $user['userFirstName'];

$mail = new PHPMailer;
$mail->isHTML(true);
$mail->setFrom('admin@kixtoo.com', 'Kixtoo Administrator');
$mail->addAddress($email, $fullName);
$mail->Subject  = 'Kixtoo Password Reset Request';
$body = '<p><img src="https://kixtoo.com/kixtoo_logo.png" width="340"/></p>';
$body = $body . '<p>Hello '.$firstName.'.</p><p>You have requested to reset your password at Kixtoo.com. If this was not you, disregard this email. If this was you, please click the following link to reset your password.</p>';
$body = $body . '<p><a href="https://kixtoo.com/app/account/reset/?t="'.$token.'>Click Here To Reset Your Password.</a></p>';
$body = $body .'<p>Thank you<br/>Kixtoo Administrator.</p>';
$mail->Body     = $body;
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}

?>