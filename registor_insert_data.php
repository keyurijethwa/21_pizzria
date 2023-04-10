<?php
session_start();
include_once("database.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('PHPMailer\PHPMailer.php');
require('PHPMailer\SMTP.php');
require('PHPMailer\Exception.php');

if (isset($_POST['btn'])) {
    @$em=$_POST['eid'];
    @$name = $_POST['fn1'];
    @$email = $_POST['eid'];
    @$pass = $_POST['pwd'];
    @$cpass = $_POST['repwd'];
    @$phone = $_POST['mobile'];
    @$image = $_FILES['image']['name'];
    @$image_size = $_FILES['image']['size'];
    @$image_tmp_name = $_FILES['image']['tmp_name'];
    @$image_folder = 'Profile/' . $image;
    @$select = mysqli_query($con, "SELECT * FROM `users` WHERE Email = '$email' or Password = '$pass'") or die('query failed');
    @$q = "INSERT INTO users VALUES('$name', '$email','$pass','$phone','$image','Not Active')";
    if (mysqli_num_rows($select) == 1) {
        ?>
        <script>alert ("User already exist");
        window.location="registration.php";
    </script>
        <?php
    } else {
        if ($pass != $cpass) {
            ?>
            <script>alert ("Confirm password not matched!");</script>
            <?php
        } elseif ($image_size > 2000000) {
            ?>
            <script>alert ("image size is too large!");</script>
            <?php
        } else {
            $insert = mysqli_query($con, $q) or die('query failed');
            if ($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                $link = "http://localhost/GitHub/21_pizzria/account_activation.php?email=$em";
        $mail = new PHPMailer();
        $headers = 'From: pizzria <Active account>' . "\r\n";
        $headers .= 'Reply-To: <kjethwa779@rku.ac.in>' . "\r\n";
        $headers .= 'X-Mailer: PHP/' . phpversion();
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $to = $em;
        $subject = "Account Activation link";
        $body = 'Your account is created successfully. Please click on the activation link to activate your account. <br> <br>' .
            $link;

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
        $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
        $mail->Host       = 'smtp.gmail.com';      // sets GMAIL as the SMTP server
        $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
        $mail->Username   = "kjethwa779@rku.ac.in";  // GMAIL username(from)
        $mail->Password   = "9904133859";            // GMAIL password(from)
        $mail->SetFrom('kjethwa779@rku.ac.in', 'Active account'); //from
        $mail->AddReplyTo($em, "Active account"); //to
        $mail->Subject    = "Account activation link for active your account in our pizzria website";
        $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
        $mail->MsgHTML($body);
        $address = $em; //to
        $mail->AddAddress($address, "Active account");
        if (!$mail->Send()) {
            //$_SESSION['reg_msg_err'] = "Error in sending activation link. Please try again.";
            ?>
                <script>alert("Error in sending activation link. Please try again.");</script>
            <?php
        } else {
            //$_SESSION['reg_msg'] = "Account created successfully. An activation link is sent to your registered email address. click on the link to activate your account.";
            ?>
            <script>alert("Account created successfully. An activation link is sent to your registered email address. click on the link to activate your account.");</script>
        <?php
        }
            
            } else {
                //$_SESSION['reg_msg_err'] = "Error in creating account. Please try again.";
                ?>
                <script>alert("Error in creating account. Please try again.");</script>
            <?php
            }
        }
    }
 
?>
    <script>
        window.location = "registration.php";
    </script>
<?php
}
include_once("footer.php");