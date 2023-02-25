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
 
  <div class="container text-white ">
    
        <h1 class="text-center text-warning mt-5 p-4">Orders</h1>
        <a href=""><button class="text-white bg-warning rounded">+ New Menu</button></a>
        <div class="table-responsive">
            <table class="table text-white my-sm-5">
                <thead>
                    <tr style="background-color: #ffc107;">
                    <th scope="col">Menu_name</th>
                        <th scope="col">Menu_id</th>
                        <th scope="col">Price</th>
                        <th scope="col">Discription</th>
                        <th scope="col">Photo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Italian Pizza </td>
                        <td>1120001</td>
                        <td>$20</td>
                        <td>A small river named Duden flows by their place and supplies</td>
                        <td style="height: 10%;width:10%"> <img src="img/pizza-1.jpg" alt="" class="rounded-circle" style="height: 50%;width:50%"></td>
                        <th scope="row"><i class="fa-solid fa-trash"></i></th>
                    </tr>
                    <tr>
                        <td>Hawaiian Pizza</td>
                        <td>1120002</td>
                        <td>$20</td>
                        <td>A small river named Duden flows by their place and supplies</td>
                        <td style="height: 10%;width:10%"> <img src="img/pizza-2.jpg" alt="" class="rounded-circle" style="height: 50%;width:50%"></td>
                        <th scope="row"><i class="fa-solid fa-trash"></i></th>                    
                    </tr>
                    <tr>
                        <td>Greek Pizza</td>
                        <td>1120003</td>
                        <td>$20</td>
                        <td>A small river named Duden flows by their place and supplies</td>
                        <td style="height: 10%;width:10%"> <img src="img/pizza-3.jpg" alt="" class="rounded-circle" style="height: 50%;width:50%"></td>
                        <th scope="row"><i class="fa-solid fa-trash"></i></th>
                    </tr>
                    <tr>
                        <td>Bacon Crispy Thins</td>
                        <td>1120004</td>
                        <td>$20</td>
                        <td>A small river named Duden flows by their place and supplies</td>
                        <td style="height: 10%;width:10%"> <img src="img/pizza-4.jpg" alt="" class="rounded-circle" style="height: 50%;width:50%"></td>
                        <th scope="row"><i class="fa-solid fa-trash"></i></th>
                    </tr>
                    <tr>
                        <td>Hawaiian Special</td>
                        <td>1120005</td>
                        <td>$20</td>
                        <td>A small river named Duden flows by their place and supplies</td>
                        <td style="height: 10%;width:10%"> <img src="img/pizza-5.jpg" alt="" class="rounded-circle" style="height: 50%;width:50%"></td>
                        <th scope="row"><i class="fa-solid fa-trash"></i></th>
                    </tr>
                    <tr>
                        <td>Ultimate Overload</td>
                        <td>1120006</td>
                        <td>$20</td>
                        <td>A small river named Duden flows by their place and supplies</td>
                        <td style="height: 10%;width:10%"> <img src="img/pizza-6.jpg" alt="" class="rounded-circle" style="height: 50%;width:50%"></td>
                        <th scope="row"><i class="fa-solid fa-trash"></i></th>
                    </tr>
                    <tr>
                        <td>Bacon Pizza</td>
                        <td>1120007</td>
                        <td>$20</td>
                        <td>A small river named Duden flows by their place and supplies</td>
                        <td style="height: 10%;width:10%"> <img src="img/pizza-7.jpg" alt="" class="rounded-circle" style="height: 50%;width:50%"></td>
                        <th scope="row"><i class="fa-solid fa-trash"></i></th>
                    </tr>
                    <tr>
                        <td>Ham &amp; Pineapple</td>
                        <td>1120008</td>
                        <td>$20</td>
                        <td>A small river named Duden flows by their place and supplies</td>
                        <td style="height: 10%;width:10%"> <img src="img/pizza-8.jpg" alt="" class="rounded-circle" style="height: 50%;width:50%"></td>
                        <th scope="row"><i class="fa-solid fa-trash"></i></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

  <!-- menu end -->

  <?php
  include_once('footer.php');
  ?>
</body>

</html>