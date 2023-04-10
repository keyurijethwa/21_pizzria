<?php
include_once("database.php");
$offer=$_GET['id'];
$q="SELECT * FROM offers where offer_id='$offer'";
$result=mysqli_query($con,$q);
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
        <h1 class="mt-5 p-5 text-center text-warning fst-italic"> Edit Offer details</h1>
        <div class="row mb-5">
            <div class="col-md-6 col-12 text-center">
                <img src="offer_image/<?php echo $a[7]; ?>" alt="" class="shadow p-1 mb-5 bg-dark rounded  h-75">
            </div>
            <div class="col-md-6 col-12">
                <div class="row text-center">
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50"> Offer Name:</h4>
                        <input type="text" name="name" value="<?php echo $a[0]; ?>" style="background-color: transparent;color:white">
                    </div>
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50">Offer id:</h4>
                        <input type="text" name="id" value="<?php echo $a[1]; ?>" style="background-color: transparent;color:white" readonly>
                    </div>
                </div>
                <div class="row text-center mt-5">
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50">Start date:</h4>
                        <input type="text" name="start" value="<?php echo $a[2]; ?>" style="background-color: transparent;color:white">
                    </div>
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50">End date:</h4>
                        <input type="text" name="end" value="<?php echo $a[3]; ?>" style="background-color: transparent;color:white">
                    </div>
                </div>
                <div class="row text-center mt-5">
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50">Coupon Code:</h4>
                        <input type="text" name="code" value="<?php echo $a[5]; ?>" style="background-color: transparent;color:white">
                    </div>
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50">Description:</h4>
                        <textarea name="dec" id="" cols="20" rows="1" style="background-color: transparent;color:white"><?php echo $a[4]; ?></textarea>
                    </div>
                </div>
                <div class="row text-center mt-5">
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50">Discount:</h4>
                        <input type="text" name="dis" value="<?php echo $a[6]; ?>%" style="background-color: transparent;color:white">
                    </div>
                    <div class="col-md-6 col-12">
                        <h4 class="text-white-50">Photo:</h4>
                        <input type="file" name="image"  style="background-color: transparent;color:white">

                    </div>
                </div>
                
                
                <div class="d-grid gap-2 col-6 mx-auto p-5 " >
  <button class="btn btn-warning" type="button" name="updt_btn">Update</button>
  
</div>
            </div>
        </div>
    <?php
        include_once('footer.php');
        ?>
           <?php
}
?>
<?php
    if (isset($_POST['updt_btn'])) {
        $on = $_POST['name'];
        $oi = $_POST['id'];
        $str = $_POST['start'];
        $end = $_POST['end'];
        $des=$_POST['dec'];
        $code=$_POST['code'];
        $dis=$_POST['dis'];
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'offer_image/' . $image;
        if($image==""){
            $q = "UPDATE offers set offer_name='$on',offer_id='$oi',srt_date='$str',description='$des',coupon_code='$code',discount='$dis' where Email='$em'";
        }
        else{
            $q = "UPDATE offers set offer_name='$on',offer_id='$oi',srt_date='$str',description='$des',coupon_code='$code',discount='$dis',templete='$image' where Email='$em'";
        }
        if(mysqli_query($con, $q)) {
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