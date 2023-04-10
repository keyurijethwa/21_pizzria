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
    include_once('login_nav.php');
    ?>

    <div class=" mt-5 mb-5 mx-5">

        <h1 class="text-warning mt-5 text-center fst-italic">My Profile</h1>
        <div class="text-center">
            <div class="d-block mx-3 text-center">

                <div class="row align-items-center g-2 text-white d-flex">
                    <div class=" col-lg-6 col-md-6 col-12">
                        <div class="text-center"> <img class="rounded-circle profile mx-auto" src="Profile/<?php echo $a[4] ?>" alt=""> </div>
                        <div class="fs-2 text-white"><?php echo $a[0] ?> </div>
                        <div class="fs-4 text-muted"><?php echo $a[1] ?></div>

                        <a href="change_password.php">
                            <h5>Change password</h5>
                        </a>
                        <a href="change_profile.php">
                            <h5>Change Porfile</h5>
                        </a>
                    </div>
                    <div class=" col-lg-6 col-md-6 col-12">
                    <form action="my_profile.php" method="post" enctype="multipart/form-data">
                <h1 class="mt-5 p-5 text-center text-warning fst-italic"> Edit data</h1>
                <div class="row mb-5">
                    
                    <div class=" col-12">
                        <div class="row text-center">
                            <div class="col-md-6 col-12">
                                <h4 class="text-white-50">Name:</h4>
                                <input type="text" name="name" value="<?php echo $a[0] ?>" style="background-color: transparent;color:white">
                            </div>
                            <div class="col-md-6 col-12">
                                <h4 class="text-white-50">Email:</h4>
                                <input type="email" name="email" value="<?php echo $a[1] ?>" style="background-color: transparent;color:white" readonly>
                            </div>
                        </div>
                        <div class="row text-center mt-5">
                            <div class="col-md-6 col-12">
                                <h4 class="text-white-50">Password:</h4>
                                <input type="text" name="pass" value="<?php echo $a[2] ?>" style="background-color: transparent;color:white" readonly>
                            </div>
                            <div class="col-md-6 col-12">
                                <h4 class="text-white-50">Moblie:</h4>
                                <input type="text" name="mob" value="<?php echo $a[3] ?>" style="background-color: transparent;color:white">
                            </div>
                        </div>
                       
                        <div class="d-grid gap-2 col-6 mx-auto p-5 ">
                            <input type="submit" value="Upadate" name="updt_btn" class="btn btn-warning">
                        </div>
                    </div>
            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once('footer.php');
    ?>
</body>

</html>
<?php
    if (isset($_POST['updt_btn'])) {
        $un = $_POST['name'];
        $em = $_POST['email'];
        $pass = $_POST['pass'];
        $mn = $_POST['mob'];
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'Profile/' . $image;
        
            $q = "UPDATE users set Name='$un' ,Mobile_no='$mn' where Email='$em'";
        
        if(mysqli_query($con, $q)) {
    ?>
      <script>
                alert("Data Upadated sucessfully!");
                window.location="my_profile.php";

            </script>
    <?php
        } else {
        ?>
            <script>
                alert("Error in upadating data");
            </script>
    <?php
        }
    }
    ?>