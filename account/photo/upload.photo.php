<?php
session_start();
$target_dir = "../../data/".$_COOKIE['token'].'/';
$target_dirf = "../../data/".$_COOKIE['token'].'/';

$target_file = $target_dir . md5(time()).basename($_FILES["fileToUpload"]["name"]);
$target_filef = $target_dirf . md5(time()).basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        //$uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
    //$uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 999999) {
    //echo "Sorry, your file is too large.";
    //$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
   && $imageFileType != "gif" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        include("../../inc.db.php");
        $con->query("update `users` set `userPhoto`='".$target_filef."' where `userToken`='".$_COOKIE['token']."'");
        $cookie_name = "photo";
        $cookie_value = $target_filef;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        $oldmask = umask(022);
        chmod($target_file, 0777);
        umask($oldmask);
        header("location:../");
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } 
}
?>