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
    <form action="change_profile.php" method="post" enctype="multipart/form-data">
        <h1 class="mt-5 p-5 text-center text-warning fst-italic"> Change profile</h1>
        <div class="row mb-5">
            <div class=" col-12 ">
                <div class="text-center"> <img class="rounded-circle profile mx-auto" src="Profile/<?php echo $a[4]; ?>" alt=""> </div>
            </div>

            <div class="row text-center mt-5">
                <div class="col-12">
                    <h4 class="text-white-50">Choose the new image:</h4>
                    <input type="file" name="image" style="background-color: transparent;color:white" required>
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
      
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'Profile/' . $image;
        
            $q = "UPDATE users set Profile='$image' where Email='$em'";
        
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