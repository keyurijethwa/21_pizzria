<?php
    include_once('database.php');
?>

<script>
    function validate123() {
        function validate123() {
            var mid = document.getElementById('menuid').value;
            var iname = document.getElementById('itemname').value;
            var iid = document.getElementById('itemid').value; 
            var price = document.getElementById('price').value;
            var dec = document.getElementById('desc').value;
            var ingre = document.getElementById('ingrdients').value;
            if (iname == "") {
                document.getElementById('item').innerHTML = "item Name cannot be empty";
                document.getElementById('item').style.color = "red";
                document.getElementById('itemname').style.borderColor = "red";
                var im = "false";
            } else {
                var item = /^[a-zA-Z ]*$/;
                var e = item.test(mn);
                if (e == false) {
                    document.getElementById('itemname').focus();
                    document.getElementById('item').innerHTML = "item name must contain only letters";
                    document.getElementById('item').style.color = "red";
                    document.getElementById('itemname').style.borderColor = "red";
                    im = "false";
                } else {
                    document.getElementById('item').innerHTML = "";
                    document.getElementById('itemname').style.borderColor = "green";
                    im = "true";
                }
            }
            if (iid == "") {
                document.getElementById('id').innerHTML = "item ID  cannot be empty";
                document.getElementById('id').style.color = "red";
                document.getElementById('itemid').style.borderColor = "red";
                var vid = "false";
            } else {
                var id = /^[0-9]/;
                var a = id.test(mid);
                if (a == false) {
                    document.getElementById('itemid').focus();
                    document.getElementById('id').innerHTML = "item ID must contain only numbers";
                    document.getElementById('id').style.color = "red";
                    document.getElementById('itemid').style.borderColor = "red";
                    vid = "false";
                } else {
                    if (mid.length > 7 || mid.length < 7) {
                        document.getElementById('itemid').focus();
                        document.getElementById('id').innerHTML = "item ID must contain only 7 digit";
                        document.getElementById('id').style.color = "red";
                        document.getElementById('itemid').style.borderColor = "red";
                        vid = "false";
                    } else {
                        document.getElementById('id').innerHTML = "";
                        document.getElementById('itemid').style.borderColor = "green";
                        vid = "true";
                    }
                }
            }
            if (mid == "") {
                document.getElementById('menu').innerHTML = "Menu ID  cannot be empty";
                document.getElementById('menu').style.color = "red";
                document.getElementById('menuid').style.borderColor = "red";
                var vmid = "false";
            } else {
                var id = /^[0-9]/;
                var a = id.test(mid);
                if (a == false) {
                    document.getElementById('menuid').focus();
                    document.getElementById('menu').innerHTML = "Menu ID must contain only numbers";
                    document.getElementById('menu').style.color = "red";
                    document.getElementById('menuid').style.borderColor = "red";
                    vmid = "false";
                } else {
                    if (mid.length > 7 || mid.length < 7) {
                        document.getElementById('menuid').focus();
                        document.getElementById('menu').innerHTML = "Menu ID must contain only 7 digit";
                        document.getElementById('menu').style.color = "red";
                        document.getElementById('menuid').style.borderColor = "red";
                        vmid = "false";
                    } else {
                        document.getElementById('menu').innerHTML = "";
                        document.getElementById('menuid').style.borderColor = "green";
                        vmid = "true";
                    }
                }
            }

            if (price == "") {
                document.getElementById('pr').innerHTML = "Price  cannot be empty";
                document.getElementById('pr').style.color = "red";
                document.getElementById('price').style.borderColor = "red";
                var vpr = "false";
            } else {
                var pr = /^[0-9]/;
                var b = pr.test(price);
                if (b == false) {
                    document.getElementById('price').focus();
                    document.getElementById('pr').innerHTML = "Price must contain only numbers";
                    document.getElementById('pr').style.color = "red";
                    document.getElementById('price').style.borderColor = "red";
                    vpr = "false";
                } else {
                    document.getElementById('pr').innerHTML = "";
                    document.getElementById('price').style.borderColor = "green";
                    vpr = "true";
                }
            }
            if (dec == "") {
                document.getElementById('des').innerHTML = "Description  cannot be empty";
                document.getElementById('des').style.color = "red";
                document.getElementById('desc').style.borderColor = "red";
                var vd = "false";
            }
            else {
                    document.getElementById('des').innerHTML = "";
                    document.getElementById('desc').style.borderColor = "green";
                    vd = "true";
                }
            if (ingre == "") {
                document.getElementById('ing').innerHTML = "Description  cannot be empty";
                document.getElementById('ing').style.color = "red";
                document.getElementById('ingredient').style.borderColor = "red";
                var vind = "false";
            }
            else {
                    document.getElementById('ing').innerHTML = "";
                    document.getElementById('ingredient').style.borderColor = "green";
                    vind = "true";
                }
            if (im == "true" && vid == "true" && vmid=="true" && vpr == "true" && vd == "true" && vind=="true") {
                return true;
            } else {
                return false;
            }
        }
    }
