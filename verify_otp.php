<?php
include_once("guest_nav.php");
include_once("database.php");
session_start();

if (!isset($_POST['submit'])) {

    date_default_timezone_set("Asia/Kolkata");
    $db_time = date("Y-m-d G:i:s", strtotime("+ 30 min"));
    $q = "DELETE FROM `token` WHERE `sent_time`>='$db_time'";
    mysqli_query($con, $q);
    $_SESSION['token'] = $_REQUEST['token'];
    $_SESSION['em'] = $_REQUEST['email'];

    $em = $_SESSION['em'];
    $token =   $_SESSION['token'];
    $q1 = "select * from token WHERE Email='$em' and token='$token'";
    //echo $q1;
    $t = mysqli_query($con, $q1);
    $count = mysqli_num_rows($t);
    if ($count == 0) {
        //$_SESSION['error'] = "Password reset token expired.";
?>
        <script type="text/javascript">
            alert("Password reset token expired.");
            window.location = "login.php";
        </script>
<?php
    }
}

?>
<body style="
background-image: url('img/bg_4.jpg'); min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
<div class="container">
    <div class="row mt-5">
        <div class="offset-sm-3 col-12 col-md-6">
            <h1 class="text-warning text-center"> Verify OTP</h1>
            <form action="verify_otp_action.php" method="post">
                <div class="row">
                    <div clas="col ">
                        <input type="text" class="form-control" placeholder="Enter OTP" name="otp" id="pass" style="background-color: transparent;color:white">
                    </div>
                </div>
                <div class="row mt-3" style="text-align:center;">
                    <div clas="col ">
                        <input type="submit" class="btn btn-warning" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<br>
<?php
include("Footer.php");
?>