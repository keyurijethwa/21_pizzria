
<?php
include_once("database.php");
    $q = "SELECT * FROM offers WHERE Status='Active'";
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
<body  style="
background-image: url('img/bg_4.jpg'); min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
<?php
    include_once('guest_nav.php')
  ?>
    <!-- offers -->
    <div class="menu">
        <img src="img/bg_3.jpg" class="img-fluid" alt="...">
        <div class="centered">
            <h1>OFFERS</h1>
            <a href="home.html">HOME</a> <span> OFFERS</span>
        </div>
    </div>

    <h1 class="fs-1 text-warning p-5 fst-italic text-center">Best offers for you</h1>
    <?php
    while ($a = mysqli_fetch_array($result)) {
    ?>

    <div class="">
            <div class="container text-white text-center" >
        <div class="row mb-5">
            <div class="col-md-6 col-12">
                <img src="offer_image/<?php echo $a[7]?>" alt="">
            </div>
            <div class="col-md-6 col-12 ">
                <div class="d-block justify-content-center">
                <h3 class="fs-4 bg-warning rounded p-2"> <?php echo $a[0]?></h3>
                    <P class="fs-4"> Offer Start:<?php echo $a[2]?></P>
                    <P class="fs-4"> Offer End:<?php echo $a[3]?></P>
                    <P class="fs-4">  Coupon Code:<?php echo $a[5]?></P>
                    <P class="fs-4"> Discount:<?php echo $a[4]?></P>
                    <P class="fs-4"> <?php echo $a[6]?></P>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
    }
    ?>
    <!-- offer end -->
    <?php
  include_once('footer.php');
  ?>
</body>
</html>