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
    include_once('nav.php')
  ?>
    <!-- offers -->
    <div class="menu">
        <img src="img/bg_3.jpg" class="img-fluid" alt="...">
        <div class="centered">
            <h1>OFFERS</h1>
            <a href="home.html">HOME</a> <span> OFFERS</span>
        </div>
    </div>

    <div class="">
            <div class="container text-white text-center" >
        <h1 class="fs-1 text-warning p-5 fst-italic">Best offers for you</h1>
        <div class="row mb-5">
            <div class="col-md-6 col-12">
                <img src="img/food-menu.webp" alt="">
            </div>
            <div class="col-md-6 col-12 ">
                <div class="d-block justify-content-center">
                <P class="fs-4"> Week offer</P>
                    <P class="fs-4"> Date:14-15 apr ,2023</P>
                    <P class="fs-4">  Coupon Code:STR903JK8</P>
                    <P class="fs-4"> Discount:50%</P>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- offer end -->
    <?php
  include_once('footer.php');
  ?>
</body>
</html>