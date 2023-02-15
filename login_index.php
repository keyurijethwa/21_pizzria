<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" , shrink-to-fit="">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="font/css/all.css">
</head>

<body style="background-image: url('img/bg_1.jpg');">
  <?php
    include_once('login_nav.php')
  ?>

  <!-- slider -->
  <div id="carouselExampleCaptions" class="carousel slide pt-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row p-5">
          <div class="col-lg-6 col-md-6 col-sm-12 px-5">
            <img src="img/bg_1.png" class="d-block w-100 img-fluid" alt="...">
          </div>
        </div>
        <div class=" col-lg-6 col-md-6 col-sm-12 text-end top-50 my-auto mx-auto carousel-caption d-none d-md-block">
          <h2 class="">Italian Cuizine</h2>
          <p class="fs-2">our food is so testy try it.</p>
        </div>
        <div class=" mx-auto carousel-caption d-sm-block d-md-none">
          <h2 class="text-warning ">Italian Cuizine</h2>
          <p class="fs-2">our food is so testy try it.</p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row d-flex p-5">
          <div class="col-lg-6 col-md-6 col-sm-12 px-5">
            <img src="img/bg_2.png" class="d-block w-100 img-fluid" alt="...">
          </div>
          <div class=" col-lg-6 col-md-6 col-sm-12  text-end top-50 my-auto  carousel-caption d-none d-md-block">
            <h2>Italian Pizza</h2>
            <p class="fs-2">Choose as per your test</p>
          </div>
          <div class=" mx-auto carousel-caption d-sm-block d-md-none">
            <h2>Italian Pizza</h2>
            <p class="fs-2">Choose as per your test</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/bg_3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption  d-block centered mt-5">
          <h1>WELCOME Pizzria</h1>
          <p class="fs-2">Delicious,tasty pizza</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- slider end -->

  <!--blog-->
  <section class="ftco-section " style="background-image: url('img/bg_4.jpg');background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;">
    <div class=" container-fluid text-white p-5 ">
      <div class="row justify-content-center mb-5 pb-3 ">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Read our blog</h2>
          <p>Read our blog and once try our Delicious pizza</p>
        </div>
      </div>
      <div class="row d-flex ">
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry ">
            <a href="home.php">
              <img src="img/image_3.jpg" alt="" height="40%" width="70%">
            </a>
            <div class="text py-4 d-block">
              <div class="meta">
                <div><a href="#"><i class="fa-solid fa-calendar-days"></i>Sept 10, 2018</a></div>
                <div><a href="#"> <i class="fa-solid fa-person"></i> Admin</a></div>
                <div><a href="#" class="meta-chat"><i class="fa-solid fa-message"></i> 3</a></div>
              </div>
              <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="home.php">
              <img src="img/image_5.jpg" alt="" height="40%" width="70%">
            </a>
            <div class="text py-4 d-block">
              <div class="meta">
                <div><a href="#"><i class="fa-solid fa-calendar-days"></i>Sept 10, 2018</a></div>
                <div><a href="#"><i class="fa-solid fa-person"></i> Admin</a></div>
                <div><a href="#" class="meta-chat"><i class="fa-solid fa-message"></i> 3</a></div>
              </div>
              <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="home.php">
              <img src="img/image_6.jpg" alt="" height="40%" width="70%">
            </a>
            <div class="text py-4 d-block">
              <div class="meta">
                <div><a href="#"><i class="fa-solid fa-calendar-days"></i>Sept 10, 2018</a></div>
                <div><a href="#"><i class="fa-solid fa-person"></i> Admin</a></div>
                <div><a href="#" class="meta-chat"><i class="fa-solid fa-message"></i> 3</a></div>
              </div>
              <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="home.php">
              <img src="img/image_3.jpg" alt="" height="40%" width="70%">
            </a>
            <div class="text py-4 d-block">
              <div class="meta">
                <div><a href="#"> <i class="fa-solid fa-calendar-days"></i>Sept 10, 2018</a></div>
                <div><a href="#"> <i class="fa-solid fa-person"></i> Admin</a></div>
                <div><a href="#" class="meta-chat"><i class="fa-solid fa-message"></i> 3</a></div>
              </div>
              <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="home.php">
              <img src="img/image_5.jpg" alt="" height="40%" width="70%">
            </a>
            <div class="text py-4 d-block">
              <div class="meta">
                <div><a href="#"> <i class="fa-solid fa-calendar-days"></i> Sept 10, 2018</a></div>
                <div><a href="#"> <i class="fa-solid fa-person"></i> Admin</a></div>
                <div><a href="#" class="meta-chat"><i class="fa-solid fa-message"></i> 3</a></div>
              </div>
              <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="home.php">
              <img src="img/image_6.jpg" alt="" height="40%" width="70%">
            </a>
            <div class="text py-4 d-block">
              <div class="meta">
                <div><a href="#"><i class="fa-solid fa-calendar-days"></i> Sept 10, 2018</a></div>
                <div><a href="#"><i class="fa-solid fa-person"></i>Admin</a></div>
                <div><a href="#" class="meta-chat"><i class="fa-solid fa-message"></i> 3</a></div>
              </div>
              <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="container-fluid">
      <div class="row">
         <h2 class=" text-center text-light">Read our blog</h2>
        <p class="text-center text-light">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        <div class=" container mx-5">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xxl-4">
              <div class="card" style="width: 18rem;">
                <img src="img/image_5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xxl-4">
              <div class="card" style="width: 18rem;">
                <img src="img/image_5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xxl-4">
              <div class="card" style="width: 18rem;">
                <img src="img/image_5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xxl-4">

            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xxl-4">

            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xxl-4">

            </div>
          </div>
        </div>
      </div>
    </div>
    <!--blog end  -->
    <!-- cards 6  -->
    <!-- <div class="container-fluid mx-5">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" ;>
          <div class="card" style="width: 18rem;">
            <img src="img/image_3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" ;>
          <div class="card" style="width: 18rem;">
            <img src="img/image_3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" ;>
          <div class="card" style="width: 18rem;">
            <img src="img/image_3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" ;>
          <div class="card" style="width: 18rem;">
            <img src="img/image_3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" ;>
          <div class="card" style="width: 18rem;">
            <img src="img/image_3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" ;>
          <div class="card" style="width: 18rem;">
            <img src="img/image_3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" ;>
          <div class="card" style="width: 18rem;">
            <img src="img/image_3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" ;>
          <div class="card" style="width: 18rem;">
            <img src="img/image_3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <?php
  include_once('footer.php');
  ?>
</body>

</html>