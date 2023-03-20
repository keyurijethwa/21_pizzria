
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
    include_once('admin_nav.php')
  ?>

  <!-- menu  -->
 
  <div class="container text-white ">
    
        <h1 class="text-center text-warning mt-5 p-4 fst-italic">Offers</h1>
        <a href="admin_new_offer.php"><button class="text-white bg-warning rounded fw-bold">+ New Offer</button></a>
        <div class="table-responsive">
            <table class="table text-white my-sm-5">
                <thead>
                    <tr style="background-color: #ffc107;">
                    <th scope="col">Offer_name</th>
                        <th scope="col">Offer_id</th>
                        <th scope="col">Srt_date</th>
                        <th scope="col">End_date</th>
                        <th scope="col">Description</th>
                        <th scope="col">Coupon_code</th>
                        <th scope="col">Discount</th>
                        <th scope="col">Templete</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Week-End Offer</td>
                        <td>2120001</td>
                        <td>14 apr,2023</td>
                        <td>15 apr,2023</td>
                        <td>If you buy two pizza then one Large pizza is free</td>
                        <td>G48SKL4</td>
                        <td>20%</td>
                        <td><img src="img/offer-1.webp" alt="" height="50%" width="50%"></td>
                        <td><a href="edit_offer.php"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td scope="row"><a href="#"><i class="fa-solid fa-trash"></i></a></td>
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