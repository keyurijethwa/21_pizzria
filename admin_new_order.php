<?php
include_once("admin_nav.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body style="
background-image: url('img/bg_4.jpg'); min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
    <?php
    include_once("admin_nav.php");

    ?>

    <br />
    <br />
    <h1 align="center" style=" color:white;padding-bottom: 10px;" class="p-3 text-warning fst-italic"> New Orders</h1>

    <div class=" text-white " style="margin-left: 20%;margin-right:20%;margin-top:3%;margin-bottom:3%">


        <div style="border: 2px;">

            <form onSubmit="return(validate123());">

                <div class="form-group">
                    <label for="name">Customer Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="fname1" name="fn1" style="background-color: transparent;color:white">
                    <p id="fn1"></p>
                </div>
                <div class="form-group">
                    <label for="name">Item Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="fname1" name="fn1" style="background-color: transparent;color:white">
                    <p id="fn1"></p>
                </div>
                <div class="form-group">
                    <label for="name">Order Id:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="fname1" name="fn1" style="background-color: transparent;color:white">
                    <p id="fn1"></p>
                </div>
                <div class="form-group">
                    <label for="pwd">Size:</label><br>
                    <select name="" id="" style="background-color: transparent;color:white" class="form-select">
                        <option value="" style="background-color:black;color:white" class="op">Select</option>
                        <option value="" style="background-color:black;color:white" class="op">Small</option>
                        <option value="" style="background-color:black;color:white" class="op">Medium</option>
                        <option value="" style="background-color:black;color:white" class="op">Large</option>
                    </select>
                    <p id="passw"></p>
                </div>
                <div class="form-group">
                    <label for="pwd">Extra Ingredients:</label>
                    <input type="text" class="form-control" placeholder="Enter Mobile Number" id="mobile1" name="mobile" style="background-color: transparent;color:white">
                    <p id="mno"> </p>
                </div>
                <div class="form-group">
                    <label for="pwd">Quantity:</label>
                    <input type="text" class="form-control" placeholder="Enter Password" id="pass" name="pwd" style="background-color: transparent;color:white">
                    <p id="passw"></p>
                </div>
                <div class="form-group">
                    <label for="date"> Address:</label><br>
                    <textarea name="" id="" cols="30" rows="1" class="form-control" style="background-color: transparent;color:white" placeholder="Decription" required></textarea>
                </div><br>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" class="form-control" placeholder="Start Date" style="background-color: transparent;color:white" required>
                </div><br>
                <div class="form-group">
                    <label for="date">Time:</label>
                    <input type="time" class="form-control" placeholder="Start Date" style="background-color: transparent;color:white" required>
                </div><br>


                <div class="col-12 text-center">
                    <input type="submit " class="btn btn-warning mt-3" value="Add Order" name="sub" />
                </div>
            </form>
        </div>

    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>