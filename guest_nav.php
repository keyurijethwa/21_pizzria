<!-- navbar -->
<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzria</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="font/css/all.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .navbar-nav .nav-item .nav-link:hover{
        background-color: #ffc107;
        color: white;
        border-radius: 10px;
    }
    .nav-item .active1{
        color: #ffc107;
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
                            <a class="nav-link <?php if ($first_part == "index.php") {
                                                    echo "active1";
                                                } ?>" href="index.php"> Home</a>
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
                            <a class="nav-link <?php if ($first_part == "login.php") {
                                                    echo "active1";
                                                } ?>" href="login.php">Login</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link <?php if ($first_part == "registration.php") {
                                                    echo "active1";
                                                } ?>" href="registration.php">Register</a>
                        </li>
                    </ul>
                </div>
               

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