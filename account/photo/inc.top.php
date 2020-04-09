<div style="position:fixed;top:0px;left:0px;width:100%;height:50px;line-height:50px;border-bottom:1px solid #cccccc;">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="../../kixtoo_logo.png" height="20"/>
            </div>
            <div class="col-md-9" style="text-align:right;">
                <?php
                if(!isset($_COOKIE['token'])){
                ?>
                <a style="color:#ff5400;font-size:12px;" href="../login/">LOGIN</a>&nbsp;&nbsp;&nbsp;<a style="color:#ff5400;font-size:12px;" href="../create">CREATE ACCOUNT</a>&nbsp;&nbsp;&nbsp;<a style="color:#ff5400;font-size:12px;" href="../../support/">SUPPORT</a>
                <?php
                }else{
                ?>
                <a style="color:#ff5400;font-size:12px;" href="logout.php">LOGOUT</a>&nbsp;&nbsp;&nbsp;<a style="color:#ff5400;font-size:12px;" href="#">ACCOUNT</a>&nbsp;&nbsp;&nbsp;<a style="color:#ff5400;font-size:12px;" href="../../support/">SUPPORT</a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>