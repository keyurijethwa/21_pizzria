<?php
include_once("admin_nav.php");

?>
<script type="text/javascript">
  function validate123() {
    var offname = document.getElementById('offername').value;
    var offid = document.getElementById('offerid').value;
    var date=new Date();
    var price = document.getElementById('price').value;
    var dec = document.getElementById('decription').value;
    if (vno == "true" && vpwd == "true" && vfn == "true") {
      return true;
    } else {
      return false;
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

      <form onSubmit="return(validate123());">

        <div class="form-group">
          <label for="name">Offer Name:</label>
          <input type="text" class="form-control" placeholder="Enter Name" id="offername" name="offna" style="background-color: transparent;color:white">
          <p id="fn1"></p>
        </div>
        <div class="form-group">
          <label for="name">Offer Id:</label>
          <input type="text" class="form-control" placeholder="Enter Name" id="offerid" name="offid" style="background-color: transparent;color:white">
          <p id="fn1"></p>
        </div>
        <div class="form-group">
          <label for="date"> Start Date:</label>
          <input type="date" class="form-control" placeholder="Start Date" id="startdate" style="background-color: transparent;color:white" >
        </div><br>
        <div class="form-group">
          <label for="date"> End Date:</label>
          <input type="date" class="form-control" placeholder="End Date" id="enddate" style="background-color: transparent;color:white" >
        </div><br>
        <div class="form-group">
          <label for="date"> Description:</label><br>
          <textarea name="" id="description" cols="30" rows="1" class="form-control" style="background-color: transparent;color:white" placeholder="Decription" ></textarea>
        </div><br>

        <div class="form-group">
          <label for="pwd">Coupon Code:</label>
          <input type="password" class="form-control" placeholder="Enter Password" id="coupon" name="cou" style="background-color: transparent;color:white">
          <p id="passw"></p>
        </div>
        <div class="form-group">
          <label for="pwd">Dicount:</label>
          <input type="text" class="form-control" placeholder="Enter Mobile Number" id="discoun" name="dis" style="background-color: transparent;color:white">
          <p id="mno"> </p>
        </div>

        <div class="form-group">
          <label for="pwd">Templete:</label>
          <input type="file" class="form-control" name="p_pic" style="background-color: transparent;color:white">
        </div>
        <div class="col-12 text-center">
          <input type="submit" class="btn btn-warning mt-3" value="Add Offer"  />
        </div>
      </form>
    </div>

  </div>
</body>
<?php
include("footer.php");
?>