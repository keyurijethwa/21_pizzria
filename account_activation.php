<?php
include_once("database.php");
session_start();
$em = $_GET['email'];
//echo $em;
$q1 = "select * from users where email='$em' and status='Active'";
$result = mysqli_num_rows(mysqli_query($con, $q1));
if ($result == 0) {
    $q = "update users set status='Active' where email='$em'";
    if (mysqli_query($con, $q)) {
        $_SESSION['Activation_succ'] = "Account acrtivated succesfully. Plaese Log in to your account.";
    } else {
        $_SESSION['Activation_err'] = "Account activation Failed";
    }
} else {
    $_SESSION['Activation_err'] = "Account is already activated. Log in to your account";
}
?>
<script>
    window.location = "login.php";
</script>
<?php
include_once("footer.php");