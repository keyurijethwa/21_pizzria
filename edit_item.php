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
    <div class="">
        <h1 class="mt-5 p-5 text-center text-warning fst-italic"> Edit Offer details</h1>
        <div class="row mb-5">
            <div class="col-md-6 col-12 text-center">
                <img src="img/i-1.jpeg" alt="" class="shadow p-1 mb-5 bg-dark rounded  h-75">
            </div>
            <div class="col-md-6 col-12">
                <div class="row text-center">
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50"> Item Name:</h4>
                        <input type="text" name="name" value="Kriti" style="background-color: transparent;color:white">
                    </div>
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50">Item id:</h4>
                        <input type="text" name="name" value="k@rku.ac.in" style="background-color: transparent;color:white" readonly>
                    </div>
                </div>
                <div class="row text-center mt-5">
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50">Menu id:</h4>
                        <input type="text" name="name" value="05FH37" style="background-color: transparent;color:white">
                    </div>
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50">Price:</h4>
                        <input type="text" name="name" value="05FH37" style="background-color: transparent;color:white">
                    </div>
                </div>
                <div class="row text-center mt-5">
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50">Description:</h4>
                        <textarea name="" id="" cols="20" rows="1" style="background-color: transparent;color:white"></textarea>
                    </div>
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50">Ingredients:</h4>
                        <textarea name="" id="" cols="20" rows="1" style="background-color: transparent;color:white"></textarea>
                    </div>
                </div>
                <div class="row text-center mt-5">
                    <div class="col-12">
                        <h4 class="text-white-50">Photo:</h4>
                        <input type="file" name="name" value="05FH37" style="background-color: transparent;color:white">

                    </div>
                </div>
                
                
                <div class="d-grid gap-2 col-6 mx-auto p-5 " >
  <button class="btn btn-warning" type="button">Update</button>
  
</div>
            </div>
        </div>
    <?php
        include_once('footer.php');
        ?>
</body>
</html>