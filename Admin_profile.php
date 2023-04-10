<?php
session_start();
if (isset($_SESSION['emailid']) && isset($_SESSION['password'])) {
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
    <style>
       .row a:hover{
            color:#ffc107;
        }
    </style>

</head>

<body style="
background-image: url('img/bg_4.jpg'); min-height: 500px;
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat; background-size: cover;
">
    <?php
    include_once('admin_nav.php')
    ?>
    <div class=" mt-5 mb-5 mx-5">
        <div class="row mx-auto">
            <h1 class="text-warning mt-5 text-center">My Profile</h1>
            <div class="text-center"> <img class="rounded-circle profile mx-auto" src="img/p2.jfif" alt=""></div>
            <div class="d-block mx-3 text-center">
                <div class="fs-2 text-white"> Damien Green</div>
                <div class="fs-4 text-muted">damien12@gmail.com</div>
                <div><a href="logout.php"><input type="button" value="Logout" class="btn btn-warning"></a></div>
            </div>
        </div>

        <div class="row text-white text-center mx-4 my-5">
                

            <div class=" col-12   ">
            <div class="border border-1 p-1 text-warning mt-5"><h3>about</h3></div>
            <p>He is studing in USA. your Dream is to make a big barnd or company .<br>Now i am 
             headling big pizzria .<br>
             birth-date:2/06/1993<br>
             address:USA
            </p>
            </div>
        </div>
        
    </div>

    <?php
    include_once('footer.php');
    ?>
</body>

</html>
<?php
} else {
?>
    <script>
        window.location = "login.php";
    </script>
<?php
}
?>