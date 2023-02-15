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
    include_once('login_nav.php');

    ?>
    <div class="container text-white ">
        <div class="mt-5 text-center text-warning">
            <h1 class="p-3 fst-italic text-warning">Your Cart</h1>
        </div>
        <div class="table-responsive">
            <table class="table text-white my-sm-5">
                <thead>
                    <tr style="background-color: #ffc107;">
                        <th scope="col">Remove</th>
                        <th scope="col">Item</th>
                        <th scope="col">Item name</th>
                        <th scope="col">Size</th>
                        <th scope="col">Price</th>
                        <th scope="col">Extra Ingredient</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><i class="fa-solid fa-trash"></i></th>
                        <td><img class="img-fluid" src="img/bg_1.png" alt="" height="20%" width="20%"></td>
                        <td>pizza3</td>
                        <td>medium</td>
                        <td>$20</td>
                        <td>cheese,tomoto
                        </td>
                        <td>1</td>
                        <td>$30</td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fa-solid fa-trash"></i></th>
                        <td><img src="img/bg_2.png" alt="" height="20%" width="20%"></td>
                        <td>pizza1</td>
                        <td>Large</td>
                        <td>$20</td>
                        <td>cheese</td>
                        <td>2</td>
                        <td>$30</td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fa-solid fa-trash"></i></th>
                        <td><img src="img/bg_1.png" alt="" height="20%" width="20%"></td>
                        <td>pizza2</td>
                        <td>Small</td>
                        <td>$20</td>
                        <td>cheese</td>
                        <td>1</td>
                        <td>$30</td>
                    </tr>
                </tbody>
            </table>
        </div>
            <div class="container mb-5">
                <div class="row">
                    
                    <div class="col-md-6 col-12  ">
                    <h1>Coupon Code</h1>
                    <div class="border border-2 border-white rounded p-3">
                        <h5>Enter your coupon code</h5>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-floating pb-4">
                                    <input type="text" class="form-control border-top-0 border-end-0 border-start-0" id="floatingInput2" placeholder="Coupon Code" style="background-color: transparent;color:white">
                                    <label for="floatingInput2">Code</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group pb-4">
                                    <input type="submit" value="Apply Code" class="btn btn-warning py-3 px-5 text-white btn-outline-white">
                                </div>

                            </div>
                        </div>
                    </div>
                    </div>
                        
                    <div class="col-md-6 col-12">
                    <h1>Cart Total</h1>
                    <div class="border border-2 border-white rounded-top p-3">
                    <div class="row">
                            <div class="col-md-6 col-12">
                                <h6 class="float-start">Subtotal</h6>
                            </div>
                            <div class="col-md-6 col-12">
                                <h6 class="float-end">$90</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h6 class="float-start">Discount</h6>
                            </div>
                            <div class="col-md-6 col-12">
                                <h6 class="float-end">60%</h6>
                            </div>

                        </div>
                        <h3 class="text-center">Cash on Delivery</h3>
                    </div>
                    <div class="border border-2 border-white rounded-bottom p-3">
                    <div class="row">
                        
                            <div class="col-md-6 col-12">
                                <h3 class="float-start">Total</h3>
                            </div>
                            <div class="col-md-6 col-12">
                                <h3 class="float-end">$50</h3>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                    </div>
                    <div class="row">
                    <h2>Enter current Address</h2>
                        <div class="col-md-6 col-12">
                    
                    <input type="text" name="" id="" style="background-color: transparent;" placeholder="Address">
                        </div>
                        <div class="col-md-6 col-12">
                            <input type="button" value="Order" class="bg-warning w-100">
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