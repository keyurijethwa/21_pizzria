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

    <div class="container  ">
        <!-- nav -->

        <nav class="navbar navbar-expand-lg  bg-dark " style="background-attachment: fixed;">
            <div class="container text-white">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ">
                        <a class="nav-link active" href="#Italian">Italian Pizza</a>
                        <a class="nav-link" href="#Special">Hawaiian Special</a>
                        <a class="nav-link" href="#Hawaiian">Hawaiian Pizza</a>
                        <a class="nav-link " href="#Greek">Greek Pizza</a>
                        <a class="nav-link " href="#Ultimate">Ultimate Overload</a>
                        <a class="nav-link " href="#Bacon">Bacon Pizza</a>
                        <a class="nav-link" href="#Crispy">Bacon Crispy Thins</a>
                        <a class="nav-link " href="#Ham">Ham & Pineapple</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- nav end -->
        <div >
            <div id="Italian">
                <H2 class="text-warning text-center mt-5 fst-italic">Italian pizza</H2>
                <div class="row text-white mt-5">
                    <div class="col-md-6 col-lg-3 col-12 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/i-1.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Italian pizza</h5>
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
                            <img src="img/i-2.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Italian pizza</h5>
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
                            <img src="img/i-3.jpeg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Italian pizza</h5>
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
                            <img src="img/i-4.jpg" class="card-img-top" alt="..." height="70%" width="70%">
                            <div class="card-body">
                                <h5 class="card-title">Italian pizza</h5>
                                <p class="card-text">Choose your favourite pizza pasta from the Domino's pasta menu. Get with your choice with tikka masala, cheesy jalapeno and more.</p>
                                <p> with olives ,capsicum and tamato</p>
                                <p>
                                <h6>Price:</h6>$20</p>
                                <a href="pizza.php" class="btn btn-warning">Add Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="Special">
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
            </div>


            <div id="Hawaiian">
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
            </div>


            <div id="Greek">
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
            </div>

            <div id="Ultimate" class="">
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
            </div>

            <div id="Bacon ">
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
            </div>

            <div id="Crispy">
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
            </div>

            <div id="Ham" class="mb-5">
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
            </div>
        </div>
    </div>


    <?php
    include_once('footer.php');
    ?>
</body>

</html>