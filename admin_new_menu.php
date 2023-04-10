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
                document.getElementById('m1').innerHTML = "Menu Name cannot be empty";
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
            if (mid == "") {
                document.getElementById('m2').innerHTML = "Menu ID  cannot be empty";
                document.getElementById('m2').style.color = "red";
                document.getElementById('menuid').style.borderColor = "red";
                var vid = "false";
            } else {
                var id = /^[0-9]/;
                var a = id.test(mid);
                if (a == false) {
                    document.getElementById('menuid').focus();
                    document.getElementById('m2').innerHTML = "Menu ID must contain only numbers";
                    document.getElementById('m2').style.color = "red";
                    document.getElementById('menuid').style.borderColor = "red";
                    vid = "false";
                } else {
                    if (mid.length > 7 || mid.length < 7) {
                        document.getElementById('menuid').focus();
                        document.getElementById('m2').innerHTML = "Menu ID must contain only 7 digit";
                        document.getElementById('m2').style.color = "red";
                        document.getElementById('menuid').style.borderColor = "red";
                        vid = "false";
                    } else {
                        document.getElementById('m2').innerHTML = "";
                        document.getElementById('menuid').style.borderColor = "green";
                        vid = "true";
                    }
                }
            }

            if (price == "") {
                document.getElementById('m3').innerHTML = "Price  cannot be empty";
                document.getElementById('m3').style.color = "red";
                document.getElementById('price').style.borderColor = "red";
                var vpr = "false";
            } else {
                var pr = /^[0-9]/;
                var b = pr.test(price);
                if (b == false) {
                    document.getElementById('price').focus();
                    document.getElementById('m3').innerHTML = "Price must contain only numbers";
                    document.getElementById('m3').style.color = "red";
                    document.getElementById('price').style.borderColor = "red";
                    vpr = "false";
                } else {
                    document.getElementById('m3').innerHTML = "";
                    document.getElementById('price').style.borderColor = "green";
                    vpr = "true";
                }
            }
            if (dec == "") {
                document.getElementById('m4').innerHTML = "Description  cannot be empty";
                document.getElementById('m4').style.color = "red";
                document.getElementById('decription').style.borderColor = "red";
                var vd = "false";
            }
            else {
                    document.getElementById('m4').innerHTML = "";
                    document.getElementById('decription').style.borderColor = "green";
                    vd = "true";
                }
            if (vm == "true" && vid == "true" && vpr == "true" && vd == "true") {
                return true;
            } else {
                return false;
            }
        }
    </script>
    <?php
    include_once("admin_nav.php");
    ?>
    <h1 align="center" style=" color:white;padding-bottom: 10px;" class="p-3 text-warning fst-italic"> New Menu</h1>
    <div class=" text-white " style="margin-left: 20%;margin-right:20%;margin-top:3%;margin-bottom:3%">
        <div style="border: 2px;">
            <form onSubmit="return(validate123());" action="admin_new_menu.php" method="post" enctype="multipart/form-data">
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
                    <textarea name="dec" id="decription" cols="30" rows="1" class="form-control" style="background-color: transparent;color:white" placeholder="Decription"></textarea>
                    <p id="m4"></p>
                </div><br>
                <div class="form-group">
                    <label>Photo:</label>
                    <input type="file" class="form-control" name="image" style="background-color: transparent;color:white">
                </div>
                <div class="col-12 text-center">
                    <input type="submit" class="btn btn-warning mt-3" value="Add Menu" name="btn_submit"/>
                </div>
            </form>
        </div>
    </div>
    <?php
    include_once("footer.php");
    ?>
</body>

</html>
<?php
include_once("database.php");

if (isset($_POST['btn_submit'])) {
    @$menu_name = $_POST['mn'];
    @$menu_id = $_POST['mid'];
    @$price = $_POST['pri'];
    @$dec = $_POST['dec'];
    @$image = $_FILES['image']['name'];
    @$image_size = $_FILES['image']['size'];
    @$image_tmp_name = $_FILES['image']['tmp_name'];
    @$image_folder = 'Menu_image/' . $image;
    @$select = mysqli_query($con, "SELECT * FROM `menu` WHERE Menu_id = '$menu_id'") or die('query failed');
    @$q = "INSERT INTO menu VALUES('$menu_name', '$menu_id','$price','$dec', '$image','Active')";
   
    if (mysqli_num_rows($select) == 1) {
        ?>
        <script>alert ("Menu already exist");</script>
        <?php
    } else {
            $insert = mysqli_query($con, $q) or die('query failed');

            if ($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                ?>
                <script>alert ("Added menu successfully!");
                window.location="admin_menu.php";
            </script>
                <?php
            } else {
            ?>
                <script>alert ("failed!");</script>
            <?php
            }
        }
    }
?>