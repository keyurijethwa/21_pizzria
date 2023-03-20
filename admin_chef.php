
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
    
        <h1 class="text-center text-warning mt-5 p-4 fst-italic">Chefs</h1>
        <a href="admin_new_chef.php"><button class="text-white bg-warning rounded fw-bold">+ New Chef</button></a>
        <div class="table-responsive">
            <table class="table text-white my-sm-5">
                <thead>
                    <tr style="background-color: #ffc107;">
                    <th scope="col">Chef_name</th>
                        <th scope="col">Chef_id</th>
                        <th scope="col">Exprience</th>
                        <th scope="col">Specialist</th>
                        <th scope="col">Chef_pic</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tom Smith</td>
                        <td>3120001</td>
                        <td>2-years</td>
                        <td>Italian Pizza</td>
                        <td><img src="img/person_1.jpg" alt="" height="25%" width="25%"></td>
                        <td><a href="edit_chefs.php"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td scope="row"><i class="fa-solid fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td>Mark Wilson</td>
                        <td>3120002</td>
                        <td>6-month</td>
                        <td>margherita pizza</td>
                        <td><img src="img/person_2.jpg" alt="" height="25%" width="25%"></td>
                        <td scope="row"><i class="fa-solid fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td>Patrick Jacobson</td>
                        <td>3120003</td>
                        <td>1-years</td>
                        <td>Pizza Base</td>
                        <td><img src="img/person_3.jpg" alt="" height="25%" width="25%"></td>
                        <td scope="row"><i class="fa-solid fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td>Ivan Dorchsner</td>
                        <td>3120004</td>
                        <td>5-years</td>
                        <td>Italian Pizza</td>
                        <td><img src="img/person_4.jpg" alt="" height="25%" width="25%"></td>
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