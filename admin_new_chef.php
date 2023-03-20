<script>
  function validate123() {
    var cn = document.getElementById('cname').value;
    var cid = document.getElementById('cid').value;
    var Expri = document.getElementById('ex').value;
    var spe = document.getElementById('spe').value;

    if (cn == "") {
      document.getElementById('cn1').innerHTML = "Chef Name cannot be empty";
      document.getElementById('cn1').style.color = "red";
      document.getElementById('cname').style.borderColor = "red";
      var cname = "false";
    } else {
      var chef = /^[a-zA-Z ]*$/;
      var e = chef.test(cn);
      if (e == false) {
        document.getElementById('cname').focus();
        document.getElementById('cn1').innerHTML = "Chef name must contain only letters";
        document.getElementById('cn1').style.color = "red";
        document.getElementById('cname').style.borderColor = "red";
        cname = "false";
      } else {
        document.getElementById('cn1').innerHTML = "";
        document.getElementById('cname').style.borderColor = "green";
        cname = "true";
      }
    }

    if (cid == "") {
      document.getElementById('cid1').innerHTML = "Menu ID  cannot be empty";
      document.getElementById('cid1').style.color = "red";
      document.getElementById('cid').style.borderColor = "red";
      var ceid = "false";
    } else {
      var id = /^[0-9]/;
      var a = id.test(cid);
      if (a == false) {
        document.getElementById('cid').focus();
        document.getElementById('cid1').innerHTML = "Menu ID must contain only numbers";
        document.getElementById('cid1').style.color = "red";
        document.getElementById('cid').style.borderColor = "red";
        ceid = "false";
      } else {
        if (mid.length > 7 || mid.length < 7) {
          document.getElementById('cid').focus();
          document.getElementById('cid1').innerHTML = "Menu ID must contain only 7 digit";
          document.getElementById('cid1').style.color = "red";
          document.getElementById('cid').style.borderColor = "red";
          ceid = "false";
        } else {
          document.getElementById('cid1').innerHTML = "";
          document.getElementById('cid').style.borderColor = "green";
          ceid = "true";
        }
      }
    }

    if (Expri == "") {
      document.getElementById('ex1').innerHTML = "Exprience  cannot be empty";
      document.getElementById('ex1').style.color = "red";
      document.getElementById('ex').style.borderColor = "red";
      var ex = "false";
    } else {
      document.getElementById('ex1').innerHTML = "";
      document.getElementById('ex').style.borderColor = "green";
      ex = "true";
    }

    if (spe == "") {
      document.getElementById('sp1').innerHTML = "Specialist field  cannot be empty";
      document.getElementById('sp1').style.color = "red";
      document.getElementById('spe').style.borderColor = "red";
      var sp = "false";
    } else {
      document.getElementById('sp1').innerHTML = "";
      document.getElementById('spe').style.borderColor = "green";
      sp = "true";
    }

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
  <h1 align="center" style=" color:white;padding-bottom: 10px;" class="p-3 text-warning fst-italic"> New Chefs</h1>

  <div class=" text-white " style="margin-left: 20%;margin-right:20%;margin-top:3%;margin-bottom:3%">


    <div style="border: 2px;">

      <form onSubmit="return(validate123());">

        <div class="form-group">
          <label for="name">Chef Name:</label>
          <input type="text" class="form-control" placeholder="Enter Name" id="cname" name="cn1" style="background-color: transparent;color:white">
          <p id="cn1"></p>
        </div>
        <div class="form-group">
          <label for="name">Chef Id:</label>
          <input type="text" class="form-control" placeholder="Enter Id" id="cid" name="cid1" style="background-color: transparent;color:white">
          <p id="cid1"></p>
        </div>



        <div class="form-group">
          <label for="pwd">Exprience:</label>
          <input type="text" class="form-control" placeholder="Enter Exprience" id="ex" name="ex1" style="background-color: transparent;color:white">
          <p id="ex1"></p>
        </div>
        <div class="form-group">
          <label for="pwd">Specialist:</label>
          <input type="text" class="form-control" placeholder="Enter specilaist in which thing" id="spe" name="sp1" style="background-color: transparent;color:white">
          <p id="sp1"> </p>
        </div>

        <div class="form-group">
          <label for="pwd">photo:</label>
          <input type="file" class="form-control" name="p_pic" style="background-color: transparent;color:white">
        </div>
        <div class="col-12 text-center">
          <input type="submit" class="btn btn-warning mt-3" value="Add Chef" name="sub" />
        </div>
      </form>
    </div>

  </div>
</body>
<?php
include("footer.php");
?>