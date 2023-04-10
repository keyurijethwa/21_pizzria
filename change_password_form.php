<?php
include_once("guest_nav.php");
include_once("database.php");
session_start();

date_default_timezone_set("Asia/Kolkata");
$db_time = date("Y-m-d G:i:s", strtotime("+ 30 min"));
$q = "DELETE FROM `token` WHERE `sent_time`>='$db_time'";
mysqli_query($con, $q);

$token = $_SESSION['token'];
$em = $_SESSION['em'];


$q = "select * from token WHERE Email='$em' and token='$token'";
$t = mysqli_query($con, $q);
$count = mysqli_num_rows($t);
if ($count == 0) {
   // $_SESSION['error'] = "Password reset token Expired";
?>
    <script type="text/javascript">
        alert("Password reset token Expired");
       // window.location = "forget_password_from.php";
    </script>
    <?php
}
// echo "$db_time";
if (isset($_POST['submit'])) {
    $login_id = $_SESSION['em'];
    $token = $_SESSION['token'];
    $passwd = $_POST['npwd'];
    //$passwd = hash('sha512',$passwd);

    $q = "select * from token WHERE Email='$login_id' and token='$token'";
    $t = mysqli_query($con, $q);
    $count = mysqli_num_rows($t);
    $temp = mysqli_fetch_assoc($t);
    if ($count > 0) {
        // if ($login_id==$temp['Email'] && $token==$temp['token']) 
        // {
        $q = "UPDATE `users` SET `Password`='$passwd' WHERE Email='$login_id'";
        if (mysqli_query($con, $q)) {
            $q = "DELETE FROM `token` WHERE Email='$login_id'";
            if (mysqli_query($con, $q)) {
                //$_SESSION['success'] = "Password Reset Successfull. Log into your account";
    ?>
                <script type="text/javascript">
                    alert("Password Reset Successfull. Log into your account");
                    window.location = "login.php";
                </script>
            <?php
            } else {
                    //$_SESSION['error'] = "Error in Resetting Password. Try again after sometime";
            ?>
                <script type="text/javascript">
                    alert("Error in Resetting Password. Try again after sometime");
                    window.location = "login.php";
                </script>
            <?php
            }
        } else {
            //$_SESSION['error'] = "Error in Resetting Password. Try again after sometime";
            ?>
            <script type="text/javascript">
                alert("Error in Resetting Password. Try again after sometime");
                window.location = "login.php";
            </script>
        <?php
        }
    } else {
        //$_SESSION['error'] = "Password Reset Token Expired";
        ?>
        <script type="text/javascript">
            alert("Password Reset Token Expired");
            window.location = "forget_password_from.php";
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
<div class="row">
    <div class="offset-lg-3 offset-md-3 col-12 col-md-6 mt-5">
        <h1 align="center" class="text-warning"> Change Password</h1>
        <form action="" method="post" onSubmit="return(validate_change_password());">
            <div class="row">
                <div class="col">
                    <input type="password" class="form-control" placeholder="Enter New Password" name="npwd" id="pwd1" style="background-color: transparent;color:white">
                    <p id="pwd_err"></p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="password" class="form-control" placeholder="Retype New Password" name="rnpwd" id="repwd1" style="background-color: transparent;color:white">
                    <p id="repwd_err"></p>
                </div>
            </div>
            <input type="text" name="token" hidden="hidden" value="<?php echo $token; ?>">
            <input type="text" name="em" hidden="hidden" value="<?php echo $em; ?>">
            <div class="row" style="text-align:center;">
            <div class="col">
            <button type="submit" class="btn btn-warning" name="submit" >Change Password</button>
            </div>
            </div>
        </form>
    </div>
</div>
</body>
<?php
include("Footer.php");
?>