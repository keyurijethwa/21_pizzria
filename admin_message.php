
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
    
        <h1 class="text-center text-warning mt-5 p-4">Messages</h1>
        
        <div class="row">
                    <div class="border border-1 p-1 bg-warning text-center text-white"><h3>Messages</h3></div>
                    <div class="table-responsive">
                    <table class="table text-white">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                        <tr>
                            <td>Kriti</td>
                            <td>Kriti@gmail.com</td>
                            <td>delivery</td>
                            <td> I have not get a pizza in time your delivery service is very bad</td>
                        </tr>
                    </table>
                    </div>
        </div>
    </div>

  <!-- menu end -->

  <?php
  include_once('footer.php');
  ?>
</body>

</html>