<?php
include_once("admin_nav.php");

?>

<body style="
background-image: url('img/bg_4.jpg'); min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
    

<br/>
<br/>
<h1 align="center" style=" color:white;padding-bottom: 10px;" class="p-3 text-warning fst-italic"> New Chefs</h1>

<div class=" text-white " style="margin-left: 20%;margin-right:20%;margin-top:3%;margin-bottom:3%">


<div  style="border: 2px;">

	<form onSubmit="return(validate123());" >

		<div class="form-group">
    <label for="name">Chef Name:</label>
    <input type="text" class="form-control" placeholder="Enter Name" id="fname1" name="fn1" style="background-color: transparent;color:white">
    <p id="fn1"></p>
  </div>
  <div class="form-group">
    <label for="name">Chef Id:</label>
    <input type="text" class="form-control" placeholder="Enter Name" id="fname1" name="fn1" style="background-color: transparent;color:white">
    <p id="fn1"></p>
  </div>
  


  <div class="form-group">
    <label for="pwd">Exprience:</label>
    <input type="text" class="form-control" placeholder="Enter Password" id="pass" name="pwd" style="background-color: transparent;color:white">
    <p id="passw"></p>
  </div>
  <div class="form-group">
    <label for="pwd">Specialist:</label> 
    <input type="text" class="form-control" placeholder="Enter Mobile Number" id="mobile1" name="mobile" style="background-color: transparent;color:white">
    <p id="mno"> </p>
  </div>

   <div class="form-group">
    <label for="pwd">photo:</label>
    <input type="file" class="form-control" name="p_pic" style="background-color: transparent;color:white" >
  </div>
  <div class="col-12 text-center">
  <input type="submit " class="btn btn-warning mt-3" value="Add Chef" name="sub" />
  </div>
	</form>
</div>

</div>
</body>
<?php
include("footer.php");
?>
