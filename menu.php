<?php
include_once("database.php");
$q = "SELECT * FROM MENU WHERE Status='Active'";
$result = mysqli_query($con, $q);
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
  include_once('guest_nav.php')
  ?>

  <!-- menu  -->
  <div class="menu">
    <img src="img/bg_3.jpg" class="img-fluid" alt="...">
    <div class="centered">
      <h1>OUR MENU</h1>
      <a href="home.html">HOME</a> <span> MENU</span>
    </div>
  </div>
  <div class="menu p-5">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section  text-center">
          <h2 class="mb-4 fst-italic text-warning">Our Menu</h2>
                </div>
      </div>
    </div>
  </div>


  <div class="row text-white pb-4">
    <?php
    while ($a = mysqli_fetch_array($result)) {
    ?>
      <div class="col-lg-6 col-md-6 col-sm-12 text-white">

        <div class="pricing-entry px-5 py-2 d-flex  rounded-circle">
          <img src="Menu_image/<?php echo $a[4]; ?>" alt="" class="rounded-circle">
          <div class="desc  px-2">
            <div class="d-flex text align-items-center">
              <h5><span></span><?php echo $a[0]; ?></h5>
              <span class="price dot">................... $<?php echo $a[2]; ?></span>
            </div>
            <div class="d-block">
              <p><?php echo $a[3]; ?></p>
            </div>
          </div>
        </div>

      </div>
      
    <?php
    }
    ?>
  </div>


  <!-- menu end -->

  <?php
  include_once('footer.php');
  ?>
</body>

</html>