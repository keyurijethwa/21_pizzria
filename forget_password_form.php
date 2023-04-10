<?php
include_once("guest_nav.php");
include_once("database.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('PHPMailer\PHPMailer.php');
require('PHPMailer\SMTP.php');
require('PHPMailer\Exception.php');
?>
<body style="
background-image: url('img/bg_4.jpg'); min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
<div class="container " style="margin-top: 10%;">
    <div class="row">
        <div class="offset-lg-3 offset-md-3 col-12 col-md-6">
            <h1 class="text-warning text-center">Forgot Password</h1>

            <br>
            <form onSubmit="return(validate_forget_password());" method="post" action="forget_password_form.php">
                <div class="row text-center">
                    <div class="col-12">
                        <input type="text" name="em" placeHolder="Email" id="em1" class="form-control" style="background-color: transparent;color:white">
                        <p id="em_err"></p>
                    </div>
                </div>


                <div class="row" style="text-align:center;">
                    <div class="col">
                        <input type="submit" value="Send Verification Email" name="btn_forget" class="btn btn-warning">

                        <input type="reset" value="Reset" name="btn-message" class="btn btn-warning">
                    </div>
                </div>
                <br>
                <div class="row" style="text-align:center;">
                    <div class="col">
                        <p><a href="registration.php">  Don't have an Account? </a></p>
                    </div>
                </div>

                <div class="row" style="text-align:center;">
                    <div class="col">
                        <p> <a href="login.php">Already have an Account? </a></p>
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>
</body>
<?php

include_once("footer.php");
if (isset($_POST['btn_forget'])) {
    $em = @$_POST['em'];

    $q = "select * from users where email='$em'";
    $count = mysqli_num_rows(mysqli_query($con, $q));
    if ($count == 1) {
        $q1 = "select * from token where Email='$em'";
        $countem = mysqli_num_rows(mysqli_query($con, $q1));
        if ($countem == 1) {
            //$_SESSION['success'] = "A Password reset link is already sent to your mail please check. New link will be generated after old link expires";
            ?>
            <script>alert("A Password reset link is already sent to your mail please check. New link will be generated after old link expires");</script>
            <?php
        } else {
            date_default_timezone_set("Asia/Kolkata");
            $s_time = date("Y-m-d G:i:s");

            $token = hash('sha512', $s_time);
            $otp = mt_rand(100000, 999999);
            $ins_token = "INSERT INTO token VALUES ('','$em','$s_time','$token',$otp)";
            // echo "$ins_token";
            if (mysqli_query($con, $ins_token)) {
                $link = "http://localhost/GitHub/21_pizzria/verify_otp.php?email=$em&token=$token";
                //echo $link;
                $mail = new PHPMailer();
                $headers = 'From: pizzria Demo Website <kjethwa779@rku.ac.in>' . "\r\n";
                $headers .= 'Reply-To: <kjethwa779@rku.ac.in>' . "\r\n";
                $headers .= 'X-Mailer: PHP/' . phpversion();
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                $to = $em;
                $subject = "Password reset link for pizzria Website";
                $body = 'OTP for password reset is ' . $otp . ' <br/>This is the password reset link for your account with Student Demo Website .The link is valid for 30 minutes.=> ' . @$link .  "<br/> Please use forgot password facility again if the link has expired";

                $mail->IsSMTP(); // telling the class to use SMTP
                // $mail->Mailer = "smtp";
                $mail->SMTPDebug  = 2;                // enables SMTP debug information (for testing)
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );                                             // 1 = errors and messages
                // 2 = messages only
                $mail->SMTPAuth   = true;                  // enable SMTP authentication
                $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
                $mail->Host       = 'smtp.gmail.com';      // sets GMAIL as the SMTP server
                $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
                $mail->Username   = "kjethwa779@rku.ac.in";  // GMAIL username(from)
                $mail->Password   = "9904133859";            // GMAIL password(from)
                $mail->SetFrom('kjethwa779@rku.ac.in', 'Student Demo Website'); //from
                $mail->AddReplyTo($em, "pizzria order online pizza"); //to
                $mail->Subject    = "Password reset link for Student Demo Website";
                $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
                $mail->MsgHTML($body);
                $address = $em; //to
                $mail->AddAddress($address, "Pizzria Website");
                if (!$mail->Send()) {
                    //$_SESSION['error'] = "Failed to reset the password please try again after sometime";
                    ?>
                    <script>alert("Failed to reset the password please try again after sometime");</script>
                    <?php
                } else {
                    //$_SESSION['success'] = "Password reset link has been sent to your registered email.Please check the spam also.";
                    ?>
                    <script>alert("Password reset link has been sent to your registered email.Please check the spam also.");</script>
                    <?php
                }
            }
        }
    } else {
        //$_SESSION['error'] = "No such Email address is registered";
        ?>
        <script>alert("No such Email address is registered");</script>
        <?php
?>
        <script>
            window.location = "forget_passwordd_form.php";
        </script>
<?php
    }
}
?>