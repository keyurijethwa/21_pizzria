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
<script>
    function validate123() {

        var mn = document.getElementById('menu').value;
        var mid = document.getElementById('menuid').value;
        var price = document.getElementById('price').value;
        var dec = document.getElementById('decription').value;


        if (mn == "") {
            
            document.getElementById('m1').innerHTML = "Menu name field cannot be empty";
            document.getElementById('m1').style.color = "red";
            document.getElementById('menu').style.borderColor = "red";
            var vm = "false";
        } else {
            var menu = /^[a-zA-Z ]*$/;
    
            var e = menu.test(mn);
            if (e == false) {
                document.getElementById('menu').focus();
                document.getElementById('m1').innerHTML = "Menu name must contain only letters";
                document.getElementById('m1').style.color = "red";
                document.getElementById('menu').style.borderColor = "red";
                vm = "false";
            } else {
                document.getElementById('m1').innerHTML = "";
                document.getElementById('menu').style.borderColor = "green";
                vm = "true";
            }
        }
        if (vm == "true" ) {
            return true;
        } else {
            return false;
        }
    }
</script>
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
                    <label>Menu Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="menu" name="mn" style="background-color: transparent;color:white">
                    <p id="m1"></p>
                </div>
                <div class="form-group">
                    <label>Menu Id:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="menuid" name="mid" style="background-color: transparent;color:white">
                    <p id="m2"></p>
                </div>
                <div class="form-group">
                    <label>Price:</label>
                    <input type="text" class="form-control" placeholder="Enter Password" id="price" name="pri" style="background-color: transparent;color:white">
                    <p id="m3"></p>
                </div>
                <div class="form-group">
                    <label> Description:</label><br>
                    <textarea name="dec" id="decription" cols="30" rows="1" class="form-control" style="background-color: transparent;color:white" placeholder="Decription" required></textarea>
                    <p id="m4"></p>
                </div><br>
                <div class="form-group">
                    <label>Photo:</label>
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