</script>
<?php
include_once("admin_nav.php");
?>
<body style="
background-image: url('img/bg_4.jpg'); min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
    <h1 align="center" style=" color:white;padding-bottom: 10px;" class="p-3 text-warning fst-italic"> New Items</h1>
    <div class=" text-white " style="margin-left: 20%;margin-right:20%;margin-top:3%;margin-bottom:3%">
        <div style="border: 2px;">

            <form onSubmit="return(validate123());" method="post" action="admin_new_item.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Menu Id:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="menuid" name="menun" style="background-color: transparent;color:white">
                    <p id="menu"></p>
                </div>
                <div class="form-group">
                    <label for="name">Item Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="itemname" name="itemn" style="background-color: transparent;color:white">
                    <p id="item"></p>
                </div>
                <div class="form-group">
                    <label for="name">Item Id:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="itemid" name="itemi" style="background-color: transparent;color:white">
                    <p id="id"></p>
                </div>
                <div class="form-group">
                    <label for="name">Price:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="price" name="price" style="background-color: transparent;color:white">
                    <p id="pri"></p>
                </div>
                <div class="form-group">
                    <label for=""> Description:</label><br>
                    <textarea name="des" id="desc" cols="30" rows="1" class="form-control" style="background-color: transparent;color:white" placeholder="Decription" ></textarea>
                    <p id="des"></p>
                </div><br>
                <div class="form-group">
                    <label for=""> Ingredients:</label><br>
                    <textarea name="ingre" id="ingredient" cols="30" rows="1" class="form-control" style="background-color: transparent;color:white" placeholder="Decription" ></textarea>
                    <p id="ing"></p>
                </div><br>
                <div class="form-group">
                    <label for="pwd">Photo:</label>
                    <input type="file" class="form-control" name="image" style="background-color: transparent;color:white">
                </div>
                <div class="col-12 text-center">
                    <input type="submit" class="btn btn-warning mt-3" value="Add Item" name="btn_submit" >
                </div>
            </form>
        </div>

    </div>
</body>
<?php
include("footer.php");
?>

<?php

include_once("database.php");

if (isset($_POST['btn_submit'])) {
    @$menu_id = $_POST['menun'];
    @$item_name = $_POST['itemn'];
    @$item_id = $_POST['itemi'];
    @$price=$_POST['price'];
    @$ingre=$_POST['ingre'];
    @$dec = $_POST['des'];
    @$image = $_FILES['image']['name'];
    @$image_size = $_FILES['image']['size'];
    @$image_tmp_name = $_FILES['image']['tmp_name'];
    @$image_folder = 'Item_image/' . $image;
    @$select = mysqli_query($con, "SELECT * FROM `item` WHERE item_id = '$item_id'") or die('query failed');
    @$q = "INSERT INTO item VALUES('$item_name', '$item_id','$price','$dec','$ingre', '$image','Active','$menu_id')";
    echo $item_name;
    if (mysqli_num_rows($select) == 1) {
        ?>
        <script>alert ("item already exist");</script>
        <?php
    } else {
            $insert = mysqli_query($con, $q) or die('query failed');

            if ($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                ?>
                <script>alert ("Added item successfully!");
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