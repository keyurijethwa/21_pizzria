<?php
include_once("database.php");
?>
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

<body style="
background-image: url('img/bg_4.jpg'); min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
    <?php
    include_once('login_nav.php')
  ?>
    <!-- contact -->
   



    <section class="contact-section text-white">
        <div class="container mt-5">
            <div class="row block-9">
                <div class="col-md-4 contact-info ">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h1 class="h1 text-warning">Contact Information</h1>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">pizzria@gmail.com</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Website:</span> <a href="#">www.pizzia.in</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 ">
                    <form action="contact.php" method="post"  class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="pb-4 form-floating">
                                    <input type="text" class="form-control border-top-0 border-end-0 border-start-0 " placeholder="Your Name" id="floatingInput" name="name" style="background-color: transparent;color:white;">
                                    <label for="floatingInput">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating pb-4 ">
                                    <input type="text" class="form-control border-top-0 border-end-0 border-start-0" id="floatingInput1" placeholder="Your Email"  name="email" style="background-color: transparent;color:white">
                                    <label for="floatingInput1">Your Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating pb-4">
                            <input type="text" class="form-control border-top-0 border-end-0 border-start-0" id="floatingInput2" placeholder="Subject" name="subject" style="background-color: transparent;color:white">
                            <label for="floatingInput2">Subject</label>
                        </div>
                        <div class="form-floating pb-4">
                            <textarea cols="30" rows="7"  id="floatingInput3" class="form-control border-top-0 border-end-0 border-start-0" placeholder="Message" name="message" style="background-color: transparent;color:white"></textarea>
                            <label for="floatingInput3">Message</label>
                        </div>
                        <div class="form-group pb-4">
                            <input type="submit" value="Send Message" class="btn btn-warning py-3 px-5 text-white" name="btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact -->

    <?php
  include_once('footer.php');
  ?>
</body>

</html>

<?php
if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $q="INSERT INTO contact values('$name','$email','$subject','$message')";
    $result=mysqli_query($con,$q);
    if($result){
        ?>
        <script>alert("send your message successfully!");</script>
        <?php
    }
    else{
        ?>
        <script>alert("your message is not send");</script>
        <?php
    }
}
?>