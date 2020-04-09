<?php
session_start();
$token = $_COOKIE['token'];
function getContactPhoto($email){
    include("../inc.db.php");
    $sql = "select * from `users` where `userEmail`='$email'";
    $result = $con->query($sql);
    $user = mysqli_fetch_array($result);
    $photo = $user['userPhoto'];
    return $photo;
}
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="57x57" href="../icons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../icons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../icons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../icons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../icons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../icons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../icons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../icons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../icons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../icons/favicon-16x16.png">
        <link rel="manifest" href="../icons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../../icons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="shortcut icon" href="../icons/ms-icon-70x70.png" type="image/png">
        <link rel="icon" href="../icons/ms-icon-70x70.png" type="image/png">
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
    </head>
    <body class="animated fadeIn">
        <?php include("inc.top.php");?>
        <div class="container" style="margin-top:75px;">
            <div class="row">
                <div class="col-md-2">
                    <?php include("inc.nav.php");?>
                </div>
                <div class="col-md-10">
                <?php
                    include("../inc.db.php");
                    $sql = "select * from `contacts` where `userEmail`='".$_COOKIE['email']."' AND `pending`='1'";
                    $result = $con->query($sql);
                    $test = mysqli_num_rows($result);
                    ?>
                    <h5>You have <strong><?php echo $test;?></strong> pending contact requests.</h5>
                    <?php
                    while ($contact = mysqli_fetch_array($result)){
                    ?>
                    <div class="card col-md-2">
                        <img class="card-img-top" src="app/<?php echo getContactPhoto($contact['contactEmail']);?>"/>
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $contact['contactEmail'];?></h5>
                        <a href="#" class="btn btn-primary btn-sm btn-block">Accept</a>
                    </div>
                    </div>
                    <?php
                    }
                ?>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../../js/jquery-3.4.1.slim.min.js"></script>
        <script src="../../js/popper.min.js" ></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/pace.min.js"></script>
    </body>
</html>