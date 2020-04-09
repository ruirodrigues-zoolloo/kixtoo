<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require("../../PHPMailer/Exception.php");
require("../../PHPMailer/PHPMailer.php");
require("../../PHPMailer/SMTP.php");

session_start();

function generateRandomString($length) {
    $include_chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    /* Uncomment below to include symbols */
    /* $include_chars .= "[{(!@#$%^/&*_+;?\:)}]"; */
    $charLength = strlen($include_chars);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $include_chars [rand(0, $charLength - 1)];
    }
    return $randomString;
}


$email = $_POST['email'];
$password = md5($_POST['password']);
$userLocation = $_POST['userLocation'];
$userFirstName = $_POST['userFirstName'];
$userLastName = $_POST['userLastName'];
$userGender = $_POST['userGender'];
$userDOBmonth = $_POST['userDOBmonth'];
$userDOBday = $_POST['userDOBday'];
$userDOByear = $_POST['userDOByear'];
$userToken = generateRandomString(25);
$oldmask = umask(000);
mkdir("../../data/".$userToken."/",0777,true);
umask($oldmask);

include("../../inc.db.php");
$sql = "select * from `users` where `userEmail`='$email'";
$result = $con->query($sql);
$test = mysqli_num_rows($result);

if($test==0){
include("../../inc.db.php");
$cookie_name = "token";
$cookie_value = "$userToken";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
$con->query("INSERT INTO `users` (`userToken`,`userEmail`,`userPassword`,`userFirstName`,`userLastName`,`userGender`,`userDOBmonth`,`userDOBday`,`userDOByear`,`userLocation`) VALUES('".$userToken."','$email','$password','$userFirstName','$userLastName','$userGender','$userDOBmonth','$userDOBday','$userDOByear','$userLocation')");

// send out welcome mail
    
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'kixtoo.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = 'true';                                   // Enable SMTP authentication
    $mail->Username   = 'admin@kixtoo.com';                     // SMTP username
    $mail->Password   = '@gZrs25Yy';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('admin@kixtoo.com','Kixtoo Administrator');
    $mail->addAddress("$email");     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('admin@kixtoo.com', 'Administrator');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome to Kixtoo '.$userFirstName;
    $mail->Body    = '<p><img src="https://kixtoo.com/kixtoo_logo.png" /></p><h3>New Registration </h3><p>Thank you '.$userFirstName.' for registering at Kixtoo.com '.$userEmail.'.</p><p>You may now login to your Kixtoo account and start sharing your online adventures with friends, family, Co-workers, and Classmates.</p><p><a href="https://kixtoo.com/app">Click here to visit Kixtoo.com</a></p><p>Thank you<br/>Kixtoo Administrator</p>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
}  catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}  

?>
<script>alert("Your account has been created. You will now be redirected to your Kixtoo home page.");window.location="../../";</script>
<?php
}
if($test==1){
?>
<script>alert("An existing account using that email address exists. Please try again.");window.history.back();</script>
<?php
}




?>