<?php
include_once("admin_nav.php");

?>
<script type="text/javascript">
  function validate123() {
    var offname = document.getElementById('offername').value;
    var offid = document.getElementById('offerid').value;
    var dis = document.getElementById('discount').value;
    var coupon = document.getElementById('coupon').value;
    var dec = document.getElementById('decription').value;
    var startDate = document.getElementById('startdate').value;
    var endDate = document.getElementById('enddate').value;
    if (offer == "") {
      document.getElementById('name').innerHTML = "offer Name cannot be empty";
      document.getElementById('name').style.color = "red";
      document.getElementById('offername').style.borderColor = "red";
      var vm = "false";
    } else {
      var menu = /^[a-zA-Z ]*$/;
      var e = menu.test(mn);
      if (e == false) {
        document.getElementById('offername').focus();
        document.getElementById('name').innerHTML = "offer name must contain only letters";
        document.getElementById('name').style.color = "red";
        document.getElementById('offername').style.borderColor = "red";
        vm = "false";
      } else {
        document.getElementById('name').innerHTML = "";
        document.getElementById('offername').style.borderColor = "green";
        vm = "true";
      }
    }
  }

  function check_date_str(y) {
    var url = "check_date_str.php?strdate=" + y;

    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open("GET", url, false);
    xmlhttp.send(null);

    // alert(xmlhttp.responseText);
    if (xmlhttp.responseText = "error") {
      alert("enter a validate date");
      document.getElementById('startdate').value = "";
      document.getElementById('startdate').focus();
      document.getElementById('start').innerHTML = "Enter a valid date";
    }
  }

  function check_date_end(y) {
    var url = "check_date_end.php?enddate=" + y + "&strdate=" + y;

    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open("GET", url, false);
    xmlhttp.send(null);

    // alert(xmlhttp.responseText);
    if (xmlhttp.responseText = "error") {
      alert("enter a validate date");
      document.getElementById('enddate').value = "";
      document.getElementById('enddate').focus();
      document.getElementById('end').innerHTML = "Enter a valid date";
    }
  }
</script>

<body style="
background-image: url('img/bg_4.jpg'); min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">


  <br />
  <br />
  <h1 align="center" style=" color:white;padding-bottom: 10px;" class="p-3 text-warning fst-italic"> New Offers</h1>

  <div class=" text-white " style="margin-left: 20%;margin-right:20%;margin-top:3%;margin-bottom:3%">
    <div style="border: 2px;">

      <form onSubmit="return(validate123());" method="post" action="admin_new_offer.php" enctype="multipart/form-data">

        <div class="form-group">
          <label for="name">Offer Name:</label>
          <input type="text" class="form-control" placeholder="Enter Name" id="offername" name="offna" style="background-color: transparent;color:white">
          <p id="name"></p>
        </div>
        <div class="form-group">
          <label for="name">Offer Id:</label>
          <input type="text" class="form-control" placeholder="Enter Name" id="offerid" name="offid" style="background-color: transparent;color:white">
          <p id="id"></p>
        </div>
        <div class="form-group">
          <label for="date"> Start Date:</label>
          <input type="date" name="str" class="form-control" placeholder="Start Date" id="startdate" style="background-color: transparent;color:white">
          <p id="start"></p>
        </div><br>
        <div class="form-group">
          <label for="date"> End Date:</label>
          <input type="date" name="end" class="form-control" placeholder="End Date" id="enddate" style="background-color: transparent;color:white">
          <p id="end"></p>
        </div><br>
        <div class="form-group">
          <label for="date"> Description:</label><br>
          <textarea name="des" id="description" cols="30" rows="1" class="form-control" style="background-color: transparent;color:white" placeholder="Decription"></textarea>
          <p id="desc"></p>
        </div><br>

        <div class="form-group">
          <label for="pwd">Coupon Code:</label>
          <input type="text"  class="form-control" placeholder="Enter Password" id="coupon" name="cou" style="background-color: transparent;color:white">
          <p id="coup"></p>
        </div>
        <div class="form-group">
          <label for="pwd">Discount:</label>
          <input type="text" class="form-control" placeholder="Enter Discount" id="discount" name="dis" style="background-color: transparent;color:white">
          <p id="disc"> </p>
        </div>

        <div class="form-group">
          <label for="pwd">Templete:</label>
          <input type="file" class="form-control" name="image" style="background-color: transparent;color:white">
        </div>
        <div class="col-12 text-center">
          <input type="submit" class="btn btn-warning mt-3" value="Add Offer" name="btn_submit" />
        </div>
      </form>
    </div>

  </div>
</body>
<?php
include("footer.php");

if (isset($_POST['btn_submit'])) {
    @$offer_name = $_POST['offna'];
    @$offer_id = $_POST['offid'];
    @$str = $_POST['str'];
    @$end = $_POST['end'];
    @$dis=$_POST['dis'];
    @$coup=$_POST['cou'];
    @$description=$_POST['des'];
    @$image = $_FILES['image']['name'];
    @$image_size = $_FILES['image']['size'];
    @$image_tmp_name = $_FILES['image']['tmp_name'];
    @$image_folder = 'offer_image/' . $image;
    @$select = mysqli_query($con, "SELECT * FROM `offers` WHERE offer_id = '$offer_id'") or die('query failed');
    @$q = "INSERT INTO offers VALUES('$offer_name', '$offer_id','$str','$end','$description','$coup','$dis', '$image','Active')";
  
    if (mysqli_num_rows($select) == 1) {
        ?>
        <script>alert ("offer already exist");</script>
        <?php
    } else {
            $insert = mysqli_query($con, $q) or die('query failed');

            if ($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                ?>
                <script>alert ("Added offer successfully!");
                window.location="admin_offer.php";
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