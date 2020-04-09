<?php
session_start();
if(!isset($_COOKIE['token'])){header("Location:../login/");}
$userToken = $_COOKIE['token'];
include("../inc.db.php");
$sql = "SELECT * FROM `users` WHERE `userToken`='$userToken'";
$result = $con->query($sql);
$user = mysqli_fetch_array($result);
function folderSize ($dir)
{
    $size = 0;

    foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
        $size += is_file($each) ? filesize($each) : folderSize($each);
    }

    return $size;
}
$storageUsed = folderSize("../data/$userToken/");
function formatBytes($size, $precision = 0){
    $unit = ['Byte','KB','MB','GB','TB','PB','EB','ZB','YB'];

    for($i = 0; $size >= 1024 && $i < count($unit)-1; $i++){
        $size /= 1024;
    }

    return round($size, $precision).' '.$unit[$i];
}
$ttlstorage = formatBytes($storageUsed,2);
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="57x57" href="../apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
        <link rel="manifest" href="../manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="shortcut icon" href="../ms-icon-70x70.png" type="image/png">
        <link rel="icon" href="../ms-icon-70x70.png" type="image/png">
        <meta property="og:title" content="Kixtoo" />
        <meta property="og:type" content="website" />
        <meta property="fb:app_id" content="742264052568626" />
        <meta property="og:url" content="https://Kixtoo.com/" />
        <meta property="og:description" content="Kixtoo is an interests-based network containing news, information and resources from highly reputable sources. Our platform allows you to organize websites and blogs into your own personalized Lists." />
        <meta property="og:image" content="https://Kixtoo.com/kixtoocover.png" />
        <meta name="description" content="Kixtoo is an interests-based network containing news, information and resources from highly reputable sources. Our platform allows you to organize websites and blogs into your own personalized Lists.">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <!-- Fontawesome CSS -->
        <script src="https://kit.fontawesome.com/d1a747dde9.js" crossorigin="anonymous"></script>
        <!-- Pace CSS -->
        <link rel="stylesheet" href="../css/pace.css" />
        <link rel="stylesheet" href="../css/animate.css" />

        <title>Kixtoo</title>
        <style>
            a{color:#ff8000;padding:5px;display:block;}
            a:hover{color:#000000;text-decoration:none;background:#ffffff;display:block;padding:5px;}
            html, body{width:100%;height:100%;font-size:14px;}
        </style>
    </head>
    <body class="animated fadeIn">
        <div class="container-fluid h-100" style="background:#f2f2f2;">
            <div class="row h-100">
                <div class="col-md-2 pull-left" style="background:#000000;padding:15px;">
                    <div style="width:100%;padding:15px;">
                        <img src="../kixtoo_logo.png" width="100%" style="margin:0px;position:absolute;left:0px;top:0px;"/>
                    </div>
                    <div style="width:100%;margin-top:25px;">
                        <table width="100%">
                            <tr>
                                <td style="color:#ff8000;padding:5px;" valign="middle" align="center" width="65">
                                    <img src="<?php echo $user['userPhoto'];?>" width="64"/>
                                </td>
                                <td style="color:#ff8000;padding:5px;padding-top:10px;" valign="middle" align="left">
                                    <p style="padding-top:5px;"><?php echo $user['userFirstName'].'<br/>'.$user['userLastName'];?></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="width:100%;padding:15px;">
                        <a href="../home/">Home</a>
                    </div>
                    <div style="width:100%;padding:15px;">
                        <a href="../profile/">Profile</a>
                    </div>
                    <div style="width:100%;padding:15px;">
                        <a href="../mystuff/">My Stuff</a>
                    </div>
                    <div style="width:100%;padding:15px;">
                        <a href="../contacts/">Contacts</a>
                    </div>
                    <div style="width:100%;padding:15px;">
                        <a style="color:#000000;text-decoration:none;background:#ffffff;display:block;padding:5px;" href="../messages/">Messages</a>
                    </div>
                    <div style="width:100%;padding:15px;">
                        <a href="../groups/">Groups</a>
                    </div>
                    <div style="width:100%;padding:15px;">
                        <a href="../trending/">Trending</a>
                    </div>
                </div>
                <div class="col-md-10 pull-right">
                    <div class="row" style="margin-top:10px;">
                        <div class="col-md-6 pull-left">
                            <h3>My Messages</h3>
                        </div>
                        <div class="col-md-6 pull-right text-right">
                            <h5><?php echo $ttlstorage;?> used</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../js/jquery-3.4.1.slim.min.js"></script>
        <script src="../js/popper.min.js" ></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/pace.min.js"></script>
    </body>
</html>