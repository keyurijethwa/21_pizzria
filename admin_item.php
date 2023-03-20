
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
    
        <h1 class="text-center text-warning mt-5 p-4 fst-italic">Items</h1>
        <a href="admin_new_item.php"><button class="text-white bg-warning rounded fw-bold">+ New Items</button></a>
        <div class="table-responsive">
            <table class="table text-white my-sm-5">
                <thead>
                    <tr style="background-color: #ffc107;" class="text-center">
                    <th scope="col">Menu_id</th>
                        <th scope="col">Item_name</th>
                        <th scope="col">Item_id</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Ingredients</th>
                        <th scope="col">item_pic</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>1120001</td>
                        <td>pizza2</td>
                        <td>4120001</td>
                        <td>$30</td>
                        <td>This pizza is so soft made by speacial chef</td>
                        <td>with Tomato,mozrella</td>
                        <td><img src="img/i-1.jpeg" alt="" height="50%" width="50%"></td>
                        <td><a href="edit_item.php"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td scope="row"><i class="fa-solid fa-trash"></i></td>
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