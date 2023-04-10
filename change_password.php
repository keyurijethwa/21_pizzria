<?php
include_once("database.php");
session_start();
$em = $_SESSION['emailid'];
$q = "SELECT * from users where Email='$em'";
$a = mysqli_fetch_array(mysqli_query($con, $q));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="
background-image: url('img/bg_4.jpg'); 
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
    <?php
    include_once("login_nav.php");
    ?>
    <form action="change_password.php" method="post" enctype="multipart/form-data">
        <h1 class="mt-5 p-5 text-center text-warning fst-italic"> Change Password</h1>
        <div class="row mb-5">
            <div class=" col-12 ">
                <div class="text-center"> <img class="rounded-circle profile mx-auto" src="Profile/<?php echo $a[4]; ?>" alt=""> </div>
            </div>

            <div class="row text-center mt-5">
                <div class="col-12">
                    <h4 class="text-white-50">Old Password:</h4>
                    <input type="text" name="old" style="background-color: transparent;color:white" required>
                </div>
            
                <div class=" col-12">
                    <h4 class="text-white-50">New Password:</h4>
                    <input type="password" name="new" style="background-color: transparent;color:white" required>
                </div>
                <div class=" col-12">
                    <h4 class="text-white-50">Confirm Password:</h4>
                    <input type="password" name="con" style="background-color: transparent;color:white" required>
                </div>
            </div>

            <div class="d-grid  col-6 mx-auto p-5 ">
                <input type="submit" value="Upadate" name="updt_btn" class="btn btn-warning">
            </div>
        </div>
    </form>
    <?php
    include_once("footer.php")
    ?>
</body>

</html>
<?php
if (isset($_POST['updt_btn'])) {
    include_once("database.php");
    $old = $_POST['old'];
    $pass = $_POST['new'];
    $conf = $_POST['con'];
    if ($a[2] == $old) {
        if ($pass == $conf) {
            $q = "UPDATE users set  Password='$pass' where Email='$em'";
            if (mysqli_query($con, $q)) {

?>
                <script>
                    alert("Data Upadated sucessfully!");
                    window.location = "my_profile.php";
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("Error in upadating data!");
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert("New password nad confirm password must be same!");
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert("Old Password is wrong!");
        </script>
<?php
    }
}
?>