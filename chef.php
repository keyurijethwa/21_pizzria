<?php
include_once("database.php");
$q = "SELECT * FROM chefs WHERE Status='Active'";
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
    <!-- chefs -->

    <div class="menu">
        <img src="img/bg_3.jpg" class="img-fluid" alt="...">
        <div class="centered">
            <h1>ABOUT CHEFS</h1>
            <a href="home.html">HOME</a> <span> CHEF</span>
        </div>
    </div>

    <section class="ftco-section text-white py-5">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Chef</h2>
                </div>
            </div>
            <div class="row">
                <?php
                while ($a = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
                        <div class="staff ">
                            <div class="text-center"> <img class="rounded-circle" src="Chefs_image/<?php echo $a[4]; ?>" alt=""></div>
                            <div class="info text-center">
                                <h3><a href="teacher-single.html"><?php echo $a[0]; ?></a></h3>
                                <span class="position"><?php echo $a[3]; ?> Specialist</span>
                                <div class="text">
                                    <p><?php echo $a[0]; ?> chef has a <?php echo $a[2]; ?> exprice in making <?php echo $a[3]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>


    <section class="ftco-counter text-white ftco-bg-dark my-5 img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="chef"><i class="fa-solid fa-pizza-slice fa-5x"></i></div>
                                    <strong class="number" data-number="100">100</strong>
                                    <span>Pizza Branches</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="chef"><i class="fa-solid fa-award fa-5x"></i></div>
                                    <strong class="number" data-number="85">85</strong>
                                    <span>Number of Awards</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="chef"><i class="fa-solid fa-user-group fa-5x"></i></div>
                                    <strong class="number" data-number="10567">10567</strong>
                                    <span>Happy Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="chef"><i class="fa-solid fa-utensils fa-5x"></i></div>
                                    <strong class="number" data-number="900">900</strong>
                                    <span>Staff</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chef end -->

    <?php
    include_once('footer.php');
    ?>
</body>

</html>