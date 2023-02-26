<script type="text/javascript">
    function validate123() {

        var email = document.getElementById('emailid1').value;
        var pwd = document.getElementById('pass').value;

        if (email == "") {
            document.getElementById('mail1').innerHTML = "Email Address field cannot be empty";
            document.getElementById('mail1').style.color = "red";
            document.getElementById('emailid1').style.borderColor = "red";
            var vemail = "false";
        } else {
            var em = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
            var a = em.test(email);
            if (a == false) {
                document.getElementById('emailid1').focus();
                document.getElementById('mail1').innerHTML = "Invalid Email address Please Enter Valid Email Address";
                document.getElementById('mail1').style.color = "red";
                document.getElementById('emailid1').style.borderColor = "red";
                vemail = "false";
            } else {
                document.getElementById('mail1').innerHTML = "";
                document.getElementById('emailid1').style.borderColor = "green";
                vemail = "true";
            }
        }

        if (pwd == "") {
            document.getElementById('passw').innerHTML = "Password field cannot be empty";
            document.getElementById('passw').style.color = "red";
            document.getElementById('pass').style.borderColor = "red";
            var vpwd = "false";
        } else {
            re = /[0-9]/;
            re1 = /[a-z]/;
            re2 = /[A-Z]/;
            re3 = /[!@#\$%\^\&*+=._-]/;
            var a1 = pwd.length < 6;
            var a2 = pwd.length > 15;
            var a3 = re.test(pwd);
            var a4 = re1.test(pwd);
            var a5 = re2.test(pwd);
            var a6 = re3.test(pwd);
            if (a1 == true || (a2 == true) || (a3 == false) || (a4 == false) || (a5 == false) || (a6 == false)) {
                document.getElementById('pass').focus();
                var msgpwd = "Password length must be 6 to 15 charachters and must contain one small and capital letter a digit and special character";
                document.getElementById('passw').innerHTML = msgpwd;
                document.getElementById('passw').style.color = "red";
                document.getElementById('pass').style.borderColor = "red";
                var vpwd = "false";
                //alert(vpwd);
            } else {
                var msgpwd = "";
                document.getElementById('passw').innerHTML = msgpwd;
                document.getElementById('pass').style.borderColor = "green";
                vpwd = "true";
            }
        }
        if (vemail == "true" && vpwd == "true") {
            return true;
        } else {
            return false;
        }
    }
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font/css/all.css">
</head>

<body style="background-image: url('img/bg_4.jpg');">
    <?php
    include_once('guest_nav.php')
    ?>
    <div class=" text-white mt-5 ">
        <h1 class="pb-5 text-center pt-5 text-warning fst-italic">Login</h1>
        <div class="row  m-5">
            <div class="col-12 col-md-6 col-lg-6 text-center">
                <div><img class="img-fluid" src="img/pizza-1.jpg" alt=""></div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="mb-3" style="margin-top: 20%;">
                    <form onSubmit="return(validate123());">
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" placeholder=" Email" id="emailid1" name="eid" style="background-color: transparent;color:white">
                            <p id="mail1"></p>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter Password" id="pass" name="pwd" style="background-color: transparent;color:white">
                            <p id="passw"></p>
                        </div>
                        <div class="row" align="center">
                            <div class=" col-12">
                                <input type="submit" value="Login" name="login_btn" class="btn btn-warning">
                            </div>
                    </form>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <a href="registration.php">Don't have account</a>
                        </div>
                        <div class="col-md-6 col-12">
                            <a href="#">Forgot Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
    include_once('footer.php');
    ?>
</body>

</html>