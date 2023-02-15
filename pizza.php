<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="
background-image: url('img/bg_4.jpg'); 
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
  <?php
  include_once('nav.php')
  ?>
  <div class="container mt-5">
    <div class="row mx-5 p-4">
      <div class="col-md-6 col-12">
        <img src="img/pizza-1.jpg" class="img-fluid">
      </div>
      <div class="col-md-6 col-12 text-white">
        <div class="row float-start">
          <h2 class="text-warning">Italian pizza</h2>
          <p>This pizza is very delicious.A hugely popular margherita, with a deliciously tangy single cheese topping</p>
          <p> Price: $20</p>
          <p> on Dicount 50% use the coupon code</p>
          <p> Size of pizza:</p>
          <p>
            <input type="radio" class="">Small
            <input type="radio" class="">Medium
            <input type="radio" class="">Large
          </p>
          <p>
            Select Extra Ingredients:
          </p>
          
         <div class="d-flex p-2">
            <div class="mx-2">Cheese:</div>
            <div class=" d-flex">
              
              <div><input type="button" value="-"></div>
              <div class="mx-2"> 1 </div>
              <div><input type="button" value="+"></div>
            </div>
          </div><br>
          <div class="d-flex p-2">
            <div class="mx-2">Tamato:</div>
            <div class=" d-flex">
              
              <div><input type="button" value="-"></div>
              <div class="mx-2"> 1 </div>
              <div><input type="button" value="+"></div>
            </div>
          </div><br>
          <div class="d-flex p-2">
            <div class="mx-2">Onion:</div>
            <div class="d-flex">
              
              <div><input type="button" value="-"></div>
              <div class="mx-2"> 1 </div>
              <div><input type="button" value="+"></div>
            </div>
          </div>
          <a href="cart.php"><input type="button" value="Add Cart" class="btn btn-warning w-100"></a>
        </div>
      </div>
    </div>
  </div>
  <?php
  include_once('footer.php');
  ?>
</body>

</html>