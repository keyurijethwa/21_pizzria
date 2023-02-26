<?php
include_once("admin_nav.php");

?>
<script type="text/javascript">
  function validate123()
{
    
    var fn=document.getElementById('fname1').value;
    var pwd=document.getElementById('pass').value;
    var no=document.getElementById('mobile1').value;
    
    if(fn=="")
    {
        //alert("error");
        document.getElementById('fn1').innerHTML="offer name field cannot be empty";
        document.getElementById('fn1').style.color="red";
        document.getElementById('fname1').style.borderColor="red";
        var vfn="false";
    }
    else
    {
        var fn123=/^[a-zA-Z ]*$/;
        //alert ("demooooooooooo");
        var e=fn123.test(fn);
       // alert(e);
        if(e==false)
        {
            document.getElementById('fname1').focus();
            document.getElementById('fn1').innerHTML="offer name must contain only letters";
            document.getElementById('fn1').style.color="red";
            document.getElementById('fname1').style.borderColor="red";
            vfn="false";
        }
        else
        {
            document.getElementById('fn1').innerHTML="";
            document.getElementById('fname1').style.borderColor="green";
            vfn="true";
        }
    }
   
    if(no=="")
    {
        document.getElementById('mno').innerHTML="discount cannot be empty";
        document.getElementById('mno').style.color="red";
        document.getElementById('mobile1').style.borderColor="red";
        var vno="false";
    }
    else
    {
        var mn=/^[0-9]{2}$/;
        var b=mn.test(no);
        if(b==false)
        {
            document.getElementById('mobile1').focus();
            document.getElementById('mno').innerHTML="Invalid discount Please Enter Valid discount";
            document.getElementById('mno').style.color="red";
            document.getElementById('mobile1').style.borderColor="red";
            vno="false";
        }
        else
        {

            document.getElementById('mno').innerHTML="";
            document.getElementById('mobile1').style.borderColor="green";
            vno="true";
        }
    }
    if(pwd=="")
    {
        document.getElementById('passw').innerHTML="Coupon code field cannot be empty";
        document.getElementById('passw').style.color="red";
        document.getElementById('pass').style.borderColor="red";
        var vpwd="false";
    }
    else
    {
        re = /[0-9]/;
        re1 = /[a-z]/;
        re2 = /[A-Z]/;
        re3=/[!@#\$%\^\&*+=._-]/;
        var a1=pwd.length<6;
        var a2=pwd.length>15;
        var a3=re.test(pwd);
        var a4=re1.test(pwd);
        var a5=re2.test(pwd);
        var a6=re3.test(pwd);
        if(a1==true||(a2==true)||(a3==false)||(a4==false)||(a5==false)||(a6==false))
        {
            document.getElementById('pass').focus();
            var msgpwd="coupon code must be 6 to 15 charachters and must contain one small and capital letter a digit and special character";
            document.getElementById('passw').innerHTML=msgpwd;
            document.getElementById('passw').style.color="red";
            document.getElementById('pass').style.borderColor="red";
            var vpwd="false";
        }
        else
        {
            var msgpwd="";
            document.getElementById('passw').innerHTML=msgpwd;
            document.getElementById('pass').style.borderColor="green";
            vpwd="true";
        }
    }
    

    if(  vno=="true" && vpwd=="true"  && vfn=="true")
    {
        return true;
    }
    else
    {
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
    

<br/>
<br/>
<h1 align="center" style=" color:white;padding-bottom: 10px;" class="p-3 text-warning fst-italic"> New Offers</h1>

<div class=" text-white " style="margin-left: 20%;margin-right:20%;margin-top:3%;margin-bottom:3%">


<div  style="border: 2px;">

	<form onSubmit="return(validate123());" >

		<div class="form-group">
    <label for="name">Offer Name:</label>
    <input type="text" class="form-control" placeholder="Enter Name" id="fname1" name="fn1" style="background-color: transparent;color:white">
    <p id="fn1"></p>
  </div>
  <div class="form-group">
    <label for="name">Offer Id:</label>
    <input type="text" class="form-control" placeholder="Enter Name" id="fname1" name="fn1" style="background-color: transparent;color:white">
    <p id="fn1"></p>
  </div>
  <div class="form-group">
    <label for="date"> Start Date:</label>
    <input type="date" class="form-control" placeholder="Start Date"  style="background-color: transparent;color:white" required>
  </div><br>
  <div class="form-group">
    <label for="date"> End Date:</label>
    <input type="date" class="form-control" placeholder="End Date"  style="background-color: transparent;color:white" required>
  </div><br>
  <div class="form-group">
    <label for="date"> Description:</label><br>
    <textarea name="" id="" cols="30" rows="1" class="form-control" style="background-color: transparent;color:white" placeholder="Decription" required></textarea>
  </div><br>

  <div class="form-group">
    <label for="pwd">Coupon Code:</label>
    <input type="password" class="form-control" placeholder="Enter Password" id="pass" name="pwd" style="background-color: transparent;color:white">
    <p id="passw"></p>
  </div>
  <div class="form-group">
    <label for="pwd">Dicount:</label> 
    <input type="text" class="form-control" placeholder="Enter Mobile Number" id="mobile1" name="mobile" style="background-color: transparent;color:white">
    <p id="mno"> </p>
  </div>

   <div class="form-group">
    <label for="pwd">Templete:</label>
    <input type="file" class="form-control" name="p_pic" style="background-color: transparent;color:white" >
  </div>
  <div class="col-12 text-center">
  <input type="submit " class="btn btn-warning mt-3" value="Add Offer" name="sub" />
  </div>
	</form>
</div>

</div>
</body>
<?php
include("footer.php");
?>
