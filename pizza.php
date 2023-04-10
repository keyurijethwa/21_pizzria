<?php
include_once("database.php");
$id = $_GET['id'];
$q = "SELECT * FROM item WHERE Status='Active'and item_id=$id";
$result = mysqli_query($con, $q);
?>
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
    <div class="row  p-4">
      <?php
      while ($a = mysqli_fetch_array($result)) {
      ?>
        <div class="col-md-6 col-12 justify-content-center">
          <img src="item_image/<?php echo $a[5]; ?>" class="img-fluid  shadow p-1 mb-5 bg-dark rounded accordion h-75 ">
        </div>
        <div class="col-md-6 col-12 text-white">
          <div class="row float-start">
            <h2 class="text-warning"></h2>
            <p><?php echo $a[3]; ?></p>
            <p class="text-warning fs-5 m-2"> Price</p>
            <p class="mx-2">$<?php echo $a[2]; ?></p>
            <p class="mx-2 fs-4"> Add Dicount use the coupon code</p>
            <p class="text-warning fs-5 m-2 mb-3"> Size of pizza:</p>
            <Div class="d-flex">
              <input type="radio" class="m-2" name="size">Small
              <input type="radio" class="m-2" name="size">Medium
              <input type="radio" class="m-2" name="size">Larger
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
                <p>$2</p>
              </div>
            </div><br>
            <div class="d-flex p-2">
              <div class="m-2">Tamato:</div>
              <div class=" d-flex">

                <div><input type="button" value="-" class="m-2"></div>
                <div class="mx-2"> 1 </div>
                <div><input type="button" value="+" class="m-2"></div>
                <p>$1</p>
              </div>
            </div><br>
            <div class="d-flex p-2">
              <div class="m-2"> Onion: </div>
              <div class="d-flex">

                <div><input type="button" value="-" class="m-2"></div>
                <div class="mx-2"> 1 </div>
                <div><input type="button" value="+" class="m-2"></div>
                <p class="text-warning">$1.5</p>
              </div>
            </div>
            <a href="cart.php"><input type="button" value="Add Cart" class="btn btn-warning w-100"></a>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
  <?php
  include_once('footer.php');
  ?>
</body>

</html>