<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[3];
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
    .nav-item .active1{
        color: #ffc107;
    }
    .icon{
    color:#ffc107 ;
  }
  </style>
</head>
<body>
    

<div class="container">
    <div class="row ">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark  fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img class="logo" src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon text"></span>
                </button>
                <div class="collapse text navbar-collapse  justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                    <li class="nav-item px-3">
                            <a class="nav-link <?php if ($first_part == "admin_users.php") {
                                                    echo "active1";
                                                } ?>" href="admin_users.php"> Users</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link <?php if ($first_part == "admin_menu.php") {
                                                    echo "active1";
                                                } ?>" href="admin_menu.php"> Menu</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link <?php if ($first_part == "admin_offer.php") {
                                                    echo "active1";
                                                } ?>" href="admin_offer.php"> Offer</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link <?php if ($first_part == "admin_chef.php") {
                                                    echo "active1";
                                                } ?>" href="admin_chef.php"> Chefs</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link <?php if ($first_part == "admin_item.php") {
                                                    echo "active1";
                                                } ?>" href="admin_item.php">Items</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link <?php if ($first_part == "admin_orders.php") {
                                                    echo "active1";
                                                } ?>" href="admin_orders.php"> Orders</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link <?php if ($first_part == "admin_message.php") {
                                                    echo "active1";
                                                } ?>" href="admin_message.php">Messages</a>
                        </li>
                    </ul>
                </div>
                <form class="d-flex">
                    
                    <div class="mx-3 nav-item"><a class="nav-link icon <?php if ($first_part == "admin_profile.php") {
                                                    echo "active1";
                                                } ?>" href="admin_profile.php"><i class="fa-solid fa-user fa-2xl icon"></i></a></div>
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