<!-- navbar -->
<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[2];
echo $first_part;
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
  
  <style>
    .navbar-nav .nav-item .nav-link:hover{
        background-color: #ffc107;
        color: white;
        border-radius: 10px;
    }
    .navbar-nav .nav-item .active1{
        color: #ffc107;
    }
  </style>
</head>
<body>
    

<div class="e my-5">
    <div class="row ">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark  fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img class="logo" src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon text"></span>
                </button>
                <div class="collapse text navbar-collapse  justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item px-3">
                            <a class="nav-link <?php if ($first_part == "index.php") {
                                                    echo "active1";
                                                } ?>" href="home.php"> Home</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link <?php if ($first_part == "menu.php") {
                                                    echo "active1";
                                                } ?>" href="menu.php"> Menu</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link <?php if ($first_part == "offer.php") {
                                                    echo "active1";
                                                } ?>" href="offer.php"> Offer</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link <?php if ($first_part == "chef.php") {
                                                    echo "active1";
                                                } ?>" href="chef.php"> Chefs</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link <?php if ($first_part == "contact.php") {
                                                    echo "active1";
                                                } ?>" href="contact.php"> Contact Us</a>
                        </li>

                        <li class="nav-item px-3">
                            <a class="nav-link <?php if ($first_part == "item.php") {
                                                    echo "active1";
                                                } ?>" href="item.php">Items</a>
                        </li>
                       <li class="nav-item px-3">
                            <a class="nav-link <?php if ($first_part == "my_order.php") {
                                                    echo "active1";
                                                } ?>" href="my_order.php">My Order</a>
                        </li>
                    </ul>
                </div>
                <form class="d-flex">
                    <div class="form-group has-search">
                        <input type="text" list="datalistOptions" class="form-control" placeholder="Search">
                        <datalist id="datalistOptions">
                            <option value="Italian Pizza">
                            <option value="Hawaiian Pizza">
                            <option value="Greek Pizza">
                            <option value="Bacon Crispy Thins">
                            <option value="Hawaiian Special">
                            <option value="Ultimate Overload">
                            <option value="Bacon Pizza">
                            <option value="Ham & Pineapple">
                        </datalist>
                    </div>
                    <div class="mx-3 nav-item"><a class="nav-link  <?php if ($first_part == "cart.php") {
                                                    echo "active1";
                                                } ?>" href="cart.php"> <i class="fa-solid fa-cart-shopping icon fa-2xl"></i></a></div>
                    <div class="mx-3 nav-item"><a class="nav-link  <?php if ($first_part == "my_profile.php") {
                                                    echo "active1";
                                                } ?>" href="my_profile.php"><i class="fa-solid fa-user fa-2xl icon"></i></a></div>
                </form>

            </div>
        </nav>
    </div>
</div>
<!-- navbar end -->

<script src="css/Bootstrap/js/popper.min.js"></script>
  <script src="css/Bootstrap/js/bootstrap.min.js"></script>
  <script src="css/Bootstrap/js/jquery.min.js"></script>
</body>
</html>