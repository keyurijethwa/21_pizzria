<?php
  session_start();
  if(isset($_SESSION['emailid']) && isset($_SESSION['password'])){
?>
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
<body style="
background-image: url('img/bg_4.jpg'); min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
  <?php
    include_once('admin_nav.php')
  ?>
  <div class="p-5 m-5">
  <div class="container ">
  <div class="row">
    <div class="col-3 bg-warning rounded m-1">
     hi
    </div>
    <div class="col-3 bg-warning rounded ">
    hi
    </div>
    <div class="col-3 bg-warning rounded ">
    hi
    </div>
    <div class="col-3 bg-warning rounded ">
    hi
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
<?php
  }
  else{
    ?>
    <script>
      window.location="login.php";
    </script>
    <?php
  }
?>
