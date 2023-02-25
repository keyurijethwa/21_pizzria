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
     
        <h1 class="text-center text-warning mt-5 p-4">Orders</h1>
        <a href=""><button class="text-white bg-warning rounded fw-bold">+ New Orders</button></a>
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
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>pizza1</td>
                        <td>10001</td>
                        <td>Large</td>
                        <td>cheese</td>
                        <td>2</td>
                        <td></td>
                        <th>2:30am</th>
                        <th>14/02/2023</th>
                        <th>No</th>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>pizza2</td>
                        <td>10001</td>
                        <td>regular</td>
                        <td>cheese</td>
                        <td>1</td>
                        <td></td>
                        <th>2:30am</th>
                        <th>14/02/2023</th>
                        <th>No</th>
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