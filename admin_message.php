<?php
include_once('database.php');
$q = "select * from contact";
$result = mysqli_query($con, $q);
?>
<?php
session_start();
if (isset($_SESSION['emailid']) && isset($_SESSION['password'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="font/css/all.css">
  
</head>

<body style="
background-image: url('img/bg_4.jpg'); min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
  <?php
    include_once('admin_nav.php')
  ?>

  <!-- menu  -->
 
  <div class="container text-white mt-5">
    
  <h1 class="mt-5 p-5 text-center text-warning fst-italic">Messages From Customer</h1>
        
        <div class="row ">
                    
                    <div class="table-responsive">
                    <table class="table text-white my-sm-5">
                <thead>
                    <tr style="background-color: #ffc107;">
                    <th scope="col">Name</th>
                        <th scope="col">Emial Id</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>    
                    </tr>
                </thead>
                <tbody>
                <?php
            while ($b = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $b[0]; ?></td>
                        <td><?php echo $b[1]; ?></td>
                        <td><?php echo $b[2]; ?></td>
                        <td><?php echo $b[3]; ?></td>
                        
            <?php
            }
            ?>
                    </tr>
                   <?php
            
                   ?>
                </tbody>
            </table>
                    </div>
        </div>
    </div>
  <!-- menu end -->

  <?php
  include_once('footer.php');
  ?>
</body>

</html>
<?php
} else {
?>
    <script>
        window.location = "login.php";
    </script>
<?php
}
?>