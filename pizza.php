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
  include_once('login_nav.php')
  ?>
  <div class="container mt-5">
    <div class="row mx-5 p-4">
      <div class="col-md-6 col-12">
        <img src="img/pizza-1.jpg" class="img-fluid  shadow p-1 mb-5 bg-dark rounded accordion ">
      </div>
      <div class="col-md-6 col-12 text-white">
        <div class="row float-start">
          <h2 class="text-warning">Italian pizza</h2>
          <p>This pizza is very delicious.A hugely popular margherita, with a deliciously tangy single cheese topping</p>
          <p class="text-warning fs-5 m-2"> Price</p><p class="mx-2">$20</p> 
          <p class="mx-2 fs-4"> On Dicount 50% use the coupon code</p>
          <p class="text-warning fs-5 m-2 mb-3"> Size of pizza:</p>
          <Div class="d-flex">
          <input type="radio" class="m-2">Small
          <input type="radio" class="m-2">Medium
          <input type="radio" class="m-2">Larger
          </Div>
          <br>
          <p class="text-warning m-2 fs-5">
            Select Extra Ingredients:
          </p>
          
         <div class="d-flex p-2">
            <div class="m-2 ">Cheese:</div>
            <div class=" d-flex">
              
              <div><input type="button" value="-" class="m-2"></div>
              <div class="mx-2"> 1 </div>
              <div><input type="button" value="+" class="m-2"></div>
            </div>
          </div><br>
          <div class="d-flex p-2">
            <div class="m-2">Tamato:</div>
            <div class=" d-flex">
              
              <div><input type="button" value="-"  class="m-2"></div>
              <div class="mx-2"> 1 </div>
              <div><input type="button" value="+"  class="m-2"></div>
            </div>
          </div><br>
          <div class="d-flex p-2">
            <div class="m-2"> Onion: </div>
            <div class="d-flex">
              
              <div><input type="button" value="-"  class="m-2"></div>
              <div class="mx-2"> 1 </div>
              <div><input type="button" value="+"  class="m-2"></div>
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