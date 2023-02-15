<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Order</title>
</head>

<body style="
background-image: url('img/bg_4.jpg'); min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
    <?php
    include_once('login_nav.php');
    ?>
    <div class="container text-white">
        <h1 class="text-center text-warning">My Orders</h1>
        <h2 class="fst-italic">Order History</h2>
        <div class="table-responsive">
            <table class="table text-white">
                <tr class="text-warning">
                    <th>Pizza</th>
                    <th>Quantity</th>
                    <th>Size</th>
                    <th>Ingredients</th>
                    <th>Total</th>
                </tr>
                <tr class="text-decoration-line-through">
                    <td>MARGHERITA</td>
                    <td>1</td>
                    <td>Medium</td>
                    <td>cheese</td>
                    <td>$50</td>
                </tr>
                <tr class="text-decoration-line-through">
                    <td> </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total: $50</td>

                </tr>
            </table>
        </div>
        <h2>Current Order</h2>
        <div class="table-responsive">
            <table class="table text-white">
                <tr class="text-warning">
                    <th>Pizza</th>
                    <th>Quantity</th>
                    <th>Size</th>
                    <th>Ingredients</th>
                    <th>Price</th>
                </tr>
                <tr >
                    <td>pizza3</td>
                    <td>1</td>
                    <td>Medium</td>
                    <td>cheese,tameto</td>
                    <td>$50</td>
                </tr>
                <tr >
                    <td>pizza1</td>
                    <td>2</td>
                    <td>large</td>
                    <td>cheese</td>
                    <td>$50</td>
                </tr>
                <tr >
                    <td>pizza2</td>
                    <td>1</td>
                    <td>regular</td>
                    <td>cheese</td>
                    <td>$50</td>
                </tr>
                <tr>
                    <td> </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total: $150</td>

                </tr>
            </table>
        </div>
    </div>
    <?php
    include_once('footer.php');
    ?>
</body>

</html>