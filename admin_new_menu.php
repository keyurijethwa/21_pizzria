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
    include_once("admin_nav.php");
    ?>
    <br />
    <br />
    <h1 align="center" style=" color:white;padding-bottom: 10px;" class="p-3 text-warning fst-italic"> New Menu</h1>

    <div class=" text-white " style="margin-left: 20%;margin-right:20%;margin-top:3%;margin-bottom:3%">


        <div style="border: 2px;">

            <form onSubmit="return(validate123());">

                <div class="form-group">
                    <label for="name">Menu Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="fname1" name="fn1" style="background-color: transparent;color:white">
                    <p id="fn1"></p>
                </div>
                <div class="form-group">
                    <label for="name">Menu Id:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="fname1" name="fn1" style="background-color: transparent;color:white">
                    <p id="fn1"></p>
                </div>
                <div class="form-group">
                    <label for="pwd">Price:</label>
                    <input type="text" class="form-control" placeholder="Enter Password" id="pass" name="pwd" style="background-color: transparent;color:white">
                    <p id="passw"></p>
                </div>
                <div class="form-group">
                    <label for="date"> Description:</label><br>
                    <textarea name="" id="" cols="30" rows="1" class="form-control" style="background-color: transparent;color:white" placeholder="Decription" required></textarea>
                </div><br>
                <div class="form-group">
                    <label for="pwd">Photo:</label>
                    <input type="file" class="form-control" name="p_pic" style="background-color: transparent;color:white">
                </div>
                <div class="col-12 text-center">
                    <input type="submit " class="btn btn-warning mt-3" value="Add Menu" name="sub" />
                </div>
            </form>
        </div>

    </div>
    <?php
    include_once("footer.php");
    ?>
</body>

</html>