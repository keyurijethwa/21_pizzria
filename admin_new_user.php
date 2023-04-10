<?php
session_start();

?>
<?php
include_once("admin_nav.php");
?>
<script type="text/javascript">
    function validate123() {

        var fn = document.getElementById('fname1').value;
        var email = document.getElementById('emailid1').value;
        var pwd = document.getElementById('pass').value;
        var pwd1 = document.getElementById('password1').value;
        var no = document.getElementById('mobile1').value;

        if (fn == "") {
            //alert("error");
            document.getElementById('fn1').innerHTML = "Full name field cannot be empty";
            document.getElementById('fn1').style.color = "red";
            document.getElementById('fname1').style.borderColor = "red";
            var vfn = "false";
        } else {
            var fn123 = /^[a-zA-Z ]*$/;
            //alert ("demooooooooooo");
            var e = fn123.test(fn);
            // alert(e);
            if (e == false) {
                document.getElementById('fname1').focus();
                document.getElementById('fn1').innerHTML = "Full name must contain only letters";
                document.getElementById('fn1').style.color = "red";
                document.getElementById('fname1').style.borderColor = "red";
                vfn = "false";
            } else {
                document.getElementById('fn1').innerHTML = "";
                document.getElementById('fname1').style.borderColor = "green";
                vfn = "true";
            }
        }
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
        if (no == "") {
            document.getElementById('mno').innerHTML = "Mobile  number cannot be empty";
            document.getElementById('mno').style.color = "red";
            document.getElementById('mobile1').style.borderColor = "red";
            var vno = "false";
        } else {
            var mn = /^[0-9]{10}$/;
            var b = mn.test(no);
            if (b == false) {
                document.getElementById('mobile1').focus();
                document.getElementById('mno').innerHTML = "Invalid Mobile Number Please Enter Valid Mobile Number";
                document.getElementById('mno').style.color = "red";
                document.getElementById('mobile1').style.borderColor = "red";
                vno = "false";
            } else {

                document.getElementById('mno').innerHTML = "";
                document.getElementById('mobile1').style.borderColor = "green";
                vno = "true";
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
        if (pwd1 == "") {
            document.getElementById('passw1').innerHTML = "Confirm Password field cannot be empty";
            document.getElementById('passw1').style.color = "red";
            document.getElementById('password1').style.borderColor = "red";
            var vpwd1 = "false";
        } else {
            if (pwd1 != pwd) {
                document.getElementById('password1').focus();
                document.getElementById('passw1').innerHTML = "Password and Confirm Password must be same";
                document.getElementById('passw1').style.color = "red";
                document.getElementById('password1').style.borderColor = "red";
                vpwd1 = "false";
            } else {
                document.getElementById('passw1').innerHTML = "";
                document.getElementById('password1').style.borderColor = "green";
                vpwd1 = "true";
            }
        }

        if (vemail == "true" && vno == "true" && vpwd == "true" && vpwd1 == "true" && vfn == "true") {
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
    <div class=" text-white m-5">
        <h1 align="center" style=" color:white;padding-bottom: 10px;" class="p-3 text-warning">New User</h1>
        <div style="border: 2px;">
            <div style="margin-left: 20%;margin-right:20%;margin-top:3%;margin-bottom:3%">
                <form onSubmit="return(validate123());" method="post" action="admin_new_user.php" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="email"> Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Name" id="fname1" name="fn1" style="background-color: transparent;color:white">
                        <p id="fn1"></p>
                    </div>

                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" placeholder="Enter Email" id="emailid1" name="eid" style="background-color: transparent;color:white">
                        <p id="mail1"></p>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter Password" id="pass" name="pwd" style="background-color: transparent;color:white">
                        <p id="passw"></p>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Confirm Password:</label>
                        <input type="password" class="form-control" placeholder="Re-Enter Password" id="password1" name="repwd" style="background-color: transparent;color:white">
                        <p id="passw1"></p>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Mobile Number:</label>
                        <input type="text" class="form-control" placeholder="Enter Mobile Number" id="mobile1" name="mobile" style="background-color: transparent;color:white">
                        <p id="mno"> </p>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Profile Picture:</label>
                        <input type="file" class="form-control" name="image" style="background-color: transparent;color:white" accept="image/jpg, image/jpeg, image/png" required>

                    </div>
                    <div class="col-12 text-center">
                        <input type="submit" class="btn btn-warning mt-3" value="Add User" name="btn"/>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>
<?php
include_once("database.php");
if (isset($_POST['btn'])) {
    @$name = $_POST['fn1'];
    @$email = $_POST['eid'];
    @$pass = $_POST['pwd'];
    @$cpass = $_POST['repwd'];
    @$phone = $_POST['mobile'];
    @$image = $_FILES['image']['name'];
    @$image_size = $_FILES['image']['size'];
    @$image_tmp_name = $_FILES['image']['tmp_name'];
    @$image_folder = 'Profile/' . $image;
    echo $name;
    @$select = mysqli_query($con, "SELECT * FROM `users` WHERE Email = '$email' or Password = '$pass'") or die('query failed');
    @$q = "INSERT INTO users VALUES('$name', '$email','$pass','$phone', '$image')";
    if (mysqli_num_rows($select) == 1) {
        ?>
        <script>alert ("User already exist");</script>
        <?php
    } else {
        if ($pass != $cpass) {
            ?>
            <script>alert ("Confirm password not matched!");</script>
            <?php
        } elseif ($image_size > 2000000) {
            ?>
            <script>alert ("image size is too large!");</script>
            <?php
        } else {
            $insert = mysqli_query($con, $q) or die('query failed');

            if ($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                ?>
                <script>alert ("Added user successfully!");
                window.location="admin_users.php";
            </script>
                <?php
            } else {
            ?>
                <script>alert ("failed!");</script>
            <?php
            }
        }
    }
}
?>
<?php
include("footer.php");
?>