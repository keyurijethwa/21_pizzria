<?php
include_once("database.php");
$id = @$_GET['id'];
$qe = "select * from menu where Menu_id='$id'";
$result = mysqli_query($con, $qe);

while ($a = mysqli_fetch_array($result)) {
?>
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
        <form action="edit_menu.php" method="post" enctype="multipart/form-data">

            <h1 class="mt-5 p-5 text-center text-warning fst-italic"> Edit Menu details</h1>
            <div class="row mb-5">
                <div class="col-md-6 col-12 text-center">
                    <img src="Menu_image/<?php echo $a[4]; ?>" alt="" class="shadow p-1 mb-5 bg-dark rounded  h-75">
                </div>

                    <div class="col-md-6 col-12">
                        <div class="row text-center">
                            <div class="col-md-6 col-12">
                                <h4 class="text-white-50"> Menu Name:</h4>
                                <input type="text" name="name" value="<?php echo $a[0]; ?>" style="background-color: transparent;color:white">
                            </div>
                            <div class="col-md-6 col-12">
                                <h4 class="text-white-50">Menu id:</h4>
                                <input type="email" name="id" value="<?php echo $a[1]; ?>" style="background-color: transparent;color:white" readonly>
                            </div>
                        </div>
                        <div class="row text-center mt-5">
                            <div class="col-md-6 col-12">
                                <h4 class="text-white-50">Price:</h4>
                                <input type="text" name="price" value="<?php echo $a[2]; ?>" style="background-color: transparent;color:white">
                            </div>
                            <div class="col-md-6 col-12">
                                <h4 class="text-white-50">Description:</h4>
                                <textarea name="dec" id="" cols="20" rows="1" style="background-color: transparent;color:white">
                                    <?php echo $a[3]; ?>
                                </textarea>
                            </div>
                        </div>
                        <div class="row text-center mt-5">
                            <div class="col-12">
                                <h4 class="text-white-50">Photo:</h4>
                                <input type="file" name="image" value="05FH37" style="background-color: transparent;color:white">
                            </div>
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto p-5 ">
                            <input type="submit" value="Upadate" name="updt_btn" class="btn btn-warning">
                        </div>
                    </div>
</form>
        </div>
    <?php
}
    ?>
    <?php
    include_once('footer.php');
    ?>
    <?php
    if (isset($_POST['updt_btn'])) {
        $mn = $_POST['name'];
        $id = $_POST['id'];
        $price = $_POST['price'];
        $dec = $_POST['dec'];
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'Menu_image/' . $image;
        if ($image == "") {
            $q = "UPDATE menu set Menu_name='$mn',  Price='$price' ,Description='$dec' where Menu_id='$id'";
        } else {
            $q = "UPDATE menu set Menu_name='$mn',  Price='$price' ,Description='$dec',Photo='$image' where Menu_id='$id'";
        }
        if (mysqli_query($con, $q)) {
            move_uploaded_file($image_tmp_name, $image_folder);
    ?>
            <script>
                alert("Data Upadated sucessfully!");
                window.location="admin_menu.php";
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Error in upadating data");
            </script>
    <?php
        }
    }
    ?>
    </body>

    </html>