<?php
include_once("database.php");
$email = @$_GET['email'];
$q = "select * from users where email='$email'";
$result = mysqli_query($con, $q);

while ($a = mysqli_fetch_array($result)) {
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
background-image: url('img/bg_4.jpg'); min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
    <?php
    include_once('admin_nav.php');
    ?>
    <div class="">
        <h1 class="mt-5 p-5 text-center text-warning fst-italic"> Edit user details</h1>
        <div class="row mb-5">
            <div class="col-md-6 col-12 text-center">
                <img src="Profile/<?php echo $a[4]?>" alt="" height="75%" width="50%">
            </div>
            <div class="col-md-6 col-12">
                <div class="row text-center">
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50">Name:</h4>
                        <input type="text" name="name" value="<?php echo $a[0]?>" style="background-color: transparent;color:white">
                    </div>
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50">Email:</h4>
                        <input type="email" name="name" value="<?php echo $a[1]?>" style="background-color: transparent;color:white" readonly>
                    </div>
                </div>
                <div class="row text-center mt-5">
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50">Password:</h4>
                        <input type="password" name="name" value="<?php echo $a[2]?>" style="background-color: transparent;color:white">
                    </div>
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50">Moblie:</h4>
                        <input type="text" name="name" value="3" style="background-color: transparent;color:white">
                    </div>
                </div>
                <div class="row text-center mt-5">
                    <div class="col-12">
                        <h4 class="text-white-50">Photo:</h4>
                        <input type="file" name="name" value="3" style="background-color: transparent;color:white">
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto p-5 " >
  <button class="btn btn-warning" type="button">Update</button>
  
</div>
            </div>
        </div>
        <?php
}
        include_once('footer.php');
        ?>
</body>

</html>