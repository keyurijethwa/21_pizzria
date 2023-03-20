<script>
    function validate123() {
        if (cname == "true" && ceid == "true" && ex == "true" && sp == "true") {
            return true;
        } else {
            return false;
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
    <br />
    <br />
    <h1 align="center" style=" color:white;padding-bottom: 10px;" class="p-3 text-warning fst-italic"> New Items</h1>
    <div class=" text-white " style="margin-left: 20%;margin-right:20%;margin-top:3%;margin-bottom:3%">
        <div style="border: 2px;">

            <form onSubmit="return(validate123());">
                <div class="form-group">
                    <label for="name">Menu Id:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="item" name="in1" style="background-color: transparent;color:white">
                    <p id="in1"></p>
                </div>
                <div class="form-group">
                    <label for="name">Item Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="fname1" name="fn1" style="background-color: transparent;color:white">
                    <p id="fn1"></p>
                </div>
                <div class="form-group">
                    <label for="name">Item Id:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="fname1" name="fn1" style="background-color: transparent;color:white">
                    <p id="fn1"></p>
                </div>
                <div class="form-group">
                    <label for="name">Price:</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="fname1" name="fn1" style="background-color: transparent;color:white">
                    <p id="fn1"></p>
                </div>
                <div class="form-group">
                    <label for=""> Description:</label><br>
                    <textarea name="" id="" cols="30" rows="1" class="form-control" style="background-color: transparent;color:white" placeholder="Decription" required></textarea>
                </div><br>
                <div class="form-group">
                    <label for=""> Ingredients:</label><br>
                    <textarea name="" id="" cols="30" rows="1" class="form-control" style="background-color: transparent;color:white" placeholder="Decription" required></textarea>
                </div><br>
                <div class="form-group">
                    <label for="pwd">Photo:</label>
                    <input type="file" class="form-control" name="p_pic" style="background-color: transparent;color:white">
                </div>
                <div class="col-12 text-center">
                    <input type="submit " class="btn btn-warning mt-3" value="Add Item" name="sub" />
                </div>
            </form>
        </div>

    </div>
</body>
<?php
include("footer.php");
?>