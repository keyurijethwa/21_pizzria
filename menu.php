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
    include_once('nav.php')
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
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="row justify-content-center align-items-center">
        <div class="col-lg-4 col-sm-12 col-md-6 py-5">
        <div class="card " style="width: 18rem;">
          <img src="img/pizza-1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title ">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-dark text-white">An item</li>
            <li class="list-group-item bg-dark text-white">A second item</li>
            <li class="list-group-item bg-dark text-white">A third item</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
        </div>

        <div class="col-lg-4 col-sm-12 col-md-6 py-5">
        <div class="card " style="width: 18rem;">
          <img src="img/pizza-2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-dark text-white">An item</li>
            <li class="list-group-item bg-dark text-white">A second item</li>
            <li class="list-group-item bg-dark text-white">A third item</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
        </div>

        <div class="col-lg-4 col-sm-12 col-md-6 py-5">
        <div class="card " style="width: 18rem;">
          <img src="img/pizza-3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <ul class="list-group list-group-flush ">
            <li class="list-group-item bg-dark text-white">An item</li>
            <li class="list-group-item bg-dark text-white">A second item</li>
            <li class="list-group-item bg-dark text-white">A third item</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
        </div>
      </div>
  </div>


  <div class="container text-white mb-5">
    <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2 class="mb-4">Our Menu Pricing</h2>
        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
        <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div> -->

  <div class="row text-white pb-4">
    <div class="col-md-6">
      <div class="pricing-entry px-5 py-2 d-flex ftco-animate rounded-circle">
        <img src="img/pizza-1.jpg" alt="" class="rounded-circle">
        <div class="desc  px-2">
          <div class="d-flex text align-items-center">
            <h5><span>Italian Pizza </span></h5>
            <span class="price dot">$20.00</span>
          </div>
          <div class="d-block">
            <p>A small river named Duden flows by their place and supplies</p>
          </div>
        </div>
      </div>
      <div class="pricing-entry px-5 py-2 d-flex ftco-animate">
        <img src="img/pizza-2.jpg" alt="" class="rounded-circle">
        <div class="desc pl-3 px-2">
          <div class="d-flex text align-items-center">
            <h5><span>Hawaiian Pizza</span></h5>
            <span class="price dot">$29.00</span>
          </div>
          <div class="d-block">
            <p>A small river named Duden flows by their place and supplies</p>
          </div>
        </div>
      </div>
      <div class="pricing-entry px-5 py-2 d-flex ftco-animate">
        <img src="img/pizza-3.jpg" alt="" class="rounded-circle">
        <div class="desc pl-3 px-2">
          <div class="d-flex text align-items-center">
            <h5><span>Greek Pizza</span></h5>
            <span class="price dot">$20.00</span>
          </div>
          <div class="d-block">
            <p>A small river named Duden flows by their place and supplies</p>
          </div>
        </div>
      </div>
      <div class="pricing-entry px-5 py-2 d-flex ftco-animate">
        <img src="img/pizza-4.jpg" alt="" class="rounded-circle">
        <div class="desc  px-2">
          <div class="d-flex text align-items-center">
            <h5><span>Bacon Crispy Thins</span></h5>
            <span class="price dot">$20.00</span>
          </div>
          <div class="d-block">
            <p>A small river named Duden flows by their place and supplies</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="pricing-entry px-5 py-2 d-flex ftco-animate">
        <img src="img/pizza-5.jpg" alt="" class="rounded-circle">
        <div class="desc pl-3 px-2">
          <div class="d-flex text align-items-center">
            <h5><span>Hawaiian Special</span></h5>
            <span class="price dot">$49.91</span>
          </div>
          <div class="d-block">
            <p>A small river named Duden flows by their place and supplies</p>
          </div>
        </div>
      </div>
      <div class="pricing-entry px-5 py-2 d-flex ftco-animate">
        <img src="img/pizza-6.jpg" alt="" class="rounded-circle">
        <div class="desc pl-3 px-2">
          <div class="d-flex text align-items-center">
            <h5><span>Ultimate Overload</span></h5>
            <span class="price dot">$20.00</span>
          </div>
          <div class="d-block">
            <p>A small river named Duden flows by their place and supplies</p>
          </div>
        </div>
      </div>
      <div class="pricing-entry px-5 py-2 d-flex ftco-animate">
        <img src="img/pizza-7.jpg" alt="" class="rounded-circle">
        <div class="desc pl-3 px-2">
          <div class=" d-flex text align-items-center">
            <h5><span>Bacon Pizza</span></h5>
            <span class="price dot">$20.00</span>
          </div>
          <div class="d-block">
            <p>A small river named Duden flows by their place and supplies</p>
          </div>
        </div>
      </div>
      <div class="pricing-entry px-5 py-2 d-flex ftco-animate">
        <img src="img/pizza-8.jpg" alt="" class="rounded-circle">
        <div class="desc pl-3 px-2">
          <div class="d-flex text align-items-center">
            <h5><span>Ham &amp; Pineapple</span></h5>
            <span class="price dot">$20.00</span>
          </div>
          <div class="d-block">
            <p>A small river named Duden flows by their place and supplies</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- menu end -->

  <?php
  include_once('footer.php');
  ?>
</body>

</html>