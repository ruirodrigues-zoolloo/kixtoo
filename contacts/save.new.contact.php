<?php
session_start();
//$userToken = $_COOKIE['token'];


include("../inc.db.php");
$userToken = $_POST['userToken'];
$userEmail = $_POST['userEmail'];
$contactEmail = $_COOKIE['email'];

$sql = "select * from `users` where `userEmail`='".$contactEmail."'";
$result = $con->query($sql);
$user = mysqli_fetch_array($result);
$contactEmail = $user['userEmail'];
$con->query("insert into `contacts` (`contactEmail`,`contactToken`,`userToken`,`userEmail`) VALUES('".$_POST['contactEmail']."','','".$_COOKIE['token']."','$contactEmail')");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require("../PHPMailer/Exception.php");
require("../PHPMailer/PHPMailer.php");
require("../PHPMailer/SMTP.php");
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'kixtoo.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = 'true';                                   // Enable SMTP authentication
    $mail->Username   = 'admin@kixtoo.com';                     // SMTP username
    $mail->Password   = '@gZrs25Yy';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('admin@kixtoo.com','Kixtoo Administrator');
    $mail->addAddress($_POST['contactEmail']);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('admin@kixtoo.com', 'Administrator');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Kixtoo Contact Request ';
    $mail->Body    = '<p><img src="https://kixtoo.com/kixtoo_logo.png" /></p><h3>Contact Request</h3><p>You have recieved a contact request from '.$_COOKIE['email'].'.</p><p>Please follow this link to Login to Kixtoo and view your requests, or to sign up for a Kixtoo account.</p><p><a href="https://kixtoo.com/app">Click here to visit Kixtoo.com</a></p><p>Thank you<br/>Kixtoo Administrator</p>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    //echo 'Message has been sent';
    header("Location:../contacts/");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>