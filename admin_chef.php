<?php
include_once('database.php');
$q = "select * from chefs";
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
 
  <div class="container text-white ">
  <h1 class="mt-5 p-5 text-center text-warning fst-italic">Chefs</h1>

        <a href="admin_new_chef.php"><button class="text-white bg-warning rounded fw-bold">+ New Chef</button></a>
        <div class="table-responsive">
            <table class="table text-white my-sm-5">
                <thead>
                    <tr style="background-color: #ffc107;">
                    <th scope="col">Chef_name</th>
                        <th scope="col">Chef_id</th>
                        <th scope="col">Exprience</th>
                        <th scope="col">Specialist</th>
                        <th scope="col">Chef_pic</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Activate</th>
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
                        <td style="height: 10%;width:10%"> <img src="Chefs_image/<?php echo $b[4]; ?>" alt="" class="rounded-circle" style="height: 50%;width:50%"></td>
                        <td><?php echo $b[5]; ?></td>
                        <td><a href="edit_chefs.php?id=<?php echo $b[1]; ?>"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td><a href="remove_chef.php?id=<?php echo $b[1]; ?>"><i class="fa-solid fa-trash"></i></a></td>
                       <?php if ($b[5] == "Active") {?>
                <td> <a href="admin_deactivate_chef.php?id=<?php echo $b[1]; ?>"><button class="btn btn-warning" style="width:100px">Deactivate</button></a>
                </td>
            <?php
            } else if ($b[5] == "Not Active") {
            ?>
                <td> <a href="admin_activate_chef.php?id=<?php echo $b[1]; ?>"><button class="btn btn-warning" style="width:100px">Activate</button></a>
                </td>
            <?php
            } else if($b[5]=="Delete") {
            ?>
                <td> <a href="admin_reactivate_deleted_chef.php?id=<?php echo $b[1]; ?>"><button class="btn btn-warning" style="width:100px">Reactivate</button></a>
                </td>
            <?php
            }
            ?>
                    </tr>
                    <?php
            }
                    ?>
                </tbody>
            </table>
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