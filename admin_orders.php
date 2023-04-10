<?php
session_start();
if (isset($_SESSION['emailid']) && isset($_SESSION['password'])) {
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
background-image: url('img/bg_4.jpg'); min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
    <?php
        include_once('admin_nav.php');
    ?>
     <div class="container text-white ">
     
        <h1 class="text-center text-warning mt-5 p-4 fst-italic">Orders</h1>
        <a href="admin_new_order.php"><button class="text-white bg-warning rounded fw-bold">+ New Orders</button></a>
        <div class="table-responsive">
            <table class="table text-white my-sm-5">
                <thead>
                    <tr style="background-color: #ffc107;">
                    <th scope="col">Cust_name</th>
                        <th scope="col">Item name</th>
                        <th scope="col">Order_id</th>
                        <th scope="col">Size</th>
                        <th scope="col">Extra Ingredient</th>
                        <th scope="col">Quantity</th>
                        <th>Address</th>
                        <th>Time</th>
                        <th>Date</th>
                        <th>Complete</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John</td>
                        <td>pizza3</td>
                        <td>10001</td>
                        <td>medium</td>
                        <td>cheese,tomoto</td>
                        <td>1</td>
                        <td>Rajkot</td>
                        <th>2:30am</th>
                        <th>14/02/2023</th>
                        <th>No</th>
                        <td><a href="edit_order.php"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td scope="row"><a href="#"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>

    <?php
    include_once('footer.php');
    ?>
</body>
</html>
<?php
} else {
?>
    <script>
        window.location = "login.php";
    </script>
<?php
}
?>