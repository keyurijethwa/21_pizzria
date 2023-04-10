<?php
include_once("database.php");
$q = "SELECT * FROM item WHERE Status='Active'and menu_id=1120001";
$result = mysqli_query($con, $q);
$q1 = "SELECT * FROM item WHERE Status='Active'and menu_id=1120005";
$result1 = mysqli_query($con, $q1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .navbar-nav .nav-link:hover {
            color: #ffc107;
        }

        .navbar-nav .nav-link {
            color: white;
            text-align: center;
        }
    </style>
</head>

<body style="
background-image: url('img/bg_4.jpg'); 
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
    <?php
    include_once('login_nav.php');
    ?>

    <div class="container  mb-5">
        <!-- nav -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link text-warning active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Italian Pizza</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-warning" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Hawaiian Special</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-warning" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
            </li>
        </ul>
        <!-- nav end -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row text-white mt-5">
                    <?php
                    while ($a = mysqli_fetch_array($result)) {
                    ?>
                        <div class="col-md-6 col-lg-3 col-12 ">
                            <div class="card" style="width: 18rem;">
                                <img src="item_image/<?php echo $a[5]; ?>" class="card-img-top" alt="..." height="70%" width="70%">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $a[0]; ?></h5>
                                    <p class="card-text"><?php echo $a[3]; ?></p>
                                    <p> <?php echo $a[4]; ?></p>
                                    <p>
                                    <h6>Price:</h6>$<?php echo $a[2]; ?></p>
                                    <a href="pizza.php?id=<?php echo $a[1]; ?>" class="btn btn-warning">Add Cart</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row text-white mt-5">
                    <?php
                    while ($a1 = mysqli_fetch_array($result1)) {
                    ?>
                        <div class="col-md-6 col-lg-3 col-12 ">
                            <div class="card" style="width: 18rem;">
                                <img src="item_image/<?php echo $a1[5]; ?>" class="card-img-top" alt="..." height="70%" width="70%">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $a1[0]; ?></h5>
                                    <p class="card-text"><?php echo $a1[3]; ?></p>
                                    <p> <?php echo $a1[4]; ?></p>
                                    <p>
                                    <h6>Price:</h6>$<?php echo $a1[2]; ?></p>
                                    <a href="pizza.php?id=<?php echo $a1[1]; ?>" class="btn btn-warning">Add Cart</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row text-white mt-5">
                    <?php
                    while ($a2 = mysqli_fetch_array($result2)) {
                    ?>
                        <div class="col-md-6 col-lg-3 col-12 ">
                            <div class="card" style="width: 18rem;">
                                <img src="item_image/<?php echo $a2[5]; ?>" class="card-img-top" alt="..." height="70%" width="70%">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $a2[0]; ?></h5>
                                    <p class="card-text"><?php echo $a2[3]; ?></p>
                                    <p> <?php echo $a2[4]; ?></p>
                                    <p>
                                    <h6>Price:</h6>$<?php echo $a2[2]; ?></p>
                                    <a href="pizza.php?id=<?php echo $a2[1]; ?>" class="btn btn-warning">Add Cart</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- <div id="Special">
                <H2 class="text-warning text-center mt-5 fst-italic">Hawaiian Special</H2>
                <div class="row text-white mt-5">
                    <div class="col-md-6 col-lg-3 col-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/hs-1.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Hawaiian Special</h5>
                                <p class="card-text">A delight for veggie lovers! Choose from our wide range of delicious vegetarian pizzas, it's softer and tastier</p>
                                <p> with olives and basil leaves</p>
                                <p>
                                <h6>Price:</h6>$20</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/hs-2.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Hawaiian Special</h5>
                                <p class="card-text">A hugely popular margherita, with a deliciously tangy single cheese topping with mozzarella large in size</p>
                                <p> with olives ,onion and tamato</p>
                                <p>
                                <h6>Price:</h6>$15</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/hs-3.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Hawaiian Special</h5>
                                <p class="card-text">Some quick delivery in Pizzria and sweet food of Pizzria's pizza.with large in size and with extra cheese order now</p>
                                <p> with olives ,capsicum and tamato</p>
                                <p>
                                <h6>Price:</h6>$35</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/hs-4.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Hawaiian Special</h5>
                                <p class="card-text">Choose your favourite pizza pasta from the Domino's pasta menu. Get with your choice with tikka masala, cheesy jalapeno and more.</p>
                                <p> with olives ,capsicum and tamato</p>
                                <p>
                                <h6>Price:</h6>$20</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->


        <!-- <div id="Hawaiian">
                <div>
                    <H2 class="text-warning text-center mt-5 fst-italic">Hawaiian Pizza</H2>
                </div>
                <div class="row text-white mt-5">
                    <div class="col-md-6 col-lg-3 col-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/h-1.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Hawaiian Pizza</h5>
                                <p class="card-text">A delight for veggie lovers! Choose from our wide range of delicious vegetarian pizzas, it's softer and tastier</p>
                                <p> with olives and basil leaves</p>
                                <p>
                                <h6>Price:</h6>$20</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/h-2.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Hawaiian Pizza</h5>
                                <p class="card-text">A hugely popular margherita, with a deliciously tangy single cheese topping with mozzarella large in size</p>
                                <p> with olives ,onion and tamato</p>
                                <p>
                                <h6>Price:</h6>$15</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/h-3.jpg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Hawaiian Pizza</h5>
                                <p class="card-text">Some quick delivery in Pizzria and sweet food of Pizzria's pizza.with large in size and with extra cheese order now</p>
                                <p> with olives ,capsicum and tamato</p>
                                <p>
                                <h6>Price:</h6>$35</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/h-4.jpg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Hawaiian Pizza</h5>
                                <p class="card-text">Choose your favourite pizza pasta from the Domino's pasta menu. Get with your choice with tikka masala, cheesy jalapeno and more.</p>
                                <p> with olives ,capsicum and tamato</p>
                                <p>
                                <h6>Price:</h6>$20</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->


        <!-- <div id="Greek">
                <H2 class="text-warning text-center mt-5 fst-italic">Greek Pizza</H2>
                <div class="row text-white mt-5">
                    <div class="col-md-6 col-lg-3 col-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/g-1.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Greek pizza</h5>
                                <p class="card-text">A delight for veggie lovers! Choose from our wide range of delicious vegetarian pizzas, it's softer and tastier</p>
                                <p> with olives and basil leaves</p>
                                <p>
                                <h6>Price:</h6>$20</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/g-2.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Greek pizza</h5>
                                <p class="card-text">A hugely popular margherita, with a deliciously tangy single cheese topping with mozzarella large in size</p>
                                <p> with olives ,onion and tamato</p>
                                <p>
                                <h6>Price:</h6>$15</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/g-3.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Greek Pizza</h5>
                                <p class="card-text">Some quick delivery in Pizzria and sweet food of Pizzria's pizza.with large in size and with extra cheese order now</p>
                                <p> with olives ,capsicum and tamato</p>
                                <p>
                                <h6>Price:</h6>$35</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/g-4.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Greek Pizza</h5>
                                <p class="card-text">Choose your favourite pizza pasta from the Domino's pasta menu. Get with your choice with tikka masala, cheesy jalapeno and more.</p>
                                <p> with olives ,capsicum and tamato</p>
                                <p>
                                <h6>Price:</h6>$20</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        <!-- <div id="Ultimate" class="">
                <H2 class="text-warning text-center mt-5 fst-italic">Ultimate Overload</H2>
                <div class="row text-white mt-5">
                    <div class="col-md-6 col-lg-3 col-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/u-1.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Ultimate Overload pizza</h5>
                                <p class="card-text">A delight for veggie lovers! Choose from our wide range of delicious vegetarian pizzas, it's softer and tastier</p>
                                <p> with olives and basil leaves</p>
                                <p>
                                <h6>Price:</h6>$20</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/u-2.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Ultimate Overload pizza</h5>
                                <p class="card-text">A hugely popular margherita, with a deliciously tangy single cheese topping with mozzarella large in size</p>
                                <p> with olives ,onion and tamato</p>
                                <p>
                                <h6>Price:</h6>$15</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/u-3.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Ultimate Overload pizza</h5>
                                <p class="card-text">Some quick delivery in Pizzria and sweet food of Pizzria's pizza.with large in size and with extra cheese order now</p>
                                <p> with olives ,capsicum and tamato</p>
                                <p>
                                <h6>Price:</h6>$35</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/u-4.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Ultimate Overload pizza</h5>
                                <p class="card-text">Choose your favourite pizza pasta from the Domino's pasta menu. Get with your choice with tikka masala, cheesy jalapeno and more.</p>
                                <p> with olives ,capsicum and tamato</p>
                                <p>
                                <h6>Price:</h6>$20</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        <!-- <div id="Bacon ">
                <H2 class="text-warning text-center mt-5 fst-italic">Bacon Pizza</H2>
                <div class="row text-white mt-5">
                    <div class="col-md-6 col-lg-3 col-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/b-1.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Bacon Pizza</h5>
                                <p class="card-text">A delight for veggie lovers! Choose from our wide range of delicious vegetarian pizzas, it's softer and tastier</p>
                                <p> with olives and basil leaves</p>
                                <p>
                                <h6>Price:</h6>$20</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/b-2.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Bacon Pizza</h5>
                                <p class="card-text">A hugely popular margherita, with a deliciously tangy single cheese topping with mozzarella large in size</p>
                                <p> with olives ,onion and tamato</p>
                                <p>
                                <h6>Price:</h6>$15</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/b-3.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Bacon Pizza</h5>
                                <p class="card-text">Some quick delivery in Pizzria and sweet food of Pizzria's pizza.with large in size and with extra cheese order now</p>
                                <p> with olives ,capsicum and tamato</p>
                                <p>
                                <h6>Price:</h6>$35</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/b-4.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Bacon Pizza</h5>
                                <p class="card-text">Choose your favourite pizza pasta from the Domino's pasta menu. Get with your choice with tikka masala, cheesy jalapeno and more.</p>
                                <p> with olives ,capsicum and tamato</p>
                                <p>
                                <h6>Price:</h6>$20</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        <!-- <div id="Crispy">
                <H2 class="text-warning text-center mt-5 fst-italic">Bacon Crispy Thins</H2>
                <div class="row text-white mt-5">
                    <div class="col-md-6 col-lg-3 col-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/bc-1.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Bacon Crispy Thins pizza</h5>
                                <p class="card-text">A delight for veggie lovers! Choose from our wide range of delicious vegetarian pizzas, it's softer and tastier</p>
                                <p> with olives and basil leaves</p>
                                <p>
                                <h6>Price:</h6>$20</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/bc-2.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Bacon Crispy Thins pizza</h5>
                                <p class="card-text">A hugely popular margherita, with a deliciously tangy single cheese topping with mozzarella large in size</p>
                                <p> with olives ,onion and tamato</p>
                                <p>
                                <h6>Price:</h6>$15</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/bc-3.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Bacon Crispy Thins pizza</h5>
                                <p class="card-text">Some quick delivery in Pizzria and sweet food of Pizzria's pizza.with large in size and with extra cheese order now</p>
                                <p> with olives ,capsicum and tamato</p>
                                <p>
                                <h6>Price:</h6>$35</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/bc-4.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Bacon Crispy Thins pizza</h5>
                                <p class="card-text">Choose your favourite pizza pasta from the Domino's pasta menu. Get with your choice with tikka masala, cheesy jalapeno and more.</p>
                                <p> with olives ,capsicum and tamato</p>
                                <p>
                                <h6>Price:</h6>$20</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        <!-- <div id="Ham" class="mb-5">
                <H2 class="text-warning text-center mt-5 fst-italic">Ham & Pineapple</H2>
                <div class="row text-white mt-5">
                    <div class="col-md-6 col-lg-3 col-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/p-1.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Ham & Pineapple pizza</h5>
                                <p class="card-text">A delight for veggie lovers! Choose from our wide range of delicious vegetarian pizzas, it's softer and tastier</p>
                                <p> with olives and basil leaves</p>
                                <p>
                                <h6>Price:</h6>$20</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/p-2.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Ham & Pineapple pizza</h5>
                                <p class="card-text">A hugely popular margherita, with a deliciously tangy single cheese topping with mozzarella large in size</p>
                                <p> with olives ,onion and tamato</p>
                                <p>
                                <h6>Price:</h6>$15</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/p-3.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Ham & Pineapple pizza</h5>
                                <p class="card-text">Some quick delivery in Pizzria and sweet food of Pizzria's pizza.with large in size and with extra cheese order now</p>
                                <p> with olives ,capsicum and tamato</p>
                                <p>
                                <h6>Price:</h6>$35</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/p-4.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Ham & Pineapple pizza</h5>
                                <p class="card-text">Choose your favourite pizza pasta from the Domino's pasta menu. Get with your choice with tikka masala, cheesy jalapeno and more.</p>
                                <p> with olives ,capsicum and tamato</p>
                                <p>
                                <h6>Price:</h6>$20</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    </div>
    </div>


   

</body>

</html>

<?php
    include_once('footer.php');
    ?>