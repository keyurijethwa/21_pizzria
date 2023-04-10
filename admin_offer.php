<?php
include_once('database.php');
$q = "select * from offers";
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
  <h1 class="mt-5 p-5 text-center text-warning fst-italic">Offers</h1>
    <a href="admin_new_offer.php"><button class="text-white bg-warning rounded fw-bold">+ New Offer</button></a>
    <div class="table-responsive">
      <table class="table text-white my-sm-5">
        <thead>
          <tr style="background-color: #ffc107;">
            <th scope="col">Offer_name</th>
            <th scope="col">Offer_id</th>
            <th scope="col">Srt_date</th>
            <th scope="col">End_date</th>
            <th scope="col">Description</th>
            <th scope="col">Coupon_code</th>
            <th scope="col">Discount</th>
            <th scope="col">Templete</th>
            <th scope="col">Status</th>
            <th scope="col">Edit</th>
            <th scope="col">Remove</th>
            <th scope="col">Activation</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($b = mysqli_fetch_array($result)) {
          ?>
            <tr>
              <td><?php echo $b[0]?></td>
              <td><?php echo $b[1]?></td>
              <td><?php echo $b[2]?></td>
              <td><?php echo $b[3]?></td>
              <td><?php echo $b[4]?></td>
              <td><?php echo $b[5]?></td>
              <td><?php echo $b[6]?></td>
              <td><img src="offer_image/<?php echo $b[7]?>" alt="" height="50%" width="50%"></td>
              <td><?php echo $b[8]; ?></td>
              <td><a href="edit_offer.php?id=<?php echo $b[1]; ?>"><i class="fa-regular fa-pen-to-square"></i></a></td>
              <td scope="row"><a href="remove_offer.php?id=<?php echo $b[1]; ?>"><i class="fa-solid fa-trash"></i></a></td>
              <?php if ($b[8] == "Active") {?>
                <td> <a href="admin_deactivate_offer.php?id=<?php echo $b[1]; ?>"><button class="btn btn-warning" style="width:100px">Deactivate</button></a>
                </td>
            <?php
            } else if ($b[8] == "Not Active") {
            ?>
                <td> <a href="admin_activate_offer.php?id=<?php echo $b[1]; ?>"><button class="btn btn-warning" style="width:100px">Activate</button></a>
                </td>
            <?php
            } else if($b[8]=="Delete") {
            ?>
                <td> <a href="admin_reactivate_deleted_offer.php?id=<?php echo $b[1]; ?>"><button class="btn btn-warning" style="width:100px">Reactivate</button></a>
